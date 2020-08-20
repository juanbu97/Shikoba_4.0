<?php

/* convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig */
class __TwigTemplate_062c2cc50878a7387bde28ee347672ed84f7cb5f86c27f4128f20ead2c4feed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b8311ac7da06138388f902065a8305d3d1216581bf84834e7e298e3f5affd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8311ac7da06138388f902065a8305d3d1216581bf84834e7e298e3f5affd2a->enter($__internal_3b8311ac7da06138388f902065a8305d3d1216581bf84834e7e298e3f5affd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig"));

        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8311ac7da06138388f902065a8305d3d1216581bf84834e7e298e3f5affd2a->leave($__internal_3b8311ac7da06138388f902065a8305d3d1216581bf84834e7e298e3f5affd2a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c0f6ff571b406ac32764f3df8d21943d8529689c28af4c76673fca262ad866b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0f6ff571b406ac32764f3df8d21943d8529689c28af4c76673fca262ad866b->enter($__internal_4c0f6ff571b406ac32764f3df8d21943d8529689c28af4c76673fca262ad866b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe sanciones alumnado</h3>
        ";
        // line 12
        if ((($context["data"] ?? $this->getContext($context, "data")) == null)) {
            // line 13
            echo "            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sanciones_alumnosgrupos_informe");
            echo "\" method=\"post\">
                            <div class=\"col s4 m4\">
                                <label for=\"fechaI\">Fecha inicial</label>
                                <input id=\"fechaI\" type=\"text\" name=\"fechaI\"
                                       value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["fecha"] ?? $this->getContext($context, "fecha")), (("-" . ($context["modify"] ?? $this->getContext($context, "modify"))) . " month")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? $this->getContext($context, "fecha")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <div class=\"i-checks col s12 left-align\" style=\"margin-top: 8%;padding-left: 0;\">
                                    <div class=\"\" id=\"botonbus\">
                                        <button
                                                class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                                type=\"submit\" value=\"Buscar\" title=\"Buscar\">
                                            <i class=\"material-icons right\">search</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ((($context["data"] ?? $this->getContext($context, "data")) != null)) {
            // line 46
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 3, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 3%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Sanciones</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 59
                echo "                    <tr>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Nombre", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "max(tipo)", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, (($this->getAttribute($context["values"], "Sanciones", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["values"], "Sanciones", array(), "array"), "-")) : ("-")), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </tbody>
            </table>
        ";
        }
        // line 69
        echo "    </div>
";
        
        $__internal_4c0f6ff571b406ac32764f3df8d21943d8529689c28af4c76673fca262ad866b->leave($__internal_4c0f6ff571b406ac32764f3df8d21943d8529689c28af4c76673fca262ad866b_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 69,  143 => 66,  134 => 63,  130 => 62,  126 => 61,  122 => 60,  119 => 59,  115 => 58,  101 => 46,  99 => 45,  96 => 44,  74 => 25,  66 => 20,  59 => 16,  54 => 13,  52 => 12,  48 => 10,  45 => 9,  39 => 8,  32 => 5,  30 => 7,  28 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Vista de informes de sanciones del alumnado.
Creado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% set modify = '1' %}
{% set fecha = \"now\"|date(\"m/d/Y\") %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe sanciones alumnado</h3>
        {% if data == null %}
            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"{{ path('sanciones_alumnosgrupos_informe') }}\" method=\"post\">
                            <div class=\"col s4 m4\">
                                <label for=\"fechaI\">Fecha inicial</label>
                                <input id=\"fechaI\" type=\"text\" name=\"fechaI\"
                                       value=\"{{ fecha|date_modify(\"-\" ~ modify ~ \" month\")|date(\"d/m/Y\") }}\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"{{ fecha|date(\"d/m/Y\") }}\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <div class=\"i-checks col s12 left-align\" style=\"margin-top: 8%;padding-left: 0;\">
                                    <div class=\"\" id=\"botonbus\">
                                        <button
                                                class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                                type=\"submit\" value=\"Buscar\" title=\"Buscar\">
                                            <i class=\"material-icons right\">search</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        {% endif %}

        {% if data != null %}
            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 3, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 3%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Sanciones</th>
                </tr>
                </thead>
                <tbody>
                {% for key, values in data %}
                    <tr>
                        <td>{{ values[\"Grupo\"] }}</td>
                        <td>{{ values[\"Nombre\"] }}</td>
                        <td>{{ values[\"max(tipo)\"] }}</td>
                        <td>{{ values[\"Sanciones\"]|default(\"-\") }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}
", "convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig");
    }
}
