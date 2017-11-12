<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserEditType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
            ->add('file', 'file', array('image_path' => 'webPath'))
            ->add('name', 'text', array('label' => 'Name'))
            ->add('email', 'email', array('label' => 'E-mail', 'attr' => array('placeholder' => 'user@email.com')))
            ->add('password', 'password', array('label' => 'Password'))
            ->add('gender', 'select2', array('class' => 'AdminBundle\Entity\Gender', 'attr' => array('label' => 'Gender')))
            ->add('roles', 'select2', array('class' => 'AdminBundle\Entity\Role', 'multiple' => true, 'attr' => array('label' => 'Roles', 'class' => 'form-control')))
            ->add('phones', 'text', array('label' => 'Phones', 'attr' => array('placeholder' => '7 123-4567 , 53 123-4567')))
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\User',
            'csrf_protection' => false
        ));
    }

    public function getName() {
        return 'adminbundle_useredittype';
    }

}
