<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LoginController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(Request $request, EntityManagerInterface $entityManager, 
    UserPasswordHasherInterface $passwordHasher, SessionInterface $session): Response
    {
        // Pobieranie danych z formularza logowania
        $username = $request->request->get('username');
        $password = $request->request->get('password');
        $this->logger->info('Attempting login for username: ' . $username);

        // Sprawdzanie, czy użytkownik istnieje w bazie
        $user = $entityManager->getRepository(User::class)->findOneBy(['username' => $username]);

        if (!$user) {
            $this->logger->error('User not found: ' . $username);
            return new Response('User not found', Response::HTTP_NOT_FOUND);
        }

        if (!$session->isStarted()) { 
            $session->start(); 
            $this->logger->info('Session has been started'); 
        }

        // Sprawdzenie poprawności hasła
        if ($passwordHasher->isPasswordValid($user, $password)) {
            $this->logger->info('Login successful for username: ' . $username);
            return new Response('Logged in successfully. Session status: ' . ($session->isStarted() ? 'Started' : 'Not started'), Response::HTTP_OK);
        } else {
            $this->logger->error('Invalid credentials for username: ' . $username);
            return new Response('Invalid credentials', Response::HTTP_UNAUTHORIZED);
        }
    }
}
