<?php

/* :convivencia/noticias:noticiasForm.html.twig */
class __TwigTemplate_9fc9a60446b09c3bed6b63eac1dcbdfa16162c636faa756e127799e39f8080a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/noticias:noticiasForm.html.twig", 5);
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
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/noticias:noticiasForm.html.twig", 9)->display($context);
        // line 10
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Editar noticia</h3>
        <form>
            <div class=\"input-field col s6 m4 offset-m2\" id=\"noticiascursos\">
                <label for=\"puntosnoticias\"></label>
                <select id=\"puntosnoticias\" name=\"puntos[]\" required>

                    ";
        // line 17
        if (array_key_exists("noticia", $context)) {
            // line 18
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"
                                ";
                // line 20
                if (($context["i"] == $this->getAttribute($this->getAttribute(($context["noticia"] ?? null), 0, array(), "array"), "puntos", array()))) {
                    // line 21
                    echo "                                    selected
                                ";
                }
                // line 23
                echo "                             >";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
                    ";
        } else {
            // line 27
            echo "                        <option value=\"\" disabled selected>Elige puntos</option>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    ";
        }
        // line 32
        echo "                </select>
            </div>
            <div class=\"input-field col s6 m4\" id=\"noticiascursos\">
                <label for=\"cursosnoticias\"></label>
                <select id=\"cursosnoticias\"  name=\"cursos[]\" required>
                    ";
        // line 37
        if (array_key_exists("noticia", $context)) {
            // line 38
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                // line 39
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
                echo "\"
                                    ";
                // line 40
                if (($this->getAttribute($context["curso"], "grupo", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["noticia"] ?? null), 0, array(), "array"), "idcurso", array()), "grupo", array()))) {
                    // line 41
                    echo "                                        selected
                                    ";
                }
                // line 43
                echo "                            >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "grupo", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    ";
        } else {
            // line 46
            echo "                        <option value=\"\" disabled selected>Elige grupo</option>
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                // line 48
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "grupo", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    ";
        }
        // line 51
        echo "                </select>
            </div>
            <div class=\"input-field col s6 m4 offset-m2\">
                <label for=\"inicioNoticia\">Fecha de inicio</label>
                <input id=\"inicioNoticia\" type=\"text\" name=\"fechaInicio\" class=\"datepicker\"
                        ";
        // line 56
        if (array_key_exists("noticia", $context)) {
            // line 57
            echo "                            value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["noticia"] ?? null), 0, array(), "array"), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 59
            echo "                            value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo "\"
                        ";
        }
        // line 61
        echo "                       required>
            </div>
            <div class=\"input-field col s6 m4\">
                <label for=\"finNoticia\">Fecha finalización</label>
                <input id=\"finNoticia\" type=\"text\" name=\"fechaFinal\" class=\"datepicker\"
                        ";
        // line 66
        if (array_key_exists("noticia", $context)) {
            // line 67
            echo "                            value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["noticia"] ?? null), 0, array(), "array"), "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "\"
                        ";
        } else {
            // line 69
            echo "                            value=\"\"
                        ";
        }
        // line 70
        echo " required>
            </div>
            <div class=\"col s12 m8 offset-m2\">
                <label for=\"editor1\"></label>
                <textarea name=\"editor1\" id=\"editor1\" rows=\"10\" cols=\"80\">
                    ";
        // line 75
        if (array_key_exists("noticia", $context)) {
            // line 76
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["noticia"] ?? null), 0, array(), "array"), "noticia_texto", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 78
            echo "                        Inserte la noticia aquí...
                    ";
        }
        // line 80
        echo "            </textarea>
                <script>
                    // Replace the <textarea id=\"editor1\"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('editor1');
                </script>
            </div>
            <div style=\"margin-top: 3%\" class=\"col s12 center\">
                <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\"
                   class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                   style=\"margin-bottom: 1%\">Cancelar
                    <i class=\"material-icons left\">undo</i>
                </a>
                <button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                        style=\"margin-bottom: 1%\"
                        value=\"Enviar\">Enviar
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/noticias:noticiasForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 88,  216 => 80,  212 => 78,  206 => 76,  204 => 75,  197 => 70,  193 => 69,  187 => 67,  185 => 66,  178 => 61,  172 => 59,  166 => 57,  164 => 56,  157 => 51,  154 => 50,  143 => 48,  139 => 47,  136 => 46,  133 => 45,  124 => 43,  120 => 41,  118 => 40,  113 => 39,  108 => 38,  106 => 37,  99 => 32,  96 => 31,  85 => 29,  81 => 28,  78 => 27,  74 => 25,  65 => 23,  61 => 21,  59 => 20,  54 => 19,  49 => 18,  47 => 17,  38 => 10,  36 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/noticias:noticiasForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/noticias/noticiasForm.html.twig");
    }
}
