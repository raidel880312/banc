<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SettingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('address')
            ->add('phone')
            ->add('fax')
            ->add('email')
            ->add('latitude')
            ->add('longitude')
            ->add('rights')
            ->add('offline')
            ->add('message', 'textarea', array('attr' => array('class' => 'form-control')))
            ->add('image', 'file', array('image_path' => 'webPath', 'data_class' => null));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Setting',
            'csrf_protection' => false
        ));
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'adminbundle_settings';
    }
}
