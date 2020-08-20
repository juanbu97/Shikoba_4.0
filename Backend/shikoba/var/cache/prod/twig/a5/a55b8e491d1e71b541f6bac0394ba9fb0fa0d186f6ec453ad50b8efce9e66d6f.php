<?php

/* :convivencia/tutor:alumnoTutor.html.twig */
class __TwigTemplate_96bb05b4ee9fc3f35ec72295f120752f2e0cae4311940c9516e4821e1ac1df63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/tutor:alumnoTutor.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/tutor:alumnoTutor.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"center\">
        <h3 class=\"center azul-prof fuente\">Alumnos</h3>
        <div class=\"row\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alumnos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 12
            echo "                <div class=\"col s6 m4 l2 carta ancho\">
                    <div class=\"card\">
                        <div class=\"card-image\">
                            ";
            // line 15
            if ((($this->getAttribute($context["alumno"], "foto", array()) == "") || ($this->getAttribute($context["alumno"], "foto", array()) == null))) {
                // line 16
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("img/alumnos/" . $this->getAttribute($context["alumno"], "nie", array())) . ".PNG")), "html", null, true);
                echo "\"
                                     alt=\"avatar\">
                            ";
            } else {
                // line 19
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/alumnos/" . $this->getAttribute($context["alumno"], "foto", array()))), "html", null, true);
                echo "\" alt=\"avatar\">

                            ";
            }
            // line 22
            echo "                            <span class=\"card-title\"></span>
                        </div>

                        <div class=\"card-action blue darken-1 \">
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($context["alumno"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/tutor:alumnoTutor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  70 => 26,  64 => 22,  57 => 19,  50 => 16,  48 => 15,  43 => 12,  39 => 11,  34 => 8,  31 => 7,  28 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/tutor:alumnoTutor.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/tutor/alumnoTutor.html.twig");
    }
}
