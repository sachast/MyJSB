<?php

namespace Identite\FicheBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Debriefing
 */
class Debriefing
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $texte;

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
     * @var \Identite\FicheBundle\Entity\Fiche
     */
    private $fiche;

    /**
     * @var \Identite\ProfilBundle\Entity\Personne
     */
    private $personne;


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
     * Set texte
     *
     * @param string $texte
     * @return Debriefing
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set creeLe
     *
     * @param \DateTime $creeLe
     * @return Debriefing
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
     * @return Debriefing
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
     * @return Debriefing
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
     * Set fiche
     *
     * @param \Identite\FicheBundle\Entity\Fiche $fiche
     * @return Debriefing
     */
    public function setFiche(\Identite\FicheBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \Identite\FicheBundle\Entity\Fiche 
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set personne
     *
     * @param \Identite\ProfilBundle\Entity\Personne $personne
     * @return Debriefing
     */
    public function setPersonne(\Identite\ProfilBundle\Entity\Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Identite\ProfilBundle\Entity\Personne 
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
