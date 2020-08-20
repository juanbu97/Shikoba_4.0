<?php

/* convivencia/index.html.twig */
class __TwigTemplate_c5315c6240fa25843760a3a3e366ba750b22fed937bbdd0d0a6a93e0152cfa4a extends Twig_Template
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
        $__internal_623968f00a630fddf0b86e219a001eb18d9baf4c817f24fb8f1f3a4476bdd10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623968f00a630fddf0b86e219a001eb18d9baf4c817f24fb8f1f3a4476bdd10b->enter($__internal_623968f00a630fddf0b86e219a001eb18d9baf4c817f24fb8f1f3a4476bdd10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_af5328a4b7ba57320a83d757731e3c15de8001acad2dbf4c8da2b5b7d2a59d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5328a4b7ba57320a83d757731e3c15de8001acad2dbf4c8da2b5b7d2a59d53->enter($__internal_af5328a4b7ba57320a83d757731e3c15de8001acad2dbf4c8da2b5b7d2a59d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_623968f00a630fddf0b86e219a001eb18d9baf4c817f24fb8f1f3a4476bdd10b->leave($__internal_623968f00a630fddf0b86e219a001eb18d9baf4c817f24fb8f1f3a4476bdd10b_prof);

        
        $__internal_af5328a4b7ba57320a83d757731e3c15de8001acad2dbf4c8da2b5b7d2a59d53->leave($__internal_af5328a4b7ba57320a83d757731e3c15de8001acad2dbf4c8da2b5b7d2a59d53_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4040906f5034a17376433948a8d93d87df87d9628b5ad9b7c9f3731bfe6f8922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4040906f5034a17376433948a8d93d87df87d9628b5ad9b7c9f3731bfe6f8922->enter($__internal_4040906f5034a17376433948a8d93d87df87d9628b5ad9b7c9f3731bfe6f8922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60940aecbda259d24cdd4c19e8554c0ce50c5ee82b453553c346547d77a3e02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60940aecbda259d24cdd4c19e8554c0ce50c5ee82b453553c346547d77a3e02f->enter($__internal_60940aecbda259d24cdd4c19e8554c0ce50c5ee82b453553c346547d77a3e02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 18, $this->getSourceContext()); })())) {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
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
        
        $__internal_60940aecbda259d24cdd4c19e8554c0ce50c5ee82b453553c346547d77a3e02f->leave($__internal_60940aecbda259d24cdd4c19e8554c0ce50c5ee82b453553c346547d77a3e02f_prof);

        
        $__internal_4040906f5034a17376433948a8d93d87df87d9628b5ad9b7c9f3731bfe6f8922->leave($__internal_4040906f5034a17376433948a8d93d87df87d9628b5ad9b7c9f3731bfe6f8922_prof);

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
        return array (  138 => 53,  133 => 50,  118 => 37,  108 => 33,  105 => 32,  101 => 31,  98 => 30,  89 => 27,  86 => 26,  82 => 25,  79 => 24,  72 => 19,  69 => 18,  63 => 14,  57 => 11,  52 => 8,  49 => 7,  40 => 6,  11 => 5,);
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
", "convivencia/index.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/index.html.twig");
    }
}
