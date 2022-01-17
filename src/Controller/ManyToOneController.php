<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManyToOneController extends AbstractController
{
    #[Route('/many/to/one', name: 'many_to_one')]
    public function index(): Response
    {
        return $this->render('many_to_one/index.html.twig', [
            'controller_name' => 'ManyToOneController',
        ]);
    }
}
