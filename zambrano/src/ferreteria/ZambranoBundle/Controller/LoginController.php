<?php

namespace ferreteria\ZambranoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Login controller.
 *
 * @Route("/login")
 */
class LoginController extends Controller{
   
    /*******************************************************************				
    *Nombre: indexAction								
    *Funcionalidad: 
    * Metodo que carga el cuadro para hacer login. 
    *--------------------------------------------------------------------------------------------------
    *Autor:  Carlos Cerezo							
    *											
    *************************************************************************/
    /**
     * @Route("/", name="login")
     * @Template()
     */
    public function indexAction(){
        // Obtiene la peticion actual
        $request = $this->getRequest();
        // Obtiene la sesion actual
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        $ses_user = $session->get('ses_user');
        
        return array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
            'usu' => $ses_user,
        );
    }
}
?>