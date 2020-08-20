<?php

/* :convivencia:header.html.twig */
class __TwigTemplate_e0930c6f963e2fa82dfa7c2ea0f6d8d0ae9bc8a6a941e909d7b64f5d14e19795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header class=\"w3-container w3-padding\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <i id=\"hamburguer\" class=\"fa fa-bars fa-2x w3-padding w3-left w3-text-white\"
                   style=\"vertical-align: middle\" aria-hidden=\"true\"></i>
                <div id=\"navLeft\">
                    <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Logout</a>
                    <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Cambiar
                        Contraseña</a>
                    <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Shikoba</a>
                </div>
                <nav>
                    ";
            // line 17
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 18
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Carnets</a>
                        <a href=\"";
                // line 20
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Partes</a>
                        <a href=\"";
                // line 22
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Medidas</a>
                        <a href=\"";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Diario</a>

                           ";
                // line 27
                if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR_DOCENTE"))) {
                    // line 28
                    echo "                             <a class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
                    echo "\">Alumnos</a>

                           ";
                }
                // line 31
                echo "
                        ";
                // line 32
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 33
                    echo "                            <div class=\"w3-dropdown-hover w3-padding w3-left w3-mobile w3-large\">
                                <span>Administración</span> <i class=\"fa fa-caret-down w3-text-white\"></i>
                                <div class=\"w3-dropdown-content w3-bar-block w3-card-1 azulTemaButton\">
                                    <a href=\"";
                    // line 36
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\"
                                       class=\" w3-margin-top w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Alumnado</a>
                                    <a href=\"";
                    // line 38
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\"
                                       class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Profesorado</a>
                                    <a href=\"";
                    // line 40
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_security");
                    echo "\"
                                       class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Copia de seguridad</a>
                                </div>
                            </div>
                        ";
                }
                // line 45
                echo "
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR")) {
                // line 47
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
                echo "\"
                           class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-large\">Alumnado</a>
                        ";
                // line 50
                echo "                        ";
                // line 51
                echo "                        ";
                // line 52
                echo "                    ";
            }
            // line 53
            echo "                </nav>
            </div>
        </header>
    ";
        }
    }

    public function getTemplateName()
    {
        return ":convivencia:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  129 => 52,  127 => 51,  125 => 50,  119 => 47,  115 => 45,  107 => 40,  102 => 38,  97 => 36,  92 => 33,  90 => 32,  87 => 31,  80 => 28,  78 => 27,  72 => 24,  67 => 22,  62 => 20,  56 => 18,  54 => 17,  47 => 13,  41 => 10,  36 => 8,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia:header.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/header.html.twig");
    }
}
