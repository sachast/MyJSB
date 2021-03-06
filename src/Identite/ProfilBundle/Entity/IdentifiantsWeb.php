<?php

/**
* @ORM\HasLifecycleCallbacks
**/
namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

//use Symfony\Component\Validator\Constraints\UniqueEntity; 
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
     * 
	 *   @Assert\Length( min="3",max = "20",minMessage = "VOus devez avoir un login de plus de {{ limit }} caracteres.", maxMessage = "pas plus.")
	 *	@Assert\NotBlank()
     */
    private $login;

    /**
     * @var string
	 * @Assert\Length( min="5",max = "30", minMessage = "VOus devez avoir un mots de passe de plus de {{ limit }} caracteres")
	 * @Assert\NotBlank()
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
	 public function setDesactive()
    {
        
		$this->actif = 0;
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
    public function setCreeLe()
    {
       $this->creeLe = new \DateTime();
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
    public function setPersonne(Personne $personne = null)
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
    	return 'sha512';
    
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
		return $this->login === $user->getLogin() && $this->motDePasse === $user->getPassword();
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonExpired()
	 */
	public function isAccountNonExpired() {
		// TODO: Auto-generated method stub
		
		if($this->getValideJusque()!=null)
		{
			$dt = new \DateTime();
			return $dt < $this->valideJusque;
		}else{
			return true;
		}

	}
	
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonLocked()
	 */
	public function isAccountNonLocked() {
		
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
		
		return $this->actif;

	}
	
	/**
     * Set dernierConnection
     *
     * @param \DateTime $modifieLe
     * @return Indentifiantweb
     */
	public function setDernierConnection()
	{
		$this->derniereConnection = new \DateTime();
		return $this->getLogin();
	}
	
	


}
