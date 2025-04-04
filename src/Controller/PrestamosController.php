<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PrestamosController extends AbstractController
{
    #[Route('/prestamos', name: 'app_prestamos')]
    public function index(): Response
    {
        return $this->render('prestamos/index.html.twig', [
            'controller_name' => 'PrestamosController',
        ]);
    }
}
