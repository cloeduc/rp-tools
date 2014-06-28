<?php

namespace CDuc\CharracterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PersonnagePlayerType extends AbstractType
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
            ->add('background', 'textarea')
            ->add('description', 'textarea')
            ->add('publicStory', 'textarea');
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
        return 'personnage_type_player';
    }
}
