<?php
// src/Devschool/AdminBundle/Controller/AdminRealisateurController.php

namespace Devschool\AdminBundle\Controller;

use Devschool\CinemaBundle\Entity\Realisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Devschool\AdminBundle\Form\RealisateurType;

/**
 * @Route("/admin/realisateurs")
 */
class AdminRealisateurController extends Controller
{
    /**
     * @Route("/ajout", name="admin_realisateur_ajout")
     */
    public function addAction(Request $request)
    {
        $realisateur = new Realisateur();
        $form = $this->createForm(RealisateurType::class, $realisateur);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $realisateur = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();

            return $this->redirectToRoute('admin_realisateur_liste');
        }

        return $this->render(
            'DevschoolAdminBundle:Realisateur:form.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/liste", name="admin_realisateur_liste")
     */
    public function listAction()
    {
        $realisateurs = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Realisateur')->findAll();

        return $this->render(
            'DevschoolAdminBundle:Realisateur:list.html.twig',
            ['realisateurs' => $realisateurs]
        );
    }

    /**
     * @Route("/modif/{id}", name="admin_realisateur_modif", requirements={"id": "\d+"})
     */
    public function editAction(Request $request, $id)
    {
        $realisateur = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Realisateur')->find($id);

        $form = $this->createForm(RealisateurType::class, $realisateur);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $realisateur = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();

            return $this->redirectToRoute('admin_realisateur_liste');
        }

        return $this->render(
            'DevschoolAdminBundle:Realisateur:form.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/supprimer/{id}", name="admin_realisateur_supprimer", requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        $realisateur = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Realisateur')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($realisateur);
        $em->flush();

        return $this->redirectToRoute('admin_realisateur_liste');
    }
}
