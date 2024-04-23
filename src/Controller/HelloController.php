<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController 
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/dinossauros')]
    public function dinossauro(): Response
    {
        return new Response('Olá, dinossáuro!');
    }
    
    #[Route('/mamiferos')]
    public function mamifero(): Response
    {
        return new Response('Olá, mamifero!');
    }
}