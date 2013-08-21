<?php

namespace ferreteria\ZambranoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('marca')
            ->add('precioCompra')
            ->add('precionVenta')
            ->add('cantidad')    
            ->add('proveedor',null,array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ferreteria\ZambranoBundle\Entity\Articulo'
        ));
    }

    public function getName()
    {
        return 'ferreteria_zambranobundle_articulotype';
    }
}
