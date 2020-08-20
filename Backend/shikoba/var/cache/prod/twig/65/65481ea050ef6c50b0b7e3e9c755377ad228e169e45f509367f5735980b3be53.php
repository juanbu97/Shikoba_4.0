<?php

/* convivencia/alumno/listaAlumnos.html.twig */
class __TwigTemplate_c71b53602f77a6608fa507adb5c60afc68a5ee194d171eeafd1c7193b48c984c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/alumno/listaAlumnos.html.twig", 5);
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
        $__internal_90d59a5b1467f9a1341953a6cd87bc5f755f8d1eadcefb474136a817fffef5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d59a5b1467f9a1341953a6cd87bc5f755f8d1eadcefb474136a817fffef5af->enter($__internal_90d59a5b1467f9a1341953a6cd87bc5f755f8d1eadcefb474136a817fffef5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/listaAlumnos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d59a5b1467f9a1341953a6cd87bc5f755f8d1eadcefb474136a817fffef5af->leave($__internal_90d59a5b1467f9a1341953a6cd87bc5f755f8d1eadcefb474136a817fffef5af_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_13712cdbe1ad13499edcebfce37ef0cfa0b5c770fce39158df0fc6f8c5557887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13712cdbe1ad13499edcebfce37ef0cfa0b5c770fce39158df0fc6f8c5557887->enter($__internal_13712cdbe1ad13499edcebfce37ef0cfa0b5c770fce39158df0fc6f8c5557887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/alumno/listaAlumnos.html.twig", 8)->display($context);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alumno"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alumnoError"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(($context["alumnos"] ?? $this->getContext($context, "alumnos")));
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
        
        $__internal_13712cdbe1ad13499edcebfce37ef0cfa0b5c770fce39158df0fc6f8c5557887->leave($__internal_13712cdbe1ad13499edcebfce37ef0cfa0b5c770fce39158df0fc6f8c5557887_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/alumno/listaAlumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 92,  205 => 89,  197 => 85,  195 => 84,  190 => 82,  186 => 81,  182 => 80,  178 => 79,  174 => 78,  170 => 77,  166 => 76,  162 => 75,  159 => 74,  153 => 72,  150 => 71,  144 => 68,  139 => 67,  137 => 66,  133 => 64,  129 => 63,  124 => 60,  105 => 42,  103 => 35,  95 => 28,  86 => 25,  83 => 24,  79 => 23,  76 => 22,  67 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 14,  49 => 12,  47 => 11,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de alumnado.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        {% if ( is_granted('ROLE_PROFESOR')) %}
            <h3 class=\"center azul-prof fuente\">Tutoría</h3>
        {% else %}
        <h3 class=\"center azul-prof fuente\">Alumnado</h3>
        {% endif %}
        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('alumno') %}
                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('alumnoError') %}
                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
        <form action=\"\">
          <div class=\"row\" id=\"busq\">
              <div class=\"col s12 l6\">
                  <div class=\"row\">
                      <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                          {#Comentamos el buscador sin uso del histórico#}
                          {#<div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                              <button class=\"z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                                      type=\"submit\"
                                      value=\"Buscar\" title=\"Buscar\">
                                      <i class=\"material-icons right\">search</i>
                                      </button>
                          </div>#}
                      </div>
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
                        <th class=\"noExport\">Accion</th>{# Añadimos esa clase para controlar la no exportación de acciones #}
                    </tr>
                    </thead>
                    <tbody>
                    {% for alumno in alumnos %}
                        <tr>
                            <td>
                                {% if ( is_granted('ROLE_ADMIN')) %}
                                    <a href=\"{{ path('editarAlumno', { 'id': alumno.id}) }}\">
                                        {{ alumno.getNombreCompletoYCurso() }}
                                    </a>
                                {% endif %}
                                {% if ( is_granted('ROLE_CONVIVENCIA') or is_granted('ROLE_PROFESOR')) %}
                                        {{ alumno.getNombreCompletoYCurso() }}
                                {% endif %}
                            </td>
                            <td>{{ alumno.nie }}</td>
                            <td>{{ alumno.telefono }}</td>
                            <td>{{ alumno.codigoPostal }}</td>
                            <td>{{ alumno.puntos }}</td>
                            <td>{{ alumno.tutorL1 }}</td>
                            <td>{{ alumno.tutorL2 }}</td>
                            <td>{{ alumno.telefonoTL1 }}</td>
                            <td>{{ alumno.telefonoTL2 }}</td>
                            <td>
                                {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR')) %}
                                    <a href=\"{{ path('editarAlumno', { 'id': alumno.id}) }}\">
                                        <i class=\"material-icons\">edit</i>
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </form>
    </div>
{% endblock %}
", "convivencia/alumno/listaAlumnos.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\alumno\\listaAlumnos.html.twig");
    }
}
