<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\string\u;

class HelloController 
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace('-', ' ',$slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, '.$newSlug);
    }
    
}