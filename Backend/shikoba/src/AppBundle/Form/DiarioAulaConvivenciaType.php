<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: DiarioAulaConvivenciaFormType.php
 * @Updated: 2019
 * @Description: Formulario para el diario del aula de convivencia.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class DiarioAulaConvivenciaType.
 */
class DiarioAulaConvivenciaType extends AbstractType
{
    /**
     * Permite generar el formulario.
     *
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->traitChoices = $options['compound'];
        $builder
            ->add('idProfesor', EntityType::class, array(
                'label' => 'Profesor/a',
                'placeholder' => '',
                'class' => 'AppBundle:Profesores',
                'choices' => $this->traitChoices[1],
                'choice_label' => function ($profesor) {
                    return $profesor->getNombreCompleto();
                },
                'attr' => array('class' => 'chosen-select',
                    'data-placeholder' => 'Seleccione profesorado...',
                ),
                'label_attr' => array('class' => ''),
                'empty_data' => null,
            ))
            ->add(
                'asiste',
                ChoiceType::class,
                array(
                    'choices' => array(
                        'Pendiente' => '0',
                        'Ha asistido' => '1',
                    ),
                    'attr' => array('class' => 'chosen-select',
                        'data-placeholder' => 'Seleccione asistencia...',
                    ),
                    'label_attr' => array('class' => ''),
                    'empty_data' => null,
                )
            )
            ->add(
                'actitud',
                ChoiceType::class,
                array(
                    'choices' => array(
                        'Actitud sin evaluar' => null,
                        'Positiva - A' => 'A',
                        'Normal - B' => 'B',
                        'Negativa - C' => 'C',
                    ),
                    'attr' => array(
                        'class' => '', 'data-placeholder' => 'Seleccione actitud...',
                    ),
                    'empty_data' => null,
                )
            )
            ->add(
                'trabajo',
                ChoiceType::class,
                array(
                    'choices' => array(
                        'Trabajo sin evaluar' => null,
                        'Positivo - A' => 'A',
                        'Normal - B' => 'B',
                        'Negativo - C' => 'C',
                    ),
                    'attr' => array(
                        'class' => 'chosen-select', 'data-placeholder' => 'Seleccione trabajo...',
                    ),
                    'empty_data' => null,
                )
            )
            ->add(
                'observaciones',
                TextType::class,
                array(
                    'required' => false,
                    'empty_data' => '',
                    'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                    'label_attr' => array('class' => 'grey-text'),
                )
            );
    }

    /**
     * Configura las opciones del resolver.
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DiarioAulaConvivencia',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_diarioaulaconvivencia';
    }
}
