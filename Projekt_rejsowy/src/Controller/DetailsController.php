<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Cruise;
use Doctrine\ORM\EntityManagerInterface;

class DetailsController extends AbstractController
{
    public function index(int $id, EntityManagerInterface $em): Response
    {
        // Pobieranie danych dla konkretnego rejsu na podstawie ID
        $cruise = $em->getRepository(Cruise::class)->find($id);

        if (!$cruise) {
            throw $this->createNotFoundException('Cruise not found!');
        }

        // Przesyłanie danych do widoku
        return $this->render('details/index.html.twig', [
            'cruise' => $cruise,
        ]);
    }
}