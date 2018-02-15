<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParametersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('applicationNale')->add('logo')->add('adress')->add('adress2')->add('phoneNumber')->add('fax')->add('emailRequest')->add('ponderationNote')->add('ponderationNoteMembers')->add('numberOfScreens')->add('sizeMaxUpload')->add('numberMaxTags')->add('type')->add('category')->add('numberOfStaff')->add('revenue')->add('websiteType')->add('target')->add('graphicalStyle')->add('behavior')->add('countries')->add('languages')->add('mainColors')->add('cms')->add('frameworks')->add('devLanguage')->add('techFront')->add('missions')->add('evaluations')->add('professions')->add('socialNetworks')->add('blogCategories');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Parameters'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backbundle_parameters';
    }


}
