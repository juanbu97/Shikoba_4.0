<?php

/* convivencia/admin/admin.html.twig */
class __TwigTemplate_9c743a07cfd4309f53831a4efa6babd3f797994102a585264db81be39a90e24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/admin/admin.html.twig", 5);
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
        $__internal_bc2ca0ade6e0e3499efebb2fb35ca52dfbe44968271f6329b7a8fd8a32677ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2ca0ade6e0e3499efebb2fb35ca52dfbe44968271f6329b7a8fd8a32677ee0->enter($__internal_bc2ca0ade6e0e3499efebb2fb35ca52dfbe44968271f6329b7a8fd8a32677ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2ca0ade6e0e3499efebb2fb35ca52dfbe44968271f6329b7a8fd8a32677ee0->leave($__internal_bc2ca0ade6e0e3499efebb2fb35ca52dfbe44968271f6329b7a8fd8a32677ee0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_785700a0a83a628c33df171e0a5fbab3cf7db0a25b5dd5d3a7ae4a914f373b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785700a0a83a628c33df171e0a5fbab3cf7db0a25b5dd5d3a7ae4a914f373b92->enter($__internal_785700a0a83a628c33df171e0a5fbab3cf7db0a25b5dd5d3a7ae4a914f373b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/admin/admin.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Administración</h3>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/pencil.jpg"), "html", null, true);
        echo "\" alt=\"imagen editar\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Partes iniciados</h5>
                        <h2>";
        // line 19
        echo twig_escape_filter($this->env, ($context["partesIniciados"] ?? $this->getContext($context, "partesIniciados")), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/document.jpg"), "html", null, true);
        echo " \" alt=\"imagen documento\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Sanciones iniciadas</h5>
                        <h2>";
        // line 35
        echo twig_escape_filter($this->env, ($context["sancionesIniciadas"] ?? $this->getContext($context, "sancionesIniciadas")), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/clase.jpeg"), "html", null, true);
        echo "\" alt=\"imagen clase\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Aforo aula convivencia</h5>
                        <h2>";
        // line 51
        echo twig_escape_filter($this->env, ($context["diarioNow"] ?? $this->getContext($context, "diarioNow")), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
        echo "\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_785700a0a83a628c33df171e0a5fbab3cf7db0a25b5dd5d3a7ae4a914f373b92->leave($__internal_785700a0a83a628c33df171e0a5fbab3cf7db0a25b5dd5d3a7ae4a914f373b92_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  108 => 51,  100 => 46,  89 => 38,  83 => 35,  75 => 30,  64 => 22,  58 => 19,  50 => 14,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista principal de la página.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Administración</h3>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"{{ asset('img/pencil.jpg') }}\" alt=\"imagen editar\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Partes iniciados</h5>
                        <h2>{{ partesIniciados }}</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"{{ path('gestion_partes') }}\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"{{ asset('img/document.jpg') }} \" alt=\"imagen documento\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Sanciones iniciadas</h5>
                        <h2>{{ sancionesIniciadas }}</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"{{ path('gestion_sanciones') }}\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"{{ asset('img/clase.jpeg') }}\" alt=\"imagen clase\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Aforo aula convivencia</h5>
                        <h2>{{ diarioNow }}</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"{{ path('show_diario') }}\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "convivencia/admin/admin.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\admin\\admin.html.twig");
    }
}
