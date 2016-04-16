<?php

namespace My\SprBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/lorem.html")
     * @Template("::lorem.html.twig")
     */
    public function loremAction()
    {
        return array();
    }
    /**
     * @Route("/ipsum.html")
     * @Template(":Abc:ipsum.html.twig")
     */
    public function ipsumAction()
    {
        return array();
    }
    /**
     * @Route("/dolor.html")
     */
    public function dolorAction()
    {
        return $this->render("MySprBundle::dolor.html.twig");
    }
    /**
     * @Route("/sit.html")
     */
    public function sitAction()
    {
        return $this->render("MySprBundle:Def:sit.html.twig");
    }
}