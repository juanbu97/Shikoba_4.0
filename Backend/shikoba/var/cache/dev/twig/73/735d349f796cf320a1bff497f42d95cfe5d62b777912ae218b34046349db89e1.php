<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8af48b7d3f821da6fb478bacb72ddb6f00a42ac7d2528aa1867d9400dbc68ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cf0fba4dbd151f8a595b0f9d27e32701a8f56473dbf348c1100f8e74e0cc1ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0fba4dbd151f8a595b0f9d27e32701a8f56473dbf348c1100f8e74e0cc1ce3->enter($__internal_cf0fba4dbd151f8a595b0f9d27e32701a8f56473dbf348c1100f8e74e0cc1ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a3f811d3db41ff39d097e66ee3d6951a802dd0a4da8d7d0c37edea3da18d7bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f811d3db41ff39d097e66ee3d6951a802dd0a4da8d7d0c37edea3da18d7bde->enter($__internal_a3f811d3db41ff39d097e66ee3d6951a802dd0a4da8d7d0c37edea3da18d7bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf0fba4dbd151f8a595b0f9d27e32701a8f56473dbf348c1100f8e74e0cc1ce3->leave($__internal_cf0fba4dbd151f8a595b0f9d27e32701a8f56473dbf348c1100f8e74e0cc1ce3_prof);

        
        $__internal_a3f811d3db41ff39d097e66ee3d6951a802dd0a4da8d7d0c37edea3da18d7bde->leave($__internal_a3f811d3db41ff39d097e66ee3d6951a802dd0a4da8d7d0c37edea3da18d7bde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de00bd4caefc371af914614e2dbbaa1f995b98e7f8384c83dbb0f88d860191eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de00bd4caefc371af914614e2dbbaa1f995b98e7f8384c83dbb0f88d860191eb->enter($__internal_de00bd4caefc371af914614e2dbbaa1f995b98e7f8384c83dbb0f88d860191eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_930c9ec02c1a9f25dd73c096f17646d4dadf3c7efaec9527f6c979c9f7704bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930c9ec02c1a9f25dd73c096f17646d4dadf3c7efaec9527f6c979c9f7704bc6->enter($__internal_930c9ec02c1a9f25dd73c096f17646d4dadf3c7efaec9527f6c979c9f7704bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_930c9ec02c1a9f25dd73c096f17646d4dadf3c7efaec9527f6c979c9f7704bc6->leave($__internal_930c9ec02c1a9f25dd73c096f17646d4dadf3c7efaec9527f6c979c9f7704bc6_prof);

        
        $__internal_de00bd4caefc371af914614e2dbbaa1f995b98e7f8384c83dbb0f88d860191eb->leave($__internal_de00bd4caefc371af914614e2dbbaa1f995b98e7f8384c83dbb0f88d860191eb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a479e5c42dcd25b4338c58c8647af4b727ac9d7c6d54e9099e7f0002de249489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a479e5c42dcd25b4338c58c8647af4b727ac9d7c6d54e9099e7f0002de249489->enter($__internal_a479e5c42dcd25b4338c58c8647af4b727ac9d7c6d54e9099e7f0002de249489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_59426de2691b6e7eadbe209f488f355b41d78c4934f6afbb366929296b93f772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59426de2691b6e7eadbe209f488f355b41d78c4934f6afbb366929296b93f772->enter($__internal_59426de2691b6e7eadbe209f488f355b41d78c4934f6afbb366929296b93f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_59426de2691b6e7eadbe209f488f355b41d78c4934f6afbb366929296b93f772->leave($__internal_59426de2691b6e7eadbe209f488f355b41d78c4934f6afbb366929296b93f772_prof);

        
        $__internal_a479e5c42dcd25b4338c58c8647af4b727ac9d7c6d54e9099e7f0002de249489->leave($__internal_a479e5c42dcd25b4338c58c8647af4b727ac9d7c6d54e9099e7f0002de249489_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c2bfb052d401a5ea3b3b7c91c1713470e53e28ffb623a6d706b4ca513f19d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2bfb052d401a5ea3b3b7c91c1713470e53e28ffb623a6d706b4ca513f19d63->enter($__internal_3c2bfb052d401a5ea3b3b7c91c1713470e53e28ffb623a6d706b4ca513f19d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa9c1dd7711af5a99aa1a360c7009a2e6fd0bda7944d8f8127ebe439f89347f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9c1dd7711af5a99aa1a360c7009a2e6fd0bda7944d8f8127ebe439f89347f7->enter($__internal_fa9c1dd7711af5a99aa1a360c7009a2e6fd0bda7944d8f8127ebe439f89347f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_fa9c1dd7711af5a99aa1a360c7009a2e6fd0bda7944d8f8127ebe439f89347f7->leave($__internal_fa9c1dd7711af5a99aa1a360c7009a2e6fd0bda7944d8f8127ebe439f89347f7_prof);

        
        $__internal_3c2bfb052d401a5ea3b3b7c91c1713470e53e28ffb623a6d706b4ca513f19d63->leave($__internal_3c2bfb052d401a5ea3b3b7c91c1713470e53e28ffb623a6d706b4ca513f19d63_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
