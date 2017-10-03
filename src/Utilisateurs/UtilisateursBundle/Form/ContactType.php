<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'attr' => array(
                    'class' => 'validate'
                )
            ))
            ->add('email','email', array(
                'attr' => array(
                    'class' => 'validate'
                )
            ))
            ->add('sujet', null, array(
                'attr' => array(
                    'class' => 'validate'
                )
            ))
            ->add('message', 'textarea', array(
                'attr' => array(
                    'class' => 'validate materialize-textarea'
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateurs\UtilisateursBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateurs_utilisateursbundle_contact';
    }
}
