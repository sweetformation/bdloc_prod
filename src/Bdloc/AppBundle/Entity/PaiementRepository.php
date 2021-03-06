<?php

namespace Bdloc\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PaiementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PaiementRepository extends EntityRepository
{

    public function findUserPayments( $user ) {

        $query = $this->createQueryBuilder('p')
            ->where('p.user = :user')
            ->setParameter('user', $user)
            ->getQuery();

        return $query->getResult();
    }
}
