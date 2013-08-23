<?php

namespace ferreteria\ZambranoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class InicioController extends Controller{
   
    /*******************************************************************				
    *Nombre: indexAction								
    *Funcionalidad: 
    * Metodo que carga el cuadro para hacer login. 
    *--------------------------------------------------------------------------------------------------
    *Autor:  Carlos Cerezo							
    *											
    *************************************************************************/

    public function indexAction(){
       return $this->render('ferreteriaZambranoBundle:Inicio:index.html.twig');
    }
}
?>