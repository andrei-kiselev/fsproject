<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/', name: 'main')]
    public function homePage(): Response
    {
        return new Response('myhomepage1');
    }
}
