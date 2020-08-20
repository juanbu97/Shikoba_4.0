<?php

/* convivencia/admin/gestionAlumnos.html.twig */
class __TwigTemplate_1e329e39a2cd28f538a323b4371ecc9e035ab96b900857b415c0eb76b09165a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/admin/gestionAlumnos.html.twig", 5);
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
        $__internal_cd0df7706487a485dd0716f9621b5eebbd40d6832970a707db76d169de07b690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0df7706487a485dd0716f9621b5eebbd40d6832970a707db76d169de07b690->enter($__internal_cd0df7706487a485dd0716f9621b5eebbd40d6832970a707db76d169de07b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/gestionAlumnos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0df7706487a485dd0716f9621b5eebbd40d6832970a707db76d169de07b690->leave($__internal_cd0df7706487a485dd0716f9621b5eebbd40d6832970a707db76d169de07b690_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f17f2fb65d5d617b0c026a8e6b6bf069d328d2a0b0f1160bd92c906780508717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17f2fb65d5d617b0c026a8e6b6bf069d328d2a0b0f1160bd92c906780508717->enter($__internal_f17f2fb65d5d617b0c026a8e6b6bf069d328d2a0b0f1160bd92c906780508717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/admin/gestionAlumnos.html.twig", 8)->display($context);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alumnos"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alumnosError"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => " formConvivencia")));
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <button class=\"btn blue darken-3 waves-effect waves-light\" style=\"margin-top: 7%;\" type=\"submit\"
                    name=\"importarAlumnos\" id=\"botonImportar\" value=\"Importar\" disabled>Importar<i
                        class=\"material-icons right\">send</i></button>

            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"\">
            <div class=\"loader\"></div>
        </div>
    </div>
";
        
        $__internal_f17f2fb65d5d617b0c026a8e6b6bf069d328d2a0b0f1160bd92c906780508717->leave($__internal_f17f2fb65d5d617b0c026a8e6b6bf069d328d2a0b0f1160bd92c906780508717_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/admin/gestionAlumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  118 => 50,  114 => 49,  110 => 47,  101 => 44,  98 => 43,  94 => 42,  91 => 41,  82 => 38,  79 => 37,  75 => 36,  65 => 29,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de importación de alumnos.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

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
                    <a href=\"{{ asset('csv/alumnosNuevosSMS.csv') }}\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Descargar plantilla</a>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Cerrar</a>
                </div>
            </div>
        </div>
        <div class=\"divider2\"></div>
        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('alumnos') %}
                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('alumnosError') %}
                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
        <div class=\"col s12 l4 offset-l4 center\">
            {{ form_start(form, {'attr': {'class':' formConvivencia'}}) }}
            {{ form_widget(form) }}
            <button class=\"btn blue darken-3 waves-effect waves-light\" style=\"margin-top: 7%;\" type=\"submit\"
                    name=\"importarAlumnos\" id=\"botonImportar\" value=\"Importar\" disabled>Importar<i
                        class=\"material-icons right\">send</i></button>

            {{ form_end(form) }}
        </div>
        <div class=\"\">
            <div class=\"loader\"></div>
        </div>
    </div>
{% endblock %}", "convivencia/admin/gestionAlumnos.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/gestionAlumnos.html.twig");
    }
}
