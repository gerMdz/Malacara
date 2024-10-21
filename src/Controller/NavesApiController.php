<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\NavesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NavesApiController extends AbstractController
{
    #[Route('/api/naves')]
    public function index(NavesRepository $navesRepository): Response
    {
        $naves = $navesRepository->getAll();

        return $this->json($naves);
    }
}
