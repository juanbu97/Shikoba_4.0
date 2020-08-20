<?php

/* convivencia/admin/gestionProfesores.html.twig */
class __TwigTemplate_7dc9f6dbe374f94ce38bcbbcdc2bb14dca11c2613659eb041150a1cf0edc24ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/admin/gestionProfesores.html.twig", 5);
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
        $__internal_58ec149c0ec8deef99b7c0ac97ce9d8fc68e65af13db5c82db909401fcbec09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ec149c0ec8deef99b7c0ac97ce9d8fc68e65af13db5c82db909401fcbec09b->enter($__internal_58ec149c0ec8deef99b7c0ac97ce9d8fc68e65af13db5c82db909401fcbec09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/gestionProfesores.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ec149c0ec8deef99b7c0ac97ce9d8fc68e65af13db5c82db909401fcbec09b->leave($__internal_58ec149c0ec8deef99b7c0ac97ce9d8fc68e65af13db5c82db909401fcbec09b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d272aa5a61e1d9c7ae43ae89234ce68e26dc561f6925b0bed73c6d80155a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d272aa5a61e1d9c7ae43ae89234ce68e26dc561f6925b0bed73c6d80155a91->enter($__internal_e8d272aa5a61e1d9c7ae43ae89234ce68e26dc561f6925b0bed73c6d80155a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/admin/gestionProfesores.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"col s12 center\" id=\"contenedorUpload\">

        <h3 class=\"center azul-prof fuente\">Importar profesores</h3>
        <div class=\"col s12 center\">

            <!-- Modal Trigger -->
            <a class=\"waves-effect waves-light btn blue darken-3 modal-trigger btn-floating\" href=\"#modal1\"><i
                        class=\"material-icons\">info_outline</i></a>

            <!-- Modal Structure -->
            <div id=\"modal1\" class=\"modal\">
                <div class=\"modal-content\">
                    <h4>Info</h4>
                    <p>Debe ser un fichero csv con el siguiente orden de campos:
                        <br>Nombre, Primer Apellido, Segundo Apellido, Teléfono, Correo Electrónico</p>

                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csv/profesores.csv"), "html", null, true);
        echo "\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Descargar plantilla</a>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Cerrar</a>
                </div>
            </div>
        </div>
        <div class=\"divider2\"></div>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "profesor"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 36
            echo "                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "profesorError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 43
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
        <div class=\"col s12 l4 offset-l4 center\">
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => " formConvivencia")));
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <button class=\"btn blue darken-3 waves-effect waves-light\" style=\"margin-top: 7%;\" type=\"submit\"
                    name=\"importarProfesores\" id=\"botonImportar\" value=\"Importar\" disabled>Importar<i
                        class=\"material-icons right\">send</i></button>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"\">
            <div class=\"loader\"></div>
        </div>
    </div>

";
        
        $__internal_e8d272aa5a61e1d9c7ae43ae89234ce68e26dc561f6925b0bed73c6d80155a91->leave($__internal_e8d272aa5a61e1d9c7ae43ae89234ce68e26dc561f6925b0bed73c6d80155a91_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/admin/gestionProfesores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  117 => 49,  113 => 48,  109 => 46,  100 => 43,  97 => 42,  93 => 41,  90 => 40,  81 => 37,  78 => 36,  74 => 35,  64 => 28,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista de importación de profesores.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <div class=\"col s12 center\" id=\"contenedorUpload\">

        <h3 class=\"center azul-prof fuente\">Importar profesores</h3>
        <div class=\"col s12 center\">

            <!-- Modal Trigger -->
            <a class=\"waves-effect waves-light btn blue darken-3 modal-trigger btn-floating\" href=\"#modal1\"><i
                        class=\"material-icons\">info_outline</i></a>

            <!-- Modal Structure -->
            <div id=\"modal1\" class=\"modal\">
                <div class=\"modal-content\">
                    <h4>Info</h4>
                    <p>Debe ser un fichero csv con el siguiente orden de campos:
                        <br>Nombre, Primer Apellido, Segundo Apellido, Teléfono, Correo Electrónico</p>

                </div>
                <div class=\"modal-footer\">
                    <a href=\"{{ asset('csv/profesores.csv') }}\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Descargar plantilla</a>
                    <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-blue btn-flat\">Cerrar</a>
                </div>
            </div>
        </div>
        <div class=\"divider2\"></div>
        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('profesor') %}
                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}

            {% for flash_message in app.session.flashBag.get('profesorError') %}
                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">{{ flash_message }}</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
        <div class=\"col s12 l4 offset-l4 center\">
            {{ form_start(form, {'attr': {'class':' formConvivencia'}}) }}
            {{ form_widget(form) }}
            <button class=\"btn blue darken-3 waves-effect waves-light\" style=\"margin-top: 7%;\" type=\"submit\"
                    name=\"importarProfesores\" id=\"botonImportar\" value=\"Importar\" disabled>Importar<i
                        class=\"material-icons right\">send</i></button>
            {{ form_end(form) }}
        </div>
        <div class=\"\">
            <div class=\"loader\"></div>
        </div>
    </div>

{% endblock %}

", "convivencia/admin/gestionProfesores.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\admin\\gestionProfesores.html.twig");
    }
}
