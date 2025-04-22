<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserReservationsController extends AbstractController
{
    #[Route('/reservations', name: 'app_user_reservations')]
    public function index(): Response
    {
        return $this->render('user_reservations/index.html.twig', [
            'controller_name' => 'UserReservationsController',
        ]);
    }
}
