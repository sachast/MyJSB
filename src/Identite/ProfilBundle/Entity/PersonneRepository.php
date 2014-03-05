<?php

namespace Identite\ProfilBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PersonneRepository extends EntityRepository{
	
	public function utilisateursEnAttente(){
		return $this->createQueryBuilder('p')
		->where('p.valideLe IS NULL')
		->getQuery()
		->getResult();
	}

}
