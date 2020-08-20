<?php

/* convivencia/eventos/eventos.html.twig */
class __TwigTemplate_d633223c900eef4dcb30a4086845dc42000911ce43037044df6bdefa5ad54aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/eventos/eventos.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a7ac0075c4b616b3a0fe18d86491834b98ad45587d0779d9befafe2993236d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7ac0075c4b616b3a0fe18d86491834b98ad45587d0779d9befafe2993236d3->enter($__internal_7a7ac0075c4b616b3a0fe18d86491834b98ad45587d0779d9befafe2993236d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/eventos/eventos.html.twig"));

        $__internal_936a662c88eed69f8210c8b81f0a2454dd04e77568823025789dfca68ca03053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936a662c88eed69f8210c8b81f0a2454dd04e77568823025789dfca68ca03053->enter($__internal_936a662c88eed69f8210c8b81f0a2454dd04e77568823025789dfca68ca03053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/eventos/eventos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7ac0075c4b616b3a0fe18d86491834b98ad45587d0779d9befafe2993236d3->leave($__internal_7a7ac0075c4b616b3a0fe18d86491834b98ad45587d0779d9befafe2993236d3_prof);

        
        $__internal_936a662c88eed69f8210c8b81f0a2454dd04e77568823025789dfca68ca03053->leave($__internal_936a662c88eed69f8210c8b81f0a2454dd04e77568823025789dfca68ca03053_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d09e3a1347cfc521e4aa04d0927429e45d245e6517c0a5aa28debf6c4cce59cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09e3a1347cfc521e4aa04d0927429e45d245e6517c0a5aa28debf6c4cce59cb->enter($__internal_d09e3a1347cfc521e4aa04d0927429e45d245e6517c0a5aa28debf6c4cce59cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62d6fd2e117e8e5cc6e30032a0fd7fb7a30d96b9e88539fb7f4a00fcc52ee4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d6fd2e117e8e5cc6e30032a0fd7fb7a30d96b9e88539fb7f4a00fcc52ee4fd->enter($__internal_62d6fd2e117e8e5cc6e30032a0fd7fb7a30d96b9e88539fb7f4a00fcc52ee4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t#resultados-contenido {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 30px;
\t\t\tborder-radius: 20px;
\t\t\tbox-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
";
        
        $__internal_62d6fd2e117e8e5cc6e30032a0fd7fb7a30d96b9e88539fb7f4a00fcc52ee4fd->leave($__internal_62d6fd2e117e8e5cc6e30032a0fd7fb7a30d96b9e88539fb7f4a00fcc52ee4fd_prof);

        
        $__internal_d09e3a1347cfc521e4aa04d0927429e45d245e6517c0a5aa28debf6c4cce59cb->leave($__internal_d09e3a1347cfc521e4aa04d0927429e45d245e6517c0a5aa28debf6c4cce59cb_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1f02cd34aedaf8618d5436c342f0d35eb942ef793e529841da3b24b9c7235e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1f02cd34aedaf8618d5436c342f0d35eb942ef793e529841da3b24b9c7235e->enter($__internal_8c1f02cd34aedaf8618d5436c342f0d35eb942ef793e529841da3b24b9c7235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc74c4b188aa10316e154b72ee6fb0d67b8ef943d6652519b88bc3ad258c09b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc74c4b188aa10316e154b72ee6fb0d67b8ef943d6652519b88bc3ad258c09b3->enter($__internal_bc74c4b188aa10316e154b72ee6fb0d67b8ef943d6652519b88bc3ad258c09b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/eventos/eventos.html.twig", 15)->display($context);
        // line 16
        echo "\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Eventos</h3>
\t\t<div class=\"row center\">
\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoEvento");
        echo "\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Nueva noticia\">Nuevo Evento<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col s12 l5 offset-l5 center\">
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "evento"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "\t\t\t\t<div class=\"card-panel green white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">";
            // line 25
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t\t</span>
\t\t\t\t\t<i class=\"material-icons spanico\">done</i>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "eventoError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "\t\t\t\t<div class=\"card-panel red white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">";
            // line 33
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span>
\t\t\t\t\t<i class=\"material-icons spanico\">clear</i>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t</div>
\t\t<div class=\"divider3\"></div>
\t\t<div style=\"width: 100%; display: grid; grid-template-columns: repeat(2, 50%); gap: 20px; text-align: center; padding: 6%; margin-top: -40px\">
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new Twig_Error_Runtime('Variable "eventos" does not exist.', 41, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 42
            echo "                <div id=\"resultados-contenido\" style=\"margin-right:4%; margin-left:4%\">
\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t<div style=\"display: flex; justify-content: space-between; align-self: center;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block;\" id=\"titulo\">
\t\t\t\t\t\t\t\t\t<b>Titulo:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "descripcion", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block\" id=\"fechaInicio\">
\t\t\t\t\t\t\t\t\t<b>Fecha Inicio:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "fechaInicio", array()), "Y/m/d"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block\" id=\"fechaFinal\">
\t\t\t\t\t\t\t\t\t<b>Fecha Final:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "fechaFinal", array()), "Y/m/d"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 60
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEvento", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrarEvento", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evento"], "id", array()))), "html", null, true);
                echo "\" data-content=\"Se va a eliminar el evento, ¿desea continuar?\" data-title=\"Eliminar evento\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t</div>
\t</div>
";
        
        $__internal_bc74c4b188aa10316e154b72ee6fb0d67b8ef943d6652519b88bc3ad258c09b3->leave($__internal_bc74c4b188aa10316e154b72ee6fb0d67b8ef943d6652519b88bc3ad258c09b3_prof);

        
        $__internal_8c1f02cd34aedaf8618d5436c342f0d35eb942ef793e529841da3b24b9c7235e->leave($__internal_8c1f02cd34aedaf8618d5436c342f0d35eb942ef793e529841da3b24b9c7235e_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/eventos/eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 77,  194 => 72,  186 => 67,  178 => 62,  175 => 61,  173 => 60,  167 => 57,  160 => 53,  153 => 49,  144 => 42,  140 => 41,  134 => 37,  124 => 33,  121 => 32,  117 => 31,  114 => 30,  103 => 25,  100 => 24,  96 => 23,  89 => 19,  84 => 16,  81 => 15,  72 => 14,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base2.html.twig\" %}
{% block stylesheets %}
\t{{ parent() }}
\t<style>
\t\t#resultados-contenido {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 30px;
\t\t\tborder-radius: 20px;
\t\t\tbox-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
{% endblock %}
{% block body %}
\t{% include \"convivencia/navegacion.html.twig\" %}
\t<div class=\"\">
\t\t<h3 class=\"center azul-prof fuente\">Eventos</h3>
\t\t<div class=\"row center\">
\t\t\t<a href=\"{{ path('nuevoEvento') }}\" class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\" title=\"Nueva noticia\">Nuevo Evento<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col s12 l5 offset-l5 center\">
\t\t\t{% for flash_message in app.session.flashBag.get('evento') %}
\t\t\t\t<div class=\"card-panel green white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">{{ flash_message }}
\t\t\t\t\t</span>
\t\t\t\t\t<i class=\"material-icons spanico\">done</i>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t{% for flash_message in app.session.flashBag.get('eventoError') %}
\t\t\t\t<div class=\"card-panel red white-text flash\">
\t\t\t\t\t<span class=\"spancaja\">{{ flash_message }}</span>
\t\t\t\t\t<i class=\"material-icons spanico\">clear</i>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t</div>
\t\t<div class=\"divider3\"></div>
\t\t<div style=\"width: 100%; display: grid; grid-template-columns: repeat(2, 50%); gap: 20px; text-align: center; padding: 6%; margin-top: -40px\">
            {% for evento in eventos %}
                <div id=\"resultados-contenido\" style=\"margin-right:4%; margin-left:4%\">
\t\t\t\t\t<div class=\"col-content\">
\t\t\t\t\t\t<div style=\"display: flex; justify-content: space-between; align-self: center;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block;\" id=\"titulo\">
\t\t\t\t\t\t\t\t\t<b>Titulo:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t{{ evento.descripcion  }}</p>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block\" id=\"fechaInicio\">
\t\t\t\t\t\t\t\t\t<b>Fecha Inicio:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t{{ evento.fechaInicio | date(\"Y/m/d\") }}</p>
\t\t\t\t\t\t\t\t<p style=\"display:inline-block\" id=\"fechaFinal\">
\t\t\t\t\t\t\t\t\t<b>Fecha Final:
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t{{ evento.fechaFinal | date(\"Y/m/d\") }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_CONVIVENCIA') %}
\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('editEvento', {'id': evento.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p style=\"display:inline-block\">
\t\t\t\t\t\t\t\t\t\t<a class=\"confirm paddingRightLeft\" href=\"{{ path('borrarEvento', {'id': evento.id}) }}\" data-content=\"Se va a eliminar el evento, ¿desea continuar?\" data-title=\"Eliminar evento\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons \">delete</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "convivencia/eventos/eventos.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/eventos/eventos.html.twig");
    }
}
