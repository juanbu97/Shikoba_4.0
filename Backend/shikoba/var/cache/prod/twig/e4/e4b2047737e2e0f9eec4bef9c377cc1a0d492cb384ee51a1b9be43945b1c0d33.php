<?php

/* :convivencia/alumno:listaAlumnos.html.twig */
class __TwigTemplate_fa3a8758303a8079d489214cafaab027a6a2bd2e15fab19b490383c29b2b2031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/alumno:listaAlumnos.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/alumno:listaAlumnos.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) {
            // line 12
            echo "            <h3 class=\"center azul-prof fuente\">Tutoría</h3>
        ";
        } else {
            // line 14
            echo "        <h3 class=\"center azul-prof fuente\">Alumnado</h3>
        ";
        }
        // line 16
        echo "        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "alumno"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "alumnoError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 25
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        <form action=\"\">
          <div class=\"row\" id=\"busq\">
              <div class=\"col s12 l6\">
                  <div class=\"row\">
                      <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                          ";
        // line 35
        echo "                          ";
        // line 42
        echo "                      </div>
                  </div>
              </div>
          </div>
            <div class=\"row\">
                <table class=\"responsive-table highlight tableData z-depth-3\" data-order='[[ 0, \"asc\" ]]' data-page-length='10' style=\"margin-bottom: 1%\">
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th>Nombre</th>
                        <th>Nie</th>
                        <th>Teléfono</th>
                        <th>Cód.Postal</th>
                        <th>Puntos</th>
                        <th>TutorL1</th>
                        <th>TutorL2</th>
                        <th>Tlf. TutorL1</th>
                        <th>Tlf. TutorL2</th>
                        <th class=\"noExport\">Accion</th>";
        // line 60
        echo "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alumnos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 64
            echo "                        <tr>
                            <td>
                                ";
            // line 66
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarAlumno", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                echo "\">
                                        ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "getNombreCompletoYCurso", array(), "method"), "html", null, true);
                echo "
                                    </a>
                                ";
            }
            // line 71
            echo "                                ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 72
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "getNombreCompletoYCurso", array(), "method"), "html", null, true);
                echo "
                                ";
            }
            // line 74
            echo "                            </td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nie", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "telefono", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "codigoPostal", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "puntos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "tutorL1", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "tutorL2", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "telefonoTL1", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "telefonoTL2", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 84
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 85
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarAlumno", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"material-icons\">edit</i>
                                    </a>
                                ";
            }
            // line 89
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                </table>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/alumno:listaAlumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 92,  196 => 89,  188 => 85,  186 => 84,  181 => 82,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  150 => 74,  144 => 72,  141 => 71,  135 => 68,  130 => 67,  128 => 66,  124 => 64,  120 => 63,  115 => 60,  96 => 42,  94 => 35,  86 => 28,  77 => 25,  74 => 24,  70 => 23,  67 => 22,  58 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 14,  40 => 12,  38 => 11,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/alumno:listaAlumnos.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/listaAlumnos.html.twig");
    }
}
