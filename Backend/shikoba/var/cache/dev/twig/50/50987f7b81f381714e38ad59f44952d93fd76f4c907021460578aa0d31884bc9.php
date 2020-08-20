<?php

/* convivencia/alumno/carnets.html.twig */
class __TwigTemplate_d8f6f46beb7a284b18e78dcc42b0a82b015e12a19e470cdf8fdb4bc8644fcc93 extends Twig_Template
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
        $__internal_a54259a09114e2797cb92b175b4d3af97e0411c96992e3aef0704b83e35100a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54259a09114e2797cb92b175b4d3af97e0411c96992e3aef0704b83e35100a7->enter($__internal_a54259a09114e2797cb92b175b4d3af97e0411c96992e3aef0704b83e35100a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/carnets.html.twig"));

        $__internal_af9bc1e7a0eeb234a356d0f7879ce155ba3dd9e9825a2536da8b8f1139be7d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9bc1e7a0eeb234a356d0f7879ce155ba3dd9e9825a2536da8b8f1139be7d41->enter($__internal_af9bc1e7a0eeb234a356d0f7879ce155ba3dd9e9825a2536da8b8f1139be7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/carnets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54259a09114e2797cb92b175b4d3af97e0411c96992e3aef0704b83e35100a7->leave($__internal_a54259a09114e2797cb92b175b4d3af97e0411c96992e3aef0704b83e35100a7_prof);

        
        $__internal_af9bc1e7a0eeb234a356d0f7879ce155ba3dd9e9825a2536da8b8f1139be7d41->leave($__internal_af9bc1e7a0eeb234a356d0f7879ce155ba3dd9e9825a2536da8b8f1139be7d41_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1134123ca8af6f210ed94e8c2c1c3f3dff14ba62ac21afe984622996ebd0142a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1134123ca8af6f210ed94e8c2c1c3f3dff14ba62ac21afe984622996ebd0142a->enter($__internal_1134123ca8af6f210ed94e8c2c1c3f3dff14ba62ac21afe984622996ebd0142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b69ca247c2a2afd3c4115ae21b8080bdeb37f2d66bed267a92fc09aa932345c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69ca247c2a2afd3c4115ae21b8080bdeb37f2d66bed267a92fc09aa932345c3->enter($__internal_b69ca247c2a2afd3c4115ae21b8080bdeb37f2d66bed267a92fc09aa932345c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["puntosSelect"]) || array_key_exists("puntosSelect", $context) ? $context["puntosSelect"] : (function () { throw new Twig_Error_Runtime('Variable "puntosSelect" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["puntos"]) {
            // line 18
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "puntosFiltro"), "method") == $context["puntos"])) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayCarnetData"]) || array_key_exists("arrayCarnetData", $context) ? $context["arrayCarnetData"] : (function () { throw new Twig_Error_Runtime('Variable "arrayCarnetData" does not exist.', 50, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["carnet"]) {
            // line 51
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) == 0)) {
                // line 52
                echo "                            ";
                $context["colorClass"] = "green-text";
                // line 53
                echo "                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) > 0) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) < 7))) {
                // line 54
                echo "                            ";
                $context["colorClass"] = "orange-text";
                // line 55
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) == 7)) {
                // line 56
                echo "                            ";
                $context["colorClass"] = "pink-text";
                // line 57
                echo "                        ";
            } elseif (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) > 7) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) < 10))) {
                // line 58
                echo "                            ";
                $context["colorClass"] = "red-text text-darken-3";
                // line 59
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) >= 10)) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new Twig_Error_Runtime('Variable "colorClass" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()), "html", null, true);
            echo "</td>
                            ";
            // line 69
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "idCurso", array()) != null)) {
                // line 70
                echo "                                <td>
                                    ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
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
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "arraySanciones", array())) > 0)) {
                // line 77
                echo "                                <td>
                                ";
                // line 78
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "arraySanciones", array())) <= 1)) {
                    // line 79
                    echo "                                    ";
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "arraySanciones", array()), 0, array(), "array"), "idEstado", array()), "estado", array()) == "Finalizada") && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) > 6))) {
                        // line 80
                        echo "                                        ";
                        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                            // line 81
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
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
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "arraySanciones", array())) > 1)) {
                    // line 87
                    echo "                                    ";
                    $context["flagF"] = 0;
                    // line 88
                    echo "                                    ";
                    $context["flagIV"] = 0;
                    // line 89
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "arraySanciones", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                        // line 90
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idEstado", array()), "estado", array()) == "Finalizada")) {
                            // line 91
                            echo "                                            ";
                            $context["flagF"] = 1;
                            // line 92
                            echo "                                        ";
                        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idEstado", array()), "estado", array()) != "Finalizada")) {
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
                    if (((((isset($context["flagF"]) || array_key_exists("flagF", $context) ? $context["flagF"] : (function () { throw new Twig_Error_Runtime('Variable "flagF" does not exist.', 96, $this->getSourceContext()); })()) == 1) && ((isset($context["flagIV"]) || array_key_exists("flagIV", $context) ? $context["flagIV"] : (function () { throw new Twig_Error_Runtime('Variable "flagIV" does not exist.', 96, $this->getSourceContext()); })()) == 0)) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) > 6))) {
                        // line 97
                        echo "                                        ";
                        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                            // line 98
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "arraySanciones", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 104
                    echo "                                    ";
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idEstado", array()), "estado", array()) == "Iniciada") || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idEstado", array()), "estado", array()) == "Vigente"))) {
                        // line 105
                        echo "                                        ";
                        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                            // line 106
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "id", array()))), "html", null, true);
                            echo "\">
                                                (";
                            // line 107
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                            echo "
                                                - ";
                            // line 108
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
                            echo ")</a><br/>
                                        ";
                        } else {
                            // line 110
                            echo "                                            (";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                            echo "
                                            - ";
                            // line 111
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
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
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "puntos", array()) > 6)) {
                    // line 117
                    echo "                                    <td>
                                        ";
                    // line 118
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                        // line 119
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
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
        
        $__internal_b69ca247c2a2afd3c4115ae21b8080bdeb37f2d66bed267a92fc09aa932345c3->leave($__internal_b69ca247c2a2afd3c4115ae21b8080bdeb37f2d66bed267a92fc09aa932345c3_prof);

        
        $__internal_1134123ca8af6f210ed94e8c2c1c3f3dff14ba62ac21afe984622996ebd0142a->leave($__internal_1134123ca8af6f210ed94e8c2c1c3f3dff14ba62ac21afe984622996ebd0142a_prof);

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
        return array (  373 => 136,  371 => 135,  369 => 134,  364 => 130,  357 => 128,  354 => 127,  350 => 125,  347 => 124,  344 => 122,  337 => 119,  335 => 118,  332 => 117,  329 => 116,  326 => 115,  320 => 114,  317 => 113,  312 => 111,  305 => 110,  300 => 108,  294 => 107,  289 => 106,  286 => 105,  283 => 104,  278 => 103,  275 => 102,  272 => 101,  265 => 98,  262 => 97,  259 => 96,  253 => 95,  250 => 94,  247 => 93,  244 => 92,  241 => 91,  238 => 90,  233 => 89,  230 => 88,  227 => 87,  224 => 86,  221 => 85,  218 => 84,  211 => 81,  208 => 80,  205 => 79,  203 => 78,  200 => 77,  197 => 76,  193 => 74,  187 => 71,  184 => 70,  182 => 69,  176 => 68,  169 => 66,  165 => 64,  162 => 63,  159 => 62,  156 => 61,  153 => 60,  150 => 59,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  135 => 54,  132 => 53,  129 => 52,  126 => 51,  122 => 50,  105 => 35,  103 => 34,  101 => 33,  91 => 24,  85 => 23,  77 => 21,  69 => 19,  66 => 18,  62 => 17,  52 => 9,  49 => 8,  40 => 7,  11 => 5,);
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
", "convivencia/alumno/carnets.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/alumno/carnets.html.twig");
    }
}
