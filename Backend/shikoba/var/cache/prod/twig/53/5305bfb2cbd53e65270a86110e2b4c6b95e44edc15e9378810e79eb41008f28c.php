<?php

/* :convivencia:recuperarPassword.html.twig */
class __TwigTemplate_64dd82d56a6a2f576d8cfd777ee1530f5260b72778afc88ce9d19d1fcf3abd7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia:recuperarPassword.html.twig", 5);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "password"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "passwordError"), "method"));
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
    }

    public function getTemplateName()
    {
        return ":convivencia:recuperarPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  104 => 46,  95 => 43,  92 => 42,  87 => 41,  78 => 38,  75 => 37,  71 => 36,  56 => 24,  45 => 16,  41 => 15,  31 => 7,  28 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia:recuperarPassword.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/recuperarPassword.html.twig");
    }
}
