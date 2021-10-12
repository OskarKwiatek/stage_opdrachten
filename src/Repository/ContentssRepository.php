<?php

namespace App\Repository;

use App\Entity\Contentss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Contentss|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contentss|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contentss[]    findAll()
 * @method Contentss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContentssRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contentss::class);
    }

    // /**
    //  * @return Contentss[] Returns an array of Contentss objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contentss
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
