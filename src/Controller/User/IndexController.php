<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="main_page")
     */
    public function mainPage()
    {
        return $this->render('index.html.twig', ['title' => 'Кадровый Резерв|Роман Казаку']);
    }
}