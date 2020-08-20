<?php

/* convivencia/alumno/listaAlumnos.html.twig */
class __TwigTemplate_35fd204cfb00b2eecd337a3175660f06035fb71078621a4bf330e8414bcca185 extends Twig_Template
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
        $__internal_2d7ff090fe541d17b20797f23ba4a8937b826703927670fae2863846fd03bdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7ff090fe541d17b20797f23ba4a8937b826703927670fae2863846fd03bdaa->enter($__internal_2d7ff090fe541d17b20797f23ba4a8937b826703927670fae2863846fd03bdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/listaAlumnos.html.twig"));

        $__internal_2d933e96c2184783f78344438ec6b36e82344df28b77fcfc713758fe744ced7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d933e96c2184783f78344438ec6b36e82344df28b77fcfc713758fe744ced7a->enter($__internal_2d933e96c2184783f78344438ec6b36e82344df28b77fcfc713758fe744ced7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/listaAlumnos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d7ff090fe541d17b20797f23ba4a8937b826703927670fae2863846fd03bdaa->leave($__internal_2d7ff090fe541d17b20797f23ba4a8937b826703927670fae2863846fd03bdaa_prof);

        
        $__internal_2d933e96c2184783f78344438ec6b36e82344df28b77fcfc713758fe744ced7a->leave($__internal_2d933e96c2184783f78344438ec6b36e82344df28b77fcfc713758fe744ced7a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eb57db0216380e25fd748eafcd4ed53b1fbaf4faf5ac53801ad03c6c6142514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb57db0216380e25fd748eafcd4ed53b1fbaf4faf5ac53801ad03c6c6142514->enter($__internal_4eb57db0216380e25fd748eafcd4ed53b1fbaf4faf5ac53801ad03c6c6142514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a988a680aba0c4c5455dc556c1447cbfbe35e2cd1700d5309f429f612d78bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a988a680aba0c4c5455dc556c1447cbfbe35e2cd1700d5309f429f612d78bb8->enter($__internal_8a988a680aba0c4c5455dc556c1447cbfbe35e2cd1700d5309f429f612d78bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "alumno"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "alumnoError"), "method"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) || array_key_exists("alumnos", $context) ? $context["alumnos"] : (function () { throw new Twig_Error_Runtime('Variable "alumnos" does not exist.', 63, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 64
            echo "                        <tr>
                            <td>
                                ";
            // line 66
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarAlumno", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "id", array()))), "html", null, true);
                echo "\">
                                        ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "getNombreCompletoYCurso", array(), "method"), "html", null, true);
                echo "
                                    </a>
                                ";
            }
            // line 71
            echo "                                ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 72
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "getNombreCompletoYCurso", array(), "method"), "html", null, true);
                echo "
                                ";
            }
            // line 74
            echo "                            </td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "nie", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "telefono", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "codigoPostal", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "puntos", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "tutorL1", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "tutorL2", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "telefonoTL1", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "telefonoTL2", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 84
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 85
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarAlumno", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alumno"], "id", array()))), "html", null, true);
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
        
        $__internal_8a988a680aba0c4c5455dc556c1447cbfbe35e2cd1700d5309f429f612d78bb8->leave($__internal_8a988a680aba0c4c5455dc556c1447cbfbe35e2cd1700d5309f429f612d78bb8_prof);

        
        $__internal_4eb57db0216380e25fd748eafcd4ed53b1fbaf4faf5ac53801ad03c6c6142514->leave($__internal_4eb57db0216380e25fd748eafcd4ed53b1fbaf4faf5ac53801ad03c6c6142514_prof);

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
        return array (  222 => 92,  214 => 89,  206 => 85,  204 => 84,  199 => 82,  195 => 81,  191 => 80,  187 => 79,  183 => 78,  179 => 77,  175 => 76,  171 => 75,  168 => 74,  162 => 72,  159 => 71,  153 => 68,  148 => 67,  146 => 66,  142 => 64,  138 => 63,  133 => 60,  114 => 42,  112 => 35,  104 => 28,  95 => 25,  92 => 24,  88 => 23,  85 => 22,  76 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 14,  58 => 12,  56 => 11,  52 => 9,  49 => 8,  40 => 7,  11 => 5,);
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
", "convivencia/alumno/listaAlumnos.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/alumno/listaAlumnos.html.twig");
    }
}
