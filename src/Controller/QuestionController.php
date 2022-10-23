<?php

namespace App\Controller;

use App\Form\QuestionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/question/ask', name: 'question_form')]
    public function index(Request $request): Response
    {
        $formQuestion = $this->createForm(QuestionType::class);
        $formQuestion->handleRequest($request);

        if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
            //dump($formQuestion->getData());//
        }

        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }
    #[Route('/question/{id}', name: 'question_show')]
    public function show(Request $request, string $id): Response
    {
        $question = [
            'id' => '1',
            'title' => 'je suis une question',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing
elit. Officiis, quis odit! Odit earum quisquam ea animi in qui sit quia.
Consequatur illum voluptas quidem, sed et numquam neque aspernatur quibusdam.',
            'rating' => 20,
            'author' => [
                'name' => 'Jean dupont',
                'avatar' => 'https://randomuser.me/api/portraits/men/94.jpg'
            ],
            'nbResponse' => 15
        ];
        return $this->render('question/show.html.twig', [
            'question' => $question
        ]);
    }
}
