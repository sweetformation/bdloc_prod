<?php

namespace Bdloc\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FineRepository extends EntityRepository
{

    public function findUserFines( $user ) {

        $query = $this->createQueryBuilder('f')
            ->where('f.user = :user')
            ->setParameter('user', $user)
            ->andWhere('f.status = :status')
            ->setParameter('status', 'en cours')
            ->getQuery();

        return $query->getResult();
    }
}
