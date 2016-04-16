<?php

namespace My\DataTimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/data.html")
     * @Template()
     */
    public function dataAction()
    {
        $data = date('d.m.Y');
        return array('data' => $data, 'zmienna' => '<h1>Witaj</h1>');
    }

    /**
     * @Route("/godzina.html")
     */
    public function godzinaAction() {

        $godzina = date('h:i:s');

        return $this->render('MyDataTimeBundle:Default:godzina.html.twig', array('godzina' => $godzina));
    }

    /**
     * @Route("/test")
     * @Template()
     */
    public function powitanieAction()
    {
        $komunikat = '<h1>Cześć!</h1>';
        return array('komunikat' => $komunikat);
    }//
}
