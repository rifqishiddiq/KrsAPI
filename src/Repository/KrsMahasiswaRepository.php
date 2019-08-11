<?php

namespace App\Repository;

use App\Entity\KrsMahasiswa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KrsMahasiswa|null find($id, $lockMode = null, $lockVersion = null)
 * @method KrsMahasiswa|null findOneBy(array $criteria, array $orderBy = null)
 * @method KrsMahasiswa[]    findAll()
 * @method KrsMahasiswa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KrsMahasiswaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KrsMahasiswa::class);
    }

    // /**
    //  * @return KrsMahasiswa[] Returns an array of KrsMahasiswa objects
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
    public function findOneBySomeField($value): ?KrsMahasiswa
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
