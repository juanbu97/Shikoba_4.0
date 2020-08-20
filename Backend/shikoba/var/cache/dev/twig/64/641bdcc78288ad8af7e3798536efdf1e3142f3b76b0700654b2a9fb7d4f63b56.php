<?php

/* convivencia/navegacion.html.twig */
class __TwigTemplate_df2698b871244dcc2e4f0a1398c976c1c5b9907e68f25f031bd92b8759061b60 extends Twig_Template
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
        $__internal_29043a4e5517c2c76852934eef2c92fcb683e678e8283e4eb07480c9d3e2d42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29043a4e5517c2c76852934eef2c92fcb683e678e8283e4eb07480c9d3e2d42f->enter($__internal_29043a4e5517c2c76852934eef2c92fcb683e678e8283e4eb07480c9d3e2d42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/navegacion.html.twig"));

        $__internal_0cbe29c15c2b935eb9de3e08498cd3c72887ff3cb46b632684d0893e1dba5278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbe29c15c2b935eb9de3e08498cd3c72887ff3cb46b632684d0893e1dba5278->enter($__internal_0cbe29c15c2b935eb9de3e08498cd3c72887ff3cb46b632684d0893e1dba5278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/navegacion.html.twig"));

        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_29043a4e5517c2c76852934eef2c92fcb683e678e8283e4eb07480c9d3e2d42f->leave($__internal_29043a4e5517c2c76852934eef2c92fcb683e678e8283e4eb07480c9d3e2d42f_prof);

        
        $__internal_0cbe29c15c2b935eb9de3e08498cd3c72887ff3cb46b632684d0893e1dba5278->leave($__internal_0cbe29c15c2b935eb9de3e08498cd3c72887ff3cb46b632684d0893e1dba5278_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_563ceaf9280669b56a08546399957353938c19670fd70219889f8f878242383d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563ceaf9280669b56a08546399957353938c19670fd70219889f8f878242383d->enter($__internal_563ceaf9280669b56a08546399957353938c19670fd70219889f8f878242383d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_cde9384d1925db62e80bbe4820ed9d6726b3eba1e38db245f2e7b9df0060e42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde9384d1925db62e80bbe4820ed9d6726b3eba1e38db245f2e7b9df0060e42b->enter($__internal_cde9384d1925db62e80bbe4820ed9d6726b3eba1e38db245f2e7b9df0060e42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
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
                // line 57
                echo "                                <!--Con esta path vamos a definir los alumnos por profesor, esto es, su tutoría-->
                                <!--Debe ajustarse en la respectiva action en AlumnosController-->
                                ";
                // line 59
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) {
                    // line 60
                    echo "                                    <li>
                                        <a href=\"";
                    // line 61
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnosgrupo");
                    echo "\">Tutoría</a>
                                    </li>
                                ";
                }
                // line 64
                echo "                                ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 65
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
                    // line 75
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_alumno_informe");
                    echo "\">
                                                                Partes alumnado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=";
                    // line 81
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_grupos_informe");
                    echo ">
                                                                Partes grupos
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 87
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_profesor_informe");
                    echo "\">
                                                                Partes profesorado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 93
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
                // line 103
                echo "                                ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 104
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
                    // line 113
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\">Alumnado
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"waves-effect waves-blue\"
                                                               href=\"";
                    // line 118
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\">Profesorado</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"";
                    // line 121
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tutores");
                    echo "\"
                                                               class=\"blue darken-2 white-text\">Tutoría</a>
                                                        </li>
                                                        ";
                    // line 127
                    echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                ";
                }
                // line 133
                echo "                                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR")) {
                // line 134
                echo "                                    ";
                // line 139
                echo "                                ";
            }
            // line 140
            echo "                                <div class=\"divider\"></div>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\">Cambiar
                                        contraseña</a>
                                </li>
                                <li>
                                    <a class=\"waves-effect waves-blue\" href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
                                </li>
                                <div class=\"divider\"></div>
                                <li style=\"color: rgba(0,0,0,0.87);font-weight: 500;\">
                                    Perfil: ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 150, $this->getSourceContext()); })()), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>

                            </ul>
                        </div>
                        <div class=\"col l8 left hide-on-med-and-down\">
                            <ul class=\"left\">

                                <li>
                                    <a href=\"";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\" class=\"ancla centro\">
                                        <img id=\"img_nav\" src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo3.png"), "html", null, true);
            echo "\" alt=\"logo3\">
                                    </a>
                                </li>
                                ";
            // line 162
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                // line 163
                echo "                                    <li>
                                        <a href=\"";
                // line 164
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\">Carnets</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 167
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\">Partes</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 170
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\">Medidas</a>
                                    </li>
                                    ";
                // line 172
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 173
                    echo "                                        <li>
                                            <a href=\"";
                    // line 174
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                    echo "\">Diario</a>
                                        </li>
                                    ";
                }
                // line 177
                echo "                                    <!--Filtramos el menú, deshabilitamos opciones para el rol profesor -->
                                    ";
                // line 178
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 179
                    echo "                                        <li>
                                            <a class=\"waves-effect waves-blue\"
                                               href=\"";
                    // line 181
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnos");
                    echo "\">Alumnado</a>
                                        </li>
                                    ";
                }
                // line 184
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA")) {
                    // line 185
                    echo "                                        <li>
                                            <a href=\"";
                    // line 186
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
                    echo "\">Noticias</a>
                                        </li>
                                        <li>
                                            <a href=\"";
                    // line 189
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eventos");
                    echo "\">Eventos</a>
                                        </li>
                                    ";
                }
                // line 192
                echo "                                    <!--Con esta path vamos a definir los alumnos por profesor, esto es, su tutoría-->
                                    <!--Debe ajustarse en la respectiva action en AlumnosController-->
                                    ";
                // line 194
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR")) {
                    // line 195
                    echo "                                        <li>
                                            <a href=\"";
                    // line 196
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_alumnosgrupo");
                    echo "\">Tutoría</a>
                                        </li>

                                    ";
                }
                // line 200
                echo "                                    ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_CONVIVENCIA"))) {
                    // line 201
                    echo "                                        <li>
                                            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Informes
                                                <i class=\"material-icons right\">keyboard_arrow_right</i></a>
                                            <ul id=\"dropdown1\" class=\"dropdown-content\">
                                                <li>
                                                    <a href=\"";
                    // line 206
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_alumno_informe");
                    echo "\"
                                                       class=\"blue darken-5 white-text\">Partes alumnado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 210
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_grupos_informe");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Partes grupos</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 214
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("partes_profesor_informe");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Partes profesorado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 218
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sanciones_alumnosgrupos_informe");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Sanciones alumnado</a>
                                                </li>
                                            </ul>
                                        </li>
                                    ";
                }
                // line 224
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 225
                    echo "                                        <li>
                                            <a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Administrar
                                                <i class=\"material-icons right\">keyboard_arrow_right</i>
                                            </a>
                                            <ul id=\"dropdown2\" class=\"dropdown-content\">
                                                <li>
                                                    <a href=\"";
                    // line 231
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Alumnado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 235
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Profesorado</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 239
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_tutores");
                    echo "\"
                                                       class=\"blue darken-2 white-text\">Tutoría</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("apk/shikobaApp.rar"), "html", null, true);
                    echo "\"  download class=\"blue darken-2 white-text\">Apk</a>
                                                </li>

                                                ";
                    // line 251
                    echo "                                            </ul>
                                        </li>
                                    ";
                }
                // line 254
                echo "
                                    ";
                // line 256
                echo "                                    ";
                // line 257
                echo "                                    ";
                // line 262
                echo "                                ";
            }
            // line 263
            echo "                            </ul>
                        </div>
                        <div class=\"col l4 right hide-on-med-and-down\">
                            <ul class=\"right\">
                                <li>
                                    <a href=\"";
            // line 268
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\">Cambiar contraseña</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 271
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
                                </li>
                                <li style=\"padding: 0 5px;\">Perfil: ";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 273, $this->getSourceContext()); })()), "user", array()), "usuario", array()), "html", null, true);
            echo "</li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    ";
        }
        
        $__internal_cde9384d1925db62e80bbe4820ed9d6726b3eba1e38db245f2e7b9df0060e42b->leave($__internal_cde9384d1925db62e80bbe4820ed9d6726b3eba1e38db245f2e7b9df0060e42b_prof);

        
        $__internal_563ceaf9280669b56a08546399957353938c19670fd70219889f8f878242383d->leave($__internal_563ceaf9280669b56a08546399957353938c19670fd70219889f8f878242383d_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/navegacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  495 => 273,  490 => 271,  484 => 268,  477 => 263,  474 => 262,  472 => 257,  470 => 256,  467 => 254,  462 => 251,  456 => 243,  449 => 239,  442 => 235,  435 => 231,  427 => 225,  424 => 224,  415 => 218,  408 => 214,  401 => 210,  394 => 206,  387 => 201,  384 => 200,  377 => 196,  374 => 195,  372 => 194,  368 => 192,  362 => 189,  356 => 186,  353 => 185,  350 => 184,  344 => 181,  340 => 179,  338 => 178,  335 => 177,  329 => 174,  326 => 173,  324 => 172,  319 => 170,  313 => 167,  307 => 164,  304 => 163,  302 => 162,  296 => 159,  292 => 158,  281 => 150,  274 => 146,  267 => 142,  263 => 140,  260 => 139,  258 => 134,  255 => 133,  247 => 127,  241 => 121,  235 => 118,  227 => 113,  216 => 104,  213 => 103,  200 => 93,  191 => 87,  182 => 81,  173 => 75,  161 => 65,  158 => 64,  152 => 61,  149 => 60,  147 => 59,  143 => 57,  136 => 53,  133 => 52,  131 => 51,  128 => 50,  122 => 47,  118 => 45,  115 => 44,  109 => 41,  106 => 40,  104 => 39,  100 => 38,  93 => 34,  86 => 30,  83 => 29,  81 => 28,  72 => 22,  68 => 21,  54 => 12,  47 => 7,  44 => 6,  26 => 5,);
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
                                        <li>
                                            <a href=\"{{ path('eventos') }}\">Eventos</a>
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
", "convivencia/navegacion.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/convivencia/navegacion.html.twig");
    }
}
