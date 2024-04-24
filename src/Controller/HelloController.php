<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\string\u;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {

        $users = [
            ['name' => 'Filip Doe', 'phone' => '(19) 93313-2406' ],
            ['name' => 'Billy Doe', 'phone' => '(19) 93313-2406' ],
            ['name' => 'Charles Doe', 'phone' => '(19) 93313-2406' ],
            ['name' => 'John Doe', 'phone' => '(19) 92213-2406' ],
            ['name' => 'Emma Doe', 'phone' => '(19) 93313-9999' ],
            ['name' => 'Elle Doe', 'phone' => '(19) 93313-2406' ],
            ['name' => 'Rohn Doe', 'phone' => '(19) 93313-7777' ],
        ];

   


        return $this->render('hello/homepage.html.twig',[
            'title' => 'Zoológico',
            'users' => $users,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace('-', ' ',$slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, '.$newSlug);
    }
    
}