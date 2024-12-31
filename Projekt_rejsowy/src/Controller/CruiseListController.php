<?php

// src/Controller/CruiseListController.php
namespace App\Controller;

use App\Repository\CruiseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CruiseListController extends AbstractController
{
    #[Route('/', name: '')]
    public function index(CruiseRepository $cruiseRepository): Response
    {
        // Użyj metody z repozytorium, aby pobrać wszystkie rejsy
        //$cruises = $cruiseRepository->findAllCruises();
        $cruises = $cruiseRepository->findAllWithShips();

        // Renderuj szablon i przekaż dane
        return $this->render('index.html.twig', [
            'cruises' => $cruises,
            

        ]);
    }
}
