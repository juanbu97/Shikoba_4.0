<?php

/* :convivencia:exportPartes.html.twig */
class __TwigTemplate_08caf9b9348c84e1f82b47e49450ecdcf52d66847a6cf3b8837e4c5a5439f81a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":convivencia:exportPartes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"w3-col s10 w3-display-middle\">
        <h1 class=\"w3-center\">Exportar partes</h1>

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "exportar"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            echo "            <div class=\"w3-panel w3-pale-green w3-round-large\">
                <p class=\"w3-center\">";
            // line 9
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "exportarError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "            <div class=\"w3-panel w3-pale-red w3-round-large\">
                <p class=\"w3-center\">";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        <div class=\"w3-row w3-center\">
            <div class=\"contenedorCartaAlumno\">
                <form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_export_partes");
        echo "\" method=\"post\" class=\"formExport w3-content \">
                    <label class=\"w3-text-teal marginTop\">Rango fechas</label>
                    <input type=\"text\" name=\"fecha\" class=\"daterange w3-select w3-border w3-light-grey\" required>
                    <label class=\"w3-text-teal marginTop\">Alumno</label>
                    <select name=\"alumnos\" class=\"w3-select w3-border w3-light-grey chosen-select\" required>
                        <option value=\"Todos\">Todos</option>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alumnos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "getNombreCompletoYCurso", array(), "method"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>
                    <label class=\"w3-text-teal marginTop\">Curso</label>
                    <select name=\"cursos\" class=\"w3-select w3-border w3-light-grey chosen-select\" required>
                        <option value=\"Todos\">Todos</option>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cursoElegido"]) {
            // line 35
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cursoElegido"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cursoElegido"], "getGrupo", array(), "method"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cursoElegido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </select>
                    <label class=\"w3-text-teal marginTop\">Profesores</label>
                    <select name=\"profesores\" class=\"w3-select w3-border w3-light-grey chosen-select\" required>
                        <option value=\"Todos\">Todos</option>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profesores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 42
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </select>
                    <input class=\"w3-button w3-text-white\" type=\"submit\" name=\"exportar\" value=\"Exportar\">
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia:exportPartes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  131 => 42,  127 => 41,  121 => 37,  110 => 35,  106 => 34,  100 => 30,  89 => 28,  85 => 27,  76 => 21,  71 => 18,  62 => 15,  59 => 14,  55 => 13,  52 => 12,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia:exportPartes.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/exportPartes.html.twig");
    }
}
