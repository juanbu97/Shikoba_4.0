<?php

/* convivencia/index.html.twig */
class __TwigTemplate_3265f64f9025147ccb5488b1613ef6df37af329364542617d20e01e683adf3b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/index.html.twig", 5);
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
        $__internal_020d877d1e0159926d0d0c2a5108d3b71dd2c5ca036fd322736a8b1d71ca0e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020d877d1e0159926d0d0c2a5108d3b71dd2c5ca036fd322736a8b1d71ca0e7e->enter($__internal_020d877d1e0159926d0d0c2a5108d3b71dd2c5ca036fd322736a8b1d71ca0e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_020d877d1e0159926d0d0c2a5108d3b71dd2c5ca036fd322736a8b1d71ca0e7e->leave($__internal_020d877d1e0159926d0d0c2a5108d3b71dd2c5ca036fd322736a8b1d71ca0e7e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f931c64982f2c1448a2b2f55af2a1fca360cd38e4b6be55b36ee52df71dcb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f931c64982f2c1448a2b2f55af2a1fca360cd38e4b6be55b36ee52df71dcb1a->enter($__internal_2f931c64982f2c1448a2b2f55af2a1fca360cd38e4b6be55b36ee52df71dcb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/index.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"center\" id=\"fondo\">
        <div class=\"back\">
            <div class=\"col s12 m6 l4 offset-l4 offset-m3 center \">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img class=\"responsive-img\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"logo\"/>
                    </div>

                    ";
        // line 18
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 19
            echo "                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">Credenciales inválidos</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    ";
        }
        // line 24
        echo "
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 26
            echo "                        <div class=\"card-panel green white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">";
            // line 27
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">";
            // line 33
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    <div class=\"input-field col s12 center\">
                        <input name=\"_username\" id=\"username\" type=\"text\" class=\"validate white-text\">
                        <label for=\"username\">Usuario</label>
                    </div>
                    <div class=\"input-field col s12 center\">
                        <input name=\"_password\" id=\"password\" type=\"password\" class=\"validate white-text\">
                        <label for=\"password\">Contraseña</label>
                    </div>
                    <div class=\"col s6 left \">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
                        <label for=\"remember_me\">Recordar contraseña</label>
                    </div>
                    <div class=\"col s6 right\">
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\">Recuperar contraseña</a>
                    </div>
                    ";
        // line 53
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\">
                    <div class=\"col s12 center mtop\">
                        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\">
                            Entrar
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_2f931c64982f2c1448a2b2f55af2a1fca360cd38e4b6be55b36ee52df71dcb1a->leave($__internal_2f931c64982f2c1448a2b2f55af2a1fca360cd38e4b6be55b36ee52df71dcb1a_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  124 => 50,  109 => 37,  99 => 33,  96 => 32,  92 => 31,  89 => 30,  80 => 27,  77 => 26,  73 => 25,  70 => 24,  63 => 19,  60 => 18,  54 => 14,  48 => 11,  43 => 8,  40 => 7,  34 => 6,  11 => 5,);
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
Vista index.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <div class=\"center\" id=\"fondo\">
        <div class=\"back\">
            <div class=\"col s12 m6 l4 offset-l4 offset-m3 center \">
                <form action=\"{{ path('login') }}\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img class=\"responsive-img\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"logo\"/>
                    </div>

                    {# Muestra el error en caso de existir #}
                    {% if error %}
                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">Credenciales inválidos</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    {% endif %}

                    {% for flash_message in app.session.flashBag.get('login') %}
                        <div class=\"card-panel green white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                        </div>
                    {% endfor %}

                    {% for flash_message in app.session.flashBag.get('loginError') %}
                        <div class=\"card-panel red white-text flash2\" style=\"position: relative;\">
                            <span class=\"spancaja\">{{ flash_message }}</span>
                            <i class=\"material-icons spanico\">clear</i>
                        </div>
                    {% endfor %}
                    <div class=\"input-field col s12 center\">
                        <input name=\"_username\" id=\"username\" type=\"text\" class=\"validate white-text\">
                        <label for=\"username\">Usuario</label>
                    </div>
                    <div class=\"input-field col s12 center\">
                        <input name=\"_password\" id=\"password\" type=\"password\" class=\"validate white-text\">
                        <label for=\"password\">Contraseña</label>
                    </div>
                    <div class=\"col s6 left \">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
                        <label for=\"remember_me\">Recordar contraseña</label>
                    </div>
                    <div class=\"col s6 right\">
                        <a href=\"{{ path('recuperarPassword') }}\">Recuperar contraseña</a>
                    </div>
                    {# Ruta a la que redirige si hay éxito #}
                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\">
                    <div class=\"col s12 center mtop\">
                        <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\">
                            Entrar
                            <i class=\"material-icons right\">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "convivencia/index.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/index.html.twig");
    }
}
