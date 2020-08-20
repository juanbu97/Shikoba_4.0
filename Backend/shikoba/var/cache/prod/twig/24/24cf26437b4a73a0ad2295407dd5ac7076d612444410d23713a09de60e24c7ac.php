<?php

/* :convivencia/noticias:noticias.html.twig */
class __TwigTemplate_5f31ff9c46bdde11cc1006365640d0edb9007fd35ce4ee464f852e2735a284c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/noticias:noticias.html.twig", 5);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #resultados-contenido {
            border: 1px solid black;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 10px 11px 4px -6px rgba(0, 0, 0, 0.37);
            margin-bottom: 25px;
        }
    </style>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/noticias:noticias.html.twig", 20)->display($context);
        // line 21
        echo "    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">Noticias</h3>
        <div class=\"row center\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevaNoticia");
        echo "\"
               class=\"btn z-depth-3 blue darken-3 waves-effect waves-light\"
               title=\"Nueva noticia\">Nueva<i class=\"material-icons right\" style=\"margin-top: -2%;\">add</i></a>
        </div>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "noticia"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 30
            echo "                <div class=\"card-panel green white-text flash\">
                    <span class=\"spancaja\">";
            // line 31
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "noticiaError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 36
            echo "                <div class=\"card-panel red white-text flash\">
                    <span class=\"spancaja\">";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span> <i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        </div>
        <div class=\"divider3\"></div>
        <div class=\"row\" style=\"padding: 6%; margin-top: -40px\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["noticias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 45
            echo "                <div id=\"resultados-contenido\">
                    <div style=\"display: flex;justify-content: flex-end; \">
                        <p style=\"margin: 5px\" id=\"fechaI\"><b>Fecha inicio: </b>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                        <p style=\"margin: 5px\" id=\"fechaF\"><b>Fecha fin: </b>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["noticia"], "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</p>
                    </div>
                    <div style=\"padding: 2%\">
                        <p id=\"noticiatd\" id=\"texto\">";
            // line 51
            echo $this->getAttribute($context["noticia"], "noticia_texto", array());
            echo "</p>
                    </div>
                    <div style=\"display: flex; justify-content: flex-end\">
                        <p style=\"margin: 5px\" id=\"grupo\"><b>Curso: </b>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "idCurso", array()), "grupo", array()), "html", null, true);
            echo "</p>
                        <p style=\"margin: 5px\" id=\"puntos\"><b>Puntos: </b>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "puntos", array()), "html", null, true);
            echo "</p>
                        ";
            // line 56
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                // line 57
                echo "                            <p style=\"margin: 5px\">
                                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editNoticia", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
                echo "\">
                                    <i class=\"material-icons\">edit</i></a>
                            </p>
                            <p style=\"margin: 5px\">
                                <a class=\"confirm paddingRightLeft\"
                                   href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_noticia", array("id" => $this->getAttribute($context["noticia"], "id", array()))), "html", null, true);
                echo "\"
                                   data-content=\"Se va a eliminar la noticia, ¿desea continuar?\"
                                   data-title=\"Eliminar noticia\"><i class=\"material-icons \">delete</i></a>
                            </p>
                        ";
            }
            // line 68
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":convivencia/noticias:noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  161 => 68,  153 => 63,  145 => 58,  142 => 57,  140 => 56,  136 => 55,  132 => 54,  126 => 51,  120 => 48,  116 => 47,  112 => 45,  108 => 44,  102 => 40,  93 => 37,  90 => 36,  86 => 35,  83 => 34,  74 => 31,  71 => 30,  67 => 29,  59 => 24,  54 => 21,  51 => 20,  48 => 19,  32 => 8,  29 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/noticias:noticias.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/noticias/noticias.html.twig");
    }
}
