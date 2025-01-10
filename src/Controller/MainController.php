<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function homePage(): Response
    {
        $numberStarships =  40;
        return $this->render('main/homepage.html.twig', ['numberStarships' => $numberStarships ]);
    }
}
