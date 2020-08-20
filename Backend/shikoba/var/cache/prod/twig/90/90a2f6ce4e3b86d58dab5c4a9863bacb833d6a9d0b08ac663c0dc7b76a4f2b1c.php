<?php

/* :convivencia/partes:partesForm.html.twig */
class __TwigTemplate_ae36616572de892012bc21997a00b4da73a2ae442c81dc87c484ebd5d3859151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/partes:partesForm.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/partes:partesForm.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Formulario partes</h3>
        <div class=\"col s12 l6 offset-l3 center\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "partes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                <div class=\"card-panel green white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 43
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "                <div class=\"card-panel red white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 49
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>
        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"col s12 center center-align\">
                <div class=\"divider1\" id=\"botonbus\">
                    <button class=\"busquedaMas z-depth-1 btn btn-floating blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"Búsqueda Avanzada\" title=\"Búsqueda avanzada\">
                        <i class=\"material-icons right\">search</i>
                    </button>
                </div>
            </div>
            <div class=\"col s6 right-align\">
                ";
        // line 64
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 65
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"), "html", null, true);
            echo "\" name=\"idParte\">
                ";
            // line 66
            if (($context["recupera"] ?? null)) {
                // line 67
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"), "recuperaPunto" => "true")), "html", null, true);
                echo "\"
                       class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                       data-title=\"Recuperar Punto\">-1 Punto <i class=\"material-icons left\">thumb_down</i></a>
                ";
            } else {
                // line 71
                echo "                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                            type=\"button\" name=\"recuperaPunto\"
                            value=\"-1 Punto\"
                            disabled>Recuperado
                    </button>
                ";
            }
            // line 77
            echo "            </div>
            <div class=\"col s6 left-align\">
                ";
            // line 79
            if ((($context["accion"] ?? null) != "Inhabilitada")) {
                // line 80
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"), "estadoParte" => "continuar")), "html", null, true);
                echo "\"
                       class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                       data-title=\"";
                // line 82
                echo twig_escape_filter($this->env, ($context["accion"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["accion"] ?? null), "html", null, true);
                echo "
                        <i class=\"right material-icons\">send</i>
                    </a>
                ";
            } else {
                // line 86
                echo "                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parte"] ?? null), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\"
                            disabled>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parte"] ?? null), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "
                        <i class=\"material-icons right\">send</i>
                    </button>
                ";
            }
            // line 93
            echo "                ";
        }
        // line 94
        echo "            </div>
            <div id=\"cursos\" class=\"col s12\">
                <div class=\"row\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 98
            echo "                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\" name=\"cursos[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "curso", array()), "html", null, true);
            echo "\"/>
                            <label for=\"";
            // line 100
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
        // line 103
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
        ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "col s12 l10 offset-l1 mtop", "id" => "parteForm")));
        echo "
        <div class=\"col s12 m6\">
            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "idAlumno", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "idProfesor", array()), 'row');
        echo "
        </div>

        ";
        // line 122
        echo "        <div class=\"col s12 m6 input-field\">
            <input type=\"text\" id=\"fecha\" name=\"fecha\" class=\"datepicker\"
                   value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["parte"] ?? null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
            <label for=\"fecha\">Fecha</label>
        </div>
        ";
        // line 127
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 128
            echo "            <div class=\"col s12 m6\" style=\"margin-top: 2rem;\">
                <input type=\"checkbox\" id=\"expulsion\" name=\"expulsion\"/>
                <label for=\"expulsion\">Expulsión Aula Convivencia</label>
            </div>
        ";
        }
        // line 133
        echo "        ";
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 134
            echo "            <div class=\"col s12 m12\" style=\"text-align:center; margin-left: 66px\">
                <input onclick=\"comprobar()\" type=\"checkbox\" id=\"envioSMS\" name=\"envioSMS\"/>
                <label for=\"envioSMS\">Enviar SMS</label>
            </div>
        ";
        }
        // line 139
        echo "        <div class=\"col s12\">
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "idConducta", array()), 'row');
        echo "
            ";
        // line 148
        echo "        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Descripcion", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "Tareas", array()), 'row');
        echo "
        </div>
        <div class=\"col s6 m3\">
            ";
        // line 156
        if ((null === $this->getAttribute(($context["parte"] ?? null), "fechaComunicacion", array()))) {
            // line 157
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechaComunicacion", array()), 'row', array("value" => twig_date_format_filter($this->env, $this->getAttribute(($context["parte"] ?? null), "fechaComunicacion", array()), "d/m/Y")));
            echo "
            ";
        } else {
            // line 159
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechaComunicacion", array()), 'row');
            echo "
            ";
        }
        // line 161
        echo "        </div>
        <div class=\"col s6 m3\">
            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechaConfirmacion", array()), 'row');
        echo "
        </div>
        <div class=\"col s6 m3 \">
            <label for=\"HoraSalidaAula\">Hora de salida aula</label>
            <input type=\"text\" id=\"HoraSalidaAula\" name=\"HoraSalidaAula\" class=\"timepicker\"
                   required>
        </div>
        <div class=\"col s6 m3 \">
            <label for=\"HoraLlegadaJefatura\">Hora llegada jefatura</label>
            <input type=\"text\" id=\"HoraLlegadaJefatura\" name=\"HoraLlegadaJefatura\" class=\"timepicker\" required>
        </div>
        <div class=\"\" id=\"formu\" style=\"display:none\">
            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>
        <div id=\"contenedor\" class=\"col s12 center\" style=\"margin-bottom: 1%\">
            ";
        // line 178
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 179
            echo "                <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
                    ";
            // line 180
            if (((($context["sanciones"] ?? null) != null) && (twig_length_filter($this->env, ($context["sanciones"] ?? null)) > 0))) {
                // line 181
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 182
                    echo "                            <a class=\"btn z-depth-3 blue darken-2 waves-effect waves-light\"
                               href=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "sancion", array()), "html", null, true);
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "                    ";
            } else {
                // line 186
                echo "                        ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 187
                    echo "                            <a class=\"btn z-depth-3 blue darken-2 waves-effect waves-light\"
                               href=\"";
                    // line 188
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idParte" => $this->getAttribute(($context["parte"] ?? null), "id", array()), "idAlumno" => $this->getAttribute($this->getAttribute(($context["parte"] ?? null), "idAlumno", array()), "id", array()))), "html", null, true);
                    echo "\">Crear sanción</a>
                        ";
                }
                // line 190
                echo "                    ";
            }
            // line 191
            echo "                </div>

            ";
        }
        // line 194
        echo "            <div id=\"botonera\" class=\"col s12 center\">
                <a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea volver a partes?\"
                   class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                   style=\"margin-bottom: 1%\">Cancelar
                    <i class=\"material-icons left\">undo</i>
                </a>

                <a id=\"submitEnlace\" data-title=\"Comunicación SMS\"
                   data-content=\"Se va a realizar una comunicación sms, ¿desea continuar?\"
                   class=\"z-depth-3 btn blue darken-4 waves-effect waves-light botonSubmit confirm\"
                   style=\"margin-bottom: 1%; display: none\">Enviar
                    <i class=\"material-icons right\">send</i>
                </a>

                <button id=\"boton\" class=\"z-depth-3 btn blue darken-4 waves-effect waves-light  \"
                        style=\"margin-bottom: 1%\">Enviar
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
            ";
        // line 213
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "        <script>
            \$(document).ready(function () {
                \$('#envioSMS').prop('checked', false);
            });
            \$(function () {
                \$('#submitEnlace').click(function (e) {
                    e.preventDefault();
                    \$('#submitEnlace').attr(\"href\", \"javascript:\$('#parteForm').submit()\")
                });
            });

            function comprobar() {
                if (\$('#envioSMS').is(':checked') === true) {
                    \$('#boton').remove();
                    \$('#submitEnlace').css(\"display\", \"inline-block\");

                } else {
                    \$('#envioSMS').prop('checked', false);
                    \$('#submitEnlace').css(\"display\", \"none\");
                    \$('#botonera').append(
                        '<button  id=\"boton\" class=\"z-depth-3 btn blue darken-4 waves-effect waves-light  \"\\n'
                        + 'style=\"margin-bottom: 1%\">Enviar ' +
                        '<i class=\"material-icons right\">send</i>' +
                        '</button>');
                }
            }
        </script>
    ";
    }

    public function getTemplateName()
    {
        return ":convivencia/partes:partesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 10,  384 => 9,  376 => 213,  355 => 195,  352 => 194,  347 => 191,  344 => 190,  339 => 188,  336 => 187,  333 => 186,  330 => 185,  320 => 183,  317 => 182,  312 => 181,  310 => 180,  307 => 179,  305 => 178,  299 => 175,  284 => 163,  280 => 161,  274 => 159,  268 => 157,  266 => 156,  260 => 153,  254 => 150,  250 => 148,  246 => 140,  243 => 139,  236 => 134,  233 => 133,  226 => 128,  224 => 127,  218 => 124,  214 => 122,  208 => 118,  202 => 115,  197 => 113,  185 => 103,  174 => 100,  168 => 99,  165 => 98,  161 => 97,  156 => 94,  153 => 93,  146 => 89,  142 => 88,  138 => 86,  129 => 82,  123 => 80,  121 => 79,  117 => 77,  109 => 71,  101 => 67,  99 => 66,  94 => 65,  92 => 64,  78 => 52,  69 => 49,  66 => 48,  62 => 47,  59 => 46,  50 => 43,  47 => 42,  43 => 41,  38 => 38,  35 => 9,  32 => 8,  29 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/partes:partesForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/partes/partesForm.html.twig");
    }
}
