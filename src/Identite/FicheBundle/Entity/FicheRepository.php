<?php
namespace Identite\FicheBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Debug\Exception\FlattenException;


class FicheRepository extends EntityRepository{
	
	public function rechercherFiche($motCle){
		
		return $this->getEntityManager()->createQuery(
		"SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$motCle%' OR f.descriptif LIKE '%$motCle%'"
		)->getResult();
		
	}
    
    public function rechercherFiche_motCle($motCle){
		
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$motCle%' OR f.descriptif LIKE '%$motCle%'"
        )->getResult();
		
	}
}
