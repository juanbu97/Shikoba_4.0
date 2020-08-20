<?php

/* :convivencia:navegacion.html.twig */
class __TwigTemplate_c49a88e760e55d6f005aa18797df8d79a6258daa30ef818c54822c70a201584a extends Twig_Template
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
        // line 5
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "usuario", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    ";
        }
    }

    public function getTemplateName()
    {
        return ":convivencia:navegacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  471 => 270,  466 => 268,  460 => 265,  453 => 260,  450 => 259,  448 => 254,  446 => 253,  443 => 251,  438 => 248,  432 => 240,  425 => 236,  418 => 232,  411 => 228,  403 => 222,  400 => 221,  391 => 215,  384 => 211,  377 => 207,  370 => 203,  363 => 198,  360 => 197,  353 => 193,  350 => 192,  348 => 191,  344 => 189,  337 => 185,  334 => 184,  331 => 183,  325 => 180,  321 => 178,  319 => 177,  316 => 176,  310 => 173,  307 => 172,  305 => 171,  300 => 169,  294 => 166,  288 => 163,  285 => 162,  283 => 161,  277 => 158,  273 => 157,  262 => 149,  255 => 145,  248 => 141,  244 => 139,  241 => 138,  239 => 133,  236 => 132,  228 => 126,  222 => 120,  216 => 117,  208 => 112,  197 => 103,  194 => 102,  181 => 92,  172 => 86,  163 => 80,  154 => 74,  142 => 64,  139 => 63,  133 => 60,  130 => 59,  128 => 58,  124 => 56,  118 => 53,  115 => 52,  113 => 51,  110 => 50,  104 => 47,  100 => 45,  97 => 44,  91 => 41,  88 => 40,  86 => 39,  82 => 38,  75 => 34,  68 => 30,  65 => 29,  63 => 28,  54 => 22,  50 => 21,  36 => 12,  29 => 7,  26 => 6,  20 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia:navegacion.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/navegacion.html.twig");
    }
}
