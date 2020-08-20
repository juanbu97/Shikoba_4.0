<?php

/* :convivencia/admin:security.html.twig */
class __TwigTemplate_32a0edbf0df2bb339475926ad21f6daddc569a582a52bf2ebf28e5a6da1fbe43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/admin:security.html.twig", 5);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Copias de seguridad";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/admin:security.html.twig", 8)->display($context);
        // line 9
        echo "
    <h3 class=\"center azul-prof fuente\">Copias de seguridad</h3>
    <div class=\"divider2\"></div>
        <div class=\"col s12 center\">
        <a class=\"waves-effect waves-light btn blue darken-2\" href=\"\">Realizar copia<i class=\"material-icons right\">send</i></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/admin:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  35 => 7,  29 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/admin:security.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/security.html.twig");
    }
}
