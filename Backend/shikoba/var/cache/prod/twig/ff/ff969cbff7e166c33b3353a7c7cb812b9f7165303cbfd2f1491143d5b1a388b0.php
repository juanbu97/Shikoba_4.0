<?php

/* :convivencia/admin:admin.html.twig */
class __TwigTemplate_7dbb48c50b6c507f379f9ff4e109127da6181bbf60ffa6da15546ab6c009ce51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/admin:admin.html.twig", 5);
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/admin:admin.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Administración</h3>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/pencil.jpg"), "html", null, true);
        echo "\" alt=\"imagen editar\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Partes iniciados</h5>
                        <h2>";
        // line 19
        echo twig_escape_filter($this->env, ($context["partesIniciados"] ?? null), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/document.jpg"), "html", null, true);
        echo " \" alt=\"imagen documento\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Sanciones iniciadas</h5>
                        <h2>";
        // line 35
        echo twig_escape_filter($this->env, ($context["sancionesIniciadas"] ?? null), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col s12 m6 l4\">
            <div class=\"card horizontal\">
                <div class=\"card-image\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/clase.jpeg"), "html", null, true);
        echo "\" alt=\"imagen clase\">
                </div>
                <div class=\"card-stacked\">
                    <div class=\"card-content\">
                        <h5>Aforo aula convivencia</h5>
                        <h2>";
        // line 51
        echo twig_escape_filter($this->env, ($context["diarioNow"] ?? null), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"card-action blue darken-1 center\">
                        <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
        echo "\" class=\"white-text font16\">IR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 54,  99 => 51,  91 => 46,  80 => 38,  74 => 35,  66 => 30,  55 => 22,  49 => 19,  41 => 14,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/admin:admin.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/admin.html.twig");
    }
}
