<?php

/* convivencia/informes/partesAlumnoInforme.html.twig */
class __TwigTemplate_e4d0fa37fef8b1114f9d47b688b223d5535f4c4ef056bf1209fd1d326c711215 extends Twig_Template
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
        $__internal_514806cd081d2f3a9fc7c236d6068a59b723544c2002545e37a3e56df6e642f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514806cd081d2f3a9fc7c236d6068a59b723544c2002545e37a3e56df6e642f8->enter($__internal_514806cd081d2f3a9fc7c236d6068a59b723544c2002545e37a3e56df6e642f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesAlumnoInforme.html.twig"));

        $__internal_ccbc1f3227fac00fb18fe20c5e0cf772c9bab35cbd7b4cc0759cec882624c2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbc1f3227fac00fb18fe20c5e0cf772c9bab35cbd7b4cc0759cec882624c2f2->enter($__internal_ccbc1f3227fac00fb18fe20c5e0cf772c9bab35cbd7b4cc0759cec882624c2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesAlumnoInforme.html.twig"));

        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_514806cd081d2f3a9fc7c236d6068a59b723544c2002545e37a3e56df6e642f8->leave($__internal_514806cd081d2f3a9fc7c236d6068a59b723544c2002545e37a3e56df6e642f8_prof);

        
        $__internal_ccbc1f3227fac00fb18fe20c5e0cf772c9bab35cbd7b4cc0759cec882624c2f2->leave($__internal_ccbc1f3227fac00fb18fe20c5e0cf772c9bab35cbd7b4cc0759cec882624c2f2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_59596a43b47ff383f2361616138b20f7206b028a6e5cd3e6e46b29d1ff66517d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59596a43b47ff383f2361616138b20f7206b028a6e5cd3e6e46b29d1ff66517d->enter($__internal_59596a43b47ff383f2361616138b20f7206b028a6e5cd3e6e46b29d1ff66517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d5ecedc2feaf7edab12b299c08971aeb1ef735eae675d18e3ad37f962c935d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5ecedc2feaf7edab12b299c08971aeb1ef735eae675d18e3ad37f962c935d1->enter($__internal_1d5ecedc2feaf7edab12b299c08971aeb1ef735eae675d18e3ad37f962c935d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/partesAlumnoInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes alumnado</h3>
        ";
        // line 12
        if (((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()) == null)) {
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new Twig_Error_Runtime('Variable "fecha" does not exist.', 20, $this->getSourceContext()); })()), (("-" . (isset($context["modify"]) || array_key_exists("modify", $context) ? $context["modify"] : (function () { throw new Twig_Error_Runtime('Variable "modify" does not exist.', 20, $this->getSourceContext()); })())) . " month")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new Twig_Error_Runtime('Variable "fecha" does not exist.', 25, $this->getSourceContext()); })()), "d/m/Y"), "html", null, true);
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
        if (((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 44, $this->getSourceContext()); })()) != null)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 56, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 57
                echo "                    <tr>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["values"], "Nombre", array(), "array"), "html", null, true);
                echo "</td>
                        <td id=\"partes\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["values"], "Partes", array(), "array"), "html", null, true);
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
        
        $__internal_1d5ecedc2feaf7edab12b299c08971aeb1ef735eae675d18e3ad37f962c935d1->leave($__internal_1d5ecedc2feaf7edab12b299c08971aeb1ef735eae675d18e3ad37f962c935d1_prof);

        
        $__internal_59596a43b47ff383f2361616138b20f7206b028a6e5cd3e6e46b29d1ff66517d->leave($__internal_59596a43b47ff383f2361616138b20f7206b028a6e5cd3e6e46b29d1ff66517d_prof);

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
        return array (  150 => 66,  145 => 63,  136 => 60,  132 => 59,  128 => 58,  125 => 57,  121 => 56,  108 => 45,  105 => 44,  83 => 25,  75 => 20,  68 => 16,  63 => 13,  61 => 12,  57 => 10,  54 => 9,  45 => 8,  35 => 5,  33 => 7,  31 => 6,  11 => 5,);
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
{% endblock %}", "convivencia/informes/partesAlumnoInforme.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/informes/partesAlumnoInforme.html.twig");
    }
}
