<?php

/* convivencia/eventos/eventosForm.html.twig */
class __TwigTemplate_0cf20104c80bd8bfea5ea48ce3b2c2c913c0e5339d9492ceefd0a0bd543b1433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/eventos/eventosForm.html.twig", 1);
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
        $__internal_0a39606d4ffb4cd25da75906757b9b306c9dcfc504aad326d5bf48b74b765c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a39606d4ffb4cd25da75906757b9b306c9dcfc504aad326d5bf48b74b765c4a->enter($__internal_0a39606d4ffb4cd25da75906757b9b306c9dcfc504aad326d5bf48b74b765c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/eventos/eventosForm.html.twig"));

        $__internal_7070e944e18f259804179f9d4a2d17e64601b037a39c513719d5ed172ea98af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7070e944e18f259804179f9d4a2d17e64601b037a39c513719d5ed172ea98af9->enter($__internal_7070e944e18f259804179f9d4a2d17e64601b037a39c513719d5ed172ea98af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/eventos/eventosForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a39606d4ffb4cd25da75906757b9b306c9dcfc504aad326d5bf48b74b765c4a->leave($__internal_0a39606d4ffb4cd25da75906757b9b306c9dcfc504aad326d5bf48b74b765c4a_prof);

        
        $__internal_7070e944e18f259804179f9d4a2d17e64601b037a39c513719d5ed172ea98af9->leave($__internal_7070e944e18f259804179f9d4a2d17e64601b037a39c513719d5ed172ea98af9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_765fc6988a88df3d77b23f4e45badb454287e2e9a00f0884071bdde0c7824619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765fc6988a88df3d77b23f4e45badb454287e2e9a00f0884071bdde0c7824619->enter($__internal_765fc6988a88df3d77b23f4e45badb454287e2e9a00f0884071bdde0c7824619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06ba2811b496d6c0c7f5898f70105ebbfe1562421ae915bd0378ef5f9c496bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ba2811b496d6c0c7f5898f70105ebbfe1562421ae915bd0378ef5f9c496bbc->enter($__internal_06ba2811b496d6c0c7f5898f70105ebbfe1562421ae915bd0378ef5f9c496bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t";
        // line 4
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/eventos/eventosForm.html.twig", 4)->display($context);
        // line 5
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Asociar evento</h3>

        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t<div class=\"col s6 m4 offset-m4\" id=\"evento\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "idEvento", array()), 'row');
        echo "
\t\t</div>

\t\t<div style=\"margin-top: 3%\" class=\"col s12 center\">
\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea regresar a noticias?\" class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\" style=\"margin-bottom: 1%\">Cancelar
\t\t\t\t<i class=\"material-icons left\">undo</i>
\t\t\t</a>
\t\t\t<button class=\"btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\" style=\"margin-bottom: 1%\" value=\"Enviar\">Enviar
\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t</button>
\t\t</div>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_06ba2811b496d6c0c7f5898f70105ebbfe1562421ae915bd0378ef5f9c496bbc->leave($__internal_06ba2811b496d6c0c7f5898f70105ebbfe1562421ae915bd0378ef5f9c496bbc_prof);

        
        $__internal_765fc6988a88df3d77b23f4e45badb454287e2e9a00f0884071bdde0c7824619->leave($__internal_765fc6988a88df3d77b23f4e45badb454287e2e9a00f0884071bdde0c7824619_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/eventos/eventosForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  74 => 15,  67 => 11,  61 => 8,  56 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base2.html.twig\" %}
{% block body %}
\t<script type=\"text/javascript\" src=\"{{ asset('js/ckeditor/ckeditor.js') }}\"></script>
\t{% include 'convivencia/navegacion.html.twig' %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Asociar evento</h3>

        {{form_start(form)}}

\t\t<div class=\"col s6 m4 offset-m4\" id=\"evento\">
            {{form_row(form.idEvento)}}
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
", "convivencia/eventos/eventosForm.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/eventos/eventosForm.html.twig");
    }
}
