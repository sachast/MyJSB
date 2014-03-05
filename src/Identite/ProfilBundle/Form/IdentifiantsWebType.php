<?php

namespace Identite\ProfilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdentifiantsWebType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('motDePasse')
           // ->add('derniereConnection')
            //->add('valideJusque')
            //->add('actif')
            //->add('creeLe')
            ->add('personne')
			->add('personne', new PersonneType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Identite\ProfilBundle\Entity\IdentifiantsWeb'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'identite_profilbundle_identifiantsweb';
    }
}
