<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: PerfilController.php
 * @Updated: 2019
 * @Description: Controlador de los perfiles (por definir).
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Perfil;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PerfilController.
 * @Route("perfil")
 */
class PerfilController extends Controller
{
    /**
     * Busca y muestra todos los perfiles.
     *
     * @Route("/", name="perfil_index")
     * @Method("GET")
     * @return Response la vista a renderizar
     */
    public function indexAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $perfils = $em->getRepository('AppBundle:Perfil')->findAll();

        return $this->render('perfil/index.html.twig', array(
            'perfils' => $perfils,
        ));
    }

    /**
     * Busca y muestra un perfil.
     *
     * @Route("/{id}", name="perfil_show")
     * @Method("GET")
     * @param Perfil $perfil el perfil a mostrar
     * @return Response la vista a renderizar
     */
    public function showAction(Perfil $perfil)
    {

        return $this->render('perfil/show.html.twig', array(
            'perfil' => $perfil,
        ));
    }
}
