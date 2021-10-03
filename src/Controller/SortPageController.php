<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SortPageController extends AbstractController
{
    /**
     * @Route("/", name="sortpage")
     */
    public function mainMethod(): Response
    {
        return $this->render('homePage.html.twig', [
            'fName' => 'wereld',
            'lName' => 'Reinerie',
        ]);
    }
}