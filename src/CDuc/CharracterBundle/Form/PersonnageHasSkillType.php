<?php

namespace CDuc\CharracterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonnageHasSkillType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('skill')
        ->add('value')
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CDuc\CharracterBundle\Entity\PersonnageHasSkill'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'personnage_has_skill_type';
    }
}
