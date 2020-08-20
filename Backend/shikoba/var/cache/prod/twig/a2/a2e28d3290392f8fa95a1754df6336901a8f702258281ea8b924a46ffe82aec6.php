<?php

/* convivencia/navegacion.html.twig */
class __TwigTemplate_bf1a0479c56e7da737ad3829e9af154e755a8352de3bcd9856298f1ba35ddc7b extends Twig_Template
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
        $__internal_16fb5442306c4fdbbc351954887157bc3179fb1b46b3b9d98f4494e21aee4b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fb5442306c4fdbbc351954887157bc3179fb1b46b3b9d98f4494e21aee4b44->enter($__internal_16fb5442306c4fdbbc351954887157bc3179fb1b46b3b9d98f4494e21aee4b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/navegacion.html.twig"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_16fb5442306c4fdbbc351954887157bc3179fb1b46b3b9d98f4494e21aee4b44->leave($__internal_16fb5442306c4fdbbc351954887157bc3179fb1b46b3b9d98f4494e21aee4b44_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_6b33a5b5334445cec846a795efee6cd1275845d89ff050e54f9b69f7720dfa4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b33a5b5334445cec846a795efee6cd1275845d89ff050e54f9b69f7720dfa4b->enter($__internal_6b33a5b5334445cec846a795efee6cd1275845d89ff050e54f9b69f7720dfa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 7
            echo "        <header>
            <div class=\"navbar-fixed z-depth-4\" id=\"inicio\">
                <nav>
                    <div class=\"nav-wrapper blue darken-3 row\">
                        <div class=\"col s12 center hide-on-large-only\" id=\"nav_mob\">
                            <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\" class=\"right\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo3.png"), "html", null, true);
            echo "\"
                                                                             alt=\"logo3\"></a>
                            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse left\"><i
                                        class=\"material-icons\">menu</i></a>
                            <ul id=\"slide-out\" class=\"side-nav\">
                                <li>
                                    <div class=\"userView\">
                                        <div class=\"background center\">
                                        </div>
                                        <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\">
                                            <img class=\" center centro\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo3.png"), "html", null, true);
            echo "\" alt=\"logo3\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"divider\"></div>
                                    ";
            // line 28
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 29
                echo "                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
                // line 30
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\">Carnets</a>
                                </li>
                                <!--Filtramos el menú, deshabilitamos opciones para el rol profesor -->
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\">Partes</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\"
                                       href=\"";
                // line 38
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\">Medidas</a></li>
                                ";
                // line 39
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 40
                    echo "                                    <li>
                                        <a class=\"waves-effect waves-blue\" href=\"";
                    // line 41
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                    echo "\">Diario</a>
                                    </li>
                                ";
                }
                // line 44
                echo "                                ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 45
                    echo "                                    <li>
                                        <a class=\"waves-effect waves-blue\"
                                           href=\"";
                    // line 47
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
                    echo "\">Alumnado</a>
                                    </li>
                                ";
                }
                // line 50
                echo "                                <div class=\"divider\"></div>
                                ";
                // line 51
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                    // line 52
                    echo "                                    <li>
                                        <a class=\"waves-effect waves-blue\" href=\"";
                    // line 53
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
                    echo "\">Noticias</a>
                                    </li>
                                ";
                }
                // line 56
                echo "                                <!--Con esta path vamos a definir los alumnos por profesor, esto es, su tutoría-->
                                <!--Debe ajustarse en la respectiva action en AlumnosController-->
                                ";
                // line 58
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) {
                    // line 59
                    echo "                                    <li>
                                        <a href=\"";
                    // line 60
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnosgrupo");
                    echo "\">Tutoría</a>
                                    </li>
                                ";
                }
                // line 63
                echo "                                ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 64
                    echo "                                    <li class=\"no-padding\">
                                        <ul class=\"collapsible collapsible-accordion\">
                                            <li>
                                                <a class=\"collapsible-header waves-effect waves-blue\">Informes
                                                    <i class=\"material-icons right\">arrow_drop_down</i>
                                                </a>
                                                <div class=\"collapsible-body \">
                                                    <ul>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 74
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_alumno_informe");
                    echo "\">
                                                                Partes alumnado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=";
                    // line 80
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_grupos_informe");
                    echo ">
                                                                Partes grupos
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 86
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_profesor_informe");
                    echo "\">
                                                                Partes profesorado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 92
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sanciones_alumnosgrupos_informe");
                    echo "\">
                                                                Sanciones alumnado
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                ";
                }
                // line 102
                echo "                                ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 103
                    echo "                                    <li class=\"no-padding\">
                                        <ul class=\"collapsible collapsible-accordion\">
                                            <li>
                                                <a class=\"collapsible-header waves-effect waves-blue\">Administrar<i
                                                            class=\"material-icons right\">arrow_drop_down</i></a>
                                                <div class=\"collapsible-body \">
                                                    <ul>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 112
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\">Alumnado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 117
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\">Profesorado</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
                    // line 120
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tutores");
                    echo "\"
                                                               class=\"blue darken-2 white-text\">Tutoría</a>
                                                        </li>
                                                        ";
                    // line 126
                    echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                ";
                }
                // line 132
                echo "                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR")) {
                // line 133
                echo "                                    ";
                // line 138
                echo "                                ";
            }
            // line 139
            echo "                                <div class=\"divider\"></div>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\">Cambiar
                                        contraseña</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
                                </li>
                                <div class=\"divider\"></div>
                                <li style=\"color: rgba(0,0,0,0.87);font-weight: 500;\">
                                    Perfil: ";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>

                            </ul>
                        </div>
                        <div class=\"col l8 left hide-on-med-and-down\">
                            <ul class=\"left\">

                                <li>
                                    <a href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\" class=\"ancla centro\">
                                        <img id=\"img_nav\" src=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo3.png"), "html", null, true);
            echo "\" alt=\"logo3\">
                                    </a>
                                </li>
                                ";
            // line 161
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 162
                echo "                                    <li>
                                        <a href=\"";
                // line 163
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\">Carnets</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 166
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\">Partes</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 169
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\">Medidas</a>
                                    </li>
                                    ";
                // line 171
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 172
                    echo "                                        <li>
                                            <a href=\"";
                    // line 173
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                    echo "\">Diario</a>
                                        </li>
                                    ";
                }
                // line 176
                echo "                                    <!--Filtramos el menú, deshabilitamos opciones para el rol profesor -->
                                    ";
                // line 177
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 178
                    echo "                                        <li>
                                            <a class=\"waves-effect waves-blue\"
                                               href=\"";
                    // line 180
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
                    echo "\">Alumnado</a>
                                        </li>
                                    ";
                }
                // line 183
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                    // line 184
                    echo "                                        <li>
                                            <a href=\"";
                    // line 185
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
                    echo "\">Noticias</a>
                                        </li>

                                    ";
                }
                // line 189
                echo "                                    <!--Con esta path vamos a definir los alumnos por profesor, esto es, su tutoría-->
                                    <!--Debe ajustarse en la respectiva action en AlumnosController-->
                                    ";
                // line 191
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) {
                    // line 192
                    echo "                                        <li>
                                            <a href=\"";
                    // line 193
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnosgrupo");
                    echo "\">Tutoría</a>
                                        </li>

                                    ";
                }
                // line 197
                echo "                                    ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 198
                    echo "                                        <li>
                                            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Informes
                                                <i class=\"material-icons right\">keyboard_arrow_right</i></a>
                                            <ul id=\"dropdown1\" class=\"dropdown-content\">
                                                <li>
                                                    <a href=\"";
                    // line 203
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_alumno_informe");
                    echo "\"
                                                       class=\"blue darken-5 white-text\">Partes alumnado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 207
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_grupos_informe");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Partes grupos</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 211
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_profesor_informe");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Partes profesorado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 215
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sanciones_alumnosgrupos_informe");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Sanciones alumnado</a>
                                                </li>
                                            </ul>
                                        </li>
                                    ";
                }
                // line 221
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 222
                    echo "                                        <li>
                                            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Administrar
                                                <i class=\"material-icons right\">keyboard_arrow_right</i>
                                            </a>
                                            <ul id=\"dropdown2\" class=\"dropdown-content\">
                                                <li>
                                                    <a href=\"";
                    // line 228
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Alumnado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 232
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Profesorado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 236
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tutores");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Tutoría</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 240
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("apk/shikobaApp.rar"), "html", null, true);
                    echo "\"  download class=\"blue darken-2 white-text\">Apk</a>
                                                </li>

                                                ";
                    // line 248
                    echo "                                            </ul>
                                        </li>
                                    ";
                }
                // line 251
                echo "
                                    ";
                // line 253
                echo "                                    ";
                // line 254
                echo "                                    ";
                // line 259
                echo "                                ";
            }
            // line 260
            echo "                            </ul>
                        </div>
                        <div class=\"col l4 right hide-on-med-and-down\">
                            <ul class=\"right\">
                                <li>
                                    <a href=\"";
            // line 265
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\">Cambiar contraseña</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 268
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
                                </li>
                                <li style=\"padding: 0 5px;\">Perfil: ";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    ";
        }
        
        $__internal_6b33a5b5334445cec846a795efee6cd1275845d89ff050e54f9b69f7720dfa4b->leave($__internal_6b33a5b5334445cec846a795efee6cd1275845d89ff050e54f9b69f7720dfa4b_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/navegacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  480 => 270,  475 => 268,  469 => 265,  462 => 260,  459 => 259,  457 => 254,  455 => 253,  452 => 251,  447 => 248,  441 => 240,  434 => 236,  427 => 232,  420 => 228,  412 => 222,  409 => 221,  400 => 215,  393 => 211,  386 => 207,  379 => 203,  372 => 198,  369 => 197,  362 => 193,  359 => 192,  357 => 191,  353 => 189,  346 => 185,  343 => 184,  340 => 183,  334 => 180,  330 => 178,  328 => 177,  325 => 176,  319 => 173,  316 => 172,  314 => 171,  309 => 169,  303 => 166,  297 => 163,  294 => 162,  292 => 161,  286 => 158,  282 => 157,  271 => 149,  264 => 145,  257 => 141,  253 => 139,  250 => 138,  248 => 133,  245 => 132,  237 => 126,  231 => 120,  225 => 117,  217 => 112,  206 => 103,  203 => 102,  190 => 92,  181 => 86,  172 => 80,  163 => 74,  151 => 64,  148 => 63,  142 => 60,  139 => 59,  137 => 58,  133 => 56,  127 => 53,  124 => 52,  122 => 51,  119 => 50,  113 => 47,  109 => 45,  106 => 44,  100 => 41,  97 => 40,  95 => 39,  91 => 38,  84 => 34,  77 => 30,  74 => 29,  72 => 28,  63 => 22,  59 => 21,  45 => 12,  38 => 7,  35 => 6,  23 => 5,);
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
Vista del nav.
Actualizado por GUBS, RAGZ, 2019
#}
{% block header %}
    {% if app.user.usuario is defined %}
        <header>
            <div class=\"navbar-fixed z-depth-4\" id=\"inicio\">
                <nav>
                    <div class=\"nav-wrapper blue darken-3 row\">
                        <div class=\"col s12 center hide-on-large-only\" id=\"nav_mob\">
                            <a href=\"{{ path('index') }}\" class=\"right\"><img src=\"{{ asset('img/logo3.png') }}\"
                                                                             alt=\"logo3\"></a>
                            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse left\"><i
                                        class=\"material-icons\">menu</i></a>
                            <ul id=\"slide-out\" class=\"side-nav\">
                                <li>
                                    <div class=\"userView\">
                                        <div class=\"background center\">
                                        </div>
                                        <a href=\"{{ path('index') }}\">
                                            <img class=\" center centro\" src=\"{{ asset('img/logo3.png') }}\" alt=\"logo3\">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"divider\"></div>
                                    {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR') or is_granted('ROLE_CONVIVENCIA')) %}
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('show_carnets') }}\">Carnets</a>
                                </li>
                                <!--Filtramos el menú, deshabilitamos opciones para el rol profesor -->
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('gestion_partes') }}\">Partes</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\"
                                       href=\"{{ path('gestion_sanciones') }}\">Medidas</a></li>
                                {% if (is_granted('ROLE_ADMIN')  or is_granted('ROLE_CONVIVENCIA')) %}
                                    <li>
                                        <a class=\"waves-effect waves-blue\" href=\"{{ path('show_diario') }}\">Diario</a>
                                    </li>
                                {% endif %}
                                {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                    <li>
                                        <a class=\"waves-effect waves-blue\"
                                           href=\"{{ path('show_alumnos') }}\">Alumnado</a>
                                    </li>
                                {% endif %}
                                <div class=\"divider\"></div>
                                {% if is_granted('ROLE_CONVIVENCIA') %}
                                    <li>
                                        <a class=\"waves-effect waves-blue\" href=\"{{ path('noticias') }}\">Noticias</a>
                                    </li>
                                {% endif %}
                                <!--Con esta path vamos a definir los alumnos por profesor, esto es, su tutoría-->
                                <!--Debe ajustarse en la respectiva action en AlumnosController-->
                                {% if is_granted('ROLE_PROFESOR') %}
                                    <li>
                                        <a href=\"{{ path('show_alumnosgrupo') }}\">Tutoría</a>
                                    </li>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA') %}
                                    <li class=\"no-padding\">
                                        <ul class=\"collapsible collapsible-accordion\">
                                            <li>
                                                <a class=\"collapsible-header waves-effect waves-blue\">Informes
                                                    <i class=\"material-icons right\">arrow_drop_down</i>
                                                </a>
                                                <div class=\"collapsible-body \">
                                                    <ul>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('partes_alumno_informe') }}\">
                                                                Partes alumnado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href={{ path('partes_grupos_informe') }}>
                                                                Partes grupos
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('partes_profesor_informe') }}\">
                                                                Partes profesorado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('sanciones_alumnosgrupos_informe') }}\">
                                                                Sanciones alumnado
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"no-padding\">
                                        <ul class=\"collapsible collapsible-accordion\">
                                            <li>
                                                <a class=\"collapsible-header waves-effect waves-blue\">Administrar<i
                                                            class=\"material-icons right\">arrow_drop_down</i></a>
                                                <div class=\"collapsible-body \">
                                                    <ul>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('admin_import') }}\">Alumnado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"{{ path('admin_import_profesor') }}\">Profesorado</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"{{ path('admin_tutores') }}\"
                                                               class=\"blue darken-2 white-text\">Tutoría</a>
                                                        </li>
                                                        {# <li>
                                                            <a class=\"waves-effect waves-blue\" href=\"{{ path('admin_security') }}\">Copia de seguridad</a>
                                                        </li>#}
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                {% endif %}
                                {% elseif is_granted('ROLE_TUTOR') %}
                                    {# <li>
                                        <a class=\"waves-effect waves-blue\" href=\"{{ path('index') }}\">Alumnado</a>
                                       </li>
                                    {% elseif is_granted('ROLE_USER') %}
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('registrarAlumno') }}\">Perfil</a> #}
                                {% endif %}
                                <div class=\"divider\"></div>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('change_password') }}\">Cambiar
                                        contraseña</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"{{ path('logout') }}\">Salir</a>
                                </li>
                                <div class=\"divider\"></div>
                                <li style=\"color: rgba(0,0,0,0.87);font-weight: 500;\">
                                    Perfil: {{ app.user.usuario }}</li>

                            </ul>
                        </div>
                        <div class=\"col l8 left hide-on-med-and-down\">
                            <ul class=\"left\">

                                <li>
                                    <a href=\"{{ path('index') }}\" class=\"ancla centro\">
                                        <img id=\"img_nav\" src=\"{{ asset('img/logo3.png') }}\" alt=\"logo3\">
                                    </a>
                                </li>
                                {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR') or is_granted('ROLE_CONVIVENCIA')) %}
                                    <li>
                                        <a href=\"{{ path('show_carnets') }}\">Carnets</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('gestion_partes') }}\">Partes</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('gestion_sanciones') }}\">Medidas</a>
                                    </li>
                                    {% if (is_granted('ROLE_ADMIN')  or is_granted('ROLE_CONVIVENCIA')) %}
                                        <li>
                                            <a href=\"{{ path('show_diario') }}\">Diario</a>
                                        </li>
                                    {% endif %}
                                    <!--Filtramos el menú, deshabilitamos opciones para el rol profesor -->
                                    {% if ( is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA')) %}
                                        <li>
                                            <a class=\"waves-effect waves-blue\"
                                               href=\"{{ path('show_alumnos') }}\">Alumnado</a>
                                        </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_CONVIVENCIA') %}
                                        <li>
                                            <a href=\"{{ path('noticias') }}\">Noticias</a>
                                        </li>

                                    {% endif %}
                                    <!--Con esta path vamos a definir los alumnos por profesor, esto es, su tutoría-->
                                    <!--Debe ajustarse en la respectiva action en AlumnosController-->
                                    {% if is_granted('ROLE_PROFESOR') %}
                                        <li>
                                            <a href=\"{{ path('show_alumnosgrupo') }}\">Tutoría</a>
                                        </li>

                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CONVIVENCIA') %}
                                        <li>
                                            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Informes
                                                <i class=\"material-icons right\">keyboard_arrow_right</i></a>
                                            <ul id=\"dropdown1\" class=\"dropdown-content\">
                                                <li>
                                                    <a href=\"{{ path('partes_alumno_informe') }}\"
                                                       class=\"blue darken-5 white-text\">Partes alumnado</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('partes_grupos_informe') }}\"
                                                       class=\"blue darken-2 white-text\">Partes grupos</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('partes_profesor_informe') }}\"
                                                       class=\"blue darken-2 white-text\">Partes profesorado</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('sanciones_alumnosgrupos_informe') }}\"
                                                       class=\"blue darken-2 white-text\">Sanciones alumnado</a>
                                                </li>
                                            </ul>
                                        </li>
                                    {% endif %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Administrar
                                                <i class=\"material-icons right\">keyboard_arrow_right</i>
                                            </a>
                                            <ul id=\"dropdown2\" class=\"dropdown-content\">
                                                <li>
                                                    <a href=\"{{ path('admin_import') }}\"
                                                       class=\"blue darken-2 white-text\">Alumnado</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('admin_import_profesor') }}\"
                                                       class=\"blue darken-2 white-text\">Profesorado</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ path('admin_tutores') }}\"
                                                       class=\"blue darken-2 white-text\">Tutoría</a>
                                                </li>
                                                <li>
                                                    <a href=\"{{ asset('apk/shikobaApp.rar') }}\"  download class=\"blue darken-2 white-text\">Apk</a>
                                                </li>

                                                {#<li>
                                                    <a href=\"{{ path('admin_security') }}\" class=\"blue darken-2 white-text\">Copia
                                                             de seguridad
                                                    </a>
                                                </li>#}
                                            </ul>
                                        </li>
                                    {% endif %}

                                    {#Deshabilitamos esta opción para el rol tutor#}
                                    {#{% elseif is_granted('ROLE_TUTOR') %}#}
                                    {# <li>
                                         <a href=\"{{ path('index') }}\" class=\"ancla centro\"> <img id=\"img_nav\" src=\"/img/logo3.png\" alt=\"\"></a>
                                     </li>
                                 {% elseif is_granted('ROLE_USER') %}
                                     <a href=\"{{ path('registrarAlumno') }}\">Perfil</a>#}
                                {% endif %}
                            </ul>
                        </div>
                        <div class=\"col l4 right hide-on-med-and-down\">
                            <ul class=\"right\">
                                <li>
                                    <a href=\"{{ path('change_password') }}\">Cambiar contraseña</a>
                                </li>
                                <li>
                                    <a href=\"{{ path('logout') }}\">Salir</a>
                                </li>
                                <li style=\"padding: 0 5px;\">Perfil: {{ app.user.usuario }}</li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    {% endif %}
{% endblock %}
", "convivencia/navegacion.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/navegacion.html.twig");
    }
}
