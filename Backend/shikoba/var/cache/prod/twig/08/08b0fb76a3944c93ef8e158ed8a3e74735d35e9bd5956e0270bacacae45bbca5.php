<?php

/* convivencia/sanciones/sancionesForm.html.twig */
class __TwigTemplate_88e7cf5d16fd67a27ff0287941c4edb0aa38e89ca46ad80e768e35c3cd673a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/sanciones/sancionesForm.html.twig", 5);
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
        $__internal_1ab9e39d73c15b769fa29a09d39998e5f4c31f265d9bdb3d01ddaea88597d8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab9e39d73c15b769fa29a09d39998e5f4c31f265d9bdb3d01ddaea88597d8e9->enter($__internal_1ab9e39d73c15b769fa29a09d39998e5f4c31f265d9bdb3d01ddaea88597d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/sanciones/sancionesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab9e39d73c15b769fa29a09d39998e5f4c31f265d9bdb3d01ddaea88597d8e9->leave($__internal_1ab9e39d73c15b769fa29a09d39998e5f4c31f265d9bdb3d01ddaea88597d8e9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd3b6e1e2333538bf4ed523a3078cd0d1ff6a7711d76671c4fa928bbbfa4ae28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3b6e1e2333538bf4ed523a3078cd0d1ff6a7711d76671c4fa928bbbfa4ae28->enter($__internal_fd3b6e1e2333538bf4ed523a3078cd0d1ff6a7711d76671c4fa928bbbfa4ae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/sanciones/sancionesForm.html.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Formulario sanciones</h3>

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"col s12 center\">
                <div class=\"\" id=\"botonbus\">
                    <button class=\"busquedaMas z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"Búsqueda Avanzada\" title=\"Búsqueda avanzada\">
                        <i class=\"material-icons right\">search</i>
                    </button>
                </div>
            </div>
            <div class=\"col s12 center\" style=\"margin: 1% 0\">
                ";
        // line 23
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idSancion"), "method"))) {
            // line 24
            echo "                    ";
            if ((($context["accion"] ?? $this->getContext($context, "accion")) != "Inhabilitada")) {
                // line 25
                echo "                        ";
                // line 32
                echo "                        ";
                // line 33
                echo "                        ";
                // line 34
                echo "                    ";
            } else {
                // line 35
                echo "                        ";
                // line 41
                echo "                        ";
                // line 42
                echo "                        ";
                // line 43
                echo "                    ";
            }
            // line 44
            echo "                ";
        }
        // line 45
        echo "            </div>
            <div id=\"cursos\" class=\"col s12\">
                <div class=\"row\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 49
            echo "                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\" name=\"cursos[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\"/>
                            <label for=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "</label>
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    <div class=\"col s12 center\">
                        <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                                type=\"submit\"
                                value=\"Buscar\" name=\"busqueda\" title=\"Buscar\">Buscar
                            <i class=\"material-icons right\">search</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class=\"row\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "col s12 l10 offset-l1")));
        echo "
            <div class=\"col s12 m6\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idAlumno", array()), 'row');
        echo "
            </div>
            ";
        // line 70
        echo "            <div class=\"input-field col s12 m6\">
                <label for=\"fecha\">Fecha</label>
                <input type=\"text\" name=\"fecha\" class=\"datepicker\"
                       value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? $this->getContext($context, "sancion")), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required id=\"fecha\"/>
            </div>
            <div class=\"input-field col s12 m6\">
                <label for=\"fechaI\">Fecha inicio</label>
                <input type=\"text\" name=\"fechaInicio\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
                       value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? $this->getContext($context, "sancion")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo "\" id=\"fechaI\" required />
            </div>
            <div class=\"input-field col s12 m6\">
                <label for=\"fechaF\">Fecha final</label>
                <input type=\"text\" name=\"fechaFinal\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
                       value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? $this->getContext($context, "sancion")), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "\" id=\"fechaF\" required>
            </div>
            <div class=\"input-field col s12 m6\">
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComunicacion", array()), 'row');
        echo "
            </div>
            <div class=\"input-field col s12 m6\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaConfirmacion", array()), 'row');
        echo "
            </div>
            <div class=\"col s12 m6\">
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idTipo", array()), 'row');
        echo "
                ";
        // line 93
        if (((array_key_exists("detalles", $context) &&  !(null === ($context["detalles"] ?? $this->getContext($context, "detalles")))) &&  !twig_test_empty(($context["detalles"] ?? $this->getContext($context, "detalles"))))) {
            // line 94
            echo "                    <div class=\"row contenedorFlexEdit\">
                        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["detalles"] ?? $this->getContext($context, "detalles")));
            foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
                // line 96
                echo "                            <div class=\"col s6 input-field\">
                                <label for=\"fechaHoraS\">Fecha hora sanción</label>
                                <input type=\"text\" class=\"datepicker\"
                                       value=\"";
                // line 99
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalle"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "\" name=\"fechaHoraEdit[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "id", array()), "html", null, true);
                echo "]\"
                                       contenteditable=\"false\" id=\"fechaHoraS\" />
                            </div>
                            <div class=\"col s6 input-field\" id=\"horasAC\">
                                <select id=\"horaAcEdit\" name=\"horaAcEdit[";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "id", array()), "html", null, true);
                echo "]\">
                                    ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["horas"] ?? $this->getContext($context, "horas")));
                foreach ($context['_seq'] as $context["key"] => $context["hora"]) {
                    // line 105
                    echo "                                        ";
                    if (($this->getAttribute($context["detalle"], "hora", array()) == $context["key"])) {
                        // line 106
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                        echo "</option>
                                        ";
                    } else {
                        // line 108
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                        echo "</option>
                                        ";
                    }
                    // line 110
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['hora'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                                </select>
                                <label for=\"horaAcEdit\">Hora</label>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                        <div class=\"col s12 center\">
                            <input type=\"button\" id=\"checkEditSancion\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light checkNewSancion\" value=\"+\">
                        </div>
                    </div>
                ";
        }
        // line 120
        echo "            </div>
            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <br/>
            <div class=\"col s12 center\">
                <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\" data-title=\"Cancelar\"
                   class=\"btn z-depth-3 blue darken-3 waves-effect waves-light botonSubmit confirm\">Cancelar <i
                            class=\"material-icons left\">undo</i></a>
                <button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                        name=\"registrarSancion\"
                        value=\"Enviar\">Enviar <i class=\"material-icons right\">send</i></button>
            </div>

            ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_fd3b6e1e2333538bf4ed523a3078cd0d1ff6a7711d76671c4fa928bbbfa4ae28->leave($__internal_fd3b6e1e2333538bf4ed523a3078cd0d1ff6a7711d76671c4fa928bbbfa4ae28_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/sanciones/sancionesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 132,  262 => 124,  256 => 121,  253 => 120,  246 => 115,  237 => 111,  231 => 110,  223 => 108,  215 => 106,  212 => 105,  208 => 104,  204 => 103,  195 => 99,  190 => 96,  186 => 95,  183 => 94,  181 => 93,  177 => 92,  171 => 89,  165 => 86,  159 => 83,  151 => 78,  143 => 73,  138 => 70,  133 => 67,  128 => 65,  115 => 54,  104 => 51,  98 => 50,  95 => 49,  91 => 48,  86 => 45,  83 => 44,  80 => 43,  78 => 42,  76 => 41,  74 => 35,  71 => 34,  69 => 33,  67 => 32,  65 => 25,  62 => 24,  60 => 23,  43 => 8,  40 => 7,  34 => 6,  11 => 5,);
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
Vista de formulario de sanciones.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Formulario sanciones</h3>

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"col s12 center\">
                <div class=\"\" id=\"botonbus\">
                    <button class=\"busquedaMas z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"Búsqueda Avanzada\" title=\"Búsqueda avanzada\">
                        <i class=\"material-icons right\">search</i>
                    </button>
                </div>
            </div>
            <div class=\"col s12 center\" style=\"margin: 1% 0\">
                {% if app.request.get('idSancion') is not null %}
                    {% if accion != 'Inhabilitada' %}
                        {#
                        <a href=\"{{ path('nueva_sancion', {'idSancion': sancion.id, 'estadoSancion': 'continuar' }) }}\"
                           class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                           data-title=\"{{ accion }}\">{{ accion }}
                            <i class=\"right material-icons\">send</i>
                        </a>
                        #}
                        {#<input class=\"w3-button w3-text-white\"#}
                        {#type=\"submit\" name=\"estadoSancion\" value=\"{{ accion }}\">#}
                    {% else %}
                        {# quitado el 26/9/2019 <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                                type=\"button\"
                                value=\"{{ sancion.getIdEstado().getEstado() }}\"
                                disabled>{{ sancion.getIdEstado().getEstado() }}
                            <i class=\"material-icons right\">send</i></button>
                           #}
                        {#<input class=\"w3-button w3-text-white botonSubmit confirm\"#}
                        {#     type=\"button\" value=\"{{ sancion.getIdEstado().getEstado() }}\" disabled>#}
                    {% endif %}
                {% endif %}
            </div>
            <div id=\"cursos\" class=\"col s12\">
                <div class=\"row\">
                    {% for curso in cursos %}
                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"{{ curso.curso }}\" name=\"cursos[]\" value=\"{{ curso.curso }}\"/>
                            <label for=\"{{ curso.curso }}\">{{ curso.curso }}</label>
                        </p>
                    {% endfor %}
                    <div class=\"col s12 center\">
                        <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                                type=\"submit\"
                                value=\"Buscar\" name=\"busqueda\" title=\"Buscar\">Buscar
                            <i class=\"material-icons right\">search</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class=\"row\">
            {{ form_start(form, {'attr': {'class':'col s12 l10 offset-l1'}}) }}
            <div class=\"col s12 m6\">
                {{ form_row(form.idAlumno) }}
            </div>
            {#{{ form_row(form.Fecha) }}#}
            <div class=\"input-field col s12 m6\">
                <label for=\"fecha\">Fecha</label>
                <input type=\"text\" name=\"fecha\" class=\"datepicker\"
                       value=\"{{ sancion.fecha|date('d/m/Y') }}\" required id=\"fecha\"/>
            </div>
            <div class=\"input-field col s12 m6\">
                <label for=\"fechaI\">Fecha inicio</label>
                <input type=\"text\" name=\"fechaInicio\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
                       value=\"{{ (sancion.fechaInicio|date('d/m/Y')) }}\" id=\"fechaI\" required />
            </div>
            <div class=\"input-field col s12 m6\">
                <label for=\"fechaF\">Fecha final</label>
                <input type=\"text\" name=\"fechaFinal\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
                       value=\"{{ sancion.fechaFinal|date('d/m/Y') }}\" id=\"fechaF\" required>
            </div>
            <div class=\"input-field col s12 m6\">
                {{ form_row(form.fechaComunicacion) }}
            </div>
            <div class=\"input-field col s12 m6\">
                {{ form_row(form.fechaConfirmacion) }}
            </div>
            <div class=\"col s12 m6\">
                {{ form_row(form.idTipo) }}
                {% if detalles is defined and detalles is not null and detalles is not empty %}
                    <div class=\"row contenedorFlexEdit\">
                        {% for detalle in detalles %}
                            <div class=\"col s6 input-field\">
                                <label for=\"fechaHoraS\">Fecha hora sanción</label>
                                <input type=\"text\" class=\"datepicker\"
                                       value=\"{{ detalle.fecha|date('d/m/Y') }}\" name=\"fechaHoraEdit[{{ detalle.id }}]\"
                                       contenteditable=\"false\" id=\"fechaHoraS\" />
                            </div>
                            <div class=\"col s6 input-field\" id=\"horasAC\">
                                <select id=\"horaAcEdit\" name=\"horaAcEdit[{{ detalle.id }}]\">
                                    {% for key, hora in horas %}
                                        {% if detalle.hora == key %}
                                            <option value=\"{{ key }}\" selected>{{ hora }}</option>
                                        {% else %}
                                            <option value=\"{{ key }}\">{{ hora }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                                <label for=\"horaAcEdit\">Hora</label>
                            </div>
                        {% endfor %}
                        <div class=\"col s12 center\">
                            <input type=\"button\" id=\"checkEditSancion\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light checkNewSancion\" value=\"+\">
                        </div>
                    </div>
                {% endif %}
            </div>
            {{ form_widget(form) }}
            <br/>
            <div class=\"col s12 center\">
                <a href=\"{{ path('gestion_sanciones') }}\" data-title=\"Cancelar\"
                   class=\"btn z-depth-3 blue darken-3 waves-effect waves-light botonSubmit confirm\">Cancelar <i
                            class=\"material-icons left\">undo</i></a>
                <button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                        name=\"registrarSancion\"
                        value=\"Enviar\">Enviar <i class=\"material-icons right\">send</i></button>
            </div>

            {{ form_end(form) }}
        </div>
    </div>

{% endblock %}", "convivencia/sanciones/sancionesForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/sanciones/sancionesForm.html.twig");
    }
}
