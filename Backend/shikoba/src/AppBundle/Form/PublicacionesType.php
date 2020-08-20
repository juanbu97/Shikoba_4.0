<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Publicaciones;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PublicacionesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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

            ->add('fechaFinal', DateType::class, [
                'attr' => [
                    'class' => ''
                ],
                'widget' => 'single_text',
            ])
            ->add('prioridad', ChoiceType::class, [
                'choices' => [

                    'Baja' => 1,
                    'Media' => 2,
                    'Alta' => 3
                ],
                'attr' => [
                    'class' => 'browser-default'
                ],
                
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Publicaciones'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_publicaciones';
    }
}
