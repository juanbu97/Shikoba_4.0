<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: ProfesoresFormType.php
 * @Updated: 2019
 * @Description: Formulario para los profesores.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/*use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;*/

class ProfesoresFormType extends AbstractType
{
    /**
     * Permite generar el formulario.
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->traitChoices = $options['compound'];
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
        ));
        $builder->add('grupo', EntityType::class, array(
            'label' => 'Curso',
            'placeholder' => '',
            'class' => 'AppBundle:Cursos',
            'choices' => $this->traitChoices[1],
            'choice_label' => function ($curso) {
                return $curso->getGrupoSinTutor();
            },
            'attr' => array('class' => 'chosen-select',
                'data-placeholder' => 'Seleccione curso...',
            ),
            'label_attr' => array('class' => ''),
            'empty_data' => null,
        ));
    }
}
