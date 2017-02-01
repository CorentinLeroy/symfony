<?php
// src/Devschool/AdminBundle/Controller/AdminFilmController.php

namespace Devschool\AdminBundle\Controller;

use Devschool\CinemaBundle\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Devschool\AdminBundle\Form\FilmType;

/**
* @Route("/admin/films")
*/
class AdminFilmController extends Controller
{
   /**
    * @Route("/ajout", name="admin_film_ajout")
    */
   public function addAction(Request $request)
   {
       $film = new Film();
       $form = $this->createForm(FilmType::class, $film);

       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           $film = $form->getData();

           $em = $this->getDoctrine()->getManager();
           $em->persist($film);
           $em->flush();

           return $this->redirectToRoute('admin_film_liste');
       }

       return $this->render(
           'DevschoolAdminBundle:Film:form.html.twig',
           ['form' => $form->createView()]
       );
   }

   /**
    * @Route("/liste", name="admin_film_liste")
    */
   public function listAction()
   {
       $films = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->findAll();

       return $this->render(
           'DevschoolAdminBundle:Film:list.html.twig',
           ['films' => $films]
       );
   }

   /**
    * @Route("/modif/{id}", name="admin_film_modif", requirements={"id": "\d+"})
    */
   public function editAction(Request $request, $id)
   {
       $film = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->find($id);

       $form = $this->createForm(FilmType::class, $film);

       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           $film = $form->getData();

           $em = $this->getDoctrine()->getManager();
           $em->persist($film);
           $em->flush();

           return $this->redirectToRoute('admin_film_liste');
       }

       return $this->render(
           'DevschoolAdminBundle:Film:form.html.twig',
           ['form' => $form->createView()]
       );
   }

   /**
    * @Route("/supprimer/{id}", name="admin_film_supprimer", requirements={"id": "\d+"})
    */
   public function deleteAction($id)
   {
       $film = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->find($id);

       $em = $this->getDoctrine()->getManager();
       $em->remove($film);
       $em->flush();

       return $this->redirectToRoute('admin_film_liste');
   }
}
