<?php

/* convivencia/diarioAulaConvivencia/diarioAula.html.twig */
class __TwigTemplate_c35fd403e671a809fb9baf919373e42b730775df2cae4eda01193dda9640a1c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/diarioAulaConvivencia/diarioAula.html.twig", 5);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab12114b684b597778008b96abb18a9eea7223ff72acadcf794f8061997c2428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab12114b684b597778008b96abb18a9eea7223ff72acadcf794f8061997c2428->enter($__internal_ab12114b684b597778008b96abb18a9eea7223ff72acadcf794f8061997c2428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/diarioAulaConvivencia/diarioAula.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab12114b684b597778008b96abb18a9eea7223ff72acadcf794f8061997c2428->leave($__internal_ab12114b684b597778008b96abb18a9eea7223ff72acadcf794f8061997c2428_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3119871a6b63f030c2e029b197e81e467cbddee660d629d94e15cf263e118096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3119871a6b63f030c2e029b197e81e467cbddee660d629d94e15cf263e118096->enter($__internal_3119871a6b63f030c2e029b197e81e467cbddee660d629d94e15cf263e118096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script>
        \$(document).ready(function() {
            ";
        // line 9
        if (($this->getAttribute(($context["diarioData"] ?? $this->getContext($context, "diarioData")), "diariosAula", array()) == null)) {
            // line 10
            echo "                \$(\"#warning\").text(\"No existen datos para el día y/o las horas seleccionadas.\");
            ";
        } else {
            // line 12
            echo "            \$(\"#result\").text(\"Mostrando los resultados.\");
            ";
        }
        // line 14
        echo "        });
    </script>
";
        
        $__internal_3119871a6b63f030c2e029b197e81e467cbddee660d629d94e15cf263e118096->leave($__internal_3119871a6b63f030c2e029b197e81e467cbddee660d629d94e15cf263e118096_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_363a435d4faeb74d2cd259802dc2c994b99f8261d5236dc7312883f83ef6e2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363a435d4faeb74d2cd259802dc2c994b99f8261d5236dc7312883f83ef6e2bd->enter($__internal_363a435d4faeb74d2cd259802dc2c994b99f8261d5236dc7312883f83ef6e2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/diarioAulaConvivencia/diarioAula.html.twig", 19)->display($context);
        // line 20
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Diario del aula de convivencia.</h3>
        <form action=\"\">
            <div class=\"diarioSearch\">
                <div id=\"divfecha\">
                    <label for=\"diarioFechaSearchBar\">Fecha</label>
                    <input type=\"text\" class=\"datepicker\" name=\"likeFecha\" id=\"diarioFechaSearchBar\"
                           value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["diarioData"] ?? $this->getContext($context, "diarioData")), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\">
                </div>
                <div id=\"divhora\">
                    <label for=\"horasSelect\">Horas</label>
                    <select data-placeholder=\"Seleccione hora/s...\" id=\"horasSelect\"
                            class=\"chosen-select col s12\" name=\"likeHora[]\"
                            id=\"diarioHorasSearchBar\" multiple>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["diarioData"] ?? $this->getContext($context, "diarioData")), "horas", array()));
        foreach ($context['_seq'] as $context["key"] => $context["hora"]) {
            // line 35
            echo "                            ";
            if (twig_in_filter($context["key"], $this->getAttribute(($context["diarioData"] ?? $this->getContext($context, "diarioData")), "horasElegidas", array()))) {
                // line 36
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 38
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                echo "</option>
                            ";
            }
            // line 40
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </select>
                </div>
                <div id=\"botonbus\">
                    <button class=\"z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                            style=\"margin-top: 21%; margin-left: -5%\" type=\"submit\"
                            value=\"Buscar\" title=\"Buscar\">
                        <i class=\"material-icons right\">search</i>
                    </button>
                </div>
            </div>
        </form>
        ";
        // line 52
        if (($this->getAttribute(($context["diarioData"] ?? $this->getContext($context, "diarioData")), "diariosAula", array()) == null)) {
            // line 53
            echo "            <h5 class=\"center fuente\" id=\"warning\" style=\"margin: 50px auto\"></h5>
        ";
        } else {
            // line 55
            echo "            <h5 class=\"center fuente\" id=\"result\" style=\"margin: 50px auto\"></h5>
            <div class=\"row\" id=\"busq\">
                <table class=\"responsive-table highlight tableDataDiario z-depth-3\" data-order='[[ 0, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                        <tr class=\"blue darken-3 white-text\">
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Alumnado</th>
                            <th>Profesorado</th>
                            <th>Observaciones</th>
                            <th>Actitud</th>
                            <th>Trabajo</th>
                            <th>Asiste</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["diarioData"] ?? $this->getContext($context, "diarioData")), "diariosAula", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diario"]) {
                // line 74
                echo "                        <tr>
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["diario"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "hora", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["diario"], "idSancion", array()), "idAlumno", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["diario"], "idSancion", array()), "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo "</a>
                            </td>
                            ";
                // line 80
                if (($this->getAttribute($context["diario"], "idProfesor", array()) == null)) {
                    // line 81
                    echo "                                <td>Ningún profesor asignado</td>
                            ";
                } else {
                    // line 83
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diario"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 85
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "observaciones", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "actitud", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "trabajo", array()), "html", null, true);
                echo "</td>
                            ";
                // line 88
                if (($this->getAttribute($context["diario"], "asiste", array()) == 0)) {
                    // line 89
                    echo "                                <td>Pendiente</td>
                            ";
                } else {
                    // line 91
                    echo "                                <td>Ha asistido</td>
                            ";
                }
                // line 93
                echo "                            <td>
                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_diario", array("id" => $this->getAttribute($context["diario"], "id", array()))), "html", null, true);
                echo "\">
                                    <i class=\"material-icons\">edit</i>
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 104
        echo "    </div>
";
        
        $__internal_363a435d4faeb74d2cd259802dc2c994b99f8261d5236dc7312883f83ef6e2bd->leave($__internal_363a435d4faeb74d2cd259802dc2c994b99f8261d5236dc7312883f83ef6e2bd_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/diarioAulaConvivencia/diarioAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 104,  233 => 100,  221 => 94,  218 => 93,  214 => 91,  210 => 89,  208 => 88,  204 => 87,  200 => 86,  195 => 85,  189 => 83,  185 => 81,  183 => 80,  176 => 78,  171 => 76,  167 => 75,  164 => 74,  160 => 73,  140 => 55,  136 => 53,  134 => 52,  121 => 41,  115 => 40,  107 => 38,  99 => 36,  96 => 35,  92 => 34,  82 => 27,  73 => 20,  70 => 19,  64 => 18,  55 => 14,  51 => 12,  47 => 10,  45 => 9,  41 => 7,  35 => 6,  11 => 5,);
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
Vista del diario del aula de convivencia.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block javascripts %}
    <script>
        \$(document).ready(function() {
            {% if diarioData.diariosAula == null %}
                \$(\"#warning\").text(\"No existen datos para el día y/o las horas seleccionadas.\");
            {% else %}
            \$(\"#result\").text(\"Mostrando los resultados.\");
            {% endif %}
        });
    </script>
{% endblock %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Diario del aula de convivencia.</h3>
        <form action=\"\">
            <div class=\"diarioSearch\">
                <div id=\"divfecha\">
                    <label for=\"diarioFechaSearchBar\">Fecha</label>
                    <input type=\"text\" class=\"datepicker\" name=\"likeFecha\" id=\"diarioFechaSearchBar\"
                           value=\"{{ diarioData.fecha|date('d/m/Y') }}\">
                </div>
                <div id=\"divhora\">
                    <label for=\"horasSelect\">Horas</label>
                    <select data-placeholder=\"Seleccione hora/s...\" id=\"horasSelect\"
                            class=\"chosen-select col s12\" name=\"likeHora[]\"
                            id=\"diarioHorasSearchBar\" multiple>
                        {% for key, hora in diarioData.horas %}
                            {% if key in diarioData.horasElegidas %}
                                <option value=\"{{ key }}\" selected>{{ hora }}</option>
                            {% else %}
                                <option value=\"{{ key }}\">{{ hora }}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>
                <div id=\"botonbus\">
                    <button class=\"z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                            style=\"margin-top: 21%; margin-left: -5%\" type=\"submit\"
                            value=\"Buscar\" title=\"Buscar\">
                        <i class=\"material-icons right\">search</i>
                    </button>
                </div>
            </div>
        </form>
        {% if diarioData.diariosAula == null %}
            <h5 class=\"center fuente\" id=\"warning\" style=\"margin: 50px auto\"></h5>
        {% else %}
            <h5 class=\"center fuente\" id=\"result\" style=\"margin: 50px auto\"></h5>
            <div class=\"row\" id=\"busq\">
                <table class=\"responsive-table highlight tableDataDiario z-depth-3\" data-order='[[ 0, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                        <tr class=\"blue darken-3 white-text\">
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Alumnado</th>
                            <th>Profesorado</th>
                            <th>Observaciones</th>
                            <th>Actitud</th>
                            <th>Trabajo</th>
                            <th>Asiste</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for diario in diarioData.diariosAula %}
                        <tr>
                            <td>{{ diario.fecha|date('d/m/Y') }}</td>
                            <td>{{ diario.hora }}</td>
                            <td>
                                <a href=\"{{ path('verAlumno', {'id': diario.idSancion.idAlumno.id}) }}\">{{ diario.idSancion.idAlumno.getNombreCompleto() }}</a>
                            </td>
                            {% if diario.idProfesor == null %}
                                <td>Ningún profesor asignado</td>
                            {% else %}
                                <td>{{ diario.idProfesor.getNombreCompleto() }}</td>
                            {% endif %}
                            <td>{{ diario.observaciones }}</td>
                            <td>{{ diario.actitud }}</td>
                            <td>{{ diario.trabajo }}</td>
                            {% if diario.asiste == 0 %}
                                <td>Pendiente</td>
                            {% else %}
                                <td>Ha asistido</td>
                            {% endif %}
                            <td>
                                <a href=\"{{ path('edit_diario', {'id': diario.id}) }}\">
                                    <i class=\"material-icons\">edit</i>
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "convivencia/diarioAulaConvivencia/diarioAula.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/diarioAulaConvivencia/diarioAula.html.twig");
    }
}
