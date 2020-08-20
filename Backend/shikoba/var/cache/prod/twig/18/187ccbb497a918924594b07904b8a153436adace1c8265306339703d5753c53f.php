<?php

/* :convivencia/diarioAulaConvivencia:diarioAulaForm.html.twig */
class __TwigTemplate_a6166506d6334c6026e2eb6b9dbb607bdce78c5233f07f28ab0a498801a366c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/diarioAulaConvivencia:diarioAulaForm.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/diarioAulaConvivencia:diarioAulaForm.html.twig", 8)->display($context);
        // line 9
        echo "
    <h3 class=\"center azul-prof fuente\">Editar diario aula convivencia</h3>
    <h4 class=\"center azul-prof fuente\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["diario"] ?? null), "idSancion", array()), "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h4>

    <div class=\"col s12 l4 offset-l4 center\">

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"center\">
            ";
        // line 17
        if (($context["recupera"] ?? null)) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_diario", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "id"), "method"), "recuperaPunto" => "true")), "html", null, true);
            echo "\"
                   class=\"btn  btn-floating blue darken-3 waves-effect waves-light\" data-title=\"Recuperar punto\">-1</a>
            ";
        } else {
            // line 21
            echo "                <button class=\"btn btn-floating blue darken-3 waves-effect waves-light\" type=\"button\" name=\"recuperaPunto\"
                       value=\"-1 Punto\"
                        disabled>-1</button>
            ";
        }
        // line 25
        echo "            </div>
        </form>

        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "w3-content formConvivencia", "id" => "diarioAulaForm")));
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        <button style=\"margin-bottom: 20px\" class=\"btn blue darken-3 waves-effect waves-light\"  type=\"submit\"
                name=\"editarDiario\" value=\"Editar\">Editar<i class=\"material-icons right\">send</i></button>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/diarioAulaConvivencia:diarioAulaForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  71 => 29,  67 => 28,  62 => 25,  56 => 21,  49 => 18,  47 => 17,  38 => 11,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/diarioAulaConvivencia:diarioAulaForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig");
    }
}
