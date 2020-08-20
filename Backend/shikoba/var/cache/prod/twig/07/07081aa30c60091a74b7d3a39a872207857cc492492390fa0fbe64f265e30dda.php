<?php

/* :convivencia/admin:gestionProfesoresGrupo.html.twig */
class __TwigTemplate_1aa9f2643ec9de8aec4cbd946561e4eec37bd634c6a924c42f4e39819fedf00c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/admin:gestionProfesoresGrupo.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/admin:gestionProfesoresGrupo.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Modificar tutor de grupos</h3>
        <br><br>
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesorGrupo");
        echo "\" method=\"post\">
            <div style=\" margin:auto;width: 80%\">
                <div class=\"col s12 m6\">
                    <label for=\"cursostutor\">Curso</label>
                    <select id=\"cursostutor\" name=\"curso[]\" data-placeholder=\"Seleccione un curso\" required>
                        <option value=\"\" disabled selected></option>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 19
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "grupo", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "grupo", array(), "array"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </select>
                </div>
                <div class=\"col s12 m6\">
                    <label for=\"profesorestutor\">Profesor/a</label>
                    <select id=\"profesorestutor\" name=\"profesor[]\" data-placeholder=\"Seleccione un profesor/a\" required>
                        <option value=\"\" disabled selected></option>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profesores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array(), "array"), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "nombre", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "apellido1", array(), "array"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>
                </div>
            </div>
            <div class=\"col s12 l4 offset-l4 center\">
                <a class=\"z-depth-3 btn blue darken-3 waves-effect waves-light botonSubmit confirm\"
                   style=\"margin: 2rem auto\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tutores");
        echo "\" data-title=\"Cancelar\" data-content=\"¿Desea volver a gestión de tutores?\" >Cancelar
                    <i class=\"material-icons left\">undo</i>
                </a>
                <button class=\" btn z-depth-3 blue darken-4 waves-effect waves-light\" type=\"submit\"
                        style=\"margin: 2rem auto\" name=\"guardar\" value=\"Enviar\">Enviar
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/admin:gestionProfesoresGrupo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  88 => 30,  75 => 28,  71 => 27,  63 => 21,  52 => 19,  48 => 18,  39 => 12,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/admin:gestionProfesoresGrupo.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/gestionProfesoresGrupo.html.twig");
    }
}
