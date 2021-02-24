<?php

namespace App\Controller;

use App\Entity\Formulaire;
use App\Form\FormulaireType;
use App\Repository\FormulaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/contact")
 */
class FormulaireController extends AbstractController
{
    /**
     * @Route("/", name="formulaire_index", methods={"GET"})
     */
    public function index(FormulaireRepository $formulaireRepository): Response
    {
        return $this->render('formulaire/index.html.twig', [
            'formulaires' => $formulaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="formulaire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $formulaire = new Formulaire();
        $form = $this->createForm(FormulaireType::class, $formulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formulaire);
            $entityManager->flush();

            return $this->redirectToRoute('formulaire_index');
        }

        return $this->render('formulaire/new.html.twig', [
            'formulaire' => $formulaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new/{prestation}", name="formulaire_new_prestation", methods={"GET","POST"})
     */
    public function newPrestation(Request $request, String $prestation): Response
    {
        $title = '';
        if ($prestation == 'conseil') {
            $title = 'Conseil';
        } elseif ($prestation == 'formation') {
            $title = 'Formation';
        } elseif ($prestation == 'recrutement') {
            $title = 'Recrutement & Évaluation';
        } elseif ($prestation == 'orientation') {
            $title = 'Orientation Professionnelle';
        } elseif ($prestation == 'coaching') {
            $title = 'Coaching';
        } elseif ($prestation == 'conference') {
            $title = 'Conférence';
        } elseif ($prestation == 'contact') {
            $title = 'Contact';
        } else {
            throw new HttpException(400, "{$prestation} n'existe pas");
        }

        $formulaire = new Formulaire();
        $form = $this->createForm(FormulaireType::class, $formulaire, array('objet' => $title));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formulaire);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('formulaire/newPrestation.html.twig', [
            'title' => $title,
            'prestation' => $prestation,
            'formulaire' => $formulaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formulaire_show", methods={"GET"})
     */
    public function show(Formulaire $formulaire): Response
    {
        return $this->render('formulaire/show.html.twig', [
            'formulaire' => $formulaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="formulaire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Formulaire $formulaire): Response
    {
        $form = $this->createForm(FormulaireType::class, $formulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formulaire_index');
        }

        return $this->render('formulaire/edit.html.twig', [
            'formulaire' => $formulaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="formulaire_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Formulaire $formulaire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formulaire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($formulaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('formulaire_index');
    }
}
