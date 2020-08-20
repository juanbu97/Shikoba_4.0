<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_66b9a0bf62e68c98fe981d97c15b25d0eee1c6a02e29f4367b8bdfe5e03f3239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a017786535c4b9a7db152cf7d312e1a064c8e165a3f62b4daad2e742f52dd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a017786535c4b9a7db152cf7d312e1a064c8e165a3f62b4daad2e742f52dd68->enter($__internal_9a017786535c4b9a7db152cf7d312e1a064c8e165a3f62b4daad2e742f52dd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0aa65f9771c698437c8ee1362245ce9eb31bd267135ac3e7a5a150279c501f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa65f9771c698437c8ee1362245ce9eb31bd267135ac3e7a5a150279c501f7b->enter($__internal_0aa65f9771c698437c8ee1362245ce9eb31bd267135ac3e7a5a150279c501f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a017786535c4b9a7db152cf7d312e1a064c8e165a3f62b4daad2e742f52dd68->leave($__internal_9a017786535c4b9a7db152cf7d312e1a064c8e165a3f62b4daad2e742f52dd68_prof);

        
        $__internal_0aa65f9771c698437c8ee1362245ce9eb31bd267135ac3e7a5a150279c501f7b->leave($__internal_0aa65f9771c698437c8ee1362245ce9eb31bd267135ac3e7a5a150279c501f7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7db0e2b4e387f93e1e82e8224b239b0ca0c3ca116b3914cc3e8aa71805224919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db0e2b4e387f93e1e82e8224b239b0ca0c3ca116b3914cc3e8aa71805224919->enter($__internal_7db0e2b4e387f93e1e82e8224b239b0ca0c3ca116b3914cc3e8aa71805224919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f5098e8ff0a0fbdb8ad0ec1d19fa59bcbcb513f49ac13434c31abfc655072af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5098e8ff0a0fbdb8ad0ec1d19fa59bcbcb513f49ac13434c31abfc655072af->enter($__internal_3f5098e8ff0a0fbdb8ad0ec1d19fa59bcbcb513f49ac13434c31abfc655072af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f5098e8ff0a0fbdb8ad0ec1d19fa59bcbcb513f49ac13434c31abfc655072af->leave($__internal_3f5098e8ff0a0fbdb8ad0ec1d19fa59bcbcb513f49ac13434c31abfc655072af_prof);

        
        $__internal_7db0e2b4e387f93e1e82e8224b239b0ca0c3ca116b3914cc3e8aa71805224919->leave($__internal_7db0e2b4e387f93e1e82e8224b239b0ca0c3ca116b3914cc3e8aa71805224919_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99e56e9020a7bda0d988f0a8dde1c137197928ad560071dfb4f865bcd0b5b3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e56e9020a7bda0d988f0a8dde1c137197928ad560071dfb4f865bcd0b5b3c2->enter($__internal_99e56e9020a7bda0d988f0a8dde1c137197928ad560071dfb4f865bcd0b5b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61c4dab3143cf258ecafe7a4b8ccde3eb1e1a9a553d3b9fad55cc990a7dbaa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c4dab3143cf258ecafe7a4b8ccde3eb1e1a9a553d3b9fad55cc990a7dbaa32->enter($__internal_61c4dab3143cf258ecafe7a4b8ccde3eb1e1a9a553d3b9fad55cc990a7dbaa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61c4dab3143cf258ecafe7a4b8ccde3eb1e1a9a553d3b9fad55cc990a7dbaa32->leave($__internal_61c4dab3143cf258ecafe7a4b8ccde3eb1e1a9a553d3b9fad55cc990a7dbaa32_prof);

        
        $__internal_99e56e9020a7bda0d988f0a8dde1c137197928ad560071dfb4f865bcd0b5b3c2->leave($__internal_99e56e9020a7bda0d988f0a8dde1c137197928ad560071dfb4f865bcd0b5b3c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d499e18e3cdc7925877398041230b5efa382f4874a2bc85e2c9a08d21c235dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d499e18e3cdc7925877398041230b5efa382f4874a2bc85e2c9a08d21c235dbc->enter($__internal_d499e18e3cdc7925877398041230b5efa382f4874a2bc85e2c9a08d21c235dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_381fcc6dbf155137c786df20e950f73e5a9a0665667cd3b2ee3f4209c10d9ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381fcc6dbf155137c786df20e950f73e5a9a0665667cd3b2ee3f4209c10d9ed6->enter($__internal_381fcc6dbf155137c786df20e950f73e5a9a0665667cd3b2ee3f4209c10d9ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_381fcc6dbf155137c786df20e950f73e5a9a0665667cd3b2ee3f4209c10d9ed6->leave($__internal_381fcc6dbf155137c786df20e950f73e5a9a0665667cd3b2ee3f4209c10d9ed6_prof);

        
        $__internal_d499e18e3cdc7925877398041230b5efa382f4874a2bc85e2c9a08d21c235dbc->leave($__internal_d499e18e3cdc7925877398041230b5efa382f4874a2bc85e2c9a08d21c235dbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
