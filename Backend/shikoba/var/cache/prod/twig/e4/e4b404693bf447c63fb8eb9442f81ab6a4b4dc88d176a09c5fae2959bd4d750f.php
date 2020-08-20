<?php

/* convivencia/sanciones/sanciones.html.twig */
class __TwigTemplate_025d60b41d5d13a53be2c94dc12205f3ae5810223ab0e166323ff2b98193cd9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/sanciones/sanciones.html.twig", 5);
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
        $__internal_0eafff8e16d7d376da5a9941c569da31ebe02343f038f61782255266679c3d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eafff8e16d7d376da5a9941c569da31ebe02343f038f61782255266679c3d7d->enter($__internal_0eafff8e16d7d376da5a9941c569da31ebe02343f038f61782255266679c3d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/sanciones/sanciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eafff8e16d7d376da5a9941c569da31ebe02343f038f61782255266679c3d7d->leave($__internal_0eafff8e16d7d376da5a9941c569da31ebe02343f038f61782255266679c3d7d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9948f967bb5695b84c411e3694ac003af7dbd9b146339afd41c1e54a4bc526f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9948f967bb5695b84c411e3694ac003af7dbd9b146339afd41c1e54a4bc526f2->enter($__internal_9948f967bb5695b84c411e3694ac003af7dbd9b146339afd41c1e54a4bc526f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/sanciones/sanciones.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Sanciones</h3>

        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "sancion"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "                <div class=\"card-panel green white-text flash\">
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
        echo "
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "sancionError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 21
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 22
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>

        <form action=\"\">
            <div class=\"row\" id=\"busq\">

                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        ";
        // line 33
        echo "                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            ";
        // line 35
        echo "                            ";
        // line 41
        echo "                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                ";
        // line 43
        echo "                                ";
        // line 47
        echo "                                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
            // line 48
            echo "                                    <a id=\"parte\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
            echo "\"
                                       class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                       title=\"Nueva sanción\">Nueva
                                        <i class=\"material-icons right\">add</i></a>
                                ";
        }
        // line 53
        echo "                            </div>
                        </div>
                        <div class=\"col s2 l1\">
                            ";
        // line 57
        echo "                            ";
        // line 58
        echo "                            ";
        // line 60
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataMedidas responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th class=\"noExport\">NumSanción</th>
                        <th>Fecha</th>
                        <th>Alumnado</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Tipo</th>
                        ";
        // line 76
        echo "                        <th>Estado</th>
                        <th class=\"noExport\">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? $this->getContext($context, "sanciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            // line 82
            echo "                        <tr>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                            ";
            // line 92
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                            ";
            // line 93
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 94
                echo "                                <td><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
                echo "?idSancion=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
                echo "\">
                                        <i class=\"material-icons\">edit</i></a>
                                    <a class=\"confirm paddingRightLeft \"
                                       href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_sancion", array("id" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                echo "\"
                                       data-title=\"Eliminar sanción\" data-content=\"Se va proceder a eliminar la sanción, ¿desea continuar?\"><i class=\"material-icons \">delete</i></a>
                                </td>
                            ";
            } else {
                // line 101
                echo "                                <td></td>
                            ";
            }
            // line 103
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 109
        echo "            ";
        // line 110
        echo "            ";
        // line 111
        echo "        </form>
    </div>
";
        
        $__internal_9948f967bb5695b84c411e3694ac003af7dbd9b146339afd41c1e54a4bc526f2->leave($__internal_9948f967bb5695b84c411e3694ac003af7dbd9b146339afd41c1e54a4bc526f2_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/sanciones/sanciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 111,  225 => 110,  223 => 109,  218 => 105,  211 => 103,  207 => 101,  200 => 97,  191 => 94,  189 => 93,  184 => 92,  180 => 90,  176 => 89,  172 => 88,  165 => 86,  160 => 84,  156 => 83,  153 => 82,  149 => 81,  142 => 76,  125 => 60,  123 => 58,  121 => 57,  116 => 53,  107 => 48,  104 => 47,  102 => 43,  99 => 41,  97 => 35,  94 => 33,  85 => 25,  76 => 22,  73 => 21,  69 => 20,  66 => 19,  57 => 16,  54 => 15,  50 => 14,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de sanciones.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Sanciones</h3>

        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('sancion') %}
                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('sancionError') %}
                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>

        <form action=\"\">
            <div class=\"row\" id=\"busq\">

                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        {# <div class=\"i-checks col s6 center l3 right-align\" style=\"margin-top: 2%;padding-left: 0;\"> #}
                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            {# Deshabilitamos el histórico\"> #}
                            {# {% if app.request.get('historico') == 'on' %}
                                 <input type=\"checkbox\" name=\"historico\" checked>
                             {% else %}
                                 <input type=\"checkbox\" name=\"historico\">
                             {% endif %}
                             <span style=\"float:left;margin-top: 4%;\"> Histórico</span>#}
                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                {# Deshabilitamos el buscador del histórico\"> #}
                                {#<button class=\"z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                        type=\"submit\"
                                        value=\"Buscar\" title=\"Buscar\">
                                        <i class=\"material-icons right\">search</i></button>#}
                                {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                    <a id=\"parte\" href=\"{{ path('nueva_sancion') }}\"
                                       class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                       title=\"Nueva sanción\">Nueva
                                        <i class=\"material-icons right\">add</i></a>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col s2 l1\">
                            {# <a href=\"{{ path('export_form_sanciones') }}\" #}
                            {# class=\"btn z-depth-3  btn-floating blue darken-3 waves-effect waves-light\" #}
                            {# title=\"Exportar\">
                            {# <i class=\"material-icons\">get_app</i></a>#}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataMedidas responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th class=\"noExport\">NumSanción</th>
                        <th>Fecha</th>
                        <th>Alumnado</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Tipo</th>
                        {#<th>Puntos</th>#}
                        <th>Estado</th>
                        <th class=\"noExport\">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for sancion in sanciones %}
                        <tr>
                            <td>{{ sancion.id }}</td>
                            <td>{{ sancion.fecha|date(\"d/m/Y\") }}</td>
                            <td>
                                <a href=\"{{ path('verAlumno', {'id': sancion.idAlumno.id}) }}\">{{ sancion.idAlumno.getNombreCompleto() }}</a>
                            </td>
                            <td>{{ sancion.fechaInicio|date(\"d/m/Y\") }}</td>
                            <td>{{ sancion.fechaFinal|date(\"d/m/Y\") }}</td>
                            <td>{{ sancion.idTipo.tipo }}</td>
                            {#<td>{{ sancion.puntosRecuperados }}</td>#}
                            <td>{{ sancion.idEstado.estado }}</td>
                            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA') %}
                                <td><a href=\"{{ path('nueva_sancion') }}?idSancion={{ sancion.id }}\">
                                        <i class=\"material-icons\">edit</i></a>
                                    <a class=\"confirm paddingRightLeft \"
                                       href=\"{{ path('borrar_sancion', {'id': sancion.id}) }}\"
                                       data-title=\"Eliminar sanción\" data-content=\"Se va proceder a eliminar la sanción, ¿desea continuar?\"><i class=\"material-icons \">delete</i></a>
                                </td>
                            {% else %}
                                <td></td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            {# <div class=\"paginator w3-col m12\"> #}
            {# {{ knp_pagination_render(sanciones) }} #}
            {# </div> #}
        </form>
    </div>
{% endblock %}", "convivencia/sanciones/sanciones.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/sanciones/sanciones.html.twig");
    }
}
