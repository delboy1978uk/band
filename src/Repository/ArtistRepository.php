<?php

namespace Del\Repository;

use Del\Band\Entity\Artist;
use Doctrine\ORM\EntityRepository;

class ArtistRepository extends EntityRepository
{
    /**
     * @param Artist $link
     * @return Artist
     */
    public function save(Artist $link)
    {
        $this->_em->persist($link);
        $this->_em->flush();
        return $link;
    }
    /**
     * @param Artist $link
     */
    public function delete(Artist $link)
    {
        $this->_em->remove($link);
        $this->_em->flush();
    }

    /**
     * @param string $token
     * @return Artist|null
     */
    public function findByCriteria($criteria)
    {
        $qb = $this->createQueryBuilder('el');

        $qb->where('el.token = :token');
        $qb->setParameter('token', $token);

        $query = $qb->getQuery();
        $result = $query->getResult();
        return count($result) ? $result[0] : null;
    }

    /**
     * @param string $token
     * @return Artist|null
     */
    public function findOneByCriteria($criteria)
    {
        $qb = $this->createQueryBuilder('el');

        $qb->where('el.token = :token');
        $qb->setParameter('token', $token);

        $query = $qb->getQuery();
        $result = $query->getResult();
        return count($result) ? $result[0] : null;
    }
}
