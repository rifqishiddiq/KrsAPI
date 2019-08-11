<?php

namespace App\Repository;

use App\Entity\KrsSemester;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KrsSemester|null find($id, $lockMode = null, $lockVersion = null)
 * @method KrsSemester|null findOneBy(array $criteria, array $orderBy = null)
 * @method KrsSemester[]    findAll()
 * @method KrsSemester[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KrsSemesterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KrsSemester::class);
    }

    // /**
    //  * @return KrsSemester[] Returns an array of KrsSemester objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KrsSemester
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
