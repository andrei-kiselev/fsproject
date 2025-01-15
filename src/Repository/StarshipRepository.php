<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    public function findAll(): array
    {
        $this->logger->info('get all starships');

        return [
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
    }
}
