<?php

namespace CDuc\CharracterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonnageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('nickname')
            ->add('background')
            ->add('description')
            ->add('publicStory')
            ->add('isCompleted')
            ->add('joueur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CDuc\CharracterBundle\Entity\Personnage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cduc_charracterbundle_personnage';
    }
}
