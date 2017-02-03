<?php
// src/Devschool/CinemaBundle/Controller/DefaultController.php
namespace Devschool\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="page_accueil")
     */
    public function indexAction()
    {
        return $this->render('DevschoolCinemaBundle:Default:index.html.twig');
    }

    /**
    * @Route("/films", name="page_films")
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
    * @Route("/film/{id}", requirements={"id": "\d+"}, name="page_film")
   */
   public function showAction($id)
   {
     $film = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->find($id);

    return $this->render(
        'DevschoolCinemaBundle:Film:show.html.twig',
        ['film' => $film]
      );
   }

   /**
   * @Route("/realisateurs", name="page_realisateurs")
   */
   public function listActionRealisateur()
   {
       $realisateurs = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Realisateur')->findAll();
       $titre_de_la_page = 'Listes des réalisateurs';

       return $this->render(
       'DevschoolCinemaBundle:Realisateur:list.html.twig',
       ['realisateurs' => $realisateurs, 'titre' => $titre_de_la_page]
   );
   }
   /**
   * @Route("/realisateur/{id}", requirements={"id": "\d+"}, name="page_film_realisateur")
  */
  public function showActionRealisateur($id)
  {

    $films = $this->getDoctrine()->getRepository('DevschoolCinemaBundle:Film')->findByRealisateur($id);

   return $this->render(
       'DevschoolCinemaBundle:Realisateur:show.html.twig',
       ['films' => $films]
     );
  }

}
