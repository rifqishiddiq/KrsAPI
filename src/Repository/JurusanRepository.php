<?php

namespace App\Repository;

use App\Entity\Jurusan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Jurusan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jurusan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jurusan[]    findAll()
 * @method Jurusan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JurusanRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Jurusan::class);
    }

    // /**
    //  * @return Jurusan[] Returns an array of Jurusan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jurusan
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
