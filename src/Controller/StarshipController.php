<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    #[Route('/api/starships', name: 'starship')]
    public function getCollection(StarshipRepository $repository): JsonResponse
    {
        $starships = $repository->findAll();

        return $this->json($starships);
    }
}
