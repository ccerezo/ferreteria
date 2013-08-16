<?php

namespace ferreteria\ZambranoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VentasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('fecha')
            ->add('subtotal')
            ->add('total')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ferreteria\ZambranoBundle\Entity\Ventas'
        ));
    }

    public function getName()
    {
        return 'ferreteria_zambranobundle_ventastype';
    }
}
