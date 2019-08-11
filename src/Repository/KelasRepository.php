<?php

namespace App\Repository;

use App\Entity\Kelas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kelas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kelas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kelas[]    findAll()
 * @method Kelas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KelasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kelas::class);
    }

    // /**
    //  * @return Kelas[] Returns an array of Kelas objects
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
    public function findOneBySomeField($value): ?Kelas
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
