<?php

/* :convivencia/admin:tutores.html.twig */
class __TwigTemplate_74f2edbeeb4af884c744dda965b6d6c57fa47bb7c83eaa1beef4de2c35607278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/admin:tutores.html.twig", 5);
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
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/admin:tutores.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Gestión tutores</h3>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "tutor"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            echo "                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">";
            // line 14
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "tutorError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span><i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
        <form action=\"\">
            <div class=\"row\" id=\"busq\">
                <div class=\"col s12 l6\">
                    <div class=\"row\">
                        <div class=\"i-checks col s12 right-align\" style=\"margin-top: 8%;padding-left: 0;\" id=\"aqui\">
                            <div class=\"\" id=\"botonbus\" style=\"margin-left: -5%;\">
                                ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                                    <a id=\"parte\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesorGrupo");
            echo "\"
                                       class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
                                       title=\"Nuevo tutor\">Nuevo<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
                                ";
        }
        // line 34
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <table class=\"responsive-table highlight tableData z-depth-3\" data-order='[[ 1, \"asc\" ]]'
                       style=\"margin-bottom: 1%\" data-page-length='10'>
                    <thead>
                    <tr class=\"blue darken-3 white-text\">
                        <th>Profesor</th>
                        <th>Grupo</th>
                        <th class=\"noExport\">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tutores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tutor"]) {
            // line 51
            echo "                        <tr>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "apellido1", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "apellido2", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["tutor"], "grupo", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"confirm paddingRightLeft \"
                                   href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrarTutor", array("grupo" => $this->getAttribute($context["tutor"], "grupo", array()))), "html", null, true);
            echo "\"
                                   data-title=\"Eliminar tutor\"
                                   data-content=\"Se va a eliminar la actual asignación, ¿desea continuar?\">
                                    <i class=\"material-icons \">delete</i>
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/admin:tutores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 64,  130 => 56,  124 => 53,  116 => 52,  113 => 51,  109 => 50,  91 => 34,  83 => 30,  81 => 29,  72 => 22,  63 => 19,  60 => 18,  55 => 17,  46 => 14,  43 => 13,  39 => 12,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/admin:tutores.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/admin/tutores.html.twig");
    }
}
