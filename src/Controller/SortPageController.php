<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SortPageController extends AbstractController
{
    /**
     * @Route("/sortpage", name="sortpage")
     */
    public function mainMethod(): Response
    {
        return $this->render('sortpage.html.twig', [

        ]);
    }
}