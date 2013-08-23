<?php

/* ferreteriaZambranoBundle::layout.html.twig */
class __TwigTemplate_0589b0db44ca329d5a255491033dce46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ferreteriaZambrano/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ferreteriaZambrano/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div id=\"cabecera_color\">
            <p class=\"titulo\">Ferreteria Zambrano</p>
            <div class=\"logo\" onclick=\"window.location.href ='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inicio"), "html", null, true);
        echo "' \"></div>
            ";
        // line 16
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COLABORADOR"))) {
            // line 17
            echo "                <div class=\"logout\">
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Logout</a>
                </div>
                ";
        } else {
            // line 21
            echo "                <div class=\"login1\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\">Login!</a>
                </div>
                
            ";
        }
        // line 26
        echo "            
        </div>
        
        <div class=\"ubicacion_menu\">
            ";
        // line 30
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COLABORADOR"))) {
            // line 31
            echo "        <ul id=\"menu-bar\">
                    <li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo"), "html", null, true);
            echo "\">Artículo</a>
                    </li>
                    
                    <li><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proveedor"), "html", null, true);
            echo "\">Proveedor</a>
                    </li>
                    
                    <li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ventas"), "html", null, true);
            echo "\">Ventas</a>

                    </li>
                    
                    <li><a href=\"#\">Inventario</a>
                    </li>
                    
                    <li><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
            echo "\">Usuario</a>

                    </li>
            </ul>
            ";
        }
        // line 50
        echo "        </div>
        <div id=\"contenedor_fondo\">    
            <div class=\"contenedor\">
                 
            
                    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "                  
            </div>
        </div>
        <div id=\"footer_color\">
                 <footer>
                    <p>Ferretería Zambrano - Software Engineering</p>
                    <p>Carlos Cerezo | Diana Panchana | Adriana Rodriguez | Erick Buendia </p>
                    <p>Developers</p>
                 </footer>
        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Ferreteria Zambrano";
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
    }

    // line 10
    public function block_js($context, array $blocks = array())
    {
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        echo "                     
                    ";
    }

    public function getTemplateName()
    {
        return "ferreteriaZambranoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 55,  154 => 10,  149 => 9,  143 => 6,  127 => 57,  125 => 55,  118 => 50,  110 => 45,  100 => 38,  94 => 35,  88 => 32,  85 => 31,  83 => 30,  77 => 26,  70 => 22,  67 => 21,  61 => 18,  58 => 17,  56 => 16,  52 => 15,  46 => 11,  43 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  23 => 2,);
    }
}
