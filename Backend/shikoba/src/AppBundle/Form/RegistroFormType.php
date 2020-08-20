<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: RegistroFormType.php
 * @Updated: 2019
 * @Description: Formulario para el registro.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class RegistroFormType.
 */
class RegistroFormType extends AbstractType
{
    /**
     * Permite generar el formulario.
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Usuario')
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('roles', ChoiceType::class, array(
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'Alumno' => 'ROLE_USER',
                    'Tutor' => 'ROLE_TUTOR',
                    'TutorD' => 'ROLE_TUTORD',
                    'Profesor' => 'ROLE_PROFESOR',
                    'Jefatura' => 'ROLE_ADMIN',
                    'Convivencia' => 'ROLE_CONVIVENCIA',
                ),
            ));
    }
}
