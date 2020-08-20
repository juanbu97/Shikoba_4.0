<?php

/* convivencia/informes/partesGruposInforme.html.twig */
class __TwigTemplate_85b7c2ade9164ed67d2f01e3ea51aacf03960e40226915124dc46e48c38ce0e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/informes/partesGruposInforme.html.twig", 5);
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
        $__internal_18a6b8bbe939ef4b89310e2110501aa5ef7e418a6384c7e5e0cace48dde0d0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a6b8bbe939ef4b89310e2110501aa5ef7e418a6384c7e5e0cace48dde0d0de->enter($__internal_18a6b8bbe939ef4b89310e2110501aa5ef7e418a6384c7e5e0cace48dde0d0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/informes/partesGruposInforme.html.twig"));

        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a6b8bbe939ef4b89310e2110501aa5ef7e418a6384c7e5e0cace48dde0d0de->leave($__internal_18a6b8bbe939ef4b89310e2110501aa5ef7e418a6384c7e5e0cace48dde0d0de_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_abacc669dc9cdc76750c801eb6516c549f7eb1a4cbda9e98f68b4d5297d0dfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abacc669dc9cdc76750c801eb6516c549f7eb1a4cbda9e98f68b4d5297d0dfe8->enter($__internal_abacc669dc9cdc76750c801eb6516c549f7eb1a4cbda9e98f68b4d5297d0dfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/partesGruposInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes grupos</h3>
        ";
        // line 12
        if ((($context["data"] ?? $this->getContext($context, "data")) == null)) {
            // line 13
            echo "        <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\" >
            <div class=\"col s12 16 \">
                <div class=\"row\">
                    <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_grupos_informe");
            echo "\" method=\"post\">
                        <div class=\"col s4 m4\" >
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
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 1, \"desc\" ]]' data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 55
                echo "                    <tr>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Partes", array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </tbody>
            </table>
        ";
        }
        // line 63
        echo "    </div>
";
        
        $__internal_abacc669dc9cdc76750c801eb6516c549f7eb1a4cbda9e98f68b4d5297d0dfe8->leave($__internal_abacc669dc9cdc76750c801eb6516c549f7eb1a4cbda9e98f68b4d5297d0dfe8_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/informes/partesGruposInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 63,  129 => 60,  120 => 57,  116 => 56,  113 => 55,  109 => 54,  98 => 45,  95 => 44,  73 => 25,  65 => 20,  58 => 16,  53 => 13,  51 => 12,  47 => 10,  45 => 9,  39 => 8,  32 => 5,  30 => 7,  28 => 6,  11 => 5,);
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
Vista de informes de partes de grupos.
Creado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% set modify = '1' %}
{% set fecha = \"now\"|date(\"m/d/Y\") %}
{% block body %}
{% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes grupos</h3>
        {% if data == null %}
        <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\" >
            <div class=\"col s12 16 \">
                <div class=\"row\">
                    <form action=\"{{ path('partes_grupos_informe') }}\" method=\"post\">
                        <div class=\"col s4 m4\" >
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
            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 1, \"desc\" ]]' data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                {% for key, values in data %}
                    <tr>
                        <td>{{ values[\"Grupo\"] }}</td>
                        <td>{{ values[\"Partes\"] }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "convivencia/informes/partesGruposInforme.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/partesGruposInforme.html.twig");
    }
}
