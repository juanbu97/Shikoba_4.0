<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('descripcion', TextType::class, [
            'attr' => [
                'class' => 'validate',
                'id' => 'descripcion',
                'type' => 'text'
            ],
            'label' => 'Título'
        ])
        ->add('fechaInicio', DateType::class, [
            'attr' => [
                'class' => '',
                'placeholder' => 'Selecione una fecha de incio',
                'type' => 'text'
            ],
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'input' => 'datetime'
        ])
        ->add('fechaFinal' , DateType::class , [
            'attr' => [
                'class' => '',
                'placeholder' => 'Selecione una fecha final',
                'type' => 'text'
            ],
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'input' => 'datetime'
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Eventos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_eventos';
    }


}
