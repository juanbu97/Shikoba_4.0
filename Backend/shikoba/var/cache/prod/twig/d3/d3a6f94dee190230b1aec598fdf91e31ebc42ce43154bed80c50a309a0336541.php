<?php

/* :convivencia/alumno:carnets.html.twig */
class __TwigTemplate_d488a8eb3ea8945aa362902a1d384a65351bc95f1c3e4a3e2b5ba5dbe0291b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/alumno:carnets.html.twig", 5);
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/alumno:carnets.html.twig", 8)->display($context);
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
        $context['_seq'] = twig_ensure_traversable(($context["puntosSelect"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["puntos"]) {
            // line 18
            echo "                                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "puntosFiltro"), "method") == $context["puntos"])) {
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
        $context['_seq'] = twig_ensure_traversable(($context["arrayCarnetData"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
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
                            echo "\">Recrear
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
                    if ((((($context["flagF"] ?? null) == 1) && (($context["flagIV"] ?? null) == 0)) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 6))) {
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
    }

    public function getTemplateName()
    {
        return ":convivencia/alumno:carnets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 136,  353 => 135,  351 => 134,  346 => 130,  339 => 128,  336 => 127,  332 => 125,  329 => 124,  326 => 122,  319 => 119,  317 => 118,  314 => 117,  311 => 116,  308 => 115,  302 => 114,  299 => 113,  294 => 111,  287 => 110,  282 => 108,  276 => 107,  271 => 106,  268 => 105,  265 => 104,  260 => 103,  257 => 102,  254 => 101,  247 => 98,  244 => 97,  241 => 96,  235 => 95,  232 => 94,  229 => 93,  226 => 92,  223 => 91,  220 => 90,  215 => 89,  212 => 88,  209 => 87,  206 => 86,  203 => 85,  200 => 84,  193 => 81,  190 => 80,  187 => 79,  185 => 78,  182 => 77,  179 => 76,  175 => 74,  169 => 71,  166 => 70,  164 => 69,  158 => 68,  151 => 66,  147 => 64,  144 => 63,  141 => 62,  138 => 61,  135 => 60,  132 => 59,  129 => 58,  126 => 57,  123 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  104 => 50,  87 => 35,  85 => 34,  83 => 33,  73 => 24,  67 => 23,  59 => 21,  51 => 19,  48 => 18,  44 => 17,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/alumno:carnets.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/carnets.html.twig");
    }
}
