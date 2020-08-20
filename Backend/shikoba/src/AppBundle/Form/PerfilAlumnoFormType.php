<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: PerfilAlumnoFormType.php
 * @Updated: 2019
 * @Description: Formulario para el perfil de alumno.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//use AppBundle\Entity\Alumno;

/**
 * Class PerfilAlumnoFormType.
 */
class PerfilAlumnoFormType extends AbstractType
{
    /**
     * Permite generar el formulario.
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Nombre')
            ->add('Apellido1')
            ->add('Apellido2')
            ->add('NIE', IntegerType::class)
            ->add('Telefono', IntegerType::class, array('label' => 'Teléfono'))
            ->add('Email', EmailType::class)
            ->add('Direccion')
            ->add('codigoPostal', TextType::class, array(
                'label' => 'Código Postal',
            ))
        ;
    }

    /**
     * Configura las opciones del resolver.
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Alumno',
        ));
    }
}
