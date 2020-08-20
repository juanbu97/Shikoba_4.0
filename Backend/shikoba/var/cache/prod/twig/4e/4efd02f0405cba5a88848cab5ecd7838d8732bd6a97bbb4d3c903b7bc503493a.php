<?php

/* :convivencia/sanciones:sancionesForm.html.twig */
class __TwigTemplate_6d552d1fdbed1523bb7056a498a880c8a55598daa54d41860e3b21f3ae200b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/sanciones:sancionesForm.html.twig", 5);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/sanciones:sancionesForm.html.twig", 7)->display($context);
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
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idSancion"), "method"))) {
            // line 24
            echo "                    ";
            if ((($context["accion"] ?? null) != "Inhabilitada")) {
                // line 25
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute(($context["sancion"] ?? null), "id", array()), "estadoSancion" => "continuar")), "html", null, true);
                echo "\"
                           class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                           data-title=\"";
                // line 27
                echo twig_escape_filter($this->env, ($context["accion"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["accion"] ?? null), "html", null, true);
                echo "
                            <i class=\"right material-icons\">send</i>
                        </a>
                        ";
                // line 31
                echo "                        ";
                // line 32
                echo "                    ";
            } else {
                // line 33
                echo "                        <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                                type=\"button\"
                                value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sancion"] ?? null), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\"
                                disabled>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sancion"] ?? null), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "
                            <i class=\"material-icons right\">send</i></button>
                        ";
                // line 39
                echo "                        ";
                // line 40
                echo "                    ";
            }
            // line 41
            echo "                ";
        }
        // line 42
        echo "            </div>
            <div id=\"cursos\" class=\"col s12\">
                <div class=\"row\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 46
            echo "                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\" name=\"cursos[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\"/>
                            <label for=\"";
            // line 48
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
        // line 51
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
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "col s12 l10 offset-l1")));
        echo "
            <div class=\"col s12 m6\">
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "idAlumno", array()), 'row');
        echo "
            </div>
            ";
        // line 67
        echo "            <div class=\"input-field col s12 m6\">
                <label for=\"fecha\">Fecha</label>
                <input type=\"text\" name=\"fecha\" class=\"datepicker\"
                       value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required id=\"fecha\"/>
            </div>
            <div class=\"input-field col s12 m6\">
                <label for=\"fechaI\">Fecha inicio</label>
                <input type=\"text\" name=\"fechaInicio\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
                       value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? null), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo "\" id=\"fechaI\" required />
            </div>
            <div class=\"input-field col s12 m6\">
                <label for=\"fechaF\">Fecha final</label>
                <input type=\"text\" name=\"fechaFinal\" class=\"w3-select datepicker w3-border w3-light-grey marginBottom\"
                       value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? null), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "\" id=\"fechaF\" required>
            </div>
            <div class=\"input-field col s12 m6\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechaComunicacion", array()), 'row', array("value" => twig_date_format_filter($this->env, $this->getAttribute(($context["sancion"] ?? null), "fechaComunicacion", array()), "d/m/Y")));
        echo "
            </div>
            <div class=\"input-field col s12 m6\">
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechaConfirmacion", array()), 'row');
        echo "
            </div>
            <div class=\"col s12 m6\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "idTipo", array()), 'row');
        echo "
                ";
        // line 90
        if (((array_key_exists("detalles", $context) &&  !(null === ($context["detalles"] ?? null))) &&  !twig_test_empty(($context["detalles"] ?? null)))) {
            // line 91
            echo "                    <div class=\"row contenedorFlexEdit\">
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["detalles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
                // line 93
                echo "                            <div class=\"col s6 input-field\">
                                <label for=\"fechaHoraS\">Fecha hora sanción</label>
                                <input type=\"text\" class=\"datepicker\"
                                       value=\"";
                // line 96
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalle"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "\" name=\"fechaHoraEdit[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "id", array()), "html", null, true);
                echo "]\"
                                       contenteditable=\"false\" id=\"fechaHoraS\" />
                            </div>
                            <div class=\"col s6 input-field\" id=\"horasAC\">
                                <select id=\"horaAcEdit\" name=\"horaAcEdit[";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "id", array()), "html", null, true);
                echo "]\">
                                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["horas"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["hora"]) {
                    // line 102
                    echo "                                        ";
                    if (($this->getAttribute($context["detalle"], "hora", array()) == $context["key"])) {
                        // line 103
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" selected>";
                        echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                        echo "</option>
                                        ";
                    } else {
                        // line 105
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                        echo "</option>
                                        ";
                    }
                    // line 107
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['hora'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                                </select>
                                <label for=\"horaAcEdit\">Hora</label>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                        <div class=\"col s12 center\">
                            <input type=\"button\" id=\"checkEditSancion\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light checkNewSancion\" value=\"+\">
                        </div>
                    </div>
                ";
        }
        // line 117
        echo "            </div>
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <br/>
            <div class=\"col s12 center\">
                <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\" data-title=\"Cancelar\"
                   class=\"btn z-depth-3 blue darken-3 waves-effect waves-light botonSubmit confirm\">Cancelar <i
                            class=\"material-icons left\">undo</i></a>
                <button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                        name=\"registrarSancion\"
                        value=\"Enviar\">Enviar <i class=\"material-icons right\">send</i></button>
            </div>

            ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return ":convivencia/sanciones:sancionesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 129,  272 => 121,  266 => 118,  263 => 117,  256 => 112,  247 => 108,  241 => 107,  233 => 105,  225 => 103,  222 => 102,  218 => 101,  214 => 100,  205 => 96,  200 => 93,  196 => 92,  193 => 91,  191 => 90,  187 => 89,  181 => 86,  175 => 83,  169 => 80,  161 => 75,  153 => 70,  148 => 67,  143 => 64,  138 => 62,  125 => 51,  114 => 48,  108 => 47,  105 => 46,  101 => 45,  96 => 42,  93 => 41,  90 => 40,  88 => 39,  83 => 36,  79 => 35,  75 => 33,  72 => 32,  70 => 31,  62 => 27,  56 => 25,  53 => 24,  51 => 23,  34 => 8,  31 => 7,  28 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/sanciones:sancionesForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/sanciones/sancionesForm.html.twig");
    }
}
