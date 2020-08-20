<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: FileExtension.php
 * @Updated: 2019
 * @Description: Clase para la gestión de las extensiones twig.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Twig\Extension;

use Twig_SimpleFunction;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class FileExtension.
 */
class FileExtension
{
    /**
     * Devuelve las funciones registradas como extensiones twig.
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'file_exists' => new Twig_SimpleFunction('file_exists', 'file_exists'), // New class
        );
    }

    /**
     * Permite obtener el nombre de la función.
     * @return string
     */
    public function getName()
    {
        return 'twig_extension';
    }

    /**
     * Funcion que devuelve true o false
     *
     * @return boolean
     */
    public function isPublished($id)
    {
        $em = $this->doctrine->getManager();

        $banderaPubl = false;
        $query = $em->createQuery(
            'SELECT publicaciones
             FROM AppBundle\Entity\Publicaciones publicaciones
             where publicaciones.idNoticia = :id'
        );
        $query->setParameter(':id', $id);

        if (sizeof($query->getResult())>0) {
            $banderaPubl = true;
        }

        return $banderaPubl;
    }

    
}
