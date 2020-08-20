<?php

/* convivencia/noticias/noticiasForm.html.twig */
class __TwigTemplate_80572c7647824b987b1da26afed70c312f01b4acf7dc0586d232ef7653e436c5 extends Twig_Template
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
        $__internal_060724b425eb505b1407a97ef27b1d9aeee7a5180c22172aac6c4af4f2420a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_060724b425eb505b1407a97ef27b1d9aeee7a5180c22172aac6c4af4f2420a02->enter($__internal_060724b425eb505b1407a97ef27b1d9aeee7a5180c22172aac6c4af4f2420a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticiasForm.html.twig"));

        $__internal_ec17eb2994942d3155c31a34ca116584a3e8684ad021c8f45041554dc372e357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec17eb2994942d3155c31a34ca116584a3e8684ad021c8f45041554dc372e357->enter($__internal_ec17eb2994942d3155c31a34ca116584a3e8684ad021c8f45041554dc372e357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/noticias/noticiasForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060724b425eb505b1407a97ef27b1d9aeee7a5180c22172aac6c4af4f2420a02->leave($__internal_060724b425eb505b1407a97ef27b1d9aeee7a5180c22172aac6c4af4f2420a02_prof);

        
        $__internal_ec17eb2994942d3155c31a34ca116584a3e8684ad021c8f45041554dc372e357->leave($__internal_ec17eb2994942d3155c31a34ca116584a3e8684ad021c8f45041554dc372e357_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4db6cef0dcee1173550b5004d634ff0694517cd20fd043dd38cbe71557705cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db6cef0dcee1173550b5004d634ff0694517cd20fd043dd38cbe71557705cca->enter($__internal_4db6cef0dcee1173550b5004d634ff0694517cd20fd043dd38cbe71557705cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3dcef69f956044abbaa5cf9f6fad97cf60f9bb5c8346751d4d8d7e9a6ac65e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dcef69f956044abbaa5cf9f6fad97cf60f9bb5c8346751d4d8d7e9a6ac65e6->enter($__internal_c3dcef69f956044abbaa5cf9f6fad97cf60f9bb5c8346751d4d8d7e9a6ac65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/noticias/noticiasForm.html.twig", 9)->display($context);
        // line 10
        echo "\t<div class=\"\">
\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "id"), "method")) {
            // line 12
            echo "\t\t\t<h3 class=\"center azul-prof fuente\">Editar noticia</h3>
\t\t";
        } else {
            // line 14
            echo "\t\t\t<h3 class=\"center azul-prof fuente\">Nueva noticia</h3>
\t\t";
        }
        // line 16
        echo "
\t\t<div class=\"center\">
\t\t\t<a class=\"waves-effect waves-light btn modal-trigger blue darken-3\" href=\"#modal1\">Info Parametrización</a>
\t\t</div>

\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "
\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tituloNoticia\">
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "titulo", array()), 'row');
        echo "
\t\t</div>


\t\t<div class=\"input-field col s6 m4\" id=\"descripcionNoticia\">
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "descripcion", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s4 m4 offset-m2\" id=\"tagParametrizacionCursos\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "tagParametrizacionCursos", array()), 'row');
        echo "
\t\t</div>

\t\t<div id=\"modal1\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<h4>Parametrización de las noticias</h4>
\t\t\t\t<p>Todos los cursos, grupos o puntos escriba *</p>
\t\t\t\t<p>Solo un curso, grupo o punto escriba su nombre</p>
\t\t\t\t<p>Varios cursos, grupos o puntosescriba el nombre de los cursos separados por comas</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"#!\" class=\"modal-close waves-effect waves-green btn-flat\">Entendido</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"input-field col s6 m4 \" id=\"tagParametrizacionValores\">
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "tagParametrizacionValores", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tagParametrizacionCategorias\">
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "tagParametrizacionCategorias", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4\" id=\"tagParametrizacionPuntos\">
\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "tagParametrizacionPuntos", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m4\" id=\"tagParametrizacionGrupos\">
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "tagParametrizacionGrupos", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "codigoEmbebido", array()), 'row');
        echo "
