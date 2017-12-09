<?php
namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        //$builder->add('recherche','text', array('label' => false,
                                                //'attr' => array('class' => 'input-medium search-query searchAjax')));
        /*$builder->add('recherche','text', array('label' => false,
                                                'attr' => array('class' => 'form-control dropdown-toggle searchAjax',
                                                				'id' => 'dropdownSearch',
                                                				'data-toggle' => 'dropdown',
                                                				'aria-haspopup'  => 'true',
                                                				'aria-expanded' => 'false',
                                                				'placeholder' => 'Search')));*/

        $builder
                ->add('recherche','text', array('label' => false,
                                                'attr' => array(
                                                    'class'=>'form-control searchAjax',
                                                	'placeholder' => 'Search')))
                ->
                add('subCategorie', 'entity', array(
                    'class'=>'Ecommerce\EcommerceBundle\Entity\SubCategories',
                    'empty_value' => ' - Tous -',
                    'attr' => array('class'=>'form-control miva form-select subCategorie',))
                );
    }
    
    public function getName()
    {
        return 'ecommerce_ecommercebundle_recherche';
    }
}