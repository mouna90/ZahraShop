<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PanierController extends Controller
{
    /**
     * @Route("/panier")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }
}
