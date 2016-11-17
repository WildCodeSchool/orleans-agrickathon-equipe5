<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class StartupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('contact')
            ->add('technologie')
            ->add('rse')
            ->add('gain')
            ->add('tags5', EntityType::class, array(
                    'class' => 'FrontBundle:Tag1',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add('tags6', EntityType::class, array(
                    'class' => 'FrontBundle:Tag2',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add('tags7', EntityType::class, array(
                    'class' => 'FrontBundle:Tag3',
                    'choice_label' => 'tag',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                )
            )
            ->add('tags8', EntityType::class, array(
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
            'data_class' => 'FrontBundle\Entity\Startup'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'frontbundle_startup';
    }


}
