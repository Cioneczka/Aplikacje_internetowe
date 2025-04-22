<?php

namespace App\Repository;

use App\Entity\Cruise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cruise>
 */
class CruiseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cruise::class);
    }

    public function findAllCruises(): array
    {
        return $this->createQueryBuilder('c') // 'c' to alias dla encji Cruise
            ->getQuery()                      
            ->getResult();                    
    }
    public function findAllWithShips(): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.ship', 's') // 'ship' to nazwa pola w encji Cruise
            ->addSelect('s') // Dodaj statek do wyników zapytania
            //->orderBy('','ASC')
            ->getQuery()
            ->getResult();
    }

}
