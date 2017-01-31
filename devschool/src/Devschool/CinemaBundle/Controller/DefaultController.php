<?php
// src/Devschool/CinemaBundle/Controller/DefaultController.php
namespace Devschool\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DevschoolCinemaBundle:Default:index.html.twig');
    }

    /**
    * @Route("/films")
    */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->findAll();

        $titre_de_la_page = 'Listes des films';

        return $this->render(
        'DevschoolCinemaBundle:Film:list.html.twig',
        ['films' => $films, 'titre' => $titre_de_la_page]
    );
    }

    /**
   * @Route("/film/{id}", requirements={"id": "\d+"})
   */
   public function showAction($id)
   {
     $films = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->find($id);

    return $this->render(
        'DevschoolCinemaBundle:Film:show.html.twig',
        ['films' => $films]
      );
   }
}
