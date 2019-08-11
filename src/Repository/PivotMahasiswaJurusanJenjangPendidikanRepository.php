<?php

namespace App\Repository;

use App\Entity\PivotMahasiswaJurusanJenjangPendidikan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PivotMahasiswaJurusanJenjangPendidikan|null find($id, $lockMode = null, $lockVersion = null)
 * @method PivotMahasiswaJurusanJenjangPendidikan|null findOneBy(array $criteria, array $orderBy = null)
 * @method PivotMahasiswaJurusanJenjangPendidikan[]    findAll()
 * @method PivotMahasiswaJurusanJenjangPendidikan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PivotMahasiswaJurusanJenjangPendidikanRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PivotMahasiswaJurusanJenjangPendidikan::class);
    }

    // /**
    //  * @return PivotMahasiswaJurusanJenjangPendidikan[] Returns an array of PivotMahasiswaJurusanJenjangPendidikan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PivotMahasiswaJurusanJenjangPendidikan
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
