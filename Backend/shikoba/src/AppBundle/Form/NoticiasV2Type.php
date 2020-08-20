<?php

namespace AppBundle\Form;

use AppBundle\Entity\NoticiasV2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NoticiasV2Type extends AbstractType
{

    

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('titulo', TextType::class, [
            'attr' => [
                'class' => 'validate',
                'id' => 'titulo',
                'type' => 'text'
            ],
            'label' => 'Titulo'
        ])
            ->add('descripcion', TextType::class, [
                'attr' => [
                    'class' => 'validate',
                    'type' => 'text',
                    'id' => 'descripcion'
                ],

                'label' => 'Breve descripción'

            ])
            
            ->add('tagParametrizacionValores', TextType::class, [
                'attr' => [
                    'class' => 'validate',
                    'type' => 'text',
                    'id' => 'tagvalores'
                ],

                'label' => 'Tag Valores'

            ])

            ->add('tagParametrizacionCursos', TextType::class, [
                'attr' => [
                    'class' => 'validate',
                    'type' => 'text',
                    'id' => 'tagcursos'
                ],

                'label' => 'Tag Cursos'

            ])
            ->add('tagParametrizacionCategorias', TextType::class, [
                'attr' => [
                    'class' => 'validate',
                    'type' => 'text',
                    'id' => 'tagcategorias'
                ],

                'label' => 'Tag Categorias'

            ])
            ->add('tagParametrizacionPuntos', TextType::class, [
                'attr' => [
                    'class' => 'validate',
                    'type' => 'text',
                    'id' => 'tagpuntos'
                ],

                'label' => 'Tag Puntos'

            ])
            ->add('tagParametrizacionGrupos', TextType::class, [
                'attr' => [
                    'class' => 'validate',
                    'type' => 'text',
                    'id' => 'tagPuntos'
                ],
                'label' => 'Tag Grupos'
            ])
            ->add('codigoEmbebido', TextareaType::class, [
                'attr' => [
                    'type' => 'text',
                    'id' => 'editor1'
                ],

                'label' => 'Codigo Embebido'
            ]);
        }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\NoticiasV2'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_noticiasv2';
    }
}
