<?php

namespace My\MountainsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $plk = file('../data/korona-ziemi.txt');
        $tab = array();
        foreach ($plk as $l) {
            $e = explode(':', trim($l));
            $tab[] = array(
                'kontynent' => $e[0],
                'nazwa'
                => $e[1],
                'wysokosc' => $e[2],
            );
        }
        return array('dane' => $tab);
    }
}
