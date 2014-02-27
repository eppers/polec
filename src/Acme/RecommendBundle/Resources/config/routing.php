<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('acme_recommend_homepage', new Route('/hello/{name}', array(
    '_controller' => 'AcmeRecommendBundle:Default:index',
)));

/**********Default*************/


/**********User*************/
$collection->add('message_receive', new Route('/message/receive', array(
    '_controller' => 'AcmeRecommendBundle:Default:index',
)));

$collection->add('message_send', new Route('/message/send', array(
    '_controller' => 'AcmeRecommendBundle:Default:index',
)));

$collection->add('message_index', new Route('/message', array(
    '_controller' => 'AcmeRecommendBundle:Default:index',
)));

/**********Admin*************/

return $collection;
