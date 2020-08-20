<?php

/* convivencia/partes/partesForm.html.twig */
class __TwigTemplate_919c7aa3770bad69bb5b8044c29fa137465071c63eff61ac01961cbab38aa70a extends Twig_Template
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
        $__internal_707a5a61186b912a0ebe548066bbc6ea22820609c7664b0667e8612cd3e0c003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707a5a61186b912a0ebe548066bbc6ea22820609c7664b0667e8612cd3e0c003->enter($__internal_707a5a61186b912a0ebe548066bbc6ea22820609c7664b0667e8612cd3e0c003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $__internal_3a57f3db3ac7466b84259434a002701fcb2f0b58481ca06d37b28957ce45a37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a57f3db3ac7466b84259434a002701fcb2f0b58481ca06d37b28957ce45a37e->enter($__internal_3a57f3db3ac7466b84259434a002701fcb2f0b58481ca06d37b28957ce45a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707a5a61186b912a0ebe548066bbc6ea22820609c7664b0667e8612cd3e0c003->leave($__internal_707a5a61186b912a0ebe548066bbc6ea22820609c7664b0667e8612cd3e0c003_prof);

        
        $__internal_3a57f3db3ac7466b84259434a002701fcb2f0b58481ca06d37b28957ce45a37e->leave($__internal_3a57f3db3ac7466b84259434a002701fcb2f0b58481ca06d37b28957ce45a37e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_91c6c80568e609af422b71cbf39d3fc8a8a91891ada5391bc34b6e533d6cd089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c6c80568e609af422b71cbf39d3fc8a8a91891ada5391bc34b6e533d6cd089->enter($__internal_91c6c80568e609af422b71cbf39d3fc8a8a91891ada5391bc34b6e533d6cd089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ce7891612db4c946fd6bbb02bf8666acb3d6fbcb9435fd3ee5dea2a5bdebb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce7891612db4c946fd6bbb02bf8666acb3d6fbcb9435fd3ee5dea2a5bdebb14->enter($__internal_0ce7891612db4c946fd6bbb02bf8666acb3d6fbcb9435fd3ee5dea2a5bdebb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "partes"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
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
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 64, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 65
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"), "html", null, true);
            echo "\" name=\"idParte\">
                ";
            // line 66
            if ((isset($context["recupera"]) || array_key_exists("recupera", $context) ? $context["recupera"] : (function () { throw new Twig_Error_Runtime('Variable "recupera" does not exist.', 66, $this->getSourceContext()); })())) {
                // line 67
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 67, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"), "recuperaPunto" => "true")), "html", null, true);
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
            if (((isset($context["accion"]) || array_key_exists("accion", $context) ? $context["accion"] : (function () { throw new Twig_Error_Runtime('Variable "accion" does not exist.', 79, $this->getSourceContext()); })()) != "Inhabilitada")) {
                // line 80
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte", array("idParte" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 80, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"), "estadoParte" => "continuar")), "html", null, true);
                echo "\"
                       class=\"botonSubmit confirm btn z-depth-3 blue darken-3 waves-effect waves-light\"
                       data-title=\"";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["accion"]) || array_key_exists("accion", $context) ? $context["accion"] : (function () { throw new Twig_Error_Runtime('Variable "accion" does not exist.', 82, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["accion"]) || array_key_exists("accion", $context) ? $context["accion"] : (function () { throw new Twig_Error_Runtime('Variable "accion" does not exist.', 82, $this->getSourceContext()); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 88, $this->getSourceContext()); })()), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
                echo "\"
                            disabled>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 89, $this->getSourceContext()); })()), "getIdEstado", array(), "method"), "getEstado", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) || array_key_exists("cursos", $context) ? $context["cursos"] : (function () { throw new Twig_Error_Runtime('Variable "cursos" does not exist.', 97, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 98
            echo "                        <p class=\"col s12 m6 l3\">
                            <input type=\"checkbox\" id=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["curso"], "curso", array()), "html", null, true);
            echo "\" name=\"cursos[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["curso"], "curso", array()), "html", null, true);
            echo "\"/>
                            <label for=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["curso"], "curso", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["curso"], "curso", array()), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "col s12 l10 offset-l1 mtop", "id" => "parteForm")));
        echo "
        <div class=\"col s12 m6\">
            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "idAlumno", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "idProfesor", array()), 'row');
        echo "
        </div>

        ";
        // line 122
        echo "        <div class=\"col s12 m6 input-field\">
            <input type=\"text\" id=\"fecha\" name=\"fecha\" class=\"datepicker\"
                   value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 124, $this->getSourceContext()); })()), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\" required>
            <label for=\"fecha\">Fecha</label>
        </div>
        ";
        // line 127
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 127, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 128
            echo "            <div class=\"col s12 m6\" style=\"margin-top: 2rem;\">
                <input type=\"checkbox\" id=\"expulsion\" name=\"expulsion\"/>
                <label for=\"expulsion\">Expulsión Aula Convivencia</label>
            </div>
        ";
        }
        // line 133
        echo "        ";
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 133, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"))) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 140, $this->getSourceContext()); })()), "idConducta", array()), 'row');
        echo "
            ";
        // line 148
        echo "        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 150, $this->getSourceContext()); })()), "Descripcion", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6 input-field\">
            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "Tareas", array()), 'row');
        echo "
        </div>
        <div class=\"col s6 m3\">
            ";
        // line 156
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 156, $this->getSourceContext()); })()), "fechaComunicacion", array()))) {
            // line 157
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "fechaComunicacion", array()), 'row', array("value" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 157, $this->getSourceContext()); })()), "fechaComunicacion", array()), "d/m/Y")));
            echo "
            ";
        } else {
            // line 159
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "fechaComunicacion", array()), 'row');
            echo "
            ";
        }
        // line 161
        echo "        </div>
        <div class=\"col s6 m3\">
            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "fechaConfirmacion", array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
        <div id=\"contenedor\" class=\"col s12 center\" style=\"margin-bottom: 1%\">
            ";
        // line 178
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 178, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idParte"), "method"))) {
            // line 179
            echo "                <div class=\"col s12 center\" style=\"margin-bottom: 1%\">
                    ";
            // line 180
            if ((((isset($context["sanciones"]) || array_key_exists("sanciones", $context) ? $context["sanciones"] : (function () { throw new Twig_Error_Runtime('Variable "sanciones" does not exist.', 180, $this->getSourceContext()); })()) != null) && (twig_length_filter($this->env, (isset($context["sanciones"]) || array_key_exists("sanciones", $context) ? $context["sanciones"] : (function () { throw new Twig_Error_Runtime('Variable "sanciones" does not exist.', 180, $this->getSourceContext()); })())) > 0))) {
                // line 181
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sanciones"]) || array_key_exists("sanciones", $context) ? $context["sanciones"] : (function () { throw new Twig_Error_Runtime('Variable "sanciones" does not exist.', 181, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 182
                    echo "                            <a class=\"btn z-depth-3 blue darken-2 waves-effect waves-light\"
                               href=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "sancion", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idParte" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 188, $this->getSourceContext()); })()), "id", array()), "idAlumno" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["parte"]) || array_key_exists("parte", $context) ? $context["parte"] : (function () { throw new Twig_Error_Runtime('Variable "parte" does not exist.', 188, $this->getSourceContext()); })()), "idAlumno", array()), "id", array()))), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 213, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_0ce7891612db4c946fd6bbb02bf8666acb3d6fbcb9435fd3ee5dea2a5bdebb14->leave($__internal_0ce7891612db4c946fd6bbb02bf8666acb3d6fbcb9435fd3ee5dea2a5bdebb14_prof);

        
        $__internal_91c6c80568e609af422b71cbf39d3fc8a8a91891ada5391bc34b6e533d6cd089->leave($__internal_91c6c80568e609af422b71cbf39d3fc8a8a91891ada5391bc34b6e533d6cd089_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca9edc940a16d74a3202ddb41f09d5ec439c40e5da0efdc45dcf4c7da6105278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9edc940a16d74a3202ddb41f09d5ec439c40e5da0efdc45dcf4c7da6105278->enter($__internal_ca9edc940a16d74a3202ddb41f09d5ec439c40e5da0efdc45dcf4c7da6105278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ec68300731e7130bedfe216864b31d5e3bc448b6877384698a98140b4430773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec68300731e7130bedfe216864b31d5e3bc448b6877384698a98140b4430773->enter($__internal_0ec68300731e7130bedfe216864b31d5e3bc448b6877384698a98140b4430773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0ec68300731e7130bedfe216864b31d5e3bc448b6877384698a98140b4430773->leave($__internal_0ec68300731e7130bedfe216864b31d5e3bc448b6877384698a98140b4430773_prof);

        
        $__internal_ca9edc940a16d74a3202ddb41f09d5ec439c40e5da0efdc45dcf4c7da6105278->leave($__internal_ca9edc940a16d74a3202ddb41f09d5ec439c40e5da0efdc45dcf4c7da6105278_prof);

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
        return array (  417 => 10,  408 => 9,  394 => 213,  373 => 195,  370 => 194,  365 => 191,  362 => 190,  357 => 188,  354 => 187,  351 => 186,  348 => 185,  338 => 183,  335 => 182,  330 => 181,  328 => 180,  325 => 179,  323 => 178,  317 => 175,  302 => 163,  298 => 161,  292 => 159,  286 => 157,  284 => 156,  278 => 153,  272 => 150,  268 => 148,  264 => 140,  261 => 139,  254 => 134,  251 => 133,  244 => 128,  242 => 127,  236 => 124,  232 => 122,  226 => 118,  220 => 115,  215 => 113,  203 => 103,  192 => 100,  186 => 99,  183 => 98,  179 => 97,  174 => 94,  171 => 93,  164 => 89,  160 => 88,  156 => 86,  147 => 82,  141 => 80,  139 => 79,  135 => 77,  127 => 71,  119 => 67,  117 => 66,  112 => 65,  110 => 64,  96 => 52,  87 => 49,  84 => 48,  80 => 47,  77 => 46,  68 => 43,  65 => 42,  61 => 41,  56 => 38,  53 => 9,  50 => 8,  41 => 7,  11 => 5,);
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
", "convivencia/partes/partesForm.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/partes/partesForm.html.twig");
    }
}
