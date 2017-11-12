<?php

namespace TransferBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccountType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('balance')
			->add('accounttype', 'select2',
				array('class' => 'TransferBundle\Entity\AccountType',
					'label' => 'Account type'))
            ->add('user', 'select2',
              array('class' => 'AdminBundle\Entity\User',
                'label' => 'User'));
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'TransferBundle\Entity\Account'
		));
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'transfer_bundle_account';
	}
}
