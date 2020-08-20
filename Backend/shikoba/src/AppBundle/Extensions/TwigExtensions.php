<?php
// Note that the namespace must match with
// your project !
namespace AppBundle\Extensions;

use Symfony\Bridge\Doctrine\RegistryInterface;

class TwigExtensions extends \Twig_Extension
{
    public function getFunctions()
    {

        return array(
            new \Twig_SimpleFunction('isPublished', array($this, 'isPublished')),
            new \Twig_SimpleFunction('idPublicacion', array($this, 'idPublicacion')),
            new \Twig_SimpleFunction('eventoNoticia', array($this, 'eventoNoticia')),


        );
    }

    protected $doctrine;
    // Retrieve doctrine from the constructor
    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function find($id)
    {
        $em = $this->doctrine->getManager();
        $myRepo = $em->getRepository('AppBundle:Eventos');
        ///

        return $myRepo->find($id);
    }

    public function getName()
    {
        return 'Twig myCustomName Extensions';
    }

    /**
     * Funcion que devuelve true o false
     *
     * @return boolean
     */
    public function isPublished($id)
    {
        $em = $this->doctrine->getEntityManager();


        $banderaPubl = false;
        $query = $em->createQuery(
            'SELECT publicaciones
             FROM AppBundle\Entity\Publicaciones publicaciones
             where publicaciones.idNoticia = :id'
        );
        $query->setParameter(':id', $id);

        if (sizeof($query->getResult()) > 0) {
            $banderaPubl = true;
        }

        return $banderaPubl;
    }

    /**
     * Funcion que id de la publicacion
     *
     * 
     */
    public function idPublicacion($id_noticia)
    {
        $em = $this->doctrine->getEntityManager();

        $query = $em->createQuery(
            'SELECT publicaciones.id
             FROM AppBundle\Entity\Publicaciones publicaciones
             where publicaciones.idNoticia = :id_noticia'
        );
        $query->setParameter(':id_noticia', $id_noticia);

        return $query->getResult()[0]['id'];
    }


    /**
     * Función que devuelve el evento asociado a una noticia
     * 
     */
    public function eventoNoticia($idNoticia)
    {
        $em = $this->doctrine->getEntityManager();

        $query = $em->createQuery(
            'SELECT n.idEvento
            FROM AppBundle\Entity\Noticias_eventos n
            where n.idNoticia = :idNoticia'
        );
        $query->setParameter(':idNoticia', $idNoticia);

        $idEventos = $query->getResult();
        
        $arrayDeId= array();

        foreach ($idEventos as $value) {
            array_push($arrayDeId, $value['idEvento']);
        }


        $query2 = $em->createQuery(
            'SELECT e.descripcion, e.id
                FROM AppBundle\Entity\Eventos e
                where e.id in (:arrayDeId)
            '
        );

        $query2->setParameter('arrayDeId', $arrayDeId);
        $arrayEventos = $query2->getResult();

        return $arrayEventos;




        /* $query2 = $em->createQuery(
            'SELECT e.descripcion
                FROM AppBundle\Entity\Eventos e
                where e.id = :idEventos                
            '
        );
        $query2->setParameter('idEventos', $idEventos);


        return $query2->getResult(); */
    }
}
/* $query = $em->createQuery(
    'SELECT publicaciones
     FROM AppBundle\Entity\Publicaciones publicaciones
     where publicaciones.idNoticia = :id'
); */