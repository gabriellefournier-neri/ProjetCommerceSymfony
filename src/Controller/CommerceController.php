<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommerceController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('commerce/index.html.twig');
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function shop(): Response
    {
        return $this->render('commerce/shop.html.twig');
    }
}
