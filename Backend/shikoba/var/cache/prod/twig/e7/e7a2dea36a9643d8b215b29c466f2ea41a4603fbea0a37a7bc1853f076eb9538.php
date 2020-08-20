<?php

/* :convivencia/partes:imprimirParte.html.twig */
class __TwigTemplate_e116568b9378c0e57fbb0a92ac0f665d8f259444ce5f4186a0d32c4c7495df35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "<meta charset=\"UTF-8\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/partesEstilos.css")), "html", null, true);
        echo "\">
<div>
    <div style=\"width: 10%;display: inline-block; margin-right: 20px\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logoJunta.svg.png")), "html", null, true);
        echo "\"
             width=\"90\" height=\"70\" alt=\"imagen\">
    </div>
    <div style=\"width: 50%;display: inline-block;vertical-align: top;margin-top: 2%;margin-left:1%; font-size: 15px\">
        CONSEJERÍA DE EDUCACIÓN GRAN CAPITÁN CÓRDOBA
    </div>
    <div style=\"width: 100%\">
        <h2 style=\"font-size: 20px; text-align: center; margin-top:0\">PARTE DE INCIDENCIAS</h2>
    </div>
    <table>
        <tr>
            <td colspan=\"2\" class=\"faltas\">APELLIDOS DEL ALUMNO<br> ";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "apellido1", array()) . " ") . $this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "apellido2", array())), "html", null, true);
        echo "
            </td>
            <td class=\"faltas\">NOMBRE DEL ALUMNO<br> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "nombre", array()), "html", null, true);
        echo "
            </td>
            <td class=\"curso\">CURSO<br> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
        echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"2\">PROFESOR QUE TRAMITA EL PARTE
                <br>";
        // line 29
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idProfesor", array()), "nombre", array()) . " ") . $this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idProfesor", array()), "apellido1", array())) . " ") . $this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idProfesor", array()), "apellido2", array())), "html", null, true);
        echo "
            </td>
            ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "idCurso", array()), "idTutor", array()) != null)) {
            // line 32
            echo "                <td colspan=\"2\">TUTOR DEL GRUPO DEL ALUMNO
                    <br>";
            // line 33
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "idCurso", array()), "idTutor", array()), "nombre", array()) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "idCurso", array()), "idTutor", array()), "apellido1", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
($context["partes"] ?? null), "idAlumno", array()), "idCurso", array()), "idTutor", array()), "apellido2", array())), "html", null, true);
            echo "
                    <br>
                </td>
            ";
        } else {
            // line 38
            echo "                <td colspan=\"2\">TUTOR DEL GRUPO DEL ALUMNO<br>No existe tutor asignado<br>
                </td>
            ";
        }
        // line 41
        echo "        </tr>
        <tr class=\"back\">
            <td colspan=\"4\" class=\"back\">CAUSAS DEL PARTE (marcar todas las que correspondan)</td>
        </tr>
        <tr class=\"back\">
            <td colspan=\"1\" class=\"back\">A/ FALTAS LEVES</td>
            <td colspan=\"1\" class=\"alig back\">PUNTOS</td>
            <td colspan=\"1\" class=\"back\">B/ FALTAS GRAVES</td>
            <td colspan=\"1\" class=\"alig back\">PUNTOS</td>
        </tr>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["partes"] ?? null), "idConducta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["conductas"]) {
            // line 52
            echo "            <tr id=\"conducta\">
                ";
            // line 53
            if (($this->getAttribute($context["conductas"], "puntos", array()) >  -8)) {
                // line 54
                echo "                    <td colspan=\"1\" class=\"faltas\">
                        <input type=\"checkbox\" checked id=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "id", array()), "html", null, true);
                echo "\">
                        <label for=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "conducta", array()), "html", null, true);
                echo "</label>
                    </td>
                    <td colspan=\"1\" class=\"faltas2 alig\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "puntos", array()), "html", null, true);
                echo "</td>
                    <td colspan=\"1\" class=\"faltas\"></td>
                    <td colspan=\"1\" class=\"faltas2 alig\"></td>
                ";
            } else {
                // line 62
                echo "                    <td colspan=\"1\" class=\"faltas\"></td>
                    <td colspan=\"1\" class=\"faltas2 alig\"></td>
                    <td colspan=\"1\" class=\"faltas\">
                        <input type=\"checkbox\" checked id=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "id", array()), "html", null, true);
                echo "\">
                        <label for=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "conducta", array()), "html", null, true);
                echo "</label>
                    </td>
                    <td colspan=\"1\" class=\"faltas2 alig\">";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["conductas"], "puntos", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 70
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conductas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <tr class=\"back\">
            <td colspan=\"4\" class=\"back\">DETALLE DE LA CONDUCTA</td>
        </tr>
        <tr>
            <td colspan=\"4\">
                ";
        // line 77
        if ((null === $this->getAttribute(($context["partes"] ?? null), "descripcion", array()))) {
            // line 78
            echo "                    No es necesario
                ";
        } else {
            // line 80
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["partes"] ?? null), "descripcion", array()), "html", null, true);
            echo "
                ";
        }
        // line 82
        echo "            </td>
        </tr>
        <tr class=\"back\">
            <td colspan=\"4\" class=\"back\">TAREA PROPUESTA</td>
        </tr>
        <tr>
            <td colspan=\"4\">
                ";
        // line 89
        if ((null === $this->getAttribute(($context["partes"] ?? null), "tareas", array()))) {
            // line 90
            echo "                    No es necesario
                ";
        } else {
            // line 92
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["partes"] ?? null), "tareas", array()), "html", null, true);
            echo "
                ";
        }
        // line 94
        echo "
            </td>
        </tr>
        <tr class=\"back\">
            <td colspan=\"4\" class=\"back\">SI IMPLICA EXPULSIÓN DEL AULA</td>
        </tr>
        <tr>
            <td class=\"expulsion\">Hora de salida del aula</td>
            <td class=\"expulsion\">
                ";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["partes"] ?? null), "horaSalidaAula", array()), "H:i"), "html", null, true);
        echo "
            </td>
            <td class=\"expulsion\">Hora de llegada a jefatura</td>
            <td class=\"expulsion\">
                ";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["partes"] ?? null), "horaLlegadaJefatura", array()), "H:i"), "html", null, true);
        echo "
            </td>
        </tr>
        <tr>
            <td class=\"expulsion\">Fecha</td>
            <td class=\"expulsion\">
                ";
        // line 113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["partes"] ?? null), "fecha", array()), "d/m/Y"), "html", null, true);
        echo "
            </td>
            <td class=\"expulsion\" style=\"border-right: 0\">Firma del profesor</td>
            <td class=\"expulsion\" style=\"border-left: 0\"><br></td>
        </tr>
        <tr>
            ";
        // line 119
        if (($this->getAttribute(($context["partes"] ?? null), "recupera", array()) != 0)) {
            // line 120
            echo "                <td colspan=\"4\">
                    <input type=\"checkbox\" checked id=\"checkbo\">
                    <label for=\"checkbo\" class=\"expulsion\">
                        Actitud correcta
                        en el aula de convivencia y/o
                        realización de tareas (Rebaja 1 punto)
                    </label>
                </td>
            ";
        }
        // line 129
        echo "            ";
        if (($this->getAttribute(($context["partes"] ?? null), "recupera", array()) == 0)) {
            // line 130
            echo "                <td colspan=\"4\">
                    <input type=\"checkbox\" id=\"checkbo\">
                    <label class=\"expulsion\" for=\"checkbo\">Actitud
                        correcta en el
                        aula de convivencia y/o
                        realización de tareas (Rebaja 1 punto)
                    </label>
                </td>
            ";
        }
        // line 139
        echo "        </tr>
    </table>
    <br><br>

    <div class=\"borde firma\">
        <p class=\"firma\">D./Dña. _____________________________________________________________________________</p>
        <p class=\"firma\">padre/madre/tutor legal de
            <b class=\"firma\">";
        // line 146
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "nombre", array()) . " ") . $this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "apellido1", array())) . " ") . $this->getAttribute($this->getAttribute(($context["partes"] ?? null), "idAlumno", array()), "apellido2", array())), "html", null, true);
        echo "</b>,
            ha recibido el Parte de Incidencias relativo a su hijo/a.</p>
        <p class=\"firma\">En Córdoba a ______ de ___________________ de 20_____</p>
        <p class=\"firma\">Firma</p><br>
    </div>
    <div style=\"font-size: 14px;text-align: center\">
        <br>El presente parte de incidencias se devolverá firmado al día
        siguiente de su recepción.<br>En otro caso, el alumno será objeto de un nuevo parte sancionador)
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":convivencia/partes:imprimirParte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 146,  256 => 139,  245 => 130,  242 => 129,  231 => 120,  229 => 119,  220 => 113,  211 => 107,  204 => 103,  193 => 94,  187 => 92,  183 => 90,  181 => 89,  172 => 82,  166 => 80,  162 => 78,  160 => 77,  153 => 72,  146 => 70,  141 => 68,  134 => 66,  130 => 65,  125 => 62,  118 => 58,  111 => 56,  107 => 55,  104 => 54,  102 => 53,  99 => 52,  95 => 51,  83 => 41,  78 => 38,  71 => 34,  70 => 33,  67 => 32,  65 => 31,  60 => 29,  52 => 24,  47 => 22,  42 => 20,  28 => 9,  22 => 6,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/partes:imprimirParte.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/partes/imprimirParte.html.twig");
    }
}
