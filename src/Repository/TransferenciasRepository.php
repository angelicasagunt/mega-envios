<?php

namespace App\Repository;

use App\Entity\Transferencias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Transferencias|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transferencias|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transferencias[]    findAll()
 * @method Transferencias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransferenciasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transferencias::class);
    }

    // /**
    //  * @return Transferencias[] Returns an array of Transferencias objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transferencias
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
