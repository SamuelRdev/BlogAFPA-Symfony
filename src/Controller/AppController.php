<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(): Response
    {
        $offer_list = [
            [
                "title" => "Post 1",
                "image" => "https://via.placeholder.com/300",
                "city" => "Bordeaux",
                "contract" => "CDD",
                "duration" => "12 month"
            ],
            [
                "title" => "Post 2",
                "image" => "https://via.placeholder.com/300",
                "city" => "Bordeaux",
                "contract" => "CDD",
                "duration" => "12 month"
            ],
            [
                "title" => "Post 3",
                "image" => "https://via.placeholder.com/300",
                "city" => "Bordeaux",
                "contract" => "CDD",
                "duration" => "12 month"
            ],
            [
                "title" => "Post 4",
                "image" => "https://via.placeholder.com/300",
                "city" => "Bordeaux",
                "contract" => "CDD",
                "duration" => "12 month"
            ]
        ];

        return $this->render('app/index.html.twig', [
            "offer_list" => $offer_list
        ]);
    }

    /**
     * @Route("/offer", name="offer")
     */
    public function show()
    {
        $offer =  [
            "title" => "Post 4",
            "image" => "https://via.placeholder.com/300",
            "city" => "Bordeaux",
            "contract" => "CDD",
            "duration" => "12 month"
        ];

        return $this->render('app/offer.html.twig', [
            "offer" => $offer
        ]);
    }
}
