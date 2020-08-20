<?php

/* convivencia/recuperarPassword.html.twig */
class __TwigTemplate_d8e296b260c6b8ef69832a20112c0039a69d41be8962df7be694b0de051692bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/recuperarPassword.html.twig", 5);
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
        $__internal_57689c9d4137f49cbc7b00634ac267cc651d77275baf72b5de72dda9e3a2e974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57689c9d4137f49cbc7b00634ac267cc651d77275baf72b5de72dda9e3a2e974->enter($__internal_57689c9d4137f49cbc7b00634ac267cc651d77275baf72b5de72dda9e3a2e974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/recuperarPassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57689c9d4137f49cbc7b00634ac267cc651d77275baf72b5de72dda9e3a2e974->leave($__internal_57689c9d4137f49cbc7b00634ac267cc651d77275baf72b5de72dda9e3a2e974_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_86a0ac899782e26662b5d005047b3a2fe374e4c761e5bee4b70077bcbc8100aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a0ac899782e26662b5d005047b3a2fe374e4c761e5bee4b70077bcbc8100aa->enter($__internal_86a0ac899782e26662b5d005047b3a2fe374e4c761e5bee4b70077bcbc8100aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <div class=\"navbar-fixed z-depth-4\" id=\"inicio\">
            <nav>
                <div class=\"nav-wrapper blue darken-3 row\">

                    <div class=\"col l8 left\">
                        <ul class=\"left\">
                            <li>
                                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"ancla centro\">
                                    <img id=\"img_nav\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo3.png"), "html", null, true);
        echo "\" alt=\"logo3\">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col l4 right\">
                        <ul class=\"right\">
                            <li>
                                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Volver</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class=\"col s12 l4 offset-l4 center\">
        <h3 class=\"center azul-prof fuente\">Recuperar contraseña</h3>


            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "password"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "                <div class=\"card-panel green white-text flash2 \">
                    <span class=\"spancaja\">";
            // line 38
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "passwordError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                <div class=\"card-panel red white-text flash2 \">
                    <span class=\"spancaja\">";
            // line 43
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span><i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        <div class=\"divider3\"></div>

        <div class=\"contenedorCartaAlumno\">
            <form action=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\" method=\"post\">
                <div class=\"input-field col s12 center\">
                    <input name=\"username\" id=\"username\" type=\"text\" class=\"validate\">
                    <label for=\"username\">Usuario</label>
                </div>
                <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\" name=\"recuperar\"
                        value=\"Recuperar\">Recuperar
                    <i class=\"material-icons right\">send</i>
                </button>
            </form>
        </div>
    </div>
";
        
        $__internal_86a0ac899782e26662b5d005047b3a2fe374e4c761e5bee4b70077bcbc8100aa->leave($__internal_86a0ac899782e26662b5d005047b3a2fe374e4c761e5bee4b70077bcbc8100aa_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/recuperarPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  113 => 46,  104 => 43,  101 => 42,  96 => 41,  87 => 38,  84 => 37,  80 => 36,  65 => 24,  54 => 16,  50 => 15,  40 => 7,  34 => 6,  11 => 5,);
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
Vista de recuperación de la contraseña.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block body %}
    <header>
        <div class=\"navbar-fixed z-depth-4\" id=\"inicio\">
            <nav>
                <div class=\"nav-wrapper blue darken-3 row\">

                    <div class=\"col l8 left\">
                        <ul class=\"left\">
                            <li>
                                <a href=\"{{ path('login') }}\" class=\"ancla centro\">
                                    <img id=\"img_nav\" src=\"{{ asset('img/logo3.png') }}\" alt=\"logo3\">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col l4 right\">
                        <ul class=\"right\">
                            <li>
                                <a href=\"{{ path('login') }}\">Volver</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class=\"col s12 l4 offset-l4 center\">
        <h3 class=\"center azul-prof fuente\">Recuperar contraseña</h3>


            {% for flash_message in app.session.flashBag.get('password') %}
                <div class=\"card-panel green white-text flash2 \">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashBag.get('passwordError') %}
                <div class=\"card-panel red white-text flash2 \">
                    <span class=\"spancaja\">{{ flash_message }}</span><i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}

        <div class=\"divider3\"></div>

        <div class=\"contenedorCartaAlumno\">
            <form action=\"{{ path('recuperarPassword') }}\" method=\"post\">
                <div class=\"input-field col s12 center\">
                    <input name=\"username\" id=\"username\" type=\"text\" class=\"validate\">
                    <label for=\"username\">Usuario</label>
                </div>
                <button class=\"btn blue darken-3 waves-effect waves-light\" type=\"submit\" name=\"recuperar\"
                        value=\"Recuperar\">Recuperar
                    <i class=\"material-icons right\">send</i>
                </button>
            </form>
        </div>
    </div>
{% endblock %}
", "convivencia/recuperarPassword.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/recuperarPassword.html.twig");
    }
}
