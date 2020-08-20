<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: AlumnoFormType.php
 * @Updated: 2019
 * @Description: Formulario para el alumno.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class AlumnoType.
 */
class AlumnoType extends AbstractType
{
    /**
     * Permite generar el formulario.
     *
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
        add('nombre')->
        add('apellido1')->
        add('apellido2')->
        add('nie')->
        add('telefono')->
        add('email')->
        add('direccion')->
        add('codigoPostal')->
        add('puntos', TextType::class, array(
            'attr' => array(
                'readonly' => true,
            ),
        ))
            ->add('puntosIniciales', TextType::class, array(
                'attr' => array(
                    'readonly' => true,
                ),
            ))
            ->add('tutorL1', TextType::class, array('required' => false))
            ->add('tutorL2', TextType::class, array('required' => false))
            ->add('telefonoTL1', TextType::class, array('required' => false))
            ->add('telefonoTL2', TextType::class, array('required' => false))
            ->add('msgTL1', CheckboxType::class, array('label' => 'Enviar SMS tutor legal 1', 'required' => false))
            ->add('msgTL2', CheckboxType::class, array('label' => 'Enviar SMS tutor legal 2', 'required' => false));
        //  ->add('foto') ya existe una vista especifica para la foto
    }

    /**
     * Configura las opciones del resolver.
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Alumno',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_alumno';
    }
}
