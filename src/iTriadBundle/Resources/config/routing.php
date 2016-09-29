<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('i_triad_homepage', new Route('/', array(
    '_controller' => 'iTriadBundle:Default:index',
)));

return $collection;
