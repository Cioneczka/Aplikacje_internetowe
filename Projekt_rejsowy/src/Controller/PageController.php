<?php
// src/Controller/PageController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/register', name: 'register_form', methods: ['GET'])]
    public function showRegisterForm(): Response
    {
        return $this->render('register.html.twig');
    }

    #[Route('/login', name: 'login_form', methods: ['GET'])]
    public function showLoginForm(): Response
    {
        return $this->render('login.html.twig');
    }

    #[Route('/contact', name: 'contact', methods: ['GET'])]
    public function showContact(): Response
    {
        return $this->render('contact.html.twig');
    }

    #[Route('/about_us', name: 'about_us', methods: ['GET'])]
    public function showAbout_us(): Response
    {
        return $this->render('about_us.html.twig');
    }
    

    
}
