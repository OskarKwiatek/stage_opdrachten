<?php

namespace App\Controller;

use App\Form\RegistrationFormType;
use App\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            return $this->render("default/index.html.twig");
        }

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            "sform" => $form -> createView(),
        ]);
    }
}
