<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: ImportFormType.php
 * @Updated: 2019
 * @Description: Formulario para la importación de los csv.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Form;

use AppBundle\Entity\Conductas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ImportFormType.
 */
class ImportFormType extends AbstractType
{
    /**
     * Permite generar el formulario.
     * @param FormBuilderInterface $builder
     * @param $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('importar', FileType::class, array(
            'label' => 'Fichero csv ',
            'attr' => array('class' => 'file-field input-field'),
            'label_attr' => array('class' => ''),
        ));
    }

    /**
     * Configura las opciones del resolver.
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Conductas::class,
        ));
    }
}
