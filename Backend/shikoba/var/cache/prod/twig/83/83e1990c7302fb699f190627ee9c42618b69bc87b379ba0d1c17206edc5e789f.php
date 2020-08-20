<?php

/* convivencia/alumno/carnets.html.twig */
class __TwigTemplate_bed6136c882c9dec0336fba1e007d43ffaf2b3b1142219cd22070bc038e2f858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/alumno/carnets.html.twig", 5);
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
        $__internal_21ed9a39cfe9a467358087cf4821a258d0ce2e27a7d1ddcde22fc283afdfca33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ed9a39cfe9a467358087cf4821a258d0ce2e27a7d1ddcde22fc283afdfca33->enter($__internal_21ed9a39cfe9a467358087cf4821a258d0ce2e27a7d1ddcde22fc283afdfca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/carnets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ed9a39cfe9a467358087cf4821a258d0ce2e27a7d1ddcde22fc283afdfca33->leave($__internal_21ed9a39cfe9a467358087cf4821a258d0ce2e27a7d1ddcde22fc283afdfca33_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f613bda815dce353f0050eb87b7ff79620e1f0d5b27f79d9cca2cf11e1885fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f613bda815dce353f0050eb87b7ff79620e1f0d5b27f79d9cca2cf11e1885fe->enter($__internal_9f613bda815dce353f0050eb87b7ff79620e1f0d5b27f79d9cca2cf11e1885fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/alumno/carnets.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Carnets</h3>
        <form action=\"\">
            <div class=\"row\">
                <div class=\"input-field col s12 m6 left\">
                    <div class=\" col s10\" id=\"aqui\">
                        <label for=\"carnetFilterPuntos\">Filtra por puntos</label>
                        <select name=\"puntosFiltro\" id=\"carnetFilterPuntos\">
                            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["puntosSelect"] ?? $this->getContext($context, "puntosSelect")));
        foreach ($context['_seq'] as $context["_key"] => $context["puntos"]) {
            // line 18
            echo "                                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "puntosFiltro"), "method") == $context["puntos"])) {
                // line 19
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 21
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "</option>
                                ";
            }
            // line 23
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puntos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        </select>
                    </div>
                    <div class=\"col s1\" id=\"aqui2\" style=\"margin-top: 8%;\">
                        <button class=\"bus2 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                type=\"submit\"
                                value=\"Buscar\" title=\"Buscar\"><i class=\"material-icons right\">search</i></button>
                    </div>
                    <div class=\"col s6 m4\" id=\"exp\">
                        ";
        // line 33
        echo "                        ";
        // line 34
        echo "                        ";
        // line 35
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataCarnets responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th>Alumnado</th>
                        <th>Puntos</th>
                        <th>Grupo</th>
                        <th>Medida</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrayCarnetData"] ?? $this->getContext($context, "arrayCarnetData")));
        foreach ($context['_seq'] as $context["_key"] => $context["carnet"]) {
            // line 51
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) == 0)) {
                // line 52
                echo "                            ";
                $context["colorClass"] = "green-text";
                // line 53
                echo "                        ";
            } elseif ((($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 0) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) < 7))) {
                // line 54
                echo "                            ";
                $context["colorClass"] = "orange-text";
                // line 55
                echo "                        ";
            } elseif (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) == 7)) {
                // line 56
                echo "                            ";
                $context["colorClass"] = "pink-text";
                // line 57
                echo "                        ";
            } elseif ((($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 7) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) < 10))) {
                // line 58
                echo "                            ";
                $context["colorClass"] = "red-text text-darken-3";
                // line 59
                echo "                        ";
            } elseif (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) >= 10)) {
                // line 60
                echo "                            ";
                $context["colorClass"] = "red-text text-darken-4";
                // line 61
                echo "                        ";
            } else {
                // line 62
                echo "                            ";
                $context["colorClass"] = "black-text";
                // line 63
                echo "                        ";
            }
            // line 64
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? $this->getContext($context, "colorClass")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()), "html", null, true);
            echo "</td>
                            ";
            // line 69
            if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()) != null)) {
                // line 70
                echo "                                <td>
                                    ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "
                                </td>
                            ";
            } else {
                // line 74
                echo "                                <td>Ninguno</td>
                            ";
            }
            // line 76
            echo "                            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["carnet"], "arraySanciones", array())) > 0)) {
                // line 77
                echo "                                <td>
                                ";
                // line 78
                if ((twig_length_filter($this->env, $this->getAttribute($context["carnet"], "arraySanciones", array())) <= 1)) {
                    // line 79
                    echo "                                    ";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["carnet"], "arraySanciones", array()), 0, array(), "array"), "idEstado", array()), "estado", array()) == "Finalizada") && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 6))) {
                        // line 80
                        echo "                                        ";
                        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                            // line 81
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
                            echo "\">Crear
                                                sanción</a>
                                        ";
                        }
                        // line 84
                        echo "                                    ";
                    }
                    // line 85
                    echo "                                ";
                }
                // line 86
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["carnet"], "arraySanciones", array())) > 1)) {
                    // line 87
                    echo "                                    ";
                    $context["flagF"] = 0;
                    // line 88
                    echo "                                    ";
                    $context["flagIV"] = 0;
                    // line 89
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["carnet"], "arraySanciones", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                        // line 90
                        echo "                                        ";
                        if (($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Finalizada")) {
                            // line 91
                            echo "                                            ";
                            $context["flagF"] = 1;
                            // line 92
                            echo "                                        ";
                        } elseif (($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) != "Finalizada")) {
                            // line 93
                            echo "                                            ";
                            $context["flagIV"] = 1;
                            // line 94
                            echo "                                        ";
                        }
                        // line 95
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                    ";
                    if ((((($context["flagF"] ?? $this->getContext($context, "flagF")) == 1) && (($context["flagIV"] ?? $this->getContext($context, "flagIV")) == 0)) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 6))) {
                        // line 97
                        echo "                                        ";
                        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                            // line 98
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
                            echo "\">Recrear
                                                sanción</a>
                                        ";
                        }
                        // line 101
                        echo "                                    ";
                    }
                    // line 102
                    echo "                                ";
                }
                // line 103
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["carnet"], "arraySanciones", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 104
                    echo "                                    ";
                    if ((($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Iniciada") || ($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Vigente"))) {
                        // line 105
                        echo "                                        ";
                        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                            // line 106
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                            echo "\">
                                                (";
                            // line 107
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                            echo "
                                                - ";
                            // line 108
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
                            echo ")</a><br/>
                                        ";
                        } else {
                            // line 110
                            echo "                                            (";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                            echo "
                                            - ";
                            // line 111
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
                            echo ")<br/>
                                        ";
                        }
                        // line 113
                        echo "                                    ";
                    }
                    // line 114
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                            ";
            } else {
                // line 116
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 6)) {
                    // line 117
                    echo "                                    <td>
                                        ";
                    // line 118
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                        // line 119
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
                        echo "\">Crear
                                                sanción</a>
                                        ";
                    }
                    // line 122
                    echo "                                    </td>
                                    ";
                    // line 124
                    echo "                                ";
                } else {
                    // line 125
                    echo "                                    <td></td>
                                ";
                }
                // line 127
                echo "                            ";
            }
            // line 128
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carnet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 134
        echo "            ";
        // line 135
        echo "            ";
        // line 136
        echo "        </form>
    </div>
