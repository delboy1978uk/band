<?php
/**
 * User: delboy1978uk
 * Date: 24/05/16
 * Time: 20:33
 */

namespace Del\Band\Service;

use Doctrine\ORM\EntityManager;
use Pimple\Container;

class BreweryService
{

    /** @var EntityManager $em */
    protected $em;

    public function __construct(Container $c)
    {
        $this->em = $c['doctrine.entity_manager'];
    }
}