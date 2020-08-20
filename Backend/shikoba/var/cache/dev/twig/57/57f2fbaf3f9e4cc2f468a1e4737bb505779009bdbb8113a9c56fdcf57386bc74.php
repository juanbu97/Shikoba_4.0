<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb18d65acf402ef285a776d51f1ea1aa1bec8d379c55ca1e02738f394daee406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7b9e39bb2326079396ff17a733654f9ad705bd4736d4e60d5bf5d5ed9ff9937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b9e39bb2326079396ff17a733654f9ad705bd4736d4e60d5bf5d5ed9ff9937->enter($__internal_f7b9e39bb2326079396ff17a733654f9ad705bd4736d4e60d5bf5d5ed9ff9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_abbea866eaaede874e0d378068d19e2ba414f21094d0d3f411d80efa797a069f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbea866eaaede874e0d378068d19e2ba414f21094d0d3f411d80efa797a069f->enter($__internal_abbea866eaaede874e0d378068d19e2ba414f21094d0d3f411d80efa797a069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b9e39bb2326079396ff17a733654f9ad705bd4736d4e60d5bf5d5ed9ff9937->leave($__internal_f7b9e39bb2326079396ff17a733654f9ad705bd4736d4e60d5bf5d5ed9ff9937_prof);

        
        $__internal_abbea866eaaede874e0d378068d19e2ba414f21094d0d3f411d80efa797a069f->leave($__internal_abbea866eaaede874e0d378068d19e2ba414f21094d0d3f411d80efa797a069f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0a6fd234198084e7970fdb72afb0c243dc410998678f0ab42489dbcb5c8958c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a6fd234198084e7970fdb72afb0c243dc410998678f0ab42489dbcb5c8958c->enter($__internal_d0a6fd234198084e7970fdb72afb0c243dc410998678f0ab42489dbcb5c8958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b95fcd57f66d9fe1213b47c6ffb7204f06f5d10924d099b94f19e9a27f352a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95fcd57f66d9fe1213b47c6ffb7204f06f5d10924d099b94f19e9a27f352a53->enter($__internal_b95fcd57f66d9fe1213b47c6ffb7204f06f5d10924d099b94f19e9a27f352a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b95fcd57f66d9fe1213b47c6ffb7204f06f5d10924d099b94f19e9a27f352a53->leave($__internal_b95fcd57f66d9fe1213b47c6ffb7204f06f5d10924d099b94f19e9a27f352a53_prof);

        
        $__internal_d0a6fd234198084e7970fdb72afb0c243dc410998678f0ab42489dbcb5c8958c->leave($__internal_d0a6fd234198084e7970fdb72afb0c243dc410998678f0ab42489dbcb5c8958c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b0fdd430c813dbac42eb6825b5a541a9026ef1ad84b4ec22688bf21ecc0c0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0fdd430c813dbac42eb6825b5a541a9026ef1ad84b4ec22688bf21ecc0c0dd->enter($__internal_9b0fdd430c813dbac42eb6825b5a541a9026ef1ad84b4ec22688bf21ecc0c0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22e0469a892843aed79ad55f108aa2b6a760003b143ced049d0779b8f03ae055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e0469a892843aed79ad55f108aa2b6a760003b143ced049d0779b8f03ae055->enter($__internal_22e0469a892843aed79ad55f108aa2b6a760003b143ced049d0779b8f03ae055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_22e0469a892843aed79ad55f108aa2b6a760003b143ced049d0779b8f03ae055->leave($__internal_22e0469a892843aed79ad55f108aa2b6a760003b143ced049d0779b8f03ae055_prof);

        
        $__internal_9b0fdd430c813dbac42eb6825b5a541a9026ef1ad84b4ec22688bf21ecc0c0dd->leave($__internal_9b0fdd430c813dbac42eb6825b5a541a9026ef1ad84b4ec22688bf21ecc0c0dd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85b2b8b162c72e70c9071ea3bcc53954b69c39d0f3ee8eb5cdf418115ec1e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85b2b8b162c72e70c9071ea3bcc53954b69c39d0f3ee8eb5cdf418115ec1e2f->enter($__internal_d85b2b8b162c72e70c9071ea3bcc53954b69c39d0f3ee8eb5cdf418115ec1e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ba9a0afbd62f9e6b4a35b825df019dbbe7285a97871435052a3bea3ab6cab8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba9a0afbd62f9e6b4a35b825df019dbbe7285a97871435052a3bea3ab6cab8d->enter($__internal_2ba9a0afbd62f9e6b4a35b825df019dbbe7285a97871435052a3bea3ab6cab8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2ba9a0afbd62f9e6b4a35b825df019dbbe7285a97871435052a3bea3ab6cab8d->leave($__internal_2ba9a0afbd62f9e6b4a35b825df019dbbe7285a97871435052a3bea3ab6cab8d_prof);

        
        $__internal_d85b2b8b162c72e70c9071ea3bcc53954b69c39d0f3ee8eb5cdf418115ec1e2f->leave($__internal_d85b2b8b162c72e70c9071ea3bcc53954b69c39d0f3ee8eb5cdf418115ec1e2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
