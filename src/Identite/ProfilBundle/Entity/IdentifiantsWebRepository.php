<?php

namespace Identite\ProfilBundle\Entity;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class IdentifiantsWebRepository extends EntityRepository implements UserProviderInterface
{
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\UserProviderInterface::loadUserByUsername()
	 */
	public function loadUserByUsername($username) {
		
		$query= $this->createQueryBuilder('IdentifiantsWeb')
		->where('IdentifiantsWeb.login = :login')
		->setParameter('login', $username)
		->getQuery();
		
		try {
			$iw = $query->getSingleResult();
		} catch (NoResultException $e) {
			throw new UsernameNotFoundException();
		}
		
		return $iw;
	}
	
	public function refreshUser(UserInterface $user){
		
		if(!$user instanceof IdentifiantsWeb)
		{
			throw new UnsupportedUserException();
		}
		
		return $this->find($user->getId());
	}
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\UserProviderInterface::supportsClass()
	 */
	public function supportsClass($class) {
		
		return $class = 'IdentifiantsWeb';

	}

	
}
