<?php

/* :convivencia/alumno:modificarAlumno.html.twig */
class __TwigTemplate_9ce70a59d7ade40ea39454aa857456e6fb771093bd426de3e58e64d64c5c1455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/alumno:modificarAlumno.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/alumno:modificarAlumno.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Modificar alumno</h3>
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => "", "method" => "POST"));
        echo "
        <div class=\"col s12 m6\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apellido1", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apellido2", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nie", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefono", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direccion", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "codigoPostal", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "puntos", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "puntosIniciales", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tutorL1", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tutorL2", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefonoTL1", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefonoTL2", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6 center\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "msgTL1", array()), 'widget');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "msgTL1", array()), 'label');
        echo "
        </div>
        <div class=\"col s12 m6 center\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "msgTL2", array()), 'widget');
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "msgTL2", array()), 'label');
        echo "
        </div>
        <div class=\"col s12 l4 offset-l4 center\">
            <a class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
               style=\"margin: 2rem auto\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea volver a alumnado?\" >Cancelar
                <i class=\"material-icons left\">undo</i>
            </a>
            <button class=\" btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                    style=\"margin: 2rem auto\" name=\"guardar\" value=\"Enviar\">Enviar
                <i class=\"material-icons right\">send</i>
            </button>
        </div>
        ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/alumno:modificarAlumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 73,  149 => 65,  142 => 61,  138 => 60,  132 => 57,  128 => 56,  122 => 53,  116 => 50,  110 => 47,  104 => 44,  98 => 41,  92 => 38,  86 => 35,  80 => 32,  74 => 29,  68 => 26,  62 => 23,  56 => 20,  50 => 17,  44 => 14,  39 => 12,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/alumno:modificarAlumno.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/modificarAlumno.html.twig");
    }
}