";
        
        $__internal_9f613bda815dce353f0050eb87b7ff79620e1f0d5b27f79d9cca2cf11e1885fe->leave($__internal_9f613bda815dce353f0050eb87b7ff79620e1f0d5b27f79d9cca2cf11e1885fe_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/alumno/carnets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 136,  362 => 135,  360 => 134,  355 => 130,  348 => 128,  345 => 127,  341 => 125,  338 => 124,  335 => 122,  328 => 119,  326 => 118,  323 => 117,  320 => 116,  317 => 115,  311 => 114,  308 => 113,  303 => 111,  296 => 110,  291 => 108,  285 => 107,  280 => 106,  277 => 105,  274 => 104,  269 => 103,  266 => 102,  263 => 101,  256 => 98,  253 => 97,  250 => 96,  244 => 95,  241 => 94,  238 => 93,  235 => 92,  232 => 91,  229 => 90,  224 => 89,  221 => 88,  218 => 87,  215 => 86,  212 => 85,  209 => 84,  202 => 81,  199 => 80,  196 => 79,  194 => 78,  191 => 77,  188 => 76,  184 => 74,  178 => 71,  175 => 70,  173 => 69,  167 => 68,  160 => 66,  156 => 64,  153 => 63,  150 => 62,  147 => 61,  144 => 60,  141 => 59,  138 => 58,  135 => 57,  132 => 56,  129 => 55,  126 => 54,  123 => 53,  120 => 52,  117 => 51,  113 => 50,  96 => 35,  94 => 34,  92 => 33,  82 => 24,  76 => 23,  68 => 21,  60 => 19,  57 => 18,  53 => 17,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de carnets.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Carnets</h3>
        <form action=\"\">
            <div class=\"row\">
                <div class=\"input-field col s12 m6 left\">
                    <div class=\" col s10\" id=\"aqui\">
                        <label for=\"carnetFilterPuntos\">Filtra por puntos</label>
                        <select name=\"puntosFiltro\" id=\"carnetFilterPuntos\">
                            {% for puntos in puntosSelect %}
                                {% if app.request.get('puntosFiltro') == puntos %}
                                    <option value=\"{{ puntos }}\" selected>{{ puntos }}</option>
                                {% else %}
                                    <option value=\"{{ puntos }}\">{{ puntos }}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col s1\" id=\"aqui2\" style=\"margin-top: 8%;\">
                        <button class=\"bus2 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                type=\"submit\"
                                value=\"Buscar\" title=\"Buscar\"><i class=\"material-icons right\">search</i></button>
                    </div>
                    <div class=\"col s6 m4\" id=\"exp\">
                        {#<a style=\"display: none\" href=\"{{ path('export_form_carnets') }}\"#}
                        {#class=\"btn z-depth-3  btn-floating blue darken-3 waves-effect waves-light\"#}
                        {#title=\"Exportar\"><i class=\"material-icons\">get_app</i></a>#}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataCarnets responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th>Alumnado</th>
                        <th>Puntos</th>
                        <th>Grupo</th>
                        <th>Medida</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for carnet in arrayCarnetData %}
                        {% if carnet.alumno.puntos == 0 %}
                            {% set colorClass = 'green-text' %}
                        {% elseif carnet.alumno.puntos > 0 and carnet.alumno.puntos < 7 %}
                            {% set colorClass = 'orange-text' %}
                        {% elseif carnet.alumno.puntos == 7 %}
                            {% set colorClass = 'pink-text' %}
                        {% elseif carnet.alumno.puntos > 7 and carnet.alumno.puntos < 10 %}
                            {% set colorClass = 'red-text text-darken-3' %}
                        {% elseif carnet.alumno.puntos >= 10 %}
                            {% set colorClass = 'red-text text-darken-4' %}
                        {% else %}
                            {% set colorClass = 'black-text' %}
                        {% endif %}
                        <tr>
                            <td>
                                <a href=\"{{ path('verAlumno', {'id': carnet.alumno.id}) }}\">{{ carnet.alumno.getNombreCompleto() }}</a>
                            </td>
                            <td class=\"{{ colorClass }}\">{{ carnet.alumno.puntos }}</td>
                            {% if carnet.alumno.idCurso != null %}
                                <td>
                                    {{ carnet.alumno.idCurso.grupo }}
                                </td>
                            {% else %}
                                <td>Ninguno</td>
                            {% endif %}
                            {% if carnet.arraySanciones|length > 0 %}
                                <td>
                                {% if carnet.arraySanciones|length <= 1 %}
                                    {% if carnet.arraySanciones[0].idEstado.estado == \"Finalizada\" and carnet.alumno.puntos > 6 %}
                                        {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                            <a href=\"{{ path('nueva_sancion', {'idAlumno': carnet.alumno.id}) }}\">Crear
                                                sanción</a>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                                {% if carnet.arraySanciones|length > 1 %}
                                    {% set flagF = 0 %}
                                    {% set flagIV = 0 %}
                                    {% for sancion in carnet.arraySanciones %}
                                        {% if sancion.idEstado.estado == \"Finalizada\" %}
                                            {% set flagF = 1 %}
                                        {% elseif sancion.idEstado.estado != \"Finalizada\" %}
                                            {% set flagIV = 1 %}
                                        {% endif %}
                                    {% endfor %}
                                    {% if flagF == 1 and flagIV == 0 and carnet.alumno.puntos > 6 %}
                                        {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                            <a href=\"{{ path('nueva_sancion', {'idAlumno': carnet.alumno.id}) }}\">Recrear
                                                sanción</a>
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                                {% for sancion in carnet.arraySanciones %}
                                    {% if sancion.idEstado.estado == \"Iniciada\" or sancion.idEstado.estado == \"Vigente\" %}
                                        {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                            <a href=\"{{ path('nueva_sancion', {'idSancion':sancion.id}) }}\">
                                                ({{ sancion.fecha|date('d/m/Y') }} - {{ sancion.idTipo.tipo }}
                                                - {{ sancion.idEstado.estado }})</a><br/>
                                        {% else %}
                                            ({{ sancion.fecha|date('d/m/Y') }} - {{ sancion.idTipo.tipo }}
                                            - {{ sancion.idEstado.estado }})<br/>
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            {% else %}
                                {% if carnet.alumno.puntos > 6 %}
                                    <td>
                                        {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                            <a href=\"{{ path('nueva_sancion', {'idAlumno': carnet.alumno.id}) }}\">Crear
                                                sanción</a>
                                        {% endif %}
                                    </td>
                                    {#<td>No sancionado(implementar crear sanción)</td>#}
                                {% else %}
                                    <td></td>
                                {% endif %}
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            {#<div class=\"paginator w3-col m12\">#}
            {#{{ knp_pagination_render(arrayCarnetData) }}#}
            {#</div>#}
        </form>
    </div>
{% endblock %}
", "convivencia/alumno/carnets.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\alumno\\carnets.html.twig");
    }
}
