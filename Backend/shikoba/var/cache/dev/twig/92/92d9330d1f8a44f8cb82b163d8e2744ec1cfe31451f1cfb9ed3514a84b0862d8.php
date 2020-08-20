<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e46e16be7d9682b9ba839e795dfbf849f3342d6af0ea11c5ed73c8fda10ea7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b71f491934ca7f359538947aa3532d190ae31fa90cc36448e1ef39cb3c9fbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b71f491934ca7f359538947aa3532d190ae31fa90cc36448e1ef39cb3c9fbd9->enter($__internal_9b71f491934ca7f359538947aa3532d190ae31fa90cc36448e1ef39cb3c9fbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1c06eb1105f74c7713e950866ddc261bb996363221eb9d3762c74d4bafbbfcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c06eb1105f74c7713e950866ddc261bb996363221eb9d3762c74d4bafbbfcab->enter($__internal_1c06eb1105f74c7713e950866ddc261bb996363221eb9d3762c74d4bafbbfcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9b71f491934ca7f359538947aa3532d190ae31fa90cc36448e1ef39cb3c9fbd9->leave($__internal_9b71f491934ca7f359538947aa3532d190ae31fa90cc36448e1ef39cb3c9fbd9_prof);

        
        $__internal_1c06eb1105f74c7713e950866ddc261bb996363221eb9d3762c74d4bafbbfcab->leave($__internal_1c06eb1105f74c7713e950866ddc261bb996363221eb9d3762c74d4bafbbfcab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fb3e02b6fd52d54dfe6fc3da8b60aa2e1025f2c9057ea39466c11564e8fa5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb3e02b6fd52d54dfe6fc3da8b60aa2e1025f2c9057ea39466c11564e8fa5ec->enter($__internal_6fb3e02b6fd52d54dfe6fc3da8b60aa2e1025f2c9057ea39466c11564e8fa5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10908270d0d30539df825ccc0ce31732f5499afcc4629ec01eab0a7a045fa369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10908270d0d30539df825ccc0ce31732f5499afcc4629ec01eab0a7a045fa369->enter($__internal_10908270d0d30539df825ccc0ce31732f5499afcc4629ec01eab0a7a045fa369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10908270d0d30539df825ccc0ce31732f5499afcc4629ec01eab0a7a045fa369->leave($__internal_10908270d0d30539df825ccc0ce31732f5499afcc4629ec01eab0a7a045fa369_prof);

        
        $__internal_6fb3e02b6fd52d54dfe6fc3da8b60aa2e1025f2c9057ea39466c11564e8fa5ec->leave($__internal_6fb3e02b6fd52d54dfe6fc3da8b60aa2e1025f2c9057ea39466c11564e8fa5ec_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_34f0b586c90e12a8bd9ccfd3b131527179897f581800e4010ecbf6717f64b7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f0b586c90e12a8bd9ccfd3b131527179897f581800e4010ecbf6717f64b7a8->enter($__internal_34f0b586c90e12a8bd9ccfd3b131527179897f581800e4010ecbf6717f64b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b486a402c72f1907040b278b756c8e672e6cb1d61bc6809353f80f0d8c9edc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b486a402c72f1907040b278b756c8e672e6cb1d61bc6809353f80f0d8c9edc15->enter($__internal_b486a402c72f1907040b278b756c8e672e6cb1d61bc6809353f80f0d8c9edc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b486a402c72f1907040b278b756c8e672e6cb1d61bc6809353f80f0d8c9edc15->leave($__internal_b486a402c72f1907040b278b756c8e672e6cb1d61bc6809353f80f0d8c9edc15_prof);

        
        $__internal_34f0b586c90e12a8bd9ccfd3b131527179897f581800e4010ecbf6717f64b7a8->leave($__internal_34f0b586c90e12a8bd9ccfd3b131527179897f581800e4010ecbf6717f64b7a8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f42143c11592fd7337dcf00b5203043dc0e794923ffc48916c195ff3e24c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f42143c11592fd7337dcf00b5203043dc0e794923ffc48916c195ff3e24c38->enter($__internal_41f42143c11592fd7337dcf00b5203043dc0e794923ffc48916c195ff3e24c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7007772b775d0048ad3c37c488a54ff0946bf54808dda34e16a75595e0cadbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7007772b775d0048ad3c37c488a54ff0946bf54808dda34e16a75595e0cadbb7->enter($__internal_7007772b775d0048ad3c37c488a54ff0946bf54808dda34e16a75595e0cadbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7007772b775d0048ad3c37c488a54ff0946bf54808dda34e16a75595e0cadbb7->leave($__internal_7007772b775d0048ad3c37c488a54ff0946bf54808dda34e16a75595e0cadbb7_prof);

        
        $__internal_41f42143c11592fd7337dcf00b5203043dc0e794923ffc48916c195ff3e24c38->leave($__internal_41f42143c11592fd7337dcf00b5203043dc0e794923ffc48916c195ff3e24c38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
