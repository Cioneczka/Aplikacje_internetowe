<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function CruiseDetails($id)
    {
        // Tworzymy zapytanie za pomocą QueryBuilder
        return $this->createQueryBuilder('r') // 'r' to alias dla encji Reservation
            ->leftJoin('r.cruise', 'c') // Łączymy z encją Cruise (zakładam, że relacja istnieje)
            ->leftJoin('c.ship', 's') // Łączymy z encją Ship (zakładam, że relacja istnieje)
            ->leftJoin('c.countryFrom', 'cf') // Łączymy z encją Country (kraj początkowy)
            ->leftJoin('c.countryTo', 'ct') // Łączymy z encją Country (kraj końcowy)
            ->addSelect('c', 's', 'cf', 'ct') // Dodajemy encje do wyników zapytania
            ->andWhere('r.id = :id') // Filtrujemy po id rezerwacji
            ->setParameter('id', $id) // Ustawiamy parametr :id
            ->getQuery() // Tworzymy zapytanie
            ->getOneOrNullResult(); // Pobieramy jeden wynik lub null, jeśli nie znaleziono
    }

    public function insertReservation_rep($id){

        return('dziadyga');
    }
}
