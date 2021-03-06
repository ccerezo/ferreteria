<?php

namespace ferreteria\ZambranoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProveedorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('telefono')
            ->add('direccion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ferreteria\ZambranoBundle\Entity\Proveedor'
        ));
    }

    public function getName()
    {
        return 'ferreteria_zambranobundle_proveedortype';
    }
}
