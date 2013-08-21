<?php

/* ferreteriaZambranoBundle:Articulo:index.html.twig */
class __TwigTemplate_010fa67562e4ba275f5f094a7be64a57 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ferreteriaZambrano/css/tablas_indice.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    
    <h1>Lista de Articulos</h1>

    <table class=\"records_list tabla\">
        <thead>
            <tr class=\"tbHeader1\">
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Preciocompra</th>
                <th>Precionventa</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr class=\"tbSubHeader1\"> 
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "marca"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "precioCompra"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "precionVenta"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cantidad"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "proveedor"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <!--<li>
                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>-->
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articulo_new"), "html", null, true);
        echo "\" class=\"agregar\">
                Crear Artículo
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "ferreteriaZambranoBundle:Articulo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  124 => 47,  112 => 41,  106 => 38,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  75 => 28,  69 => 27,  66 => 26,  62 => 25,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
