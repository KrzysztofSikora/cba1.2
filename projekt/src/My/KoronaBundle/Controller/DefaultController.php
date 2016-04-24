<?php

namespace My\KoronaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/korona.html")
     * @Template()
     */
    public function indexAction()
    {
        $t = array();
        foreach (file('../data/dziela_literatury_swiatowej.txt') as $l) {
            $e = explode('|', trim($l));
            $t[] = array(
                'autor'
                => $e[0],
                'tytul'
                => $e[1],
                'literatura' => $e[2],
                'data'
                => $e[3],
            );
        }
        return array('literatura' => $t);
    }
}
