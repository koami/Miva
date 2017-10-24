<?php

namespace Ecommerce\EcommerceBundle\Form;

use Ecommerce\EcommerceBundle\Entity\Descriptions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ecommerce\EcommerceBundle\Form\MediaType;
use Ecommerce\EcommerceBundle\Entity\Media;

class ProduitsType extends AbstractType{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('nom')
            ->add('prix', 'integer', array(
                'attr' =>array(
                    'min' => '0',
            )))
            ->add('quantite', 'integer', array(
                'attr' => array(
                    'min' => '0',
                    'max' => '1000',
            )))
            ->add('reduction', 'integer', array(
                'attr' => array(
                    'min' => '0',
                    'max' => '100',
                    'require' => false,
            )))
            ->add('image', new MediaType(), array(
                'data_class' => Media::class,
            ))
            ->add('partenaire')
            ->add('garantie')
            ->add('subCategorie')
            ->add('descriptions', 'collection', array(
                'type' => new DescriptionsType(),
                'options' => array('data_class' => Descriptions::class),
                'allow_add' => true,
                'allow_delete' => true,
                'label' => 'Description',
                'by_reference' => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\Produits'
        ));
    }

    /**
     * @return string
     */
    public function getName(){
        return 'ecommerce_ecommercebundle_produits';
    }
}
