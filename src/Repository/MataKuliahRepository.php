<?php

namespace App\Repository;

use App\Entity\MataKuliah;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MataKuliah|null find($id, $lockMode = null, $lockVersion = null)
 * @method MataKuliah|null findOneBy(array $criteria, array $orderBy = null)
 * @method MataKuliah[]    findAll()
 * @method MataKuliah[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MataKuliahRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MataKuliah::class);
    }

    // /**
    //  * @return MataKuliah[] Returns an array of MataKuliah objects
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
    public function findOneBySomeField($value): ?MataKuliah
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
