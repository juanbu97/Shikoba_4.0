<?php

/* convivencia/changePassword.html.twig */
class __TwigTemplate_8e61e71a7d1aeff40bda184858c42c0662e29ee5beea71d92429c342a64e4568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/changePassword.html.twig", 5);
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
        $__internal_88ab3c1e9bf9628ae8ef32c7e9efc78122d0895dd85bd9572e51f9a205c310be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ab3c1e9bf9628ae8ef32c7e9efc78122d0895dd85bd9572e51f9a205c310be->enter($__internal_88ab3c1e9bf9628ae8ef32c7e9efc78122d0895dd85bd9572e51f9a205c310be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ab3c1e9bf9628ae8ef32c7e9efc78122d0895dd85bd9572e51f9a205c310be->leave($__internal_88ab3c1e9bf9628ae8ef32c7e9efc78122d0895dd85bd9572e51f9a205c310be_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e6bf9a008e2910b858a66c300264ffaae09a315ebe446c21daac8371864f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e6bf9a008e2910b858a66c300264ffaae09a315ebe446c21daac8371864f62->enter($__internal_c3e6bf9a008e2910b858a66c300264ffaae09a315ebe446c21daac8371864f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/changePassword.html.twig", 7)->display($context);
        // line 8
        echo "    <h3 class=\"center azul-prof fuente\">Cambiar contraseña</h3>
    <div class=\"col s12 l5 offset-l5 center\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "password"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 11
            echo "            <div class=\"card-panel green white-text flash\">
                <span class=\"spancaja\">";
            // line 12
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "passwordError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            echo "            <div class=\"card-panel red white-text flash\">
                <span class=\"spancaja\">";
            // line 17
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div class=\"divider3\"></div>
    <div class=\"col s12 l4 offset-l4 center\">
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\" name=\"cambiar\" value=\"Modificar\">
            Modificar
            <i class=\"material-icons right\">send</i>
        </button>
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_c3e6bf9a008e2910b858a66c300264ffaae09a315ebe446c21daac8371864f62->leave($__internal_c3e6bf9a008e2910b858a66c300264ffaae09a315ebe446c21daac8371864f62_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  89 => 24,  85 => 23,  80 => 20,  71 => 17,  68 => 16,  63 => 15,  54 => 12,  51 => 11,  47 => 10,  43 => 8,  40 => 7,  34 => 6,  11 => 5,);
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
Vista de cambio de contraseña.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <h3 class=\"center azul-prof fuente\">Cambiar contraseña</h3>
    <div class=\"col s12 l5 offset-l5 center\">
        {% for flash_message in app.session.flashBag.get('password') %}
            <div class=\"card-panel green white-text flash\">
                <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
            </div>
        {% endfor %}
        {% for flash_message in app.session.flashBag.get('passwordError') %}
            <div class=\"card-panel red white-text flash\">
                <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
            </div>
        {% endfor %}
    </div>
    <div class=\"divider3\"></div>
    <div class=\"col s12 l4 offset-l4 center\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\" name=\"cambiar\" value=\"Modificar\">
            Modificar
            <i class=\"material-icons right\">send</i>
        </button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "convivencia/changePassword.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\changePassword.html.twig");
    }
}
