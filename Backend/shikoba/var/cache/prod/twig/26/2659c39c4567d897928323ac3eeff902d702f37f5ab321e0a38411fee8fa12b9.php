<?php

/* convivencia/noticias/noticiasForm.html.twig */
class __TwigTemplate_9a53b1cbd9a60c8e0f71f0a75578f82b54c856d47c1c1ca9cf5e826f0fcf6b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/noticias/noticiasForm.html.twig", 5);
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
        $__internal_354ce887de776089792f9f222f069e9db424086e4ff9416a760e6cfa1f58a1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354ce887de776089792f9f222f069e9db424086e4ff9416a760e6cfa1f58a1b6->enter($__internal_354ce887de776089792f9f222f069e9db424086e4ff9416a760e6cfa1f58a1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticiasForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_354ce887de776089792f9f222f069e9db424086e4ff9416a760e6cfa1f58a1b6->leave($__internal_354ce887de776089792f9f222f069e9db424086e4ff9416a760e6cfa1f58a1b6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_35294035d32e3c1c8cf5f76116e497df5920d12968437e7e272e029b17b616d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35294035d32e3c1c8cf5f76116e497df5920d12968437e7e272e029b17b616d2->enter($__internal_35294035d32e3c1c8cf5f76116e497df5920d12968437e7e272e029b17b616d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/noticias/noticiasForm.html.twig", 9)->display($context);
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
                if (($context["i"] == $this->getAttribute($this->getAttribute(($context["noticia"] ?? $this->getContext($context, "noticia")), 0, array(), "array"), "puntos", array()))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? $this->getContext($context, "cursos")));
            foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
                // line 39
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "id", array()), "html", null, true);
                echo "\"
                                    ";
                // line 40
                if (($this->getAttribute($context["curso"], "grupo", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["noticia"] ?? $this->getContext($context, "noticia")), 0, array(), "array"), "idcurso", array()), "grupo", array()))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? $this->getContext($context, "cursos")));
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["noticia"] ?? $this->getContext($context, "noticia")), 0, array(), "array"), "fechaInicio", array()), "d/m/Y"), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["noticia"] ?? $this->getContext($context, "noticia")), 0, array(), "array"), "fechaFinal", array()), "d/m/Y"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["noticia"] ?? $this->getContext($context, "noticia")), 0, array(), "array"), "noticia_texto", array()), "html", null, true);
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
        
        $__internal_35294035d32e3c1c8cf5f76116e497df5920d12968437e7e272e029b17b616d2->leave($__internal_35294035d32e3c1c8cf5f76116e497df5920d12968437e7e272e029b17b616d2_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/noticias/noticiasForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 88,  225 => 80,  221 => 78,  215 => 76,  213 => 75,  206 => 70,  202 => 69,  196 => 67,  194 => 66,  187 => 61,  181 => 59,  175 => 57,  173 => 56,  166 => 51,  163 => 50,  152 => 48,  148 => 47,  145 => 46,  142 => 45,  133 => 43,  129 => 41,  127 => 40,  122 => 39,  117 => 38,  115 => 37,  108 => 32,  105 => 31,  94 => 29,  90 => 28,  87 => 27,  83 => 25,  74 => 23,  70 => 21,  68 => 20,  63 => 19,  58 => 18,  56 => 17,  47 => 10,  45 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de edición de noticias.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    <script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Editar noticia</h3>
        <form>
            <div class=\"input-field col s6 m4 offset-m2\" id=\"noticiascursos\">
                <label for=\"puntosnoticias\"></label>
                <select id=\"puntosnoticias\" name=\"puntos[]\" required>

                    {% if noticia is defined %}
                        {% for i in 0..10 %}
                            <option value=\"{{ i }}\"
                                {% if (i == noticia[0].puntos ) %}
                                    selected
                                {% endif %}
                             >{{ i }}</option>
                        {% endfor %}

                    {% else %}
                        <option value=\"\" disabled selected>Elige puntos</option>
                        {% for i in 0..10 %}
                            <option value=\"{{ i }}\">{{ i }}</option>
                        {% endfor %}
                    {% endif %}
                </select>
            </div>
            <div class=\"input-field col s6 m4\" id=\"noticiascursos\">
                <label for=\"cursosnoticias\"></label>
                <select id=\"cursosnoticias\"  name=\"cursos[]\" required>
                    {% if noticia is defined %}
                        {% for curso in cursos %}
                            <option value=\"{{ curso.id }}\"
                                    {% if (curso.grupo == noticia[0].idcurso.grupo ) %}
                                        selected
                                    {% endif %}
                            >{{ curso.grupo }}</option>
                        {% endfor %}
                    {% else %}
                        <option value=\"\" disabled selected>Elige grupo</option>
                        {% for curso in cursos %}
                            <option value=\"{{ curso.id }}\">{{ curso.grupo }}</option>
                        {% endfor %}
                    {% endif %}
                </select>
            </div>
            <div class=\"input-field col s6 m4 offset-m2\">
                <label for=\"inicioNoticia\">Fecha de inicio</label>
                <input id=\"inicioNoticia\" type=\"text\" name=\"fechaInicio\" class=\"datepicker\"
                        {% if noticia is defined %}
                            value=\"{{ noticia[0].fechaInicio|date(\"d/m/Y\") }}\"
                        {% else %}
                            value=\"{{ \"now\"|date('d/m/Y') }}\"
                        {% endif %}
                       required>
            </div>
            <div class=\"input-field col s6 m4\">
                <label for=\"finNoticia\">Fecha finalización</label>
                <input id=\"finNoticia\" type=\"text\" name=\"fechaFinal\" class=\"datepicker\"
                        {% if noticia is defined %}
                            value=\"{{ noticia[0].fechaFinal|date(\"d/m/Y\") }}\"
                        {% else %}
                            value=\"\"
                        {% endif %} required>
            </div>
            <div class=\"col s12 m8 offset-m2\">
                <label for=\"editor1\"></label>
                <textarea name=\"editor1\" id=\"editor1\" rows=\"10\" cols=\"80\">
                    {% if noticia is defined %}
                        {{ noticia[0].noticia_texto }}
                    {% else %}
                        Inserte la noticia aquí...
                    {% endif %}
            </textarea>
                <script>
                    // Replace the <textarea id=\"editor1\"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('editor1');
                </script>
            </div>
            <div style=\"margin-top: 3%\" class=\"col s12 center\">
                <a href=\"{{ path('noticias') }}\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\"
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
{% endblock %}
", "convivencia/noticias/noticiasForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/noticias/noticiasForm.html.twig");
    }
}
