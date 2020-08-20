<?php

namespace AppBundle\Form;

use AppBundle\Entity\Eventos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Repository\EventosRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class Noticias_eventosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->choices = $options['compound'];
        $builder
            ->add(
                'idEvento',
                EntityType::class,
                array(
                    'label' => 'Evento',
                    'class' => 'AppBundle:Eventos',
                    'placeholder' => '',
                    'choices' => $this->choices[0],
                    'choice_label' => function ($evento) {
                        return $evento->getDescripcion();
                    },
                    'attr' => array(
                        'class' => 'chosen-select',
                        'data-placeholder' => 'Seleccione el evento...',
                        'required' => 'true',
                    ),
                    'label_attr' => array('class' => ''),
                    'empty_data' => null,
                )
            );
            /* ->add('idEventos', ChoiceType::class, [
                'choices_value' => function (?Eventos $evento) {
                    return $evento ? $evento->getId(): '';
                }
            ]); */



        /* add('idEventos', ChoiceType::class, [
            'choices' => [
                

                'Dia de la madre' => 1,
                'Media' => 2,
                'Alta' => 3
            ],
            'attr' => [
                'class' => 'browser-default'
            ],
            
        ]); */
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Noticias_eventos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_noticias_eventos';
    }
}
