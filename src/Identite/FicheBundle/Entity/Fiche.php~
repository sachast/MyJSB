<?php

namespace Identite\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 */
class Fiche
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $descriptif;

    /**
     * @var float
     */
    private $ageMin;

    /**
     * @var float
     */
    private $ageMax;

    /**
     * @var \DateTime
     */
    private $creeLe;

    /**
     * @var \DateTime
     */
    private $modifieLe;

    /**
     * @var boolean
     */
    private $actif;

    /**
     * @var boolean
     */
    private $publie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $debriefing;

    /**
     * @var \Identite\ProfilBundle\Entity\Personne
     */
    private $validePar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $animateursRessources;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $auteurs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->debriefing = new \Doctrine\Common\Collections\ArrayCollection();
        $this->animateursRessources = new \Doctrine\Common\Collections\ArrayCollection();
        $this->auteurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Fiche
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
     * Set descriptif
     *
     * @param string $descriptif
     * @return Fiche
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set ageMin
     *
     * @param float $ageMin
     * @return Fiche
     */
    public function setAgeMin($ageMin)
    {
        $this->ageMin = $ageMin;

        return $this;
    }

    /**
     * Get ageMin
     *
     * @return float 
     */
    public function getAgeMin()
    {
        return $this->ageMin;
    }

    /**
     * Set ageMax
     *
     * @param float $ageMax
     * @return Fiche
     */
    public function setAgeMax($ageMax)
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    /**
     * Get ageMax
     *
     * @return float 
     */
    public function getAgeMax()
    {
        return $this->ageMax;
    }

    /**
     * Set creeLe
     *
     * @param \DateTime $creeLe
     * @return Fiche
     */
    public function setCreeLe($creeLe)
    {
        $this->creeLe = $creeLe;

        return $this;
    }

    /**
     * Get creeLe
     *
     * @return \DateTime 
     */
    public function getCreeLe()
    {
        return $this->creeLe;
    }

    /**
     * Set modifieLe
     *
     * @param \DateTime $modifieLe
     * @return Fiche
     */
    public function setModifieLe($modifieLe)
    {
        $this->modifieLe = $modifieLe;

        return $this;
    }

    /**
     * Get modifieLe
     *
     * @return \DateTime 
     */
    public function getModifieLe()
    {
        return $this->modifieLe;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Fiche
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set publie
     *
     * @param boolean $publie
     * @return Fiche
     */
    public function setPublie($publie)
    {
        $this->publie = $publie;

        return $this;
    }

    /**
     * Get publie
     *
     * @return boolean 
     */
    public function getPublie()
    {
        return $this->publie;
    }

    /**
     * Add debriefing
     *
     * @param \Identite\ProfilBundle\Entity\Debriefing $debriefing
     * @return Fiche
     */
    public function addDebriefing(\Identite\ProfilBundle\Entity\Debriefing $debriefing)
    {
        $this->debriefing[] = $debriefing;

        return $this;
    }

    /**
     * Remove debriefing
     *
     * @param \Identite\ProfilBundle\Entity\Debriefing $debriefing
     */
    public function removeDebriefing(\Identite\ProfilBundle\Entity\Debriefing $debriefing)
    {
        $this->debriefing->removeElement($debriefing);
    }

    /**
     * Get debriefing
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDebriefing()
    {
        return $this->debriefing;
    }

    /**
     * Set validePar
     *
     * @param \Identite\ProfilBundle\Entity\Personne $validePar
     * @return Fiche
     */
    public function setValidePar(\Identite\ProfilBundle\Entity\Personne $validePar = null)
    {
        $this->validePar = $validePar;

        return $this;
    }

    /**
     * Get validePar
     *
     * @return \Identite\ProfilBundle\Entity\Personne 
     */
    public function getValidePar()
    {
        return $this->validePar;
    }

    /**
     * Add animateursRessources
     *
     * @param \Identite\ProfilBundle\Entity\Personne $animateursRessources
     * @return Fiche
     */
    public function addAnimateursRessource(\Identite\ProfilBundle\Entity\Personne $animateursRessources)
    {
        $this->animateursRessources[] = $animateursRessources;

        return $this;
    }

    /**
     * Remove animateursRessources
     *
     * @param \Identite\ProfilBundle\Entity\Personne $animateursRessources
     */
    public function removeAnimateursRessource(\Identite\ProfilBundle\Entity\Personne $animateursRessources)
    {
        $this->animateursRessources->removeElement($animateursRessources);
    }

    /**
     * Get animateursRessources
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnimateursRessources()
    {
        return $this->animateursRessources;
    }

    /**
     * Add auteurs
     *
     * @param \Identite\FicheBundle\Entity\Personne $auteurs
     * @return Fiche
     */
    public function addAuteur(\Identite\FicheBundle\Entity\Personne $auteurs)
    {
        $this->auteurs[] = $auteurs;

        return $this;
    }

    /**
     * Remove auteurs
     *
     * @param \Identite\FicheBundle\Entity\Personne $auteurs
     */
    public function removeAuteur(\Identite\FicheBundle\Entity\Personne $auteurs)
    {
        $this->auteurs->removeElement($auteurs);
    }

    /**
     * Get auteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }
}
