<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomColorsController extends AbstractController
{
    #[Route('/customColors', name: 'app_custom_colors')]
    public function index(): Response
    {
        return $this->render('custom_colors/index.html.twig', [
            'controller_name' => 'CustomColorsController',
        ]);
    }
}
