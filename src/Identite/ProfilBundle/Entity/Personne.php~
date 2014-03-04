<?php

namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM\Entity(repositoryClass="Identite\ProfilBundle\Entity\PersonneRepository")
 */

/**
 * Personne
 */
class Personne
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var \DateTime
     */
    private $creeLe;

    /**
     * @var \DateTime
     */
    private $valideLe;

    /**
     * @var integer
     */
    private $permisDeConduire;

    /**
     * @var \Identite\IdentifiantsWeb
     */
    private $identifiantsWeb;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

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
     * @return Personne
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
     * Set statut
     *
     * @param string $statut
     * @return Personne
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set creeLe
     *
     * @param \DateTime $creeLe
     * @return Personne
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
     * Set valideLe
     *
     * @param \DateTime $valideLe
     * @return Personne
     */
    public function setValideLe($valideLe)
    {
        $this->valideLe = $valideLe;

        return $this;
    }

    /**
     * Get valideLe
     *
     * @return \DateTime 
     */
    public function getValideLe()
    {
        return $this->valideLe;
    }

    /**
     * Set permisDeConduire
     *
     * @param integer $permisDeConduire
     * @return Personne
     */
    public function setPermisDeConduire($permisDeConduire)
    {
        $this->permisDeConduire = $permisDeConduire;

        return $this;
    }

    /**
     * Get permisDeConduire
     *
     * @return integer 
     */
    public function getPermisDeConduire()
    {
        return $this->permisDeConduire;
    }

    /**
     * Set identifiantsWeb
     *
     * @param \Identite\IdentifiantsWeb $identifiantsWeb
     * @return Personne
     */
    public function setIdentifiantsWeb(IdentifiantsWeb $identifiantsWeb = null)
    {
        $this->identifiantsWeb = $identifiantsWeb;

        return $this;
    }

    /**
     * Get identifiantsWeb
     *
     * @return \Identite\IdentifiantsWeb 
     */
    public function getIdentifiantsWeb()
    {
        return $this->identifiantsWeb;
    }

    /**
     * Add role
     *
     * @param \Identite\ProfilBundle\Entity\Role $role
     * @return Personne
     */
    public function addRole(Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Identite\ProfilBundle\Entity\Role $role
     */
    public function removeRole(Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add permission
     *
     * @param \Identite\Permission $permission
     * @return Personne
     */
    public function addPermission(Permission $permission)
    {
        $this->permission[] = $permission;

        return $this;
    }

    /**
     * Remove permission
     *
     * @param \Identite\Permission $permission
     */
    public function removePermission(Permission $permission)
    {
        $this->permission->removeElement($permission);
    }

    /**
     * Get permission
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPermission()
    {
        return $this->permission;
    }
    /**
     * @var boolean
     */
    private $premisDeConduire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fichesValides;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $debriefing;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fichesEcrites;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ficheRessource;


    /**
     * Set premisDeConduire
     *
     * @param boolean $premisDeConduire
     * @return Personne
     */
    public function setPremisDeConduire($premisDeConduire)
    {
        $this->premisDeConduire = $premisDeConduire;

        return $this;
    }

    /**
     * Get premisDeConduire
     *
     * @return boolean 
     */
    public function getPremisDeConduire()
    {
        return $this->premisDeConduire;
    }

    /**
     * Add identifiantsWeb
     *
     * @param \Identite\ProfilBundle\Entity\IdentifiantsWeb $identifiantsWeb
     * @return Personne
     */
    public function addIdentifiantsWeb(IdentifiantsWeb $identifiantsWeb)
    {
        $this->identifiantsWeb[] = $identifiantsWeb;

        return $this;
    }

    /**
     * Remove identifiantsWeb
     *
     * @param \Identite\ProfilBundle\Entity\IdentifiantsWeb $identifiantsWeb
     */
    public function removeIdentifiantsWeb(IdentifiantsWeb $identifiantsWeb)
    {
        $this->identifiantsWeb->removeElement($identifiantsWeb);
    }

    /**
     * Add fichesValides
     *
     * @param \Identite\FicheBundle\Entity\Fiche $fichesValides
     * @return Personne
     */
    public function addFichesValide(\Identite\FicheBundle\Entity\Fiche $fichesValides)
    {
        $this->fichesValides[] = $fichesValides;

        return $this;
    }

    /**
     * Remove fichesValides
     *
     * @param \Identite\FicheBundle\Entity\Fiche $fichesValides
     */
    public function removeFichesValide(\Identite\FicheBundle\Entity\Fiche $fichesValides)
    {
        $this->fichesValides->removeElement($fichesValides);
    }

    /**
     * Get fichesValides
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichesValides()
    {
        return $this->fichesValides;
    }

    /**
     * Add debriefing
     *
     * @param \Identite\ProfilBundle\Entity\Debriefing $debriefing
     * @return Personne
     */
    /*public function addDebriefing(Identite\FicheBundle\Entity\Debriefing $debriefing)
    {
        $this->debriefing[] = $debriefing;

        return $this;
    }*/

    /**
     * Remove debriefing
     *
     * @param \Identite\ProfilBundle\Entity\Debriefing $debriefing
     */
    /*public function removeDebriefing(Debriefing $debriefing)
    {
        $this->debriefing->removeElement($debriefing);
    }*/

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
     * Add fichesEcrites
     *
     * @param \Identite\FicheBundle\Entity\Fiche $fichesEcrites
     * @return Personne
     */
    public function addFichesEcrite(\Identite\FicheBundle\Entity\Fiche $fichesEcrites)
    {
        $this->fichesEcrites[] = $fichesEcrites;

        return $this;
    }

    /**
     * Remove fichesEcrites
     *
     * @param \Identite\FicheBundle\Entity\Fiche $fichesEcrites
     */
    public function removeFichesEcrite(\Identite\FicheBundle\Entity\Fiche $fichesEcrites)
    {
        $this->fichesEcrites->removeElement($fichesEcrites);
    }

    /**
     * Get fichesEcrites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichesEcrites()
    {
        return $this->fichesEcrites;
    }

    /**
     * Add ficheRessource
     *
     * @param \Identite\FicheBundle\Entity\Fiche $ficheRessource
     * @return Personne
     */
    public function addFicheRessource(\Identite\FicheBundle\Entity\Fiche $ficheRessource)
    {
        $this->ficheRessource[] = $ficheRessource;

        return $this;
    }

    /**
     * Remove ficheRessource
     *
     * @param \Identite\FicheBundle\Entity\Fiche $ficheRessource
     */
    public function removeFicheRessource(\Identite\FicheBundle\Entity\Fiche $ficheRessource)
    {
        $this->ficheRessource->removeElement($ficheRessource);
    }

    /**
     * Get ficheRessource
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFicheRessource()
    {
        return $this->ficheRessource;
    }
    
    /**
     * Add debriefing
     *
     * @param \Identite\FicheBundle\Entity\Debriefing $debriefing
     * @return Personne
     */
    public function addDebriefing(\Identite\FicheBundle\Entity\Debriefing $debriefing)
    {
        $this->debriefing[] = $debriefing;

        return $this;
    }

    /**
     * Remove debriefing
     *
     * @param \Identite\FicheBundle\Entity\Debriefing $debriefing
     */
    public function removeDebriefing(\Identite\FicheBundle\Entity\Debriefing $debriefing)
    {
        $this->debriefing->removeElement($debriefing);
    }
}
