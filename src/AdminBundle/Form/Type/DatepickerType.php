<?php

namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DatepickerType extends AbstractType
{
    
  public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
       $resolver->setDefaults(array(
            'attr' => array('class'=>'date-picker'),         
        ));
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'datepicker';
    }
}