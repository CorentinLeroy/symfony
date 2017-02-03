<?php

namespace Devschool\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisateur
 *
 * @ORM\Table(name="realisateur")
 * @ORM\Entity(repositoryClass="Devschool\CinemaBundle\Repository\RealisateurRepository")
 */
class Realisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDeNaissance", type="date")
     */
    private $dateDeNaissance;

    /**
    * @ORM\OneToMany(targetEntity="Film", mappedBy="realisateur")
    */
    private $films;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    public function __toString(){
      return $this->prenom.' '.$this->nom;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Realisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description
     *
     * @param string $description
     *
     * @return Realisateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Realisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \Date $dateDeNaissance
     *
     * @return Realisateur
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \Date
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add film
     *
     * @param \Devschool\CinemaBundle\Entity\Film $film
     *
     * @return Realisateur
     */
    public function addFilm(\Devschool\CinemaBundle\Entity\Film $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film
     *
     * @param \Devschool\CinemaBundle\Entity\Film $film
     */
    public function removeFilm(\Devschool\CinemaBundle\Entity\Film $film)
    {
        $this->films->removeElement($film);
    }

    /**
     * Get films
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }
}
