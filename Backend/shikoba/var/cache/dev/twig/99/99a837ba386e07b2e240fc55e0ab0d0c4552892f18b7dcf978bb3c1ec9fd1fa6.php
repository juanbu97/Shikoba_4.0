<?php

/* convivencia/noticias/noticias.html.twig */
class __TwigTemplate_18553416fd0ad5a2127e1a45240db73e07fc17baeb16acd850e0195a65e6267e extends Twig_Template
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
        $__internal_fbc9815d458fdb9ef9ac997d7106439dc20a861624fe36e9d773776e3c0541ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc9815d458fdb9ef9ac997d7106439dc20a861624fe36e9d773776e3c0541ea->enter($__internal_fbc9815d458fdb9ef9ac997d7106439dc20a861624fe36e9d773776e3c0541ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticias.html.twig"));

        $__internal_01a3a1e0c652da3688aef118c32886ac079ee4d329fcc8d4730aca2bac959690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a3a1e0c652da3688aef118c32886ac079ee4d329fcc8d4730aca2bac959690->enter($__internal_01a3a1e0c652da3688aef118c32886ac079ee4d329fcc8d4730aca2bac959690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc9815d458fdb9ef9ac997d7106439dc20a861624fe36e9d773776e3c0541ea->leave($__internal_fbc9815d458fdb9ef9ac997d7106439dc20a861624fe36e9d773776e3c0541ea_prof);

        
        $__internal_01a3a1e0c652da3688aef118c32886ac079ee4d329fcc8d4730aca2bac959690->leave($__internal_01a3a1e0c652da3688aef118c32886ac079ee4d329fcc8d4730aca2bac959690_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82ed2787453524997d670ccec4b9e1c65fb3322a05d50e4967056290fe90ca21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ed2787453524997d670ccec4b9e1c65fb3322a05d50e4967056290fe90ca21->enter($__internal_82ed2787453524997d670ccec4b9e1c65fb3322a05d50e4967056290fe90ca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4af891f6b2a80eafe9ae60491b4dd20b356be74a7517ff32d23d731e8b9d23fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af891f6b2a80eafe9ae60491b4dd20b356be74a7517ff32d23d731e8b9d23fe->enter($__internal_4af891f6b2a80eafe9ae60491b4dd20b356be74a7517ff32d23d731e8b9d23fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t#resultados-contenido {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 30px;
\t\t\tborder-radius: 20px;
\t\t\tbox-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
";
        
        $__internal_4af891f6b2a80eafe9ae60491b4dd20b356be74a7517ff32d23d731e8b9d23fe->leave($__internal_4af891f6b2a80eafe9ae60491b4dd20b356be74a7517ff32d23d731e8b9d23fe_prof);

        
        $__internal_82ed2787453524997d670ccec4b9e1c65fb3322a05d50e4967056290fe90ca21->leave($__internal_82ed2787453524997d670ccec4b9e1c65fb3322a05d50e4967056290fe90ca21_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c550028a37e5a999477574b255d968fd31f4278461707fb03f7fcf897c6c90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c550028a37e5a999477574b255d968fd31f4278461707fb03f7fcf897c6c90c->enter($__internal_1c550028a37e5a999477574b255d968fd31f4278461707fb03f7fcf897c6c90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba9e891c86a04d6961fee183f6afced8951e674f77b0cc1493d8bb682fcb66fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9e891c86a04d6961fee183f6afced8951e674f77b0cc1493d8bb682fcb66fa->enter($__internal_ba9e891c86a04d6961fee183f6afced8951e674f77b0cc1493d8bb682fcb66fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "\t";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/noticias/noticias.html.twig", 20)->display($context);
        // line 21
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Noticias</h3>
\t\t<div class=\"row center\">
\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaNoticia");
        echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col s12 l5 offset-l5 center\">
\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "noticia"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "\t\t\t\t<div class=\"card-panel green white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t\t<i class=\"material-icons spanico\">done</i>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "noticiaError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "\t\t\t\t<div class=\"card-panel red white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">";
            // line 38
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
\t\t\t\t\t<i class=\"material-icons spanico\">clear</i>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t\t</div>
\t\t<div class=\"divider3\"></div>
\t\t<div style=\"width: 100%; display: grid; grid-template-columns: repeat(2, 50%); gap: 20px; text-align: center; padding: 6%; margin-top: -40px\">
\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) || array_key_exists("noticias", $context) ? $context["noticias"] : (function () { throw new Twig_Error_Runtime('Variable "noticias" does not exist.', 46, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 47
            echo "\t\t\t\t<div id=\"resultados-contenido\" style=\"margin-right:4%; margin-left:4%\">
\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t<div style=\"display: flex; justify-content: space-between; align-self: center;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block;\" id=\"grupo\">
\t\t\t\t\t\t\t\t\t<b>Titulo:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "titulo", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block\" id=\"puntos\">
\t\t\t\t\t\t\t\t\t<b>Descripción:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "descripcion", array()), "html", null, true);
            echo ".</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 61
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editNoticia", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_noticia", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))), "html", null, true);
                echo "\" data-content=\"Se va a eliminar la noticia, ¿desea continuar?\" data-title=\"Eliminar noticia\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"padding: 2%\">
\t\t\t\t\t\t\t<p class=\"video-container\" id=\"noticiatd\" id=\"texto\">";
            // line 76
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "codigoEmbebido", array());
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
            // line 79
            if ($this->env->getExtension('AppBundle\Extensions\TwigExtensions')->eventoNoticia(twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))) {
                // line 80
                echo "\t\t\t\t\t\t\t\t<b>Eventos:</b>
\t\t\t\t\t\t\t\t";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Extensions\TwigExtensions')->eventoNoticia(twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "descripcion", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminarEvento", array("idEvento" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "id", array()), "idNoticia" => twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))), "html", null, true);
                    echo "\" data-content=\"Se va a eliminar la noticia, ¿desea continuar?\" data-title=\"Eliminar noticia\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t\t\t<b>Eventos:</b>
