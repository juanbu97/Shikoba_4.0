<?php

/* convivencia/admin/admin.html.twig */
class __TwigTemplate_a5b5f47f4edb1c1251ec5cd446d58f996858f076f0173813c0a5014b06b46625 extends Twig_Template
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
        $__internal_f1b51c6de7b9427152b52bbe952811d8363be53038586f706d852b369c1d87b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b51c6de7b9427152b52bbe952811d8363be53038586f706d852b369c1d87b3->enter($__internal_f1b51c6de7b9427152b52bbe952811d8363be53038586f706d852b369c1d87b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_f13ea4234d170515dc7145444bba373f1df35bb02381598f59abe32d42bdd828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13ea4234d170515dc7145444bba373f1df35bb02381598f59abe32d42bdd828->enter($__internal_f13ea4234d170515dc7145444bba373f1df35bb02381598f59abe32d42bdd828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b51c6de7b9427152b52bbe952811d8363be53038586f706d852b369c1d87b3->leave($__internal_f1b51c6de7b9427152b52bbe952811d8363be53038586f706d852b369c1d87b3_prof);

        
        $__internal_f13ea4234d170515dc7145444bba373f1df35bb02381598f59abe32d42bdd828->leave($__internal_f13ea4234d170515dc7145444bba373f1df35bb02381598f59abe32d42bdd828_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d396a9ee97380e3a5ac3d250526b00b701cf60c935cb99cc30bde060b4f937fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d396a9ee97380e3a5ac3d250526b00b701cf60c935cb99cc30bde060b4f937fb->enter($__internal_d396a9ee97380e3a5ac3d250526b00b701cf60c935cb99cc30bde060b4f937fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07de4d35899b8d06beeb6a7796b871c51014560ec33d7299c1e809b6eed18b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07de4d35899b8d06beeb6a7796b871c51014560ec33d7299c1e809b6eed18b4f->enter($__internal_07de4d35899b8d06beeb6a7796b871c51014560ec33d7299c1e809b6eed18b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["partesIniciados"]) || array_key_exists("partesIniciados", $context) ? $context["partesIniciados"] : (function () { throw new Twig_Error_Runtime('Variable "partesIniciados" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["sancionesIniciadas"]) || array_key_exists("sancionesIniciadas", $context) ? $context["sancionesIniciadas"] : (function () { throw new Twig_Error_Runtime('Variable "sancionesIniciadas" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["diarioNow"]) || array_key_exists("diarioNow", $context) ? $context["diarioNow"] : (function () { throw new Twig_Error_Runtime('Variable "diarioNow" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_07de4d35899b8d06beeb6a7796b871c51014560ec33d7299c1e809b6eed18b4f->leave($__internal_07de4d35899b8d06beeb6a7796b871c51014560ec33d7299c1e809b6eed18b4f_prof);

        
        $__internal_d396a9ee97380e3a5ac3d250526b00b701cf60c935cb99cc30bde060b4f937fb->leave($__internal_d396a9ee97380e3a5ac3d250526b00b701cf60c935cb99cc30bde060b4f937fb_prof);

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
        return array (  123 => 54,  117 => 51,  109 => 46,  98 => 38,  92 => 35,  84 => 30,  73 => 22,  67 => 19,  59 => 14,  52 => 9,  49 => 8,  40 => 7,  11 => 5,);
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
", "convivencia/admin/admin.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/admin/admin.html.twig");
    }
}
