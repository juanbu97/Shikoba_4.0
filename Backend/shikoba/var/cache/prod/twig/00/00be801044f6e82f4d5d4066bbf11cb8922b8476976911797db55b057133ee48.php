<?php

/* convivencia/noticias/noticias.html.twig */
class __TwigTemplate_5a0424abadaa93fc336d2eb34d9ae6b382a9795e17652d09bbc2ee4f8e3b372c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/noticias/noticias.html.twig", 5);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e9f47682ef6f812c1cd2282d89a0478295f0d5c050c4434436a1b0b1d28e57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9f47682ef6f812c1cd2282d89a0478295f0d5c050c4434436a1b0b1d28e57d->enter($__internal_5e9f47682ef6f812c1cd2282d89a0478295f0d5c050c4434436a1b0b1d28e57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9f47682ef6f812c1cd2282d89a0478295f0d5c050c4434436a1b0b1d28e57d->leave($__internal_5e9f47682ef6f812c1cd2282d89a0478295f0d5c050c4434436a1b0b1d28e57d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e04252d7818de42ab3bc8d05f202df9f7ccc696dc43ede312a44dd8f18d35fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04252d7818de42ab3bc8d05f202df9f7ccc696dc43ede312a44dd8f18d35fed->enter($__internal_e04252d7818de42ab3bc8d05f202df9f7ccc696dc43ede312a44dd8f18d35fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #resultados-contenido {
            border: 1px solid black;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
            margin-bottom: 25px;
        }
    </style>
";
        
        $__internal_e04252d7818de42ab3bc8d05f202df9f7ccc696dc43ede312a44dd8f18d35fed->leave($__internal_e04252d7818de42ab3bc8d05f202df9f7ccc696dc43ede312a44dd8f18d35fed_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_26bf6089bed80d0a92d6bedf51665fa9c4bf675ae186094bfce4a06f59165113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bf6089bed80d0a92d6bedf51665fa9c4bf675ae186094bfce4a06f59165113->enter($__internal_26bf6089bed80d0a92d6bedf51665fa9c4bf675ae186094bfce4a06f59165113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/noticias/noticias.html.twig", 20)->display($context);
        // line 21
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Noticias</h3>
        <div class=\"row center\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaNoticia");
        echo "\"
               class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
               title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
        </div>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "noticia"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 30
            echo "                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">";
            // line 31
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "noticiaError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 36
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        </div>
        <div class=\"divider3\"></div>
        <div class=\"row\" style=\"padding: 6%; margin-top: -40px\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["noticias"] ?? $this->getContext($context, "noticias")));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 45
            echo "                <div id=\"resultados-contenido\">
                    <div style=\"display: flex;justify-content: flex-end; \">
                        <p style=\"margin: 5px\" id=\"fechaI\"><b>Fecha inicio: </b>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p style=\"margin: 5px\" id=\"fechaF\"><b>Fecha fin: </b>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                    <div style=\"padding: 2%\">
                        <p id=\"noticiatd\" id=\"texto\">";
            // line 51
            echo $this->getAttribute($context["noticia"], "noticia_texto", array());
            echo "</p>
                    </div>
                    <div style=\"display: flex; justify-content: flex-end\">
                        <p style=\"margin: 5px\" id=\"grupo\"><b>Curso: </b>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "idCurso", array()), "grupo", array()), "html", null, true);
            echo "</p>
                        <p style=\"margin: 5px\" id=\"puntos\"><b>Puntos: </b>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "puntos", array()), "html", null, true);
            echo "</p>
                        ";
            // line 56
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                // line 57
                echo "                            <p style=\"margin: 5px\">
                                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editNoticia", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
                echo "\">
                                    <i class=\"material-icons\">edit</i></a>
                            </p>
                            <p style=\"margin: 5px\">
                                <a class=\"confirm paddingRightLeft\"
                                   href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_noticia", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
                echo "\"
                                   data-content=\"Se va a eliminar la noticia, ¿desea continuar?\"
                                   data-title=\"Eliminar noticia\"><i class=\"material-icons \">delete</i></a>
                            </p>
                        ";
            }
            // line 68
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
    </div>
";
        
        $__internal_26bf6089bed80d0a92d6bedf51665fa9c4bf675ae186094bfce4a06f59165113->leave($__internal_26bf6089bed80d0a92d6bedf51665fa9c4bf675ae186094bfce4a06f59165113_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/noticias/noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 71,  176 => 68,  168 => 63,  160 => 58,  157 => 57,  155 => 56,  151 => 55,  147 => 54,  141 => 51,  135 => 48,  131 => 47,  127 => 45,  123 => 44,  117 => 40,  108 => 37,  105 => 36,  101 => 35,  98 => 34,  89 => 31,  86 => 30,  82 => 29,  74 => 24,  69 => 21,  66 => 20,  60 => 19,  41 => 8,  35 => 7,  11 => 5,);
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
Vista de noticias.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        #resultados-contenido {
            border: 1px solid black;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
            margin-bottom: 25px;
        }
    </style>
{% endblock %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Noticias</h3>
        <div class=\"row center\">
            <a href=\"{{ path('nuevaNoticia') }}\"
               class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
               title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
        </div>
        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('noticia') %}
                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('noticiaError') %}
                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}

        </div>
        <div class=\"divider3\"></div>
        <div class=\"row\" style=\"padding: 6%; margin-top: -40px\">
            {% for noticia in noticias %}
                <div id=\"resultados-contenido\">
                    <div style=\"display: flex;justify-content: flex-end; \">
                        <p style=\"margin: 5px\" id=\"fechaI\"><b>Fecha inicio: </b>{{ noticia.fechaInicio|date(\"d/m/Y\") }}</p>
                        <p style=\"margin: 5px\" id=\"fechaF\"><b>Fecha fin: </b>{{ noticia.fechaFinal|date(\"d/m/Y\") }}</p>
                    </div>
                    <div style=\"padding: 2%\">
                        <p id=\"noticiatd\" id=\"texto\">{{ noticia.noticia_texto|raw }}</p>
                    </div>
                    <div style=\"display: flex; justify-content: flex-end\">
                        <p style=\"margin: 5px\" id=\"grupo\"><b>Curso: </b>{{ noticia.idCurso.grupo }}</p>
                        <p style=\"margin: 5px\" id=\"puntos\"><b>Puntos: </b>{{ noticia.puntos }}</p>
                        {% if is_granted('ROLE_CONVIVENCIA') %}
                            <p style=\"margin: 5px\">
                                <a href=\"{{ path('editNoticia', {'id': noticia.id}) }}\">
                                    <i class=\"material-icons\">edit</i></a>
                            </p>
                            <p style=\"margin: 5px\">
                                <a class=\"confirm paddingRightLeft\"
                                   href=\"{{ path('borrar_noticia', {'id': noticia.id}) }}\"
                                   data-content=\"Se va a eliminar la noticia, ¿desea continuar?\"
                                   data-title=\"Eliminar noticia\"><i class=\"material-icons \">delete</i></a>
                            </p>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "convivencia/noticias/noticias.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/noticias/noticias.html.twig");
    }
}
