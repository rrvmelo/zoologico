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

    #[Route('/invertebrados')]
    public function invertebrado(): Response
    {
        return new Response('Olá, invertebrado!');
    }

    #[Route('/insetos')]
    public function inseto(): Response
    {
        return new Response('Olá, inseto!');
    }

    #[Route('/aves')]
    public function ave(): Response
    {
        return new Response('Olá, ave!');
    }

    #[Route('/felinos')]
    public function felino(): Response
    {
        return new Response('Olá, felino!');
    }

    #[Route('/caninos')]
    public function canino(): Response
    {
        return new Response('Olá, canino!');
    }

    #[Route('/roedor')]
    public function roedor(): Response
    {
        return new Response('Olá, roedor!');
    }
}