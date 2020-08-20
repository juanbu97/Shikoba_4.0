<?php

/* :convivencia/admin:gestionAlumnos.html.twig */
class __TwigTemplate_37b5ab3986033f9d7de11be56369744ba29b63960d4523d41a88e4d1d0c4fb49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/admin:gestionAlumnos.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/admin:gestionAlumnos.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"col s12 center\" id=\"contenedorUpload\">

        <h3 class=\"center azul-prof fuente\">Importar alumnos</h3>
        <div class=\"col s12 center\">

            <!-- Modal Trigger -->
            <a class=\"waves-effect waves-light btn blue darken-3 modal-trigger btn-floating\" href=\"#modal1\"><i
                        class=\"material-icons\">info_outline</i></a>

            <!-- Modal Structure -->
            <div id=\"modal1\" class=\"modal\">
                <div class=\"modal-content\">
                    <h4>Info</h4>
                    <p>Debe ser un fichero csv con el siguiente orden de campos:
                        <br>
                        Nombre, Primer Apellido, Segundo Apellido, Unidad, Teléfono, Correo Electrónico, NºId Escolar,
                        Dirección, Código Postal, Tutor Legal 1, Tutor Legal 2, Teléfono TL1, Teléfono TL2, Curso</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csv/alumnosNuevosSMS.csv"), "html", null, true);
        echo "\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Descargar plantilla</a>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Cerrar</a>
                </div>
            </div>
        </div>
        <div class=\"divider2\"></div>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "alumnos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 37
            echo "                <div class=\"card-panel green white-text flash\">
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
        echo "
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "alumnosError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 43
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 44
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
        <div class=\"col s12 l4 offset-l4 center\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => " formConvivencia")));
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <button class=\"btn blue darken-3 waves-effect waves-light\" style=\"margin-top: 7%;\" type=\"submit\"
                    name=\"importarAlumnos\" id=\"botonImportar\" value=\"Importar\" disabled>Importar<i
                        class=\"material-icons right\">send</i></button>

            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
        <div class=\"\">
            <div class=\"loader\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/admin:gestionAlumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 55,  109 => 50,  105 => 49,  101 => 47,  92 => 44,  89 => 43,  85 => 42,  82 => 41,  73 => 38,  70 => 37,  66 => 36,  56 => 29,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/admin:gestionAlumnos.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/gestionAlumnos.html.twig");
    }
}
