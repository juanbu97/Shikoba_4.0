<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: UsuarioFormType.php
 * @Updated: 2019
 * @Description: Formulario para los usuarios.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//use AppBundle\Entity\Usuarios;
//use Symfony\Bridge\Doctrine\Form\Type\EntityType;

/**
 * Class UsuarioFormType.
 */
class UsuarioFormType extends AbstractType
{
    /**
     * Construye el formulario.
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'plainPassword',
                RepeatedType::class,
                array(
                    'type' => PasswordType::class,
                    'first_options' => array('label' => 'Contraseña',
                        'attr' => array(),
                        'label_attr' => array('class' => ''),
                    ),
                    'second_options' => array('label' => 'Repite Contraseña',
                        'attr' => array(),
                        'label_attr' => array('class' => ''),
                    ),
                )
            );
    }

    /**
     * Configura el resolverpor defecto.
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuarios',
        ));
    }
}
