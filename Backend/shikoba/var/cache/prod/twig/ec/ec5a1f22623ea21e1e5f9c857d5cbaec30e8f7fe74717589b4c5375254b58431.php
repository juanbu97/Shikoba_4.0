<?php

/* :convivencia/diarioAulaConvivencia:diarioAula.html.twig */
class __TwigTemplate_f33a15ba86ed4c29af33d203efbabe0d6c2478052c4ce3f0c76cea44ddbf9d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/diarioAulaConvivencia:diarioAula.html.twig", 5);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "    <script>
        \$(document).ready(function() {
            ";
        // line 9
        if (($this->getAttribute(($context["diarioData"] ?? null), "diariosAula", array()) == null)) {
            // line 10
            echo "                \$(\"#warning\").text(\"No existen datos para el día y/o las horas seleccionadas.\");
            ";
        } else {
            // line 12
            echo "            \$(\"#result\").text(\"Mostrando los resultados.\");
            ";
        }
        // line 14
        echo "        });
    </script>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/diarioAulaConvivencia:diarioAula.html.twig", 19)->display($context);
        // line 20
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Diario del aula de convivencia.</h3>
        <form action=\"\">
            <div class=\"diarioSearch\">
                <div id=\"divfecha\">
                    <label for=\"diarioFechaSearchBar\">Fecha</label>
                    <input type=\"text\" class=\"datepicker\" name=\"likeFecha\" id=\"diarioFechaSearchBar\"
                           value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["diarioData"] ?? null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "\">
                </div>
                <div id=\"divhora\">
                    <label for=\"horasSelect\">Horas</label>
                    <select data-placeholder=\"Seleccione hora/s...\" id=\"horasSelect\"
                            class=\"chosen-select col s12\" name=\"likeHora[]\"
                            id=\"diarioHorasSearchBar\" multiple>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["diarioData"] ?? null), "horas", array()));
        foreach ($context['_seq'] as $context["key"] => $context["hora"]) {
            // line 35
            echo "                            ";
            if (twig_in_filter($context["key"], $this->getAttribute(($context["diarioData"] ?? null), "horasElegidas", array()))) {
                // line 36
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 38
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["hora"], "html", null, true);
                echo "</option>
                            ";
            }
            // line 40
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['hora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </select>
                </div>
                <div id=\"botonbus\">
                    <button class=\"z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                            style=\"margin-top: 21%; margin-left: -5%\" type=\"submit\"
                            value=\"Buscar\" title=\"Buscar\">
                        <i class=\"material-icons right\">search</i>
                    </button>
                </div>
            </div>
        </form>
        ";
        // line 52
        if (($this->getAttribute(($context["diarioData"] ?? null), "diariosAula", array()) == null)) {
            // line 53
            echo "            <h5 class=\"center fuente\" id=\"warning\" style=\"margin: 50px auto\"></h5>
        ";
        } else {
            // line 55
            echo "            <h5 class=\"center fuente\" id=\"result\" style=\"margin: 50px auto\"></h5>
            <div class=\"row\" id=\"busq\">
                <table class=\"responsive-table highlight tableDataDiario z-depth-3\" data-order='[[ 0, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                        <tr class=\"blue darken-3 white-text\">
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Alumnado</th>
                            <th>Profesorado</th>
                            <th>Observaciones</th>
                            <th>Actitud</th>
                            <th>Trabajo</th>
                            <th>Asiste</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["diarioData"] ?? null), "diariosAula", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["diario"]) {
                // line 74
                echo "                        <tr>
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["diario"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "hora", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["diario"], "idSancion", array()), "idAlumno", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["diario"], "idSancion", array()), "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo "</a>
                            </td>
                            ";
                // line 80
                if (($this->getAttribute($context["diario"], "idProfesor", array()) == null)) {
                    // line 81
                    echo "                                <td>Ningún profesor asignado</td>
                            ";
                } else {
                    // line 83
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["diario"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 85
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "observaciones", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "actitud", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["diario"], "trabajo", array()), "html", null, true);
                echo "</td>
                            ";
                // line 88
                if (($this->getAttribute($context["diario"], "asiste", array()) == 0)) {
                    // line 89
                    echo "                                <td>Pendiente</td>
                            ";
                } else {
                    // line 91
                    echo "                                <td>Ha asistido</td>
                            ";
                }
                // line 93
                echo "                            <td>
                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_diario", array("id" => $this->getAttribute($context["diario"], "id", array()))), "html", null, true);
                echo "\">
                                    <i class=\"material-icons\">edit</i>
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 104
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/diarioAulaConvivencia:diarioAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 104,  218 => 100,  206 => 94,  203 => 93,  199 => 91,  195 => 89,  193 => 88,  189 => 87,  185 => 86,  180 => 85,  174 => 83,  170 => 81,  168 => 80,  161 => 78,  156 => 76,  152 => 75,  149 => 74,  145 => 73,  125 => 55,  121 => 53,  119 => 52,  106 => 41,  100 => 40,  92 => 38,  84 => 36,  81 => 35,  77 => 34,  67 => 27,  58 => 20,  55 => 19,  52 => 18,  46 => 14,  42 => 12,  38 => 10,  36 => 9,  32 => 7,  29 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/diarioAulaConvivencia:diarioAula.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/diarioAulaConvivencia/diarioAula.html.twig");
    }
}
