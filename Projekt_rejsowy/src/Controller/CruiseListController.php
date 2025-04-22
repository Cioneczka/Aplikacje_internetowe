<?php

// src/Controller/CruiseListController.php
namespace App\Controller;

use App\Repository\CruiseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class CruiseListController extends AbstractController
{
    #[Route('/', name: '' )]
    public function index(CruiseRepository $cruiseRepository, Request $request): Response
    {

    //     if($request->query->get('action') === 'filter_submit'){
    //     pobierz dane  z formularza i zapakuj je do sql'a aby przefiltrować dane
    // }
    //else{ to co poniżej

    
        
        //$cruises = $cruiseRepository->findAllCruises();
        $cruises = $cruiseRepository->findAllWithShips();

        $adapter = new ArrayAdapter($cruises);
        $pagerfanta = new Pagerfanta($adapter);

        // Ustaw stronicowanie
        $pagerfanta->setMaxPerPage(20); // Liczba wyników na stronę
        $pagerfanta->setCurrentPage($request->query->getInt('page', 1)); // Bieżąca strona

        // Renderuj szablon i przekaż dane
        return $this->render('index.html.twig', [
            'pager' => $pagerfanta,
            

        ]);
    }
}
