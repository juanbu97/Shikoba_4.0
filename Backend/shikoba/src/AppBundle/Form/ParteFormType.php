<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: ParteFormType.php
 * @Updated: 2019
 * @Description: Formulario para el parte.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Exception;

/*use AppBundle\Entity\Partes;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;*/

/**
 * Class ParteFormType.
 */
class ParteFormType extends AbstractType
{
    /**
     * Permite generar el formulario.
     * @param FormBuilderInterface $builder
     * @param $options
     * @throws Exception
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->traitChoices = $options['compound'];
        $builder
            ->add(
                'idAlumno',
                EntityType::class,
                array(
                    'label' => 'Alumno/a',
                    'class' => 'AppBundle:Alumno',
                    'placeholder' => '',
                    'choices' => $this->traitChoices[0],
                    'choice_label' => function ($alumno) {
                        return $alumno->getNombreCompletoYCurso();
                    },
                    'attr' => array(
                        'class' => 'chosen-select',
                        'data-placeholder' => 'Seleccione alumnado...',
                        'required' => 'true',
                    ),
                    'label_attr' => array('class' => ''),
                    'empty_data' => null,
                )
            );
        $builder->add('idProfesor', EntityType::class, array(
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
//            ->add('Fecha', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add(
                'idConducta',
                EntityType::class,
                array(
                    'label' => 'Conducta',
                    'class' => 'AppBundle:Conductas',
                    'choice_label' => function ($conducta) {
                        return $conducta->getNombreAndPuntos();
                    },
                    'group_by' => 'tipo',
                    'attr' => array('class' => ' selectForm'),
                    'label_attr' => array('class' => ''),
                    'expanded' => true,
                    'multiple' => true,
                )
            )
            ->add(
                'Descripcion',
                TextareaType::class,
                array(
                    'label' => 'Descripción',
                    'attr' => array('class' => 'materialize-textarea minTextArea'),
                    'label_attr' => array('class' => ''),
                    'required' => true,
                )
            )
            ->add('Tareas', TextareaType::class, array(
                'label' => 'Tareas',
                'required' => false,
                'attr' => array('class' => 'materialize-textarea minTextArea'),
                'label_attr' => array('class' => ''),
            ))
            /*->add('HoraSalidaAula', TimeType::class, array(
                'label' => 'Hora Salida Aula',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('HoraLlegadaJefatura', TimeType::class, array(
                'label' => 'Hora Llegada Jefatura',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))*/
            /* ->add('Formato', ChoiceType::class, array(
                 'choices' => array(
                     'Papel' => 'Papel',
                     'Digital' => 'Digital'
                 ),
                 'attr' => array('class' => 'input-field'),
                 'label_attr' => array('class' => '')
             ))*/

            ->add('fechaConfirmacion', TextType::class, array(
                'required' => false,
                'attr' => array('class' => 'datepicker'),
                'label' => 'Fecha confirmación',
                'label_attr' => array('class' => ''),
            ))
            ->add('fechaComunicacion', TextType::class, array(
                'required' => false,
                'attr' => array('class' => 'datepicker '),
                'label' => 'Fecha comunicación',
                'empty_data' => new \DateTime('now'),
                'label_attr' => array('class' => ''),
            ))
//            ->add('Puntos', IntegerType::class, array(
//                'required' =>false,
//                'empty_data' => 0,
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
//            ->add('idEstado', EntityType::class, array(
//                'class' => 'AppBundle:EstadosParte',
//                'choice_label' => 'estado',
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('idTipo', EntityType::class, array(
                'class' => 'AppBundle:TipoParte',
                'choice_label' => 'tipo',
                'attr' => array('class' => 'input-field'),
                'label_attr' => array('class' => ''),
            ))
            ->add('Observacion', TextareaType::class, array(
                'required' => false,
                'empty_data' => '',
                'label' => 'Observación',
                'attr' => array('class' => 'materialize-textarea minTextArea'),
                'label_attr' => array('class' => ''),
            ));
    }

    /**
     * Configura las opciones del resolver.
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Partes',
        ));
    }
}