\t\t\t<script>

\t\t\t\tCKEDITOR.replace('appbundle_noticiasv2_codigoEmbebido');
\t\t\t</script>
\t\t</div>


\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), 'form_end');
        echo "
\t</div>
</div>";
        
        $__internal_c3dcef69f956044abbaa5cf9f6fad97cf60f9bb5c8346751d4d8d7e9a6ac65e6->leave($__internal_c3dcef69f956044abbaa5cf9f6fad97cf60f9bb5c8346751d4d8d7e9a6ac65e6_prof);

        
        $__internal_4db6cef0dcee1173550b5004d634ff0694517cd20fd043dd38cbe71557705cca->leave($__internal_4db6cef0dcee1173550b5004d634ff0694517cd20fd043dd38cbe71557705cca_prof);

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
        return array (  165 => 80,  155 => 73,  143 => 64,  136 => 60,  129 => 56,  122 => 52,  115 => 48,  96 => 32,  89 => 28,  81 => 23,  76 => 21,  69 => 16,  65 => 14,  61 => 12,  59 => 11,  56 => 10,  54 => 9,  49 => 8,  40 => 7,  11 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Vista de edición de noticias.
Actualizado por Bujalance García Juan Antonio // 2020 
#}
{% extends 'base2.html.twig' %}

{% block body %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t{% if app.request.get('id') %}
\t\t\t<h3 class=\"center azul-prof fuente\">Editar noticia</h3>
\t\t{% else %}
\t\t\t<h3 class=\"center azul-prof fuente\">Nueva noticia</h3>
\t\t{% endif %}

\t\t<div class=\"center\">
\t\t\t<a class=\"waves-effect waves-light btn modal-trigger blue darken-3\" href=\"#modal1\">Info Parametrización</a>
\t\t</div>

\t\t{{ form_start(form)}}
\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tituloNoticia\">
\t\t\t{{form_row(form.titulo)}}
\t\t</div>


\t\t<div class=\"input-field col s6 m4\" id=\"descripcionNoticia\">
\t\t\t{{form_row(form.descripcion)}}
\t\t</div>

\t\t<div class=\"input-field col s4 m4 offset-m2\" id=\"tagParametrizacionCursos\">
\t\t\t{{form_row(form.tagParametrizacionCursos)}}
\t\t</div>

\t\t<div id=\"modal1\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<h4>Parametrización de las noticias</h4>
\t\t\t\t<p>Todos los cursos, grupos o puntos escriba *</p>
\t\t\t\t<p>Solo un curso, grupo o punto escriba su nombre</p>
\t\t\t\t<p>Varios cursos, grupos o puntosescriba el nombre de los cursos separados por comas</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"#!\" class=\"modal-close waves-effect waves-green btn-flat\">Entendido</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"input-field col s6 m4 \" id=\"tagParametrizacionValores\">
\t\t\t{{form_row(form.tagParametrizacionValores)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m2\" id=\"tagParametrizacionCategorias\">
\t\t\t{{form_row(form.tagParametrizacionCategorias)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4\" id=\"tagParametrizacionPuntos\">
\t\t\t{{form_row(form.tagParametrizacionPuntos)}}
\t\t</div>

\t\t<div class=\"input-field col s6 m4 offset-m4\" id=\"tagParametrizacionGrupos\">
\t\t\t{{form_row(form.tagParametrizacionGrupos)}}
\t\t</div>

\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t{{form_row(form.codigoEmbebido)}}
\t\t\t<script>

\t\t\t\tCKEDITOR.replace('appbundle_noticiasv2_codigoEmbebido');
\t\t\t</script>
\t\t</div>


\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"{{ path('noticias') }}\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t{{ form_end(form) }}
\t</div>
</div>{% endblock %}
", "convivencia/noticias/noticiasForm.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/noticias/noticiasForm.html.twig");
    }
}
