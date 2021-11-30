<?php

namespace App\Repository;

use App\Entity\GrumpyPizza;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

/**
 * @method GrumpyPizza|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrumpyPizza|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrumpyPizza[]    findAll()
 * @method GrumpyPizza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrumpyPizzaRepository extends EntityRepository
{

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
