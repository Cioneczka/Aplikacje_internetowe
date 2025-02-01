<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CruiseRepository;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Entity\Cruise;
use App\Entity\Status;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ReservationController extends AbstractController
{
    private $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    #[Route('/reservation/insert/{id}', name: 'insert_reservation', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function insertReservation(int $id, Request $request, CruiseRepository $cruiseRepository, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $userId = $session->get('userId');

        $numberOfPeople = $request->request->get('people_count');
        // Stwórz nową rezerwację

        return new Response("Reservation inserted for Cruise ID: $id", Response::HTTP_CREATED);
    }



 #[Route('/reservation', name: 'app_reservation')]
 public function index(Request $request, CruiseRepository $cruiseRepository): Response
 {
     $cruiseId = $request->request->get('cruise_id');

     // Znajdź rekord w bazie danych
     $cruise = $cruiseRepository->find($cruiseId);

     // Wywołaj metodę z ReservationRepository
     $this->reservationRepository->insertReservation($cruiseId);

     return $this->render('reservation/index.html.twig', [
         'controller_name' => 'ReservationController',
     ]);
 }
}
