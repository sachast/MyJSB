<?php

namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * IdentifiantsWeb
 */
class IdentifiantsWeb implements AdvancedUserInterface, \Serializable, EquatableInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;


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
     * Set url
     *
     * @param string $url
     * @return IdentifiantsWeb
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $motDePasse;

    /**
     * @var \DateTime
     */
    private $derniereConnection;

    /**
     * @var \DateTime
     */
    private $valideJusque;

    /**
     * @var boolean
     */
    private $actif;

    /**
     * @var \DateTime
     */
    private $creeLe;

    /**
     * @var \Identite\ProfilBundle\Entity\Personne
     */
    private $personne;


    /**
     * Set login
     *
     * @param string $login
     * @return IdentifiantsWeb
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return IdentifiantsWeb
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set derniereConnection
     *
     * @param \DateTime $derniereConnection
     * @return IdentifiantsWeb
     */
    public function setDerniereConnection($derniereConnection)
    {
        $this->derniereConnection = $derniereConnection;

        return $this;
    }

    /**
     * Get derniereConnection
     *
     * @return \DateTime 
     */
    public function getDerniereConnection()
    {
        return $this->derniereConnection;
    }

    /**
     * Set valideJusque
     *
     * @param \DateTime $valideJusque
     * @return IdentifiantsWeb
     */
    public function setValideJusque($valideJusque)
    {
        $this->valideJusque = $valideJusque;

        return $this;
    }

    /**
     * Get valideJusque
     *
     * @return \DateTime 
     */
    public function getValideJusque()
    {
        return $this->valideJusque;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return IdentifiantsWeb
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
     * Set creeLe
     *
     * @param \DateTime $creeLe
     * @return IdentifiantsWeb
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
     * Set personne
     *
     * @param \Identite\ProfilBundle\Entity\Personne $personne
     * @return IdentifiantsWeb
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
    
    public function __toString(){
    	return $this->getLogin();
    }
    
    /*
     /* (non-PHPdoc)
    * @see \Symfony\Component\Security\Core\User\UserInterface::eraseCredentials()
    */
    public function eraseCredentials() {
    
    	return null;
    
    }
    
    /* (non-PHPdoc)
     * @see \Symfony\Component\Security\Core\User\UserInterface::getRoles()
    */
    public function getRoles() {
    	$role = $this->getPersonne()->getRole();
    	$roles = Array();
    	foreach($role as $r)
    	{
    		$roles[] = $r->getNom();
    	}
    	
    	return $roles;
    
    }
    
    /* (non-PHPdoc)
     * @see \Symfony\Component\Security\Core\User\UserInterface::getPassword()
    */
    public function getPassword() {
    	return $this->getMotDePasse();
    
    }
    
    /* (non-PHPdoc)
     * @see \Symfony\Component\Security\Core\User\UserInterface::getSalt()
    */
    public function getSalt() {
    	return null;
    
    }
    
    /* (non-PHPdoc)
     * @see \Symfony\Component\Security\Core\User\UserInterface::getUsername()
    */
    public function getUsername() {
    	return $this->getLogin();
    
    }
    
   public function serialize()
    {
    	return serialize(array($this->id,$this->login));
    }
    
	/* (non-PHPdoc)
	 * @see Serializable::unserialize()
	 */
	public function unserialize($serialized) {
		
		list($this->id, $this->login) = unserialize($serialized);

	}
	
	public function isEqualTo(UserInterface $user){
		return $this->login === $user->getLogin();
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonExpired()
	 */
	public function isAccountNonExpired() {
		// TODO: Auto-generated method stub
		
		return true;

	}
	
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonLocked()
	 */
	public function isAccountNonLocked() {
		// TODO: Auto-generated method stub
		return true;
	}
	
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isCredentialsNonExpired()
	 */
	public function isCredentialsNonExpired() {
		// TODO: Auto-generated method stub
		return true;
	}

	
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isEnabled()
	 */
	public function isEnabled() {
		// TODO: Auto-generated method stub
		
		return true;

	}



}
