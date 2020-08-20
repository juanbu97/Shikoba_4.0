<?php

/* convivencia/partes/partes.html.twig */
class __TwigTemplate_5f4c2cfaa891d5b8db142f291741c9dd9140b13dd71675d6861ff85b4aafe8aa extends Twig_Template
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
        $__internal_6264567d4aeb564918c18aa2d6f6e8dfbfbad2df3dc176b389440337cfb1b299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6264567d4aeb564918c18aa2d6f6e8dfbfbad2df3dc176b389440337cfb1b299->enter($__internal_6264567d4aeb564918c18aa2d6f6e8dfbfbad2df3dc176b389440337cfb1b299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $__internal_4b583e35d00d37209603f09c3f1d024a67ef6a0fd58a9567d2e613156c2f2fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b583e35d00d37209603f09c3f1d024a67ef6a0fd58a9567d2e613156c2f2fbd->enter($__internal_4b583e35d00d37209603f09c3f1d024a67ef6a0fd58a9567d2e613156c2f2fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6264567d4aeb564918c18aa2d6f6e8dfbfbad2df3dc176b389440337cfb1b299->leave($__internal_6264567d4aeb564918c18aa2d6f6e8dfbfbad2df3dc176b389440337cfb1b299_prof);

        
        $__internal_4b583e35d00d37209603f09c3f1d024a67ef6a0fd58a9567d2e613156c2f2fbd->leave($__internal_4b583e35d00d37209603f09c3f1d024a67ef6a0fd58a9567d2e613156c2f2fbd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d4f090a2bf567b9c6b24fae59e9672aa98a4e9c9b363b31bcb1699c204e255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d4f090a2bf567b9c6b24fae59e9672aa98a4e9c9b363b31bcb1699c204e255->enter($__internal_65d4f090a2bf567b9c6b24fae59e9672aa98a4e9c9b363b31bcb1699c204e255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adef3b20c3bb2bb3026c6b329c76797382a47783cce784c925af5f9e14a6279f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adef3b20c3bb2bb3026c6b329c76797382a47783cce784c925af5f9e14a6279f->enter($__internal_adef3b20c3bb2bb3026c6b329c76797382a47783cce784c925af5f9e14a6279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "parte"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["partes"]) || array_key_exists("partes", $context) ? $context["partes"] : (function () { throw new Twig_Error_Runtime('Variable "partes" does not exist.', 88, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 89
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "puntos", array()) >= 10)) {
                // line 90
                echo "                            ";
                $context["tipo"] = "Muy Grave";
                // line 91
                echo "                            ";
                $context["colorClass"] = "red-text";
                // line 92
                echo "                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "puntos", array()) < 10) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "puntos", array()) > 5))) {
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idEstado", array()), "estado", array()) == "Caducado")) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            ";
            // line 117
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idAlumno", array()), "idCurso", array()) != null)) {
                // line 118
                echo "                                <td>
                                    ";
                // line 120
                echo "                                    ";
                // line 121
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "
                            </td>
                            ";
            // line 130
            echo "                            ";
            // line 131
            echo "                            <td class=\"";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new Twig_Error_Runtime('Variable "colorClass" does not exist.', 131, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new Twig_Error_Runtime('Variable "tipo" does not exist.', 131, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
                            <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>

                            ";
            // line 136
            echo "                            ";
            if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 137
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "idProfesor", array()), "idUsuario", array()), "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "user", array()), "id", array()))) {
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "id", array()), "html", null, true);
                echo "\">
                                        <i class=\"material-icons\">edit</i>
                                    </a>
                                    <a class=\"confirm paddingRightLeft \" href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_parte", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "id", array()))), "html", null, true);
                echo "\"
                                       data-title=\"Eliminar parte\" data-content=\"Se va a proceder a borrar el parte, ¿desea continuar?\">
                                        <i class=\"material-icons \">delete</i></a>
                                    <a href=\"";
                // line 161
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("printParte");
                echo "?idParte=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["parte"], "id", array()), "html", null, true);
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
        
        $__internal_adef3b20c3bb2bb3026c6b329c76797382a47783cce784c925af5f9e14a6279f->leave($__internal_adef3b20c3bb2bb3026c6b329c76797382a47783cce784c925af5f9e14a6279f_prof);

        
        $__internal_65d4f090a2bf567b9c6b24fae59e9672aa98a4e9c9b363b31bcb1699c204e255->leave($__internal_65d4f090a2bf567b9c6b24fae59e9672aa98a4e9c9b363b31bcb1699c204e255_prof);

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
        return array (  349 => 173,  347 => 172,  345 => 171,  340 => 167,  333 => 165,  324 => 161,  318 => 158,  310 => 155,  307 => 154,  304 => 153,  301 => 152,  297 => 150,  294 => 149,  291 => 138,  288 => 137,  285 => 136,  280 => 133,  276 => 132,  269 => 131,  267 => 130,  262 => 127,  259 => 126,  255 => 124,  248 => 121,  246 => 120,  243 => 118,  241 => 117,  234 => 115,  229 => 113,  225 => 112,  221 => 110,  218 => 102,  215 => 101,  212 => 100,  209 => 99,  206 => 98,  203 => 97,  200 => 96,  197 => 95,  194 => 94,  191 => 93,  188 => 92,  185 => 91,  182 => 90,  179 => 89,  174 => 88,  168 => 83,  159 => 75,  149 => 66,  147 => 65,  145 => 64,  143 => 63,  141 => 62,  139 => 61,  137 => 60,  135 => 59,  133 => 58,  131 => 57,  129 => 56,  127 => 55,  122 => 51,  113 => 46,  110 => 45,  107 => 43,  105 => 39,  102 => 37,  100 => 31,  92 => 24,  83 => 21,  80 => 20,  75 => 19,  66 => 16,  63 => 15,  59 => 14,  52 => 9,  49 => 8,  40 => 7,  11 => 5,);
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
", "convivencia/partes/partes.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/partes/partes.html.twig");
    }
}
