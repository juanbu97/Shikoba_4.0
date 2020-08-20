<?php

/* :convivencia/sanciones:sanciones.html.twig */
class __TwigTemplate_c1e3a6eeaa414c0ebe8de7bcf03c037f01f331bbd96d870b904c695e5300154e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/sanciones:sanciones.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/sanciones:sanciones.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Sanciones</h3>

        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "sancion"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "                <div class=\"card-panel green white-text flash\">
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
        echo "
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "sancionError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 21
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 22
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>

        <form action=\"\">
            <div class=\"row\" id=\"busq\">

                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        ";
        // line 33
        echo "                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            ";
        // line 35
        echo "                            ";
        // line 41
        echo "                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                ";
        // line 43
        echo "                                ";
        // line 47
        echo "                                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
            // line 48
            echo "                                    <a id=\"parte\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
            echo "\"
                                       class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                       title=\"Nueva sanción\">Nueva
                                        <i class=\"material-icons right\">add</i></a>
                                ";
        }
        // line 53
        echo "                            </div>
                        </div>
                        <div class=\"col s2 l1\">
                            ";
        // line 57
        echo "                            ";
        // line 58
        echo "                            ";
        // line 60
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"tableDataMedidas responsive-table highlight z-depth-3\" data-order='[[ 1, \"desc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th class=\"noExport\">NumSanción</th>
                        <th>Fecha</th>
                        <th>Alumnado</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Final</th>
                        <th>Tipo</th>
                        ";
        // line 76
        echo "                        <th>Estado</th>
                        <th class=\"noExport\">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            // line 82
            echo "                        <tr>
                            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                            ";
            // line 92
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                            ";
            // line 93
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 94
                echo "                                <td><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
                echo "?idSancion=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
                echo "\">
                                        <i class=\"material-icons\">edit</i></a>
                                    <a class=\"confirm paddingRightLeft \"
                                       href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_sancion", array("id" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                echo "\"
                                       data-title=\"Eliminar sanción\" data-content=\"Se va proceder a eliminar la sanción, ¿desea continuar?\"><i class=\"material-icons \">delete</i></a>
                                </td>
                            ";
            } else {
                // line 101
                echo "                                <td></td>
                            ";
            }
            // line 103
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 109
        echo "            ";
        // line 110
        echo "            ";
        // line 111
        echo "        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/sanciones:sanciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 111,  216 => 110,  214 => 109,  209 => 105,  202 => 103,  198 => 101,  191 => 97,  182 => 94,  180 => 93,  175 => 92,  171 => 90,  167 => 89,  163 => 88,  156 => 86,  151 => 84,  147 => 83,  144 => 82,  140 => 81,  133 => 76,  116 => 60,  114 => 58,  112 => 57,  107 => 53,  98 => 48,  95 => 47,  93 => 43,  90 => 41,  88 => 35,  85 => 33,  76 => 25,  67 => 22,  64 => 21,  60 => 20,  57 => 19,  48 => 16,  45 => 15,  41 => 14,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/sanciones:sanciones.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/sanciones/sanciones.html.twig");
    }
}
