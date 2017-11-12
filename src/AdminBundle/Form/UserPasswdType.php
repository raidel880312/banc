<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserPasswdType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('password', 'repeated', array(
            'type' => 'password',
            'first_name' => 'password',
            'second_name' => 'confirm'
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\User'
        ));
    }

    public function getName() {
        return 'adminbundle_userpasstype';
    }

}
