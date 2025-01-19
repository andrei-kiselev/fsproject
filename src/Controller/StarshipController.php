<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/api/starships')]
class StarshipController extends AbstractController
{
    #[Route('', name: 'starship', methods: ['GET'])]
    public function getCollection(StarshipRepository $repository): JsonResponse
    {
        $starships = $repository->findAll();

        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', name: 'starship.single', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): JsonResponse
    {
        $starship = $repository->findById($id);
        if (!$starship) {
            throw $this->createNotFoundException('Starship not found');
        }

        return $this->json($starship);
    }
}
