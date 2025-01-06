<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EditUserController extends AbstractController
{
    #[Route('/RoleEdit', name: 'app_edit_user')]
    public function index(): Response
    {
        return $this->render('RoleEdit.html.twig', [
            'controller_name' => 'EditUserController',
        ]);
    }
}
