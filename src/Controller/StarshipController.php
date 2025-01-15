<?php

namespace App\Controller;

use App\Model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    #[Route('/api/starships', name: 'starship')]
    public function getCollection(LoggerInterface $logger): JsonResponse
    {
        $logger->info('StarshipController.getCollection');

        $starships = [
            new Starship(
                1,
                'Starship 1',
                'Delta Tourist',
                'John Doe',
                'success',
            ),
            new Starship(
                2,
                'Starship 2',
                'Delta Tourist',
                'John Doe',
                'success',
            ),
            new Starship(
                3,
                'Starship 3',
                'Delta Tourist',
                'John Doe',
                'success',
            ),
        ];

        return $this->json($starships);
    }
}
