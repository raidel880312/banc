<?php

namespace TransferBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccountTypeType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('translations', 'a2lix_translations_gedmo', array(
				'translatable_class' => "TransferBundle\\Entity\\AccountType",
				'fields' => array(
					'name' => array(
						'field_type' => 'text',
						'label' => 'Name',
						'locale_options' => array(
							'es' => array(
								'label' => 'Nombre'
							),
							'en' => array(
								'label' => 'Name'
							)

						)
					),
				)
			));
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'TransferBundle\Entity\AccountType'
		));
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'transfer_bundle_accounttype';
	}
}
