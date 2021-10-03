<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function mainMethod(): Response
    {
        return $this->render('homePage.html.twig', [
            'fName' => 'wereld',
            'lName' => 'Reinerie',
        ]);
    }
}