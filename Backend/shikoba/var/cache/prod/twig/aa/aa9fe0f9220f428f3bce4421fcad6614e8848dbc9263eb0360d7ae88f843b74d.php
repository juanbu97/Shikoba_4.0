<?php

/* convivencia/informes/partesProfesorInforme.html.twig */
class __TwigTemplate_37b60140b009e7d01b4ff0c4ec0cbacd57e332747d3465e6f389e970c0f641d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/informes/partesProfesorInforme.html.twig", 5);
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
        $__internal_eec7d3e5dac2744efb92d586790531ee5ad164a40fb3b38bb7d9ee26bcaaaf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec7d3e5dac2744efb92d586790531ee5ad164a40fb3b38bb7d9ee26bcaaaf9c->enter($__internal_eec7d3e5dac2744efb92d586790531ee5ad164a40fb3b38bb7d9ee26bcaaaf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesProfesorInforme.html.twig"));

        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec7d3e5dac2744efb92d586790531ee5ad164a40fb3b38bb7d9ee26bcaaaf9c->leave($__internal_eec7d3e5dac2744efb92d586790531ee5ad164a40fb3b38bb7d9ee26bcaaaf9c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3e9e21fde812c02151ad69366dbf0e30b1044651e378fb9af265ab55ecc3bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e9e21fde812c02151ad69366dbf0e30b1044651e378fb9af265ab55ecc3bf5->enter($__internal_a3e9e21fde812c02151ad69366dbf0e30b1044651e378fb9af265ab55ecc3bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/partesProfesorInforme.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes profesorado</h3>
        ";
        // line 13
        if ((($context["data"] ?? $this->getContext($context, "data")) == null)) {
            // line 14
            echo "            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_profesor_informe");
            echo "\" method=\"post\">
                            <div class=\"col s4 m4\">
                                <label for=\"fechaI\">Fecha inicial</label>
                                <input id=\"fechaI\" type=\"text\" name=\"fechaI\"
                                       value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["fecha"] ?? $this->getContext($context, "fecha")), (("-" . ($context["modify"] ?? $this->getContext($context, "modify"))) . " month")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"";
            // line 26
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
        // line 45
        echo "        ";
        if ((($context["data"] ?? $this->getContext($context, "data")) != null)) {
            // line 46
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 1, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Nombre", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Partes", array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </tbody>
            </table>
        ";
        }
        // line 65
        echo "    </div>
";
        
        $__internal_a3e9e21fde812c02151ad69366dbf0e30b1044651e378fb9af265ab55ecc3bf5->leave($__internal_a3e9e21fde812c02151ad69366dbf0e30b1044651e378fb9af265ab55ecc3bf5_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/informes/partesProfesorInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 65,  132 => 62,  123 => 59,  119 => 58,  116 => 57,  112 => 56,  100 => 46,  97 => 45,  75 => 26,  67 => 21,  60 => 17,  55 => 14,  53 => 13,  48 => 10,  45 => 9,  39 => 8,  32 => 5,  30 => 7,  28 => 6,  11 => 5,);
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
Vista de informes de partes de profesorado.
Creado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% set modify = '1' %}
{% set fecha = \"now\"|date(\"m/d/Y\") %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes profesorado</h3>
        {% if data == null %}
            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"{{ path('partes_profesor_informe') }}\" method=\"post\">
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
            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 1, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Nombre</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                {% for key, values in data %}
                    <tr>
                        <td>{{ values[\"Nombre\"] }}</td>
                        <td>{{ values[\"Partes\"] }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "convivencia/informes/partesProfesorInforme.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/partesProfesorInforme.html.twig");
    }
}
