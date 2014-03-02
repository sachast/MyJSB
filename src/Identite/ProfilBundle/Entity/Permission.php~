<?php

namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 */
class Permission
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomPermission;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $permission;

    /**
     * @var \Identite\Permission
     */
    private $dependDe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personne;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personne = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomPermission
     *
     * @param string $nomPermission
     * @return Permission
     */
    public function setNomPermission($nomPermission)
    {
        $this->nomPermission = $nomPermission;

        return $this;
    }

    /**
     * Get nomPermission
     *
     * @return string 
     */
    public function getNomPermission()
    {
        return $this->nomPermission;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Permission
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Add permission
     *
     * @param \Identite\Permission $permission
     * @return Permission
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

    /**
     * Set dependDe
     *
     * @param \Identite\Permission $dependDe
     * @return Permission
     */
    public function setDependDe(\Identite\Permission $dependDe = null)
    {
        $this->dependDe = $dependDe;

        return $this;
    }

    /**
     * Get dependDe
     *
     * @return \Identite\Permission 
     */
    public function getDependDe()
    {
        return $this->dependDe;
    }

    /**
     * Add role
     *
     * @param \Identite\Role $role
     * @return Permission
     */
    public function addRole(\Identite\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \Identite\Role $role
     */
    public function removeRole(\Identite\Role $role)
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
     * Add personne
     *
     * @param \Identite\Personne $personne
     * @return Permission
     */
    public function addPersonne(\Identite\Personne $personne)
    {
        $this->personne[] = $personne;

        return $this;
    }

    /**
     * Remove personne
     *
     * @param \Identite\Personne $personne
     */
    public function removePersonne(\Identite\Personne $personne)
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
}
