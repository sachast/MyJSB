<?php

namespace Identite\ProfilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Identite\ProfilBundle\Entity\IdentifiantsWeb;

class PersonneTypeAdmin extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('statut')
            //->add('creeLe')
            //->add('valideLe')
            ->add('premisDeConduire')
            //->add('fichesEcrites')
            //->add('permission')
            ->add('role','entity',array(
        	'by_reference' => false,
            'class' => 'Identite\ProfilBundle\Entity\Role',
            'multiple' => true,
        ))
            //->add('ficheRessource')
            //->add('identifiantsweb', new IdentifiantsWebType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Identite\ProfilBundle\Entity\Personne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'identite_profilbundle_personne';
    }
}
