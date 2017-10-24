<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ecommerce\EcommerceBundle\Form\MediaType;
use Ecommerce\EcommerceBundle\Entity\Media;

class SubCategoriesType extends AbstractType{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('nom')
            ->add('specificite')
            ->add('image',new MediaType(), array(
                'data_class' => Media::class,
            ))
            ->add('categorie')
        ;
    }
    
    /**
     * @param OptionsResolver$resolver
     */
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\SubCategories'
        ));
    }

    /**
     * @return string
     */
    public function getName(){
        return 'ecommerce_ecommercebundle_subcategories';
    }
}
