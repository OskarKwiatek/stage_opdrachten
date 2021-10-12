<?php

namespace App\Controller;

use App\Form\RegistrationFormType;
use App\Form\SearchType;
use App\Repository\TestEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(Request $request,TestEntityRepository $testEntityRepository): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //var_dump($form->getViewData()["search"]);
            $test_entities = $testEntityRepository-> findBySearch([$form->getViewData()]);
            return $this->render("test_entity/index.html.twig". [
            "test_entities" => $test_entities,
                ]);
        }

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            "sform" => $form -> createView(),
        ]);
    }
}
