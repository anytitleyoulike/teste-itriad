<?php

namespace iTriadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('iTriadBundle:Default:index.html.twig');
    }

    public function testeAction () {
    	echo "Teste Action";
    }
}
