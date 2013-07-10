<?php

/* ferreteriaZambranoBundle:Login:index.html.twig */
class __TwigTemplate_958a31ba4a11d5117309ff84c2e3308e extends Twig_Template
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

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ferreteriaZambrano/css/login.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"cajas_blancas_50\">
            <div class=\"titulo_cajas_blancas_50\" title>Ferreteria Zambrano</div>
            <div class=\"sub_contenido\">
                <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
                    <label for=\"username\">Nick:</label>
                    <br />
                    <input id=\"username\" type=\"text\" name=\"_username\"  value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" onfocus=\"this.setAttribute('maxlength', 30)\"/><br />
                    <label for=\"password\">Contraseña:</label>
                    <br />
                    <input id=\"password\" type=\"password\" name=\"_password\" onfocus=\"this.setAttribute('maxlength', 30)\"/><br /><br />
                    
                    <input type=\"submit\" name=\"login\" value=\"Login\" />
                </form>
                ";
        // line 19
        if ($this->getContext($context, "error")) {
            // line 20
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
                ";
        }
        // line 22
        echo "                
            </div>
            <div class=\"cl_b\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ferreteriaZambranoBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  65 => 20,  63 => 19,  53 => 12,  47 => 9,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
