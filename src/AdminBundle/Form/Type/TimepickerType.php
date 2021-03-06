<?php
namespace AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TimepickerType extends AbstractType
{
    
  public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
       $resolver->setDefaults(array(
            'attr' => array('class'=>'clockface'),         
        ));
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'timepicker';
    }
}