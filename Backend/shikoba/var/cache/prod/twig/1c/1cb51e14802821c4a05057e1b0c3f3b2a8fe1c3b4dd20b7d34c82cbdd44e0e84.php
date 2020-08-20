<?php

/* convivencia/partes/partes.html.twig */
class __TwigTemplate_7fce040dcce8aa7e7286fed44627be933188cdfb2a428102362682aff4e3d9b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/partes/partes.html.twig", 5);
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
        $__internal_ce72f327977e5853355321e58b7b1fea2f4683873bc214aecf03dd40b9f66833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce72f327977e5853355321e58b7b1fea2f4683873bc214aecf03dd40b9f66833->enter($__internal_ce72f327977e5853355321e58b7b1fea2f4683873bc214aecf03dd40b9f66833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce72f327977e5853355321e58b7b1fea2f4683873bc214aecf03dd40b9f66833->leave($__internal_ce72f327977e5853355321e58b7b1fea2f4683873bc214aecf03dd40b9f66833_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f8ca7d0b420838ee69aec04568b9eb998846e12f9d1636faea147020e2cc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f8ca7d0b420838ee69aec04568b9eb998846e12f9d1636faea147020e2cc47->enter($__internal_d4f8ca7d0b420838ee69aec04568b9eb998846e12f9d1636faea147020e2cc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/partes/partes.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Partes</h3>

        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "parte"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "                <div class=\"card-panel green white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 16
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 20
            echo "                <div class=\"card-panel red white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 21
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span><i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
        <form action=\"\">
            <div class=\"row\" id=\"busq\">
                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            ";
        // line 31
        echo "                            ";
        // line 37
        echo "                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                ";
        // line 39
        echo "                                ";
        // line 43
        echo "
                                ";
        // line 45
        echo "                                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
            // line 46
            echo "                                    <a id=\"parte\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
            echo "\"
                                       class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                       title=\"Nuevo Parte\">Nuevo
                                        <i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
                                ";
        }
        // line 51
        echo "                            </div>
                        </div>

                        ";
        // line 55
        echo "                        ";
        // line 56
        echo "                        ";
        // line 57
        echo "                        ";
        // line 58
        echo "                        ";
        // line 59
        echo "                        ";
        // line 60
        echo "                       ";
        // line 61
        echo "                            ";
        // line 62
        echo "                            ";
        // line 63
        echo "                            ";
        // line 64
        echo "                            ";
        // line 65
        echo "                       ";
        // line 66
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataPartes responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                        <tr class=\"blue darken-3 white-text\">
                            <th class=\"noExport\">NumParte</th> ";
        // line 75
        echo "                            <th>Fecha</th>
                            <th>Alumnado</th>
                            <th>Curso</th>
                            <th>Profesorado</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th class=\"noExport\">Acciones</th> ";
        // line 83
        echo "                        </tr>
                    </thead>
                    <tbody>

                    ";
        // line 88
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? $this->getContext($context, "partes")));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 89
            echo "                        ";
            if (($this->getAttribute($context["parte"], "puntos", array()) >= 10)) {
                // line 90
                echo "                            ";
                $context["tipo"] = "Muy Grave";
                // line 91
                echo "                            ";
                $context["colorClass"] = "red-text";
                // line 92
                echo "                        ";
            } elseif ((($this->getAttribute($context["parte"], "puntos", array()) < 10) && ($this->getAttribute($context["parte"], "puntos", array()) > 5))) {
                // line 93
                echo "                            ";
                $context["tipo"] = "Grave";
                // line 94
                echo "                            ";
                $context["colorClass"] = "orange-text";
                // line 95
                echo "                        ";
            } else {
                // line 96
                echo "                            ";
                $context["tipo"] = "Leve";
                // line 97
                echo "                            ";
                $context["colorClass"] = "amber-text";
                // line 98
                echo "                        ";
            }
            // line 99
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()) == "Caducado")) {
                // line 100
                echo "                            ";
                $context["colorClass"] = "grey-text";
                // line 101
                echo "                        ";
            }
            // line 102
            echo "
                        ";
            // line 110
            echo "
                        <tr>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            ";
            // line 117
            if (($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()) != null)) {
                // line 118
                echo "                                <td>
                                    ";
                // line 120
                echo "                                    ";
                // line 121
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "
                                </td>
                            ";
            } else {
                // line 124
                echo "                                <td>Ninguno</td>
                            ";
            }
            // line 126
            echo "                            <td>
                                ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "
                            </td>
                            ";
            // line 130
            echo "                            ";
            // line 131
            echo "                            <td class=\"";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? $this->getContext($context, "colorClass")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
            echo "</td>
                            <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>

                            ";
            // line 136
            echo "                            ";
            if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 137
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 138
                    echo "                                  <td>
                                   ";
                    // line 149
                    echo "                                ";
                } else {
                    // line 150
                    echo "                                    <td></td>
                                ";
                }
                // line 152
                echo "                            ";
            }
            // line 153
            echo "                            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 154
                echo "                                <td>
                                    <a href=\"";
                // line 155
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
                echo "?idParte=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                echo "\">
                                        <i class=\"material-icons\">edit</i>
                                    </a>
                                    <a class=\"confirm paddingRightLeft \" href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_parte", array("id" => $this->getAttribute($context["parte"], "id", array()))), "html", null, true);
                echo "\"
                                       data-title=\"Eliminar parte\" data-content=\"Se va a proceder a borrar el parte, ¿desea continuar?\">
                                        <i class=\"material-icons \">delete</i></a>
                                    <a href=\"";
                // line 161
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("printParte");
                echo "?idParte=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
                echo "\">
                                        <i class=\"material-icons\">print</i></a>
                                </td>
                            ";
            }
            // line 165
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 171
        echo "            ";
        // line 172
        echo "            ";
        // line 173
        echo "        </form>
    </div>
