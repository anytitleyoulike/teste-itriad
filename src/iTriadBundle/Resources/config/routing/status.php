<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('status_index', new Route(
    '/',
    array('_controller' => 'iTriadBundle:Status:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('status_show', new Route(
    '/{id}/show',
    array('_controller' => 'iTriadBundle:Status:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('status_new', new Route(
    '/new',
    array('_controller' => 'iTriadBundle:Status:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('status_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'iTriadBundle:Status:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('status_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'iTriadBundle:Status:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
