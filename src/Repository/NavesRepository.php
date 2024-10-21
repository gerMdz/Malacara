<?php

namespace App\Repository;

use App\Model\Naves;
use Psr\Log\LoggerInterface;

readonly class NavesRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function getAll(): array
    {
        $this->logger->info('Una colección de naves recibida');

        return [
            new Naves(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                'taken over by Q'
            ),
            new Naves(
                2,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T. Quick!',
                'repaired'
            ),
            new Naves(
                3,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn JourneyWay',
                'under construction'),
        ];
    }
}
