<?php

/* convivencia/partes/partesForm.html.twig */
class __TwigTemplate_d2187ccecc043b96f3ce8df18db425cae5b03c2537f3c718486ffc5770940767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/partes/partesForm.html.twig", 5);
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
        $__internal_da53eba37cf14b19029f06b04a29314273fc2b733cf5a8e0f672b5d252d50db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da53eba37cf14b19029f06b04a29314273fc2b733cf5a8e0f672b5d252d50db5->enter($__internal_da53eba37cf14b19029f06b04a29314273fc2b733cf5a8e0f672b5d252d50db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da53eba37cf14b19029f06b04a29314273fc2b733cf5a8e0f672b5d252d50db5->leave($__internal_da53eba37cf14b19029f06b04a29314273fc2b733cf5a8e0f672b5d252d50db5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3bde3a8e3a612d0dd43d72dacbd6ebbbd6f1b759ee452f61cc5805c92ab60b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bde3a8e3a612d0dd43d72dacbd6ebbbd6f1b759ee452f61cc5805c92ab60b4->enter($__internal_d3bde3a8e3a612d0dd43d72dacbd6ebbbd6f1b759ee452f61cc5805c92ab60b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/partes/partesForm.html.twig", 8)->display($context);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "partes"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
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
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 65
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"), "html", null, true);
            echo "\" name=\"idParte\">
                ";
            // line 66
            if (($context["recupera"] ?? $this->getContext($context, "recupera"))) {
                // line 67
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"), "recuperaPunto" => "true")), "html", null, true);
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
            if ((($context["accion"] ?? $this->getContext($context, "accion")) != "Inhabilitada")) {
                // line 80
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"), "estadoParte" => "continuar")), "html", null, true);
                echo "\"
                       class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                       data-title=\"";
                // line 82
                echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["accion"] ?? $this->getContext($context, "accion")), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\"
                            disabled>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? $this->getContext($context, "cursos")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "col s12 l10 offset-l1 mtop", "id" => "parteForm")));
        echo "
        <div class=\"col s12 m6\">
            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idAlumno", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idProfesor", array()), 'row');
        echo "
        </div>

        ";
        // line 122
        echo "        <div class=\"col s12 m6 input-field\">
            <input type=\"text\" id=\"fecha\" name=\"fecha\" class=\"datepicker\"
                   value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
            <label for=\"fecha\">Fecha</label>
        </div>
        ";
        // line 127
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 128
            echo "            <div class=\"col s12 m6\" style=\"margin-top: 2rem;\">
                <input type=\"checkbox\" id=\"expulsion\" name=\"expulsion\"/>
                <label for=\"expulsion\">Expulsión Aula Convivencia</label>
            </div>
        ";
        }
        // line 133
        echo "        ";
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idConducta", array()), 'row');
        echo "
            ";
        // line 148
        echo "        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Descripcion", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Tareas", array()), 'row');
        echo "
        </div>
        <div class=\"col s6 m3\">
            ";
        // line 156
        if ((null === $this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "fechaComunicacion", array()))) {
            // line 157
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComunicacion", array()), 'row', array("value" => twig_date_format_filter($this->env, $this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "fechaComunicacion", array()), "d/m/Y")));
            echo "
            ";
        } else {
            // line 159
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComunicacion", array()), 'row');
            echo "
            ";
        }
        // line 161
        echo "        </div>
        <div class=\"col s6 m3\">
            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaConfirmacion", array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
        <div id=\"contenedor\" class=\"col s12 center\" style=\"margin-bottom: 1%\">
            ";
        // line 178
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 179
            echo "                <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
                    ";
            // line 180
            if (((($context["sanciones"] ?? $this->getContext($context, "sanciones")) != null) && (twig_length_filter($this->env, ($context["sanciones"] ?? $this->getContext($context, "sanciones"))) > 0))) {
                // line 181
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? $this->getContext($context, "sanciones")));
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idParte" => $this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "id", array()), "idAlumno" => $this->getAttribute($this->getAttribute(($context["parte"] ?? $this->getContext($context, "parte")), "idAlumno", array()), "id", array()))), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_d3bde3a8e3a612d0dd43d72dacbd6ebbbd6f1b759ee452f61cc5805c92ab60b4->leave($__internal_d3bde3a8e3a612d0dd43d72dacbd6ebbbd6f1b759ee452f61cc5805c92ab60b4_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e761898751e86bf8230522938b5dd4552adfff812e4d1b9ff821e4b05be93b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e761898751e86bf8230522938b5dd4552adfff812e4d1b9ff821e4b05be93b1->enter($__internal_5e761898751e86bf8230522938b5dd4552adfff812e4d1b9ff821e4b05be93b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5e761898751e86bf8230522938b5dd4552adfff812e4d1b9ff821e4b05be93b1->leave($__internal_5e761898751e86bf8230522938b5dd4552adfff812e4d1b9ff821e4b05be93b1_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/partes/partesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 10,  396 => 9,  385 => 213,  364 => 195,  361 => 194,  356 => 191,  353 => 190,  348 => 188,  345 => 187,  342 => 186,  339 => 185,  329 => 183,  326 => 182,  321 => 181,  319 => 180,  316 => 179,  314 => 178,  308 => 175,  293 => 163,  289 => 161,  283 => 159,  277 => 157,  275 => 156,  269 => 153,  263 => 150,  259 => 148,  255 => 140,  252 => 139,  245 => 134,  242 => 133,  235 => 128,  233 => 127,  227 => 124,  223 => 122,  217 => 118,  211 => 115,  206 => 113,  194 => 103,  183 => 100,  177 => 99,  174 => 98,  170 => 97,  165 => 94,  162 => 93,  155 => 89,  151 => 88,  147 => 86,  138 => 82,  132 => 80,  130 => 79,  126 => 77,  118 => 71,  110 => 67,  108 => 66,  103 => 65,  101 => 64,  87 => 52,  78 => 49,  75 => 48,  71 => 47,  68 => 46,  59 => 43,  56 => 42,  52 => 41,  47 => 38,  44 => 9,  41 => 8,  35 => 7,  11 => 5,);
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
Vista de formulario partes.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    {% block javascripts %}
        <script>
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
    {% endblock %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Formulario partes</h3>
        <div class=\"col s12 l6 offset-l3 center\">
            {% for flash_message in app.session.flashBag.get('partes') %}
                <div class=\"card-panel green white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('parteError') %}
                <div class=\"card-panel red white-text\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
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
                {% if app.request.get('idParte') is not null %}
                <input type=\"hidden\" value=\"{{ app.request.get('idParte') }}\" name=\"idParte\">
                {% if recupera %}
                    <a href=\"{{ path('nuevoParte', {'idParte': app.request.get('idParte'), 'recuperaPunto': 'true'}) }}\"
                       class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                       data-title=\"Recuperar Punto\">-1 Punto <i class=\"material-icons left\">thumb_down</i></a>
                {% else %}
                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                            type=\"button\" name=\"recuperaPunto\"
                            value=\"-1 Punto\"
                            disabled>Recuperado
                    </button>
                {% endif %}
            </div>
            <div class=\"col s6 left-align\">
                {% if accion != 'Inhabilitada' %}
                    <a href=\"{{ path('nuevoParte', {'idParte': app.request.get('idParte'), 'estadoParte': 'continuar' }) }}\"
                       class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                       data-title=\"{{ accion }}\">{{ accion }}
                        <i class=\"right material-icons\">send</i>
                    </a>
                {% else %}
                    <button class=\"z-depth-3 btn blue darken-3 waves-effect waves-light\"
                            type=\"button\"
                            value=\"{{ parte.getIdEstado().getEstado() }}\"
                            disabled>{{ parte.getIdEstado().getEstado() }}
                        <i class=\"material-icons right\">send</i>
                    </button>
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
        {{ form_start(form, {'attr': {'class':'col s12 l10 offset-l1 mtop', 'id':'parteForm'}}) }}
        <div class=\"col s12 m6\">
            {{ form_row(form.idAlumno) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.idProfesor) }}
        </div>

        {#{{ form_row(form.Fecha) }}#}
        <div class=\"col s12 m6 input-field\">
            <input type=\"text\" id=\"fecha\" name=\"fecha\" class=\"datepicker\"
                   value=\"{{ parte.fecha|date('d/m/Y') }}\" required>
            <label for=\"fecha\">Fecha</label>
        </div>
        {% if app.request.get('idParte') is null %}
            <div class=\"col s12 m6\" style=\"margin-top: 2rem;\">
                <input type=\"checkbox\" id=\"expulsion\" name=\"expulsion\"/>
                <label for=\"expulsion\">Expulsión Aula Convivencia</label>
            </div>
        {% endif %}
        {% if app.request.get('idParte') is null %}
            <div class=\"col s12 m12\" style=\"text-align:center; margin-left: 66px\">
                <input onclick=\"comprobar()\" type=\"checkbox\" id=\"envioSMS\" name=\"envioSMS\"/>
                <label for=\"envioSMS\">Enviar SMS</label>
            </div>
        {% endif %}
        <div class=\"col s12\">
            {{ form_row(form.idConducta) }}
            {# {% for conducta in conductas %}
                 <p class=\"col s12\">
                     <input type=\"checkbox\" id=\"{{ conducta.conducta }}\" name=\"idConducta\"
                            value=\"{{ conducta.conducta }}\"/>
                     <label for=\"{{ conducta.conducta }}\">{{ \"(\" ~ conducta.puntos ~ \") - \"~  conducta.conducta }}</label>
                 </p>
             {% endfor %}#}
        </div>
        <div class=\"col s12 m6 input-field\">
            {{ form_row(form.Descripcion) }}
        </div>
        <div class=\"col s12 m6 input-field\">
            {{ form_row(form.Tareas) }}
        </div>
        <div class=\"col s6 m3\">
            {% if parte.fechaComunicacion is null %}
                {{ form_row(form.fechaComunicacion, {value : parte.fechaComunicacion|date(\"d/m/Y\")}) }}
            {% else %}
                {{ form_row(form.fechaComunicacion) }}
            {% endif %}
        </div>
        <div class=\"col s6 m3\">
            {{ form_row(form.fechaConfirmacion) }}
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
            {{ form_widget(form) }}
        </div>
        <div id=\"contenedor\" class=\"col s12 center\" style=\"margin-bottom: 1%\">
            {% if app.request.get('idParte') is not null %}
                <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
                    {% if sanciones != null and sanciones|length > 0 %}
                        {% for sancion in sanciones %}
                            <a class=\"btn z-depth-3 blue darken-2 waves-effect waves-light\"
                               href=\"{{ path('nueva_sancion', {'idSancion': sancion.id}) }}\">{{ sancion.sancion }}</a>
                        {% endfor %}
                    {% else %}
                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')  %}
                            <a class=\"btn z-depth-3 blue darken-2 waves-effect waves-light\"
                               href=\"{{ path('nueva_sancion', {'idParte': parte.id, 'idAlumno': parte.idAlumno.id}) }}\">Crear sanción</a>
                        {% endif %}
                    {% endif %}
                </div>

            {% endif %}
            <div id=\"botonera\" class=\"col s12 center\">
                <a href=\"{{ path('gestion_partes') }}\" data-title=\"Cancelar\" data-content=\"¿Desea volver a partes?\"
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
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "convivencia/partes/partesForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/partes/partesForm.html.twig");
    }
}
