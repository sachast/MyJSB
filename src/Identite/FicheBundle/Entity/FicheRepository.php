<?php
namespace Identite\FicheBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Debug\Exception\FlattenException;


class FicheRepository extends EntityRepository{ //Si uniquement titre
	
	public function rechercherFiche($motCle){
		
		return $this->getEntityManager()->createQuery(
		"SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$motCle%'"
		)->getResult();
		
	}
    
    public function rechercherFicheAvance($recherche_motCle){ // Si titre et descriptif sont remplis
		
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$recherche_motCle%' OR f.descriptif LIKE '%$recherche_motCle%'"
        )->getResult();
		
	}
    
    public function rechercherFicheAvance2($recherche_motCle){ // Si uniquement descriptif
		
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.descriptif LIKE '%$recherche_motCle%'"
         )->getResult();
		
	}
}
