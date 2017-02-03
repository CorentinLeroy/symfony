<?php

namespace Devschool\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="Devschool\CinemaBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeSortie", type="datetime")
     */
    private $dateDeSortie;


    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="films")
     */
    private $genre;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Realisateur", inversedBy="films")
     */
    private $realisateur;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Film
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set dateDeSortie
     *
     * @param \DateTime $dateDeSortie
     *
     * @return Film
     */
    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;

        return $this;
    }

    /**
     * Get dateDeSortie
     *
     * @return \DateTime
     */
    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }

    /**
     * Set genre
     *
     * @param \Devschool\CinemaBundle\Entity\Genre $genre
     *
     * @return Film
     */
    public function setGenre(\Devschool\CinemaBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \Devschool\CinemaBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set realisateur
     *
     * @param \Devschool\CinemaBundle\Entity\Realisateur $realisateur
     *
     * @return Film
     */
    public function setRealisateur(\Devschool\CinemaBundle\Entity\Realisateur $realisateur = null)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get realisateur
     *
     * @return \Devschool\CinemaBundle\Entity\Realisateur
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }
}
