<?php

/* convivencia/alumno/modificarAlumno.html.twig */
class __TwigTemplate_30921fa11290b7a56877a2f6dcffab702267633d92711441495371dfecf3615d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/alumno/modificarAlumno.html.twig", 5);
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
        $__internal_93ddd3c65cf797108b0edfe844cea157e048c27be5aa3752c520f4bacc907ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ddd3c65cf797108b0edfe844cea157e048c27be5aa3752c520f4bacc907ec9->enter($__internal_93ddd3c65cf797108b0edfe844cea157e048c27be5aa3752c520f4bacc907ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/modificarAlumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ddd3c65cf797108b0edfe844cea157e048c27be5aa3752c520f4bacc907ec9->leave($__internal_93ddd3c65cf797108b0edfe844cea157e048c27be5aa3752c520f4bacc907ec9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1967593c9e228f62730e7717b8d79258178bfd8219cdbe1dc6c06b6ff187446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1967593c9e228f62730e7717b8d79258178bfd8219cdbe1dc6c06b6ff187446->enter($__internal_b1967593c9e228f62730e7717b8d79258178bfd8219cdbe1dc6c06b6ff187446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/alumno/modificarAlumno.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Modificar alumno</h3>
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
        <div class=\"col s12 m6\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellido1", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellido2", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nie", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefono", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoPostal", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "puntos", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "puntosIniciales", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tutorL1", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tutorL2", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefonoTL1", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefonoTL2", array()), 'row');
        echo "
        </div>
        <div class=\"col s12 m6 center\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "msgTL1", array()), 'widget');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "msgTL1", array()), 'label');
        echo "
        </div>
        <div class=\"col s12 m6 center\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "msgTL2", array()), 'widget');
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "msgTL2", array()), 'label');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_b1967593c9e228f62730e7717b8d79258178bfd8219cdbe1dc6c06b6ff187446->leave($__internal_b1967593c9e228f62730e7717b8d79258178bfd8219cdbe1dc6c06b6ff187446_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/alumno/modificarAlumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 73,  158 => 65,  151 => 61,  147 => 60,  141 => 57,  137 => 56,  131 => 53,  125 => 50,  119 => 47,  113 => 44,  107 => 41,  101 => 38,  95 => 35,  89 => 32,  83 => 29,  77 => 26,  71 => 23,  65 => 20,  59 => 17,  53 => 14,  48 => 12,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de edición de alumno.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Modificar alumno</h3>
        {{ form_start(form, {'action':'', 'method':'POST'}) }}
        <div class=\"col s12 m6\">
            {{ form_row(form.nombre) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.apellido1) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.apellido2) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.nie) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.telefono) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.email) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.direccion) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.codigoPostal) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.puntos) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.puntosIniciales) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.tutorL1) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.tutorL2) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.telefonoTL1) }}
        </div>
        <div class=\"col s12 m6\">
            {{ form_row(form.telefonoTL2) }}
        </div>
        <div class=\"col s12 m6 center\">
            {{ form_widget(form.msgTL1) }}
            {{ form_label(form.msgTL1) }}
        </div>
        <div class=\"col s12 m6 center\">
            {{ form_widget(form.msgTL2) }}
            {{ form_label(form.msgTL2) }}
        </div>
        <div class=\"col s12 l4 offset-l4 center\">
            <a class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
               style=\"margin: 2rem auto\" href=\"{{ path('show_alumnos') }}\" data-title=\"Cancelar\" data-content=\"¿Desea volver a alumnado?\" >Cancelar
                <i class=\"material-icons left\">undo</i>
            </a>
            <button class=\" btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                    style=\"margin: 2rem auto\" name=\"guardar\" value=\"Enviar\">Enviar
                <i class=\"material-icons right\">send</i>
            </button>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "convivencia/alumno/modificarAlumno.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/modificarAlumno.html.twig");
    }
}
