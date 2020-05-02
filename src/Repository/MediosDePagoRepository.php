<?php

namespace App\Repository;

use App\Entity\MediosDePago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MediosDePago|null find($id, $lockMode = null, $lockVersion = null)
 * @method MediosDePago|null findOneBy(array $criteria, array $orderBy = null)
 * @method MediosDePago[]    findAll()
 * @method MediosDePago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediosDePagoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MediosDePago::class);
    }

    // /**
    //  * @return MediosDePago[] Returns an array of MediosDePago objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MediosDePago
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
