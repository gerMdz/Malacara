<?php

namespace App\Controller;

use App\Repository\NavesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(NavesRepository $navesRepository): Response
    {
        $naves = $navesRepository->getAll();
        $cantidadDeNavesEspaciales = count($naves);

        $miNave = $naves[array_rand($naves)];

        return $this->render('main/homepage.html.twig',
            compact('naves', 'miNave'),
        );
    }


}
