<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
                'title' => 'j ai une question',
                'content' => 'lorem mkldfdm ldkjfùqùmls mùfkdlfksmdlkg',
                'rating' => 20,
                'author' => [
                    'name' => 'gneu sufulu',
                    'avatar' => 'https://randomuser.me/api/portraits/men/96.jpg'
                ],
                'nbResponse' => 15
            ],
            [
                'title' => 'je suis une question',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Officiis, quis odit! Odit earum quisquam ea animi in qui sit quia.
                Consequatur illum voluptas quidem, sed et numquam neque
                aspernatur quibusdam.',
                'rating' => 0,
                'author' => [
                    'name' => 'Laure Joe',
                    'avatar' =>
                    'https://randomuser.me/api/portraits/women/79.jpg'
                ],
                'nbResponse' => 5
            ],
            [
                'title' => 'je suis une question',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Officiis, quis odit! Odit earum quisquam ea animi in qui sit quia.
                Consequatur illum voluptas quidem, sed et numquam neque
                aspernatur quibusdam.',
                'rating' => -15,
                'author' => [
                    'name' => 'Pascal Praud',
                    'avatar' => 'https://randomuser.me/api/portraits/men/40.jpg'
                ],
                'nbResponse' => 25
            ]


        ];
        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
