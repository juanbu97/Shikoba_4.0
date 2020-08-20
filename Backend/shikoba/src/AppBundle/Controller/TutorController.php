<?php

/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: TutorController.php
 * @Updated: 2019
 * @Description: Controlador de los tutores (por definir).
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Services\AlumnoHelper;

/*use AppBundle\Entity\Alumno;
use AppBundle\Form\PerfilAlumnoFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Services\ImportHelper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;*/

/**
 * Class TutorController.
 */
class TutorController extends Controller
{
    /**
     * Muestra los tutores por alumno.
     * @Route("/tutor", name="tutor")
     * @return Response la vista a renderizar
     */
    public function tutorAction()
    {
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        if (!in_array('ROLE_TUTOR', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('index');
        }

//        if (!$alumnoHelper->alumnoExists($this->getUser()))
//            return $this->redirectToRoute('registrarAlumno');

        $tutor = $alumnoHelper->getTutorByUsuario($this->getUser());
        $alumnos = $alumnoHelper->getAlumnosByTutor($tutor);
        return $this->render('convivencia/tutor/alumnoTutor.html.twig', array(
            'alumnos' => $alumnos,
        ));
    }
}
