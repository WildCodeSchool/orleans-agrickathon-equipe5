<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntrepriseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('identification')
            ->add('apport')
            ->add('rse')
            ->add('tags1', EntityType::class, array(
                    'class' => 'FrontBundle:Tag1',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add('tags2', EntityType::class, array(
                    'class' => 'FrontBundle:Tag2',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add('tags3', EntityType::class, array(
                    'class' => 'FrontBundle:Tag3',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add('tags4', EntityType::class, array(
                    'class' => 'FrontBundle:Tag4',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontBundle\Entity\Entreprise'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'frontbundle_entreprise';
    }

}
