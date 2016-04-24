<?php

namespace My\TabliczkaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/tabliczka.html")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('MyTabliczkaBundle:Default:index.html.twig');
    }
}
