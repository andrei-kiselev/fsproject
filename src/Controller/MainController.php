<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function homePage(StarshipRepository $repository): Response
    {
        $starships = $repository->findAll();
        $numberStarships = count($starships);
        $starship = $starships[array_rand($starships)];

        return $this->render('main/homepage.html.twig', ['numberStarships' => $numberStarships, 'starship' => $starship]);
    }
}
