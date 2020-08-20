<?php

/* convivencia/eventos/nuevoEvento.html.twig */
class __TwigTemplate_8b4994072e44079b6d501aa169c9954b25724437bff87d4d856cb85fce41e37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/eventos/nuevoEvento.html.twig", 1);
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
        $__internal_5a91a1e1b5726b5714a8e3b786f09d39158562ce8a343bbdfc1c5c587ee238ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a91a1e1b5726b5714a8e3b786f09d39158562ce8a343bbdfc1c5c587ee238ff->enter($__internal_5a91a1e1b5726b5714a8e3b786f09d39158562ce8a343bbdfc1c5c587ee238ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/eventos/nuevoEvento.html.twig"));

        $__internal_f9d532e7b0e2ecb3a89eaced4e69323d840cab66428a7fadc22b06f578edf823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d532e7b0e2ecb3a89eaced4e69323d840cab66428a7fadc22b06f578edf823->enter($__internal_f9d532e7b0e2ecb3a89eaced4e69323d840cab66428a7fadc22b06f578edf823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/eventos/nuevoEvento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a91a1e1b5726b5714a8e3b786f09d39158562ce8a343bbdfc1c5c587ee238ff->leave($__internal_5a91a1e1b5726b5714a8e3b786f09d39158562ce8a343bbdfc1c5c587ee238ff_prof);

        
        $__internal_f9d532e7b0e2ecb3a89eaced4e69323d840cab66428a7fadc22b06f578edf823->leave($__internal_f9d532e7b0e2ecb3a89eaced4e69323d840cab66428a7fadc22b06f578edf823_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_addc29185f498aaa019b795bee8c04eedc44f3dbd5b65b5275e7eaf36b279e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addc29185f498aaa019b795bee8c04eedc44f3dbd5b65b5275e7eaf36b279e36->enter($__internal_addc29185f498aaa019b795bee8c04eedc44f3dbd5b65b5275e7eaf36b279e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca1eca2c1c739d94e0f3146f42cb760b1bab539998864cd4c364255cffa7d7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1eca2c1c739d94e0f3146f42cb760b1bab539998864cd4c364255cffa7d7ce->enter($__internal_ca1eca2c1c739d94e0f3146f42cb760b1bab539998864cd4c364255cffa7d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 4
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/eventos/nuevoEvento.html.twig", 4)->display($context);
        // line 5
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Nuevo evento</h3>

        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t<div class=\"col s6 m4 offset-m4\" id=\"descripcion\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "descripcion", array()), 'row');
        echo "
\t\t</div>
        <div class=\"col s6 m4 offset-m4\" id=\"fechaInicio\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "fechaInicio", array()), 'row');
        echo "
\t\t</div>
        <div class=\"col s6 m4 offset-m4\" id=\"fechaFinal\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "fechaFinal", array()), 'row');
        echo "
\t\t</div>


\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_ca1eca2c1c739d94e0f3146f42cb760b1bab539998864cd4c364255cffa7d7ce->leave($__internal_ca1eca2c1c739d94e0f3146f42cb760b1bab539998864cd4c364255cffa7d7ce_prof);

        
        $__internal_addc29185f498aaa019b795bee8c04eedc44f3dbd5b65b5275e7eaf36b279e36->leave($__internal_addc29185f498aaa019b795bee8c04eedc44f3dbd5b65b5275e7eaf36b279e36_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/eventos/nuevoEvento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  87 => 22,  79 => 17,  73 => 14,  67 => 11,  61 => 8,  56 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base2.html.twig\" %}
{% block body %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Nuevo evento</h3>

        {{form_start(form)}}

\t\t<div class=\"col s6 m4 offset-m4\" id=\"descripcion\">
            {{form_row(form.descripcion)}}
\t\t</div>
        <div class=\"col s6 m4 offset-m4\" id=\"fechaInicio\">
            {{form_row(form.fechaInicio)}}
\t\t</div>
        <div class=\"col s6 m4 offset-m4\" id=\"fechaFinal\">
            {{form_row(form.fechaFinal)}}
\t\t</div>


\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"{{ path('noticias') }}\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
        {{form_end(form)}}
\t</div>

{% endblock %}
", "convivencia/eventos/nuevoEvento.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/eventos/nuevoEvento.html.twig");
    }
}
