<?php

/* convivencia/informes/partesAlumnoInforme.html.twig */
class __TwigTemplate_85e9e58f226ece66c0b946d354842ee8cd1531ddd51e7d78be51334cecfdfc1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/informes/partesAlumnoInforme.html.twig", 5);
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
        $__internal_ccd6051011732a3a22ebf01913cad794f68b8adc6e04e56b57fc72fa598a2bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd6051011732a3a22ebf01913cad794f68b8adc6e04e56b57fc72fa598a2bd9->enter($__internal_ccd6051011732a3a22ebf01913cad794f68b8adc6e04e56b57fc72fa598a2bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesAlumnoInforme.html.twig"));

        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd6051011732a3a22ebf01913cad794f68b8adc6e04e56b57fc72fa598a2bd9->leave($__internal_ccd6051011732a3a22ebf01913cad794f68b8adc6e04e56b57fc72fa598a2bd9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d047efea3578aadfad5d30f9cbae58f5c10e50fef6f345ec46e9a0952840925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d047efea3578aadfad5d30f9cbae58f5c10e50fef6f345ec46e9a0952840925->enter($__internal_9d047efea3578aadfad5d30f9cbae58f5c10e50fef6f345ec46e9a0952840925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/partesAlumnoInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes alumnado</h3>
        ";
        // line 12
        if ((($context["data"] ?? $this->getContext($context, "data")) == null)) {
            // line 13
            echo "            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_alumno_informe");
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
        echo "        ";
        if ((($context["data"] ?? $this->getContext($context, "data")) != null)) {
            // line 45
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 2, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 57
                echo "                    <tr>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Nombre", array(), "array"), "html", null, true);
                echo "</td>
                        <td id=\"partes\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Partes", array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </tbody>
            </table>
        ";
        }
        // line 66
        echo "    </div>
";
        
        $__internal_9d047efea3578aadfad5d30f9cbae58f5c10e50fef6f345ec46e9a0952840925->leave($__internal_9d047efea3578aadfad5d30f9cbae58f5c10e50fef6f345ec46e9a0952840925_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/informes/partesAlumnoInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 66,  136 => 63,  127 => 60,  123 => 59,  119 => 58,  116 => 57,  112 => 56,  99 => 45,  96 => 44,  74 => 25,  66 => 20,  59 => 16,  54 => 13,  52 => 12,  48 => 10,  45 => 9,  39 => 8,  32 => 5,  30 => 7,  28 => 6,  11 => 5,);
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
Vista de informes de partes de alumnado.
Creado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% set modify = '1' %}
{% set fecha = \"now\"|date(\"m/d/Y\") %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes alumnado</h3>
        {% if data == null %}
            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"{{ path('partes_alumno_informe') }}\" method=\"post\">
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
            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 2, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                {% for key, values in data %}
                    <tr>
                        <td>{{ values[\"Grupo\"] }}</td>
                        <td>{{ values[\"Nombre\"] }}</td>
                        <td id=\"partes\">{{ values[\"Partes\"] }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "convivencia/informes/partesAlumnoInforme.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/partesAlumnoInforme.html.twig");
    }
}