\t\t\t\t\t\t\t\tEsta noticia no tiene ningun evento asociado
\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row center\">

\t\t\t\t\t\t\t";
            // line 97
            if ( !$this->env->getExtension('AppBundle\Extensions\TwigExtensions')->isPublished(twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))) {
                // line 98
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicacion", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))), "html", null, true);
                echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Publicar<i class=\"material-icons right\" style=\"margin-top: -2%;\">send</i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicaciones_borrar", array("id" => $this->env->getExtension('AppBundle\Extensions\TwigExtensions')->idPublicacion(twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array())))), "html", null, true);
                echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Ocultar<i class=\"material-icons right\" style=\"margin-top: -2%;\">undo</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asociarEvento", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["noticia"], "id", array()))), "html", null, true);
            echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Asociar Evento
\t\t\t\t\t\t\t\t<i class=\"material-icons right\" style=\"margin-top: -2%;\">insert_invitation</i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t</div>
\t</div>
";
        
        $__internal_ba9e891c86a04d6961fee183f6afced8951e674f77b0cc1493d8bb682fcb66fa->leave($__internal_ba9e891c86a04d6961fee183f6afced8951e674f77b0cc1493d8bb682fcb66fa_prof);

        
        $__internal_1c550028a37e5a999477574b255d968fd31f4278461707fb03f7fcf897c6c90c->leave($__internal_1c550028a37e5a999477574b255d968fd31f4278461707fb03f7fcf897c6c90c_prof);

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
        return array (  271 => 113,  256 => 105,  249 => 102,  241 => 98,  239 => 97,  233 => 93,  228 => 90,  225 => 89,  214 => 84,  210 => 83,  207 => 82,  203 => 81,  200 => 80,  198 => 79,  192 => 76,  187 => 73,  179 => 68,  171 => 63,  168 => 62,  166 => 61,  160 => 58,  153 => 54,  144 => 47,  140 => 46,  134 => 42,  124 => 38,  121 => 37,  117 => 36,  114 => 35,  103 => 30,  100 => 29,  96 => 28,  89 => 24,  84 => 21,  81 => 20,  72 => 19,  50 => 8,  41 => 7,  11 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Vista de noticias.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\t#resultados-contenido {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 30px;
\t\t\tborder-radius: 20px;
\t\t\tbox-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
{% endblock %}
{% block body %}
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Noticias</h3>
\t\t<div class=\"row center\">
\t\t\t<a href=\"{{ path('nuevaNoticia') }}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col s12 l5 offset-l5 center\">
\t\t\t{% for flash_message in app.session.flashBag.get('noticia') %}
\t\t\t\t<div class=\"card-panel green white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">{{ flash_message }}
\t\t\t\t\t</span>
\t\t\t\t\t<i class=\"material-icons spanico\">done</i>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t{% for flash_message in app.session.flashBag.get('noticiaError') %}
\t\t\t\t<div class=\"card-panel red white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">{{ flash_message }}</span>
\t\t\t\t\t<i class=\"material-icons spanico\">clear</i>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t</div>
\t\t<div class=\"divider3\"></div>
\t\t<div style=\"width: 100%; display: grid; grid-template-columns: repeat(2, 50%); gap: 20px; text-align: center; padding: 6%; margin-top: -40px\">
\t\t\t{% for noticia in noticias %}
\t\t\t\t<div id=\"resultados-contenido\" style=\"margin-right:4%; margin-left:4%\">
\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t<div style=\"display: flex; justify-content: space-between; align-self: center;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block;\" id=\"grupo\">
\t\t\t\t\t\t\t\t\t<b>Titulo:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t{{ noticia.titulo }}</p>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block\" id=\"puntos\">
\t\t\t\t\t\t\t\t\t<b>Descripción:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t{{ noticia.descripcion }}.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_CONVIVENCIA') %}
\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('editNoticia', {'id': noticia.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"{{ path('borrar_noticia', {'id': noticia.id}) }}\" data-content=\"Se va a eliminar la noticia, ¿desea continuar?\" data-title=\"Eliminar noticia\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"padding: 2%\">
\t\t\t\t\t\t\t<p class=\"video-container\" id=\"noticiatd\" id=\"texto\">{{ noticia.codigoEmbebido|raw }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{% if eventoNoticia(noticia.id) %}
\t\t\t\t\t\t\t\t<b>Eventos:</b>
\t\t\t\t\t\t\t\t{% for evento in eventoNoticia(noticia.id) %}
\t\t\t\t\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t\t\t\t\t{{evento.descripcion  }}
\t\t\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"{{ path('eliminarEvento', {'idEvento': evento.id , 'idNoticia': noticia.id}) }}\" data-content=\"Se va a eliminar la noticia, ¿desea continuar?\" data-title=\"Eliminar noticia\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<b>Eventos:</b>
\t\t\t\t\t\t\t\tEsta noticia no tiene ningun evento asociado
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row center\">

\t\t\t\t\t\t\t{% if not isPublished(noticia.id) %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('publicacion', {'id': noticia.id})}}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Publicar<i class=\"material-icons right\" style=\"margin-top: -2%;\">send</i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('publicaciones_borrar', {'id': idPublicacion(noticia.id)})}}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Ocultar<i class=\"material-icons right\" style=\"margin-top: -2%;\">undo</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a href=\"{{ path('asociarEvento', {'id': noticia.id})}}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Publicar\">Asociar Evento
\t\t\t\t\t\t\t\t<i class=\"material-icons right\" style=\"margin-top: -2%;\">insert_invitation</i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "convivencia/noticias/noticias.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/noticias/noticias.html.twig");
    }
}
