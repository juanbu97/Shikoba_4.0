<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: NoticiasFormType.php
 * @Updated: 2019
 * @Description: Formulario para las noticias.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use AppBundle\Entity\NoticiasV2;
use Exception;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class NoticiasType.
 */
class NoticiasType extends AbstractType
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
    }

    /**
     * Configura las opciones del resolver.
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => NoticiasV2::class,
        ));
    }
}
