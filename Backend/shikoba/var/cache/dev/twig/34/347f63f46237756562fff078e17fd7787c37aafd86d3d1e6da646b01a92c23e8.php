<?php

/* convivencia/publicaciones/publicacionesForm.html.twig */
class __TwigTemplate_7e8008b092f5543ce190191a6eb9fc374df2679ecf020b796bff58d477fddc5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/publicaciones/publicacionesForm.html.twig", 5);
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
        $__internal_b5af645e6e06190b686d78223ad11a867a050ecf7708e750d8e2853dbf11de8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5af645e6e06190b686d78223ad11a867a050ecf7708e750d8e2853dbf11de8a->enter($__internal_b5af645e6e06190b686d78223ad11a867a050ecf7708e750d8e2853dbf11de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/publicaciones/publicacionesForm.html.twig"));

        $__internal_c9e2f1edfca52edf7be73c49f97c117d1748ec14e0db06abcd64a291059389b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e2f1edfca52edf7be73c49f97c117d1748ec14e0db06abcd64a291059389b4->enter($__internal_c9e2f1edfca52edf7be73c49f97c117d1748ec14e0db06abcd64a291059389b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/publicaciones/publicacionesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5af645e6e06190b686d78223ad11a867a050ecf7708e750d8e2853dbf11de8a->leave($__internal_b5af645e6e06190b686d78223ad11a867a050ecf7708e750d8e2853dbf11de8a_prof);

        
        $__internal_c9e2f1edfca52edf7be73c49f97c117d1748ec14e0db06abcd64a291059389b4->leave($__internal_c9e2f1edfca52edf7be73c49f97c117d1748ec14e0db06abcd64a291059389b4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d2b2e9dd21aecab9ce144057868b9f805a06897f4d569813dd19891fd6743e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2b2e9dd21aecab9ce144057868b9f805a06897f4d569813dd19891fd6743e6->enter($__internal_9d2b2e9dd21aecab9ce144057868b9f805a06897f4d569813dd19891fd6743e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e1898e2030d06a0326528bd84d792d405a7bfc79edb8ea7cc2faa24bccf1bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1898e2030d06a0326528bd84d792d405a7bfc79edb8ea7cc2faa24bccf1bea->enter($__internal_9e1898e2030d06a0326528bd84d792d405a7bfc79edb8ea7cc2faa24bccf1bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 9
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/publicaciones/publicacionesForm.html.twig", 9)->display($context);
        // line 10
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Publicar noticia</h3>

\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t<div class=\"col s6 m4 offset-m2\" id=\"fechaInicio\">
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "fechaInicio", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"col s6 m4\" id=\"fechaFinal\">
\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "fechaFinal", array()), 'row');
        echo "
\t\t</div>

\t\t<div class=\"col s6 m4 offset-m4\" id=\"prioridad\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "prioridad", array()), 'label', array("label" => "Seleccione la prioridad de la noticia"));
        echo "
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "prioridad", array()), 'widget');
        echo "
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Publicar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
        echo "

\t</div>

";
        
        $__internal_9e1898e2030d06a0326528bd84d792d405a7bfc79edb8ea7cc2faa24bccf1bea->leave($__internal_9e1898e2030d06a0326528bd84d792d405a7bfc79edb8ea7cc2faa24bccf1bea_prof);

        
        $__internal_9d2b2e9dd21aecab9ce144057868b9f805a06897f4d569813dd19891fd6743e6->leave($__internal_9d2b2e9dd21aecab9ce144057868b9f805a06897f4d569813dd19891fd6743e6_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/publicaciones/publicacionesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  92 => 29,  85 => 25,  81 => 24,  74 => 20,  67 => 16,  61 => 13,  56 => 10,  54 => 9,  49 => 8,  40 => 7,  11 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
Vista de edición de noticias.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Publicar noticia</h3>

\t\t{{form_start(form)}}

\t\t<div class=\"col s6 m4 offset-m2\" id=\"fechaInicio\">
\t\t\t{{form_row(form.fechaInicio )}}
\t\t</div>

\t\t<div class=\"col s6 m4\" id=\"fechaFinal\">
\t\t\t{{form_row(form.fechaFinal )}}
\t\t</div>

\t\t<div class=\"col s6 m4 offset-m4\" id=\"prioridad\">
            {{form_label(form.prioridad, 'Seleccione la prioridad de la noticia')}}
\t\t\t{{form_widget(form.prioridad)}}
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"{{ path('noticias') }}\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Publicar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
\t\t{{ form_end(form) }}

\t</div>

{% endblock %}
", "convivencia/publicaciones/publicacionesForm.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/publicaciones/publicacionesForm.html.twig");
    }
}
