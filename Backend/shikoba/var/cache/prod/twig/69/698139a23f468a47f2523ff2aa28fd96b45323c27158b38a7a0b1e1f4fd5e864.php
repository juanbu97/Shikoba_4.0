<?php

/* :convivencia:index.html.twig */
class __TwigTemplate_b3ad850537536263fb87a43aa4ef3762df0f97b7cd6d575cccdc6e0d2286f201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia:index.html.twig", 5);
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
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia:index.html.twig", 7)->display($context);
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
        if (($context["error"] ?? null)) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
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
    }

    public function getTemplateName()
    {
        return ":convivencia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  115 => 50,  100 => 37,  90 => 33,  87 => 32,  83 => 31,  80 => 30,  71 => 27,  68 => 26,  64 => 25,  61 => 24,  54 => 19,  51 => 18,  45 => 14,  39 => 11,  34 => 8,  31 => 7,  28 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia:index.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/index.html.twig");
    }
}
