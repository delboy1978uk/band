<?php

namespace Del\Band;

use Del\Common\Container\RegistrationInterface;
use Del\Band\Service\BandService;
use Pimple\Container;

class BandPackage implements RegistrationInterface
{
    /**
     * @param Container $c
     */
    public function addToContainer(Container $c)
    {
        $function = function($c) {
            $svc = new BandService($c);
            return $svc;
        };

        $c['service.band'] = $c->factory($function);
    }

    /**
     * @return string
     */
    public function getEntityPath()
    {
        return 'vendor/delboy1978uk/band/src/Entity';
    }

    /**
     * @return bool
     */
    public function hasEntityPath()
    {
        return true;
    }


}