<?php

/* convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig */
class __TwigTemplate_b29e0664c4c1c9fdeef80ae70c3cdaea4fe131357631005aa1dcaa9ccf0ed3b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig", 5);
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
        $__internal_6a44e96e227259aa84a3c6c6db661e186b2f0f35f43c3e8fc7eaa9e211246cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a44e96e227259aa84a3c6c6db661e186b2f0f35f43c3e8fc7eaa9e211246cc7->enter($__internal_6a44e96e227259aa84a3c6c6db661e186b2f0f35f43c3e8fc7eaa9e211246cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a44e96e227259aa84a3c6c6db661e186b2f0f35f43c3e8fc7eaa9e211246cc7->leave($__internal_6a44e96e227259aa84a3c6c6db661e186b2f0f35f43c3e8fc7eaa9e211246cc7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_528140ff2c8e3a6afed2d9d653426806e981a06a835a8fe6024393331c09e797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528140ff2c8e3a6afed2d9d653426806e981a06a835a8fe6024393331c09e797->enter($__internal_528140ff2c8e3a6afed2d9d653426806e981a06a835a8fe6024393331c09e797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig", 8)->display($context);
        // line 9
        echo "
    <h3 class=\"center azul-prof fuente\">Editar diario aula convivencia</h3>
    <h4 class=\"center azul-prof fuente\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["diario"] ?? $this->getContext($context, "diario")), "idSancion", array()), "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h4>

    <div class=\"col s12 l4 offset-l4 center\">

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"center\">
            ";
        // line 17
        if (($context["recupera"] ?? $this->getContext($context, "recupera"))) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_diario", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "id"), "method"), "recuperaPunto" => "true")), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "w3-content formConvivencia", "id" => "diarioAulaForm")));
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <button style=\"margin-bottom: 20px\" class=\"btn blue darken-3 waves-effect waves-light\"  type=\"submit\"
                name=\"editarDiario\" value=\"Editar\">Editar<i class=\"material-icons right\">send</i></button>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_528140ff2c8e3a6afed2d9d653426806e981a06a835a8fe6024393331c09e797->leave($__internal_528140ff2c8e3a6afed2d9d653426806e981a06a835a8fe6024393331c09e797_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 32,  80 => 29,  76 => 28,  71 => 25,  65 => 21,  58 => 18,  56 => 17,  47 => 11,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
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
Vista del editor del diario del aula de convivencia.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}

{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}

    <h3 class=\"center azul-prof fuente\">Editar diario aula convivencia</h3>
    <h4 class=\"center azul-prof fuente\">{{ diario.idSancion.idAlumno.getNombreCompleto() }}</h4>

    <div class=\"col s12 l4 offset-l4 center\">

        <form method=\"post\" class=\"\" name=\"formBusqueda\">
            <div class=\"center\">
            {% if recupera %}
                <a href=\"{{ path('edit_diario', {'id': app.request.get('id'), 'recuperaPunto': 'true'}) }}\"
                   class=\"btn  btn-floating blue darken-3 waves-effect waves-light\" data-title=\"Recuperar punto\">-1</a>
            {% else %}
                <button class=\"btn btn-floating blue darken-3 waves-effect waves-light\" type=\"button\" name=\"recuperaPunto\"
                       value=\"-1 Punto\"
                        disabled>-1</button>
            {% endif %}
            </div>
        </form>

        {{ form_start(form, {'attr': {'class':'w3-content formConvivencia', 'id':'diarioAulaForm'}}) }}
        {{ form_widget(form) }}
        <button style=\"margin-bottom: 20px\" class=\"btn blue darken-3 waves-effect waves-light\"  type=\"submit\"
                name=\"editarDiario\" value=\"Editar\">Editar<i class=\"material-icons right\">send</i></button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/diarioAulaConvivencia/diarioAulaForm.html.twig");
    }
}
