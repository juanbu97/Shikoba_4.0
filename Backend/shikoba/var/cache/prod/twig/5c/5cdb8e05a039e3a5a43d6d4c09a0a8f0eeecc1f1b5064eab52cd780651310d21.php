<?php

/* :convivencia/alumno:informe.html.twig */
class __TwigTemplate_14b2c6c674d93d918957f3da1bc28e9ba9ead328220b7b13f4fe240bcda12b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base.html.twig", ":convivencia/alumno:informe.html.twig", 5);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <main class=\"w3-container w3-margin-top\">
        ";
        // line 9
        if (array_key_exists("partes", $context)) {
            // line 10
            echo "            <div class=\"w3-row contenedorCartaInforme\">
                <div class=\"w3-card-2 cartaAlumno\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico partes</h2>
                    </header>
                    <div class=\"cartaInformeCuerpo\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
                // line 17
                echo "                            <div>
                            <p>El ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una falta ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array())), "html", null, true);
                echo "
                                , ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo " indicó:</p>
                                <p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "descripcion", array()), "html", null, true);
                echo "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if (array_key_exists("sanciones", $context)) {
            // line 29
            echo "        <div class=\"w3-row w3-center\">
            <div class=\"w3-card-2 cartaInforme cartaAlumno\">
                <header class=\"w3-container w3-center\">
                    <h2>Historico Sanciones</h2>
                </header>
                <div class=\"cartaInformeCuerpo\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                // line 36
                echo "                        <p>El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una sanción de
                            tipo ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    ";
        }
        // line 40
        echo "                </div>
            </div>
        </div>
    </main>

";
    }

    public function getTemplateName()
    {
        return ":convivencia/alumno:informe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  106 => 39,  98 => 37,  93 => 36,  89 => 35,  81 => 29,  79 => 28,  76 => 27,  70 => 23,  61 => 20,  57 => 19,  51 => 18,  48 => 17,  44 => 16,  36 => 10,  34 => 9,  31 => 8,  28 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/alumno:informe.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/informe.html.twig");
    }
}
