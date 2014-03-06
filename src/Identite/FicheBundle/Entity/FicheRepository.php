<?php
namespace Identite\FicheBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Debug\Exception\FlattenException;


class FicheRepository extends EntityRepository{ 
	
	public function rechercherFiche($motCle){   //Si uniquement titre 
		return $this->getEntityManager()->createQuery(
		"SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$motCle%'"
		)->getResult();
	}
    
    public function rechercherFicheAvance2($recherche_motCle, $recherche_age){ // Si titre + descriptif + age sont remplis
		
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE (f.titre LIKE '%$recherche_motCle%' OR f.descriptif LIKE '%$recherche_motCle%' ) AND (f.ageMin <= $recherche_age AND f.ageMax >=$recherche_age)"
        )->getResult();
		
	}
    public function rechercherFicheAvance3($recherche_motCle){ // Si uniquement descriptif
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.descriptif LIKE '%$recherche_motCle%'"
         )->getResult();
		
	}
    public function rechercherFicheAvance0($recherche_motCle, $recherche_age){ // Si titre + age
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$recherche_motCle%' AND (f.ageMin <= $recherche_age AND f.ageMax >=$recherche_age)"
        )->getResult();
	}
    public function rechercherFicheAvance1($recherche_motCle, $recherche_age){ // descriptif + age
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.descriptif LIKE '%$recherche_motCle%' AND (f.ageMin <= $recherche_age AND f.ageMax >=$recherche_age)"
        )->getResult();
	}
    public function rechercherFicheAvance4($recherche_motCle){ // descriptif + titre
		return $this->getEntityManager()->createQuery(
        "SELECT f FROM IdentiteFicheBundle:Fiche f WHERE f.titre LIKE '%$recherche_motCle%' OR f.descriptif LIKE '%$recherche_motCle%'"
        )->getResult();
	}

}

