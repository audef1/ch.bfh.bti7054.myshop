<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('productNumber')
                ->add('productName1')
                ->add('productName2')
                ->add('productNicename')
                ->add('productPrice1')
                ->add('productPrice2')
                ->add('productCategory')
                ->add('productDescription')
                ->add('productDetails')
                ->add('productFeatures')
                ->add('productImages')
                ->add('productOptions')
                ->add('productBrand')
                ->add('hidden')
                ->add('translof')
                ->add('lang')
                ->add('save', SubmitType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

}
