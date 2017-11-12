<?php

namespace TransferBundle\Form;

use AdminBundle\Entity\User;
use TransferBundle\Repository\AccountRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class TransferType
 * @package TransferBundle\Form
 *
 */
class TransferType extends AbstractType {
  
  /**
   * @var object
   */
  private $user;
  
  public function __construct(User $user=NULL) {
    $this->user = $user;
  }
  
  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $user = $this->getUser();
    $builder
      ->add(
        'origin_account',
        'select2',
        array(
          'class' => 'TransferBundle\Entity\Account',
          'attr' => array('label' => 'Origin account'),
          'query_builder' => function(EntityRepository $er) use ($user) {
                return $er->createQueryBuilder('u')
                          ->where('u.user = :user')
                          ->setParameter('user', $user);
            }
        )
      )
      ->add(
        'destiny_account',
        'select2',
        array(
          'class' => 'TransferBundle\Entity\Account',
          'attr' => array('label' => 'Destiny account'),
          'query_builder' => function(EntityRepository $er) use ($user) {
            return $er->createQueryBuilder('u')
              ->where('u.user = :user')
              ->setParameter('user', $user);
          }
        )
      )
      ->add(
        'amount',
        'text',
        array('label' => 'Amount', 'attr' => array('placeholder' => '0.00'))
      )
      ->add(
        'description',
        'textarea',
        array(
          'label' => 'Description',
          'attr' => array('class' => 'form-control')
        )
      );
  }
  
  /**
   * @param OptionsResolverInterface $resolver
   */
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    $resolver->setDefaults(
      array(
        'data_class' => 'TransferBundle\Entity\Transfer'
      )
    );
  }
  
  /**
   * @return string
   */
  public function getName() {
    return 'transfer_bundle_transfer';
  }
  
  /**
   * @return object
   */
  public function getUser() {
    return $this->user;
  }
  
  /**
   * @param object $user
   */
  public function setUser($user) {
    $this->user = $user;
  }
  
}
