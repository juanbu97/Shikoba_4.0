<?php

/* :convivencia/partes:partes.html.twig */
class __TwigTemplate_a7aaf219e83e17aa875bb6904cd828ac0180ed038f9528fff7907457ec1d8c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/partes:partes.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/partes:partes.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Partes</h3>

        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "parte"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "parteError"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["tipo"] ?? null), "html", null, true);
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
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
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
    }

    public function getTemplateName()
    {
        return ":convivencia/partes:partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 173,  329 => 172,  327 => 171,  322 => 167,  315 => 165,  306 => 161,  300 => 158,  292 => 155,  289 => 154,  286 => 153,  283 => 152,  279 => 150,  276 => 149,  273 => 138,  270 => 137,  267 => 136,  262 => 133,  258 => 132,  251 => 131,  249 => 130,  244 => 127,  241 => 126,  237 => 124,  230 => 121,  228 => 120,  225 => 118,  223 => 117,  216 => 115,  211 => 113,  207 => 112,  203 => 110,  200 => 102,  197 => 101,  194 => 100,  191 => 99,  188 => 98,  185 => 97,  182 => 96,  179 => 95,  176 => 94,  173 => 93,  170 => 92,  167 => 91,  164 => 90,  161 => 89,  156 => 88,  150 => 83,  141 => 75,  131 => 66,  129 => 65,  127 => 64,  125 => 63,  123 => 62,  121 => 61,  119 => 60,  117 => 59,  115 => 58,  113 => 57,  111 => 56,  109 => 55,  104 => 51,  95 => 46,  92 => 45,  89 => 43,  87 => 39,  84 => 37,  82 => 31,  74 => 24,  65 => 21,  62 => 20,  57 => 19,  48 => 16,  45 => 15,  41 => 14,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/partes:partes.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/partes/partes.html.twig");
    }
}
