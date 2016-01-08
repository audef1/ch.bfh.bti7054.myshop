<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('customerTitle')
            ->add('customerFirstname')
            ->add('customerLastname')
            ->add('customerLogin')
            ->add('customerPassword')
            ->add('customerEmail')
            ->add('customerPhone')
            ->add('customerAddress')
            ->add('customerZip')
            ->add('customerLocation')
            ->add('customerLastname')
            ->add('customerTitle2')
            ->add('customerFirstname2')
            ->add('customerLastname2')
            ->add('customerAddress2')
            ->add('customerZip2')
            ->add('customerLocation2')
            ->add('customerBillingaddress')
            ->add('save', SubmitType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Customer'
        ));
    }
}