";
        
        $__internal_d4f8ca7d0b420838ee69aec04568b9eb998846e12f9d1636faea147020e2cc47->leave($__internal_d4f8ca7d0b420838ee69aec04568b9eb998846e12f9d1636faea147020e2cc47_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/partes/partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 173,  338 => 172,  336 => 171,  331 => 167,  324 => 165,  315 => 161,  309 => 158,  301 => 155,  298 => 154,  295 => 153,  292 => 152,  288 => 150,  285 => 149,  282 => 138,  279 => 137,  276 => 136,  271 => 133,  267 => 132,  260 => 131,  258 => 130,  253 => 127,  250 => 126,  246 => 124,  239 => 121,  237 => 120,  234 => 118,  232 => 117,  225 => 115,  220 => 113,  216 => 112,  212 => 110,  209 => 102,  206 => 101,  203 => 100,  200 => 99,  197 => 98,  194 => 97,  191 => 96,  188 => 95,  185 => 94,  182 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 89,  165 => 88,  159 => 83,  150 => 75,  140 => 66,  138 => 65,  136 => 64,  134 => 63,  132 => 62,  130 => 61,  128 => 60,  126 => 59,  124 => 58,  122 => 57,  120 => 56,  118 => 55,  113 => 51,  104 => 46,  101 => 45,  98 => 43,  96 => 39,  93 => 37,  91 => 31,  83 => 24,  74 => 21,  71 => 20,  66 => 19,  57 => 16,  54 => 15,  50 => 14,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de partes.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Partes</h3>

        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('parte') %}
                <div class=\"card-panel green white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashBag.get('parteError') %}
                <div class=\"card-panel red white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }}</span><i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
        <form action=\"\">
            <div class=\"row\" id=\"busq\">
                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            {# Comentamos la opción de histórico #}
                            {# {% if app.request.get('historico') == 'on' %}
                                   <input type=\"checkbox\" name=\"historico\" checked>
                               {% else %}
                                   <input type=\"checkbox\" name=\"historico\">
                               {% endif %}
                               <span style=\"float:left;margin-top: 4%;\"> Histórico</span>#}
                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                {# Comentamos la opción de búsqueda en el histórico #}
                                {# <button class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                        type=\"submit\"
                                        value=\"Buscar\" title=\"Buscar\">
                                        <i class=\"material-icons right\">search</i></button> #}

                                {# Restringimos la creación de partes a los roles definidos #}
                                {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                    <a id=\"parte\" href=\"{{ path('nuevoParte') }}\"
                                       class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                       title=\"Nuevo Parte\">Nuevo
                                        <i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
                                {% endif %}
                            </div>
                        </div>

                        {# <div class=\"col s2 l1\" id=\"aqui2\"> #}
                        {# <a href=\"{{ path('nuevoParte') }}\" #}
                        {# class=\"btn z-depth-3  btn-floating blue darken-3 waves-effect waves-light\" #}
                        {# title=\"Nuevo Parte\"><i#}
                        {# class=\"material-icons\" style=\"margin-top: -2%;\">add</i></a> #}
                        {# </div> #}
                       {# <div class=\"col s2 l1\">#}
                            {# <a href=\"{{ path('export_form_partes') }}\" #}
                            {# class=\"btn z-depth-3  btn-floating blue darken-3 waves-effect waves-light\" #}
                            {# title=\"Exportar\"><i#}
                            {# class=\"material-icons\">get_app</i></a> #}
                       {# </div> #}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataPartes responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                        <tr class=\"blue darken-3 white-text\">
                            <th class=\"noExport\">NumParte</th> {# Controlamos con noExport el no envío a la exportación pdf #}
                            <th>Fecha</th>
                            <th>Alumnado</th>
                            <th>Curso</th>
                            <th>Profesorado</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th class=\"noExport\">Acciones</th> {# Controlamos con noExport el no envío a la exportación pdf #}
                        </tr>
                    </thead>
                    <tbody>

                    {# Definimos tonos para los partes por puntos #}
                    {% for parte in partes %}
                        {% if parte.puntos >= 10 %}
                            {% set tipo = 'Muy Grave' %}
                            {% set colorClass = 'red-text' %}
                        {% elseif parte.puntos < 10 and parte.puntos > 5 %}
                            {% set tipo = 'Grave' %}
                            {% set colorClass = 'orange-text' %}
                        {% else %}
                            {% set tipo = 'Leve' %}
                            {% set colorClass = 'amber-text' %}
                        {% endif %}
                        {% if parte.idEstado.estado == 'Caducado' %}
                            {% set colorClass = 'grey-text' %}
                        {% endif %}

                        {#  {% if parte.idTipo.tipo == 'Grave' %}
                             {% set colorClass = 'orange-text' %}
                         {% elseif parte.idTipo.tipo  == 'Leve' %}
                             {% set colorClass = 'amber-text' %}
                         {% else %}
                             {% set colorClass = 'red-text' %}
                         {% endif %}#}

                        <tr>
                            <td>{{ parte.id }}</td>
                            <td>{{ parte.fecha|date(\"d/m/Y\") }}</td>
                            <td>
                                <a href=\"{{ path('verAlumno', {'id': parte.idAlumno.id}) }}\">{{ parte.idAlumno.getNombreCompleto() }}</a>
                            </td>
                            {% if parte.idAlumno.idCurso != null %}
                                <td>
                                    {# Queda sin funcionalidad, lo deshabilitamos #}
                                    {# <a href=\"{{ path('gestion_partes', {'like': parte.idAlumno.idCurso.grupo}) }}\">{{ parte.idAlumno.idCurso.grupo }}</a> #}
                                    {{ parte.idAlumno.idCurso.grupo }}
                                </td>
                            {% else %}
                                <td>Ninguno</td>
                            {% endif %}
                            <td>
                                {{ parte.idProfesor.getNombreCompleto() }}
                            </td>
                            {# Controlamos el tipo establecido en el control previo, le pasamos la variable tipo #}
                            {# <td class=\"{{ colorClass }}\">{{ parte.idTipo.tipo }}</td> #}
                            <td class=\"{{ colorClass }}\">{{ tipo }}</td>
                            <td>{{ parte.puntos }}</td>
                            <td>{{ parte.idEstado.estado }}</td>

                            {# Controlamos la edición de los partes para los profesores que los ponen #}
                            {% if not is_granted('ROLE_ADMIN') and is_granted('ROLE_PROFESOR') %}
                                {% if (parte.idProfesor.idUsuario.id == app.user.id) %}
                                  <td>
                                   {# <a href=\"{{ path('nuevoParte') }}?idParte={{ parte.id }}\">
                                        <i class=\"material-icons\">edit</i>
                                    </a>
                                    <a class=\"confirm paddingRightLeft \" href=\"{{ path('borrar_parte', {'id': parte.id}) }}\"
                                       data-title=\"Eliminar Parte\" data-content=\"Se va a proceder a borrar el parte, ¿desea continuar?\">
                                        <i class=\"material-icons \">delete</i>
                                    </a>
                                    <a href=\"{{ path('printParte') }}?idParte={{ parte.id }}\">
                                        <i class=\"material-icons\">print</i>
                                    </a>#}
                                {% else %}
                                    <td></td>
                                {% endif %}
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_CONVIVENCIA')) %}{# pendiente de ver quien tiene acceso #}
                                <td>
                                    <a href=\"{{ path('nuevoParte') }}?idParte={{ parte.id }}\">
                                        <i class=\"material-icons\">edit</i>
                                    </a>
                                    <a class=\"confirm paddingRightLeft \" href=\"{{ path('borrar_parte', {'id': parte.id}) }}\"
                                       data-title=\"Eliminar parte\" data-content=\"Se va a proceder a borrar el parte, ¿desea continuar?\">
                                        <i class=\"material-icons \">delete</i></a>
                                    <a href=\"{{ path('printParte') }}?idParte={{ parte.id }}\">
                                        <i class=\"material-icons\">print</i></a>
                                </td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            {#<div class=\"paginator w3-col m12\">#}
            {#{{ knp_pagination_render(partes) }}#}
            {#</div>#}
        </form>
    </div>
{% endblock %}
", "convivencia/partes/partes.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\partes\\partes.html.twig");
    }
}
