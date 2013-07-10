<?php

/* ferreteriaZambranoBundle:Inicio:index.html.twig */
class __TwigTemplate_1fbba53beafeee9b4638e9b9594114c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ferreteriaZambranoBundle::layout.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ferreteriaZambranoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ferreteriaZambrano/css/inicio.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    
            
            <div class=\"cuadro_bienvenida\">
                <div class=\"informacion\">Bienvenido</div>
                <div class=\"sub_contenido\">
                    <p><b>Gerente:</b> Fernando Zambrano</p>
                    <p><b>Direccion:</b> Cdla. Las Acacias</p>
                    <p><b>Contacto:</b> 5102946</p>
                </div>
            </div>
   
";
    }

    public function getTemplateName()
    {
        return "ferreteriaZambranoBundle:Inicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
