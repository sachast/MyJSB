<?php

namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 */
class Role
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
    }
	
	public function __toString()
	{
		return $this->nom;
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
     * @return Role
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
     * Add personne
     *
     * @param \Identite\Personne $personne
     * @return Role
     */
    public function addPersonne(Personne $personne)
    {
        $this->personne[] = $personne;

        return $this;
    }

    /**
     * Remove personne
     *
     * @param \Identite\Personne $personne
     */
    public function removePersonne(Personne $personne)
    {
        $this->personne->removeElement($personne);
    }

    /**
     * Get personne
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * Add permission
     *
     * @param \Identite\Permission $permission
     * @return Role
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
}
