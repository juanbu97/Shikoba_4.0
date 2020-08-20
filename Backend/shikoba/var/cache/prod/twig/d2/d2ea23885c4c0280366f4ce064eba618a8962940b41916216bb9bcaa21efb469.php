<?php

/* :convivencia/informes:sancionesAlumnadoGrupoInforme.html.twig */
class __TwigTemplate_df1e543830c2e0db11f03d744f3d286fbec16e84663b0f7b1f03b186b0a0b3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/informes:sancionesAlumnadoGrupoInforme.html.twig", 5);
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
        // line 6
        $context["modify"] = "1";
        // line 7
        $context["fecha"] = twig_date_format_filter($this->env, "now", "m/d/Y");
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/informes:sancionesAlumnadoGrupoInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe sanciones alumnado</h3>
        ";
        // line 12
        if ((($context["data"] ?? null) == null)) {
            // line 13
            echo "            <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\">
                <div class=\"col s12 16 \">
                    <div class=\"row\">
                        <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sanciones_alumnosgrupos_informe");
            echo "\" method=\"post\">
                            <div class=\"col s4 m4\">
                                <label for=\"fechaI\">Fecha inicial</label>
                                <input id=\"fechaI\" type=\"text\" name=\"fechaI\"
                                       value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["fecha"] ?? null), (("-" . ($context["modify"] ?? null)) . " month")), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <label for=\"fechaF\">Fecha final</label>
                                <input id=\"fechaF\" type=\"text\" name=\"fechaF\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? null), "d/m/Y"), "html", null, true);
            echo "\"
                                       class=\"datepicker\"/>
                            </div>
                            <div class=\"col s4 m4\">
                                <div class=\"i-checks col s12 left-align\" style=\"margin-top: 8%;padding-left: 0;\">
                                    <div class=\"\" id=\"botonbus\">
                                        <button
                                                class=\" z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                                type=\"submit\" value=\"Buscar\" title=\"Buscar\">
                                            <i class=\"material-icons right\">search</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if ((($context["data"] ?? null) != null)) {
            // line 46
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 3, \"desc\" ]]'
                   data-page-length='10'
                   style=\"margin-bottom: 3%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Sanciones</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 59
                echo "                    <tr>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Nombre", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "max(tipo)", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, (($this->getAttribute($context["values"], "Sanciones", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["values"], "Sanciones", array(), "array"), "-")) : ("-")), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </tbody>
            </table>
        ";
        }
        // line 69
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/informes:sancionesAlumnadoGrupoInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 69,  134 => 66,  125 => 63,  121 => 62,  117 => 61,  113 => 60,  110 => 59,  106 => 58,  92 => 46,  90 => 45,  87 => 44,  65 => 25,  57 => 20,  50 => 16,  45 => 13,  43 => 12,  39 => 10,  36 => 9,  33 => 8,  29 => 5,  27 => 7,  25 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/informes:sancionesAlumnadoGrupoInforme.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig");
    }
}
