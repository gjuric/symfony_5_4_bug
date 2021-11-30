<?php

namespace App\Repository;

use App\Entity\GrumpyPizza;
use Doctrine\Bundle\DoctrineBundle\Repository\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GrumpyPizza|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrumpyPizza|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrumpyPizza[]    findAll()
 * @method GrumpyPizza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrumpyPizzaRepository extends extends EntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrumpyPizza::class);
    }

    // /**
    //  * @return GrumpyPizza[] Returns an array of GrumpyPizza objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GrumpyPizza
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
