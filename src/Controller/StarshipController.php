<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{


    #[Route('/starships/{id<\d+>}', name: 'app.starship.single', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        $starship = $repository->findById($id);
        if (!$starship) {
            throw $this->createNotFoundException('Starship not found');
        }

        return $this->render('starship/single.html.twig', [
            'starship' => $starship,
        ]);
    }
}
