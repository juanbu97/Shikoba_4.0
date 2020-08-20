<?php

/* convivencia/informes/partesAlumnoInforme.twig */
class __TwigTemplate_c3a057af2126247a9fd310ce49e7c077bb862bfa5e52b3247b0daecce9bacf37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/informes/partesAlumnoInforme.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/informes/partesAlumnoInforme.twig", 4)->display($context);
        // line 5
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "convivencia/informes/partesAlumnoInforme.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/informes/partesAlumnoInforme.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/informes/partesAlumnoInforme.twig");
    }
}
