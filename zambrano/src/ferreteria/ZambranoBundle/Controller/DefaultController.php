<?php

namespace ferreteria\ZambranoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ferreteriaZambranoBundle:Default:index.html.twig');
    }
}
