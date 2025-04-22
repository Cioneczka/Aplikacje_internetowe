<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cruise;
use App\Form\CruiseType;
use Doctrine\ORM\EntityManagerInterface; // Dodaj tę linię

class CruiseFormController extends AbstractController
{
    #[Route('/add_voyage', name: 'add_voyage', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response // Wstrzyknij EntityManagerInterface
    {
        $cruise = new Cruise();
        $form = $this->createForm(CruiseType::class, $cruise);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Użyj wstrzykniętego EntityManager
            $entityManager->persist($cruise);
            $entityManager->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('add_voyage.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}