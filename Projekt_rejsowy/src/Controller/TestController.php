<?php

namespace App\Controller;

use App\Entity\Ship;
use App\Entity\Cruise;
use App\Entity\Reservation;
use App\Entity\Status;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test_relations')]
    public function testRelations(EntityManagerInterface $em): Response
    {
        // Dodanie nowego statku
        $ship = new Ship();
        $ship->setName('Titanic');
        $ship->setCapacity(3000);
        $ship->setDescription('A famous ship.');
        $em->persist($ship);

        // Dodanie nowego rejsu
        $cruise = new Cruise();
        $cruise->setStartDate(new \DateTime('2025-01-01'));
        $cruise->setEndDate(new \DateTime('2025-01-10'));
        $cruise->setPrice(2000);
        $cruise->setShip($ship);
        $em->persist($cruise);

        // Zapisanie zmian w bazie danych, aby `Cruise` miał nadany `id`
        $em->flush();

        // Dodanie nowego użytkownika
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setUsername('testuser'); // Ustawiamy wartość dla pola `username`
        $user->setFirstName('Lukasz');
        $user->setLastName('Pukasz');
        $user->setPassword('123'); // Upewnij się, że hasło jest odpowiednio hashowane
        $user->setCreatedAt(new \DateTimeImmutable());
        $user->setModifiedAt(new \DateTimeImmutable());
        $user->setActive(1);
        $em->persist($user);

        // Dodanie nowej rezerwacji
        $reservation = new Reservation();
        $reservation->setReservationDate(new \DateTime('2024-12-20'));
        $reservation->setNumberOfPeople(2);
        $reservation->setNotes('Special request');
        $reservation->setUser($user);
        $reservation->setCruise($cruise); // Ustawienie relacji `Cruise`
        $em->persist($reservation);

        // Dodanie nowego statusu
        $status = new Status();
        $status->setName('Confirmed');
        $status->setUser($user);
        $reservation->addStatus($status); // Dodanie statusu do rezerwacji
        $em->persist($status);

        // Zapisanie zmian w bazie danych
        $em->flush();

        return new Response('Relacje zostały przetestowane.');
    }
}
