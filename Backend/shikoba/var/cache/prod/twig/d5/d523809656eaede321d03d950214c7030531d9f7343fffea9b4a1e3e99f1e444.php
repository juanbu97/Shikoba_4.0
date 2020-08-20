<?php

/* :convivencia/informes:partesGruposInforme.html.twig */
class __TwigTemplate_7bf042a82b41d538548f7466e0d773cc74ced8dedb10edc82de369a059f760f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/informes:partesGruposInforme.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/informes:partesGruposInforme.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\" style=\"margin-bottom: 50px\">Informe partes grupos</h3>
        ";
        // line 12
        if ((($context["data"] ?? null) == null)) {
            // line 13
            echo "        <div class=\"row\" style=\"margin-left: 23%; margin-bottom: 0\" >
            <div class=\"col s12 16 \">
                <div class=\"row\">
                    <form action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_grupos_informe");
            echo "\" method=\"post\">
                        <div class=\"col s4 m4\" >
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
        echo "        ";
        if ((($context["data"] ?? null) != null)) {
            // line 45
            echo "            <table class=\"responsive-table highlight tableData z-depth-1\" data-order='[[ 1, \"desc\" ]]' data-page-length='10'
                   style=\"margin-bottom: 2%; margin-top: 0\">
                <thead>
                <tr class=\"blue darken-3 white-text\">
                    <th>Grupo</th>
                    <th>Partes</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 55
                echo "                    <tr>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Grupo", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "Partes", array(), "array"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </tbody>
            </table>
        ";
        }
        // line 63
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/informes:partesGruposInforme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 63,  120 => 60,  111 => 57,  107 => 56,  104 => 55,  100 => 54,  89 => 45,  86 => 44,  64 => 25,  56 => 20,  49 => 16,  44 => 13,  42 => 12,  38 => 10,  36 => 9,  33 => 8,  29 => 5,  27 => 7,  25 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/informes:partesGruposInforme.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/partesGruposInforme.html.twig");
    }
}
