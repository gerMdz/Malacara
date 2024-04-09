<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<strong>Veamos algo nuevo</strong>');
    }
}
