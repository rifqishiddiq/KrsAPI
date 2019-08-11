<?php

namespace App\Repository;

use App\Entity\Dosen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dosen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dosen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dosen[]    findAll()
 * @method Dosen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DosenRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dosen::class);
    }

    // /**
    //  * @return Dosen[] Returns an array of Dosen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dosen
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
