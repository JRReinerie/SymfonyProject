<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function mainMethod(): Response
    {
        return $this->render('homePage.html.twig', [
            'fName' => 'wereld',
            'lName' => 'Reinerie',
        ]);
    }
}