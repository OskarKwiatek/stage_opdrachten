<?php

namespace App\Repository;

use App\Entity\Contentlist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Contentlist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contentlist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contentlist[]    findAll()
 * @method Contentlist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContentlistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contentlist::class);
    }

    // /**
    //  * @return Contentlist[] Returns an array of Contentlist objects
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
    public function findOneBySomeField($value): ?Contentlist
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
