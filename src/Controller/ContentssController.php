<?php

namespace App\Controller;

use App\Entity\Contentss;
use App\Form\ContentssType;
use App\Repository\ContentssRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contentss')]
class ContentssController extends AbstractController
{
    #[Route('/', name: 'contentss_index', methods: ['GET'])]
    public function index(ContentssRepository $contentssRepository): Response
    {
        return $this->render('contentss/index.html.twig', [
            'contentsses' => $contentssRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'contentss_new', methods: ['GET','POST'])]
    public function new(Request $request): Response
    {
        $contentss = new Contentss();
        $form = $this->createForm(ContentssType::class, $contentss);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contentss);
            $entityManager->flush();

            return $this->redirectToRoute('contentss_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contentss/new.html.twig', [
            'contentss' => $contentss,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'contentss_show', methods: ['GET'])]
    public function show(Contentss $contentss): Response
    {
        return $this->render('contentss/show.html.twig', [
            'contentss' => $contentss,
        ]);
    }

    #[Route('/{id}/edit', name: 'contentss_edit', methods: ['GET','POST'])]
    public function edit(Request $request, Contentss $contentss): Response
    {
        $form = $this->createForm(ContentssType::class, $contentss);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contentss_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contentss/edit.html.twig', [
            'contentss' => $contentss,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'contentss_delete', methods: ['POST'])]
    public function delete(Request $request, Contentss $contentss): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contentss->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contentss);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contentss_index', [], Response::HTTP_SEE_OTHER);
    }
}
