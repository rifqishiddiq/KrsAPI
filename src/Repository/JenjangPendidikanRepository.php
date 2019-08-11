<?php

namespace App\Repository;

use App\Entity\JenjangPendidikan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method JenjangPendidikan|null find($id, $lockMode = null, $lockVersion = null)
 * @method JenjangPendidikan|null findOneBy(array $criteria, array $orderBy = null)
 * @method JenjangPendidikan[]    findAll()
 * @method JenjangPendidikan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JenjangPendidikanRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, JenjangPendidikan::class);
    }

    // /**
    //  * @return JenjangPendidikan[] Returns an array of JenjangPendidikan objects
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
    public function findOneBySomeField($value): ?JenjangPendidikan
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
