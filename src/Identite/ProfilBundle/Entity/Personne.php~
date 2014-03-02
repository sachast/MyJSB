<?php

namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    public function setIdentifiantsWeb(\Identite\IdentifiantsWeb $identifiantsWeb = null)
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
    public function addRole(\Identite\ProfilBundle\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Identite\ProfilBundle\Entity\Role $role
     */
    public function removeRole(\Identite\ProfilBundle\Entity\Role $role)
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
    public function addPermission(\Identite\Permission $permission)
    {
        $this->permission[] = $permission;

        return $this;
    }

    /**
     * Remove permission
     *
     * @param \Identite\Permission $permission
     */
    public function removePermission(\Identite\Permission $permission)
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
}
