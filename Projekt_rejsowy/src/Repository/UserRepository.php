<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function FindUsers()
    {
        return $this->createQueryBuilder('u')
            ->getQuery()
            ->getResult();
    }

    public function remove(User $user, bool $flush = true): void
    {
        // Użyj getEntityManager() zamiast _em
        $entityManager = $this->getEntityManager();
        $entityManager->remove($user);

        if ($flush) {
            $entityManager->flush();
        }
    }
}