<?php

namespace App\Controller;

use App\Entity\Form;
use App\Form\FormType;
use App\Repository\FormRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/form")
 */
class FormController extends AbstractController
{
    /**
     * @Route("/", name="form_index", methods={"GET"})
     */
    public function index(FormRepository $formRepository): Response
    {
        return $this->render('form/index.html.twig', [
            'forms' => $formRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="form_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $form = new Form();
        $form = $this->createForm(FormType::class, $form);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($form);
            $entityManager->flush();

            return $this->redirectToRoute('form_index');
        }

        return $this->render('form/new.html.twig', [
            'form' => $form,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="form_show", methods={"GET"})
     */
    public function show(Form $form): Response
    {
        return $this->render('form/show.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="form_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Form $form): Response
    {
        $form = $this->createForm(FormType::class, $form);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('form_index');
        }

        return $this->render('form/edit.html.twig', [
            'form' => $form,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="form_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Form $form): Response
    {
        if ($this->isCsrfTokenValid('delete'.$form->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($form);
            $entityManager->flush();
        }

        return $this->redirectToRoute('form_index');
    }
}
