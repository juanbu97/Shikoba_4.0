<?php

/* convivencia/alumno/alumno.html.twig */
class __TwigTemplate_59bcab75dbefa810250ec84fcebb3b1c2d2d138451ba408a5c255ae0a31b96af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", "convivencia/alumno/alumno.html.twig", 5);
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
        $__internal_2e14407b9f7d2beaf32b9adfa576f594da76ae3d68d62b1592309ba08c20919b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e14407b9f7d2beaf32b9adfa576f594da76ae3d68d62b1592309ba08c20919b->enter($__internal_2e14407b9f7d2beaf32b9adfa576f594da76ae3d68d62b1592309ba08c20919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/alumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e14407b9f7d2beaf32b9adfa576f594da76ae3d68d62b1592309ba08c20919b->leave($__internal_2e14407b9f7d2beaf32b9adfa576f594da76ae3d68d62b1592309ba08c20919b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e15f35978fc8239b88f72582fc6f3b1f9d227dbf51ff9e444c43325c5aead18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e15f35978fc8239b88f72582fc6f3b1f9d227dbf51ff9e444c43325c5aead18->enter($__internal_0e15f35978fc8239b88f72582fc6f3b1f9d227dbf51ff9e444c43325c5aead18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", "convivencia/alumno/alumno.html.twig", 7)->display($context);
        // line 8
        echo "    <script>
        (function (e, t, n) {
            var r = e.querySelectorAll(\"html\")[0];
            r.className = r.className.replace(/(^|\\s)no-js(\\s|\$)/, \"\$1js\$2\")
        })(document, window, 0);
    </script>
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h3>
        <h4 class=\"center fuente\" id=\"punto\">Puntos: <span style=\"margin-top: -10px; font-size: 2rem;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "puntos", array()), "html", null, true);
        echo "</span>/10</h4>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alumno"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "                <div class=\"card-panel green white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </span><i class=\"material-icons spanico\">done</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alumnoError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "                <div class=\"card-panel red white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">";
            // line 25
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</span><i class=\"material-icons spanico\">clear</i>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        <div class=\"row\" id=\"row1\">
            <div class=\"pad col l6 s1 hide-on-large-only left\">
                <button id=\"esta\" class=\"pad3 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Estadisticas\" title=\"Estadisticas\">
                    <i class=\"material-icons right\">assessment</i>
                </button>
            </div>
            <div class=\"pad col s1 hide-on-large-only right\">
                <button id=\"histo\" class=\"pad2 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Historico\" title=\"Historico\">
                    <i class=\"material-icons right\">assignment</i>
                </button>
            </div>
            <div class=\"col l12 s10 center\" id=\"img\">
                ";
        // line 43
        if ((($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "foto", array()) == "") || ($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "foto", array()) == null))) {
            // line 44
            echo "                    <img class=\"circle logo-inicial\"
                         src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_user.svg"), "html", null, true);
            echo "\"
                         alt=\"avatar\">

              ";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 48
($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "foto", array()) != "") || ($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "foto", array()) != null))) {
            // line 49
            echo "                    <img class=\"responsive-img circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/alumnos/" . $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "foto", array()))), "html", null, true);
            echo "\"
                         alt=\"avatar\">
                ";
        } else {
            // line 52
            echo "                    <img class=\"responsive-img circle logo-inicial\"
                         src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("img/alumnos/" . $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "nie", array())) . ".PNG")), "html", null, true);
            echo "\" alt=\"avatar\">
                ";
        }
        // line 55
        echo "            </div>
                <div class=\"center\" style=\"padding-bottom: 1%; margin-top: 10px\">
                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 60
            echo "                        <form method=\"post\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_image");
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"content\">
                                <div class=\"box\">
                                    <input type=\"file\" accept=\"image/*\" name=\"file\" id=\"file\"
                                           class=\"inputfile inputfile-1 waves-effect waves-light\" hidden
                                           capture=\"camera\">
                                    <label for=\"file\" class=\"waves-effect waves-light\" style=\"padding-bottom: 1%; margin-top: 20px\">
                                        <span class=\"left\"> Subir Imagen (2MB) </span><i
                                                class=\"material-icons imag right\">file_upload</i>
                                    </label>
                                </div>
                            </div>
                        </form>
                    ";
        }
        // line 74
        echo "                </div>
            </div>
           ";
        // line 116
        echo "            <div class=\"w3-col l6\" style=\"display: none;\">
                <div class=\"w3-row w3-center w3-text-center widthChartMobile\">
                    <div class=\"w3-content marginBottom marginTopNoMobile\">
                        <h4>Estadísticas Totales ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
                    </div>
                </div>
            </div>
        <div class=\"row\" id=\"row2\">
            <div class=\"pad col l6 s1 hide-on-large-only left\">
                <button id=\"noti\" class=\"z-depth-3 pad3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Noticia\" title=\"Noticia\">
                    <i class=\"material-icons right\">face</i>
                </button>
            </div>
            <div class=\"col pad s1 hide-on-large-only right\">
                <button id=\"histo\" class=\"pad2 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Historico\" title=\"Historico\">
                    <i class=\"material-icons right\">assignment</i>
                </button>
            </div>
            <div class=\"col s10 l6 center\">
                <h5 class=\"card-title\">Partes ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "getYear", array(), "method"), "html", null, true);
        echo "</h5>
                <canvas id=\"myChart2\"></canvas>
            </div>

            <div class=\"col offset-s1 s10 l6 center\">
                <h5 class=\"card-title\">Sanciones ";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "getYear", array(), "method"), "html", null, true);
        echo "</h5>
                <canvas id=\"myChart3\"></canvas>
            </div>
        </div>
        ";
        // line 147
        $context["arrMeses"] = array();
        // line 148
        echo "        ";
        $context["arrPartes"] = array();
        // line 149
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numPartesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["partesMes"]) {
            // line 150
            echo "            ";
            $context["arrMeses"] = twig_array_merge(($context["arrMeses"] ?? $this->getContext($context, "arrMeses")), array(0 => $context["mes"]));
            // line 151
            echo "            ";
            $context["arrPartes"] = twig_array_merge(($context["arrPartes"] ?? $this->getContext($context, "arrPartes")), array(0 => $context["partesMes"]));
            // line 152
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['partesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        ";
        $context["arrMesesSanciones"] = array();
        // line 154
        echo "        ";
        $context["arrSanciones"] = array();
        // line 155
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numSancionesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["sancionesMes"]) {
            // line 156
            echo "            ";
            $context["arrMesesSanciones"] = twig_array_merge(($context["arrMesesSanciones"] ?? $this->getContext($context, "arrMesesSanciones")), array(0 => $context["mes"]));
            // line 157
            echo "            ";
            $context["arrSanciones"] = twig_array_merge(($context["arrSanciones"] ?? $this->getContext($context, "arrSanciones")), array(0 => $context["sancionesMes"]));
            // line 158
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['sancionesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        ";
        if ((twig_length_filter($this->env, ($context["arrMeses"] ?? $this->getContext($context, "arrMeses"))) > 4)) {
            // line 160
            echo "            ";
            $context["barPercentage"] = 0.4;
            // line 161
            echo "        ";
        } else {
            // line 162
            echo "            ";
            $context["barPercentage"] = 0.2;
            // line 163
            echo "        ";
        }
        // line 164
        echo "        <script>
            var ctx = document.getElementById(\"myChart\").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numPartes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numSanciones", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numVisitasConvivencia", array()), "html", null, true);
        echo "],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(56, 136, 155, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 206, 86, 0.5)'
                        ],
                    }],

                    labels: [
                        'Partes',
                        'Sanciones',
                        'Visitas Aula Convivencia'
                    ]
                }
            });

            ctx = document.getElementById(\"myChart2\").getContext('2d');
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 194
        echo twig_jsonencode_filter(($context["arrMeses"] ?? $this->getContext($context, "arrMeses")));
        echo ",
                    datasets: [
                        {
                            label: 'Partes',
                            data: ";
        // line 198
        echo twig_jsonencode_filter(($context["arrPartes"] ?? $this->getContext($context, "arrPartes")));
        echo ",
                           backgroundColor: 'rgba(56, 136, 155, 0.5)',
                   //      backgroundColor: [
                   //         'rgba(56, 136, 155, 0.5)',
                   //         'rgba(255, 206, 86, 0.5)',
                   //         'rgba(75, 192, 192, 0.5)',
                   //         'rgba(153, 102, 255, 0.5)',
                   //         'rgba(54, 162, 235, 0.5)',
                   //         'rgba(255, 159, 64, 0.5)'
                   // ],
                        },
                        ";
        // line 210
        echo "                        ";
        // line 211
        echo "                        ";
        // line 212
        echo "                        ";
        // line 213
        echo "                        ";
        // line 214
        echo "                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: ";
        // line 219
        echo twig_escape_filter($this->env, ($context["barPercentage"] ?? $this->getContext($context, "barPercentage")), "html", null, true);
        echo "
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

            ctx = document.getElementById(\"myChart3\").getContext('2d');
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 234
        echo twig_jsonencode_filter(($context["arrMesesSanciones"] ?? $this->getContext($context, "arrMesesSanciones")));
        echo ",
                    datasets: [
                        {
                            label: 'Sanciones',
                            data: ";
        // line 238
        echo twig_jsonencode_filter(($context["arrSanciones"] ?? $this->getContext($context, "arrSanciones")));
        echo ",
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        },
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: ";
        // line 246
        echo twig_escape_filter($this->env, ($context["barPercentage"] ?? $this->getContext($context, "barPercentage")), "html", null, true);
        echo "
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

        </script>

        <div class=\"row\" id=\"row3\">
            <div class=\"col s1 hide-on-large-only pad left\">
                <button id=\"noti\" class=\"z-depth-3 pad3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Noticia\" title=\"Noticia\">
                    <i class=\"material-icons right\">face</i>
                </button>
            </div>
            <div class=\"col s1 hide-on-large-only pad right\">
                <button id=\"esta\" class=\"z-depth-3 pad2 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Estadisticas\" title=\"Estadisticas\">
                    <i class=\"material-icons right\">assessment</i>
                </button>
            </div>
            <div class=\"col s10 l6 center\">
                <div class=\"card white darken-1\">
                    <div class=\"card-content black-text\">
                        <span class=\"card-title center \"><u>Histórico partes</u></span>
                        ";
        // line 276
        $context["contadorPartes"] = 0;
        // line 277
        echo "                        ";
        $context["break"] = false;
        // line 278
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "partes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 279
                echo "                            <p style=\"margin-bottom: 2%\">El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una
                                falta ";
                // line 280
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array())), "html", null, true);
                echo "
                                , ";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo " indicó: <br/>
                                ";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "descripcion", array()), "html", null, true);
                echo "</p>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                    </div>
                </div>
            </div>

            <div class=\"col s10 offset-s1 l6 center\">
                <div class=\"card white darken-1\">
                    <div class=\"card-content black-text\">
                        <span class=\"card-title center\"><u>Histórico sanciones</u></span>
                        ";
        // line 292
        $context["contadorSanciones"] = 0;
        // line 293
        echo "                        ";
        $context["break"] = false;
        // line 294
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "sanciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 295
                echo "                            ";
                $context["contadorSanciones"] = (($context["contadorSanciones"] ?? $this->getContext($context, "contadorSanciones")) + 1);
                // line 296
                echo "                            <p style=\"margin-bottom: 2%\">El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una sanción de
                                tipo ";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                echo "<br/>Sanción: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "sancion", array()), "html", null, true);
                echo "</p>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 299
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileInput/custom-file-input.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0e15f35978fc8239b88f72582fc6f3b1f9d227dbf51ff9e444c43325c5aead18->leave($__internal_0e15f35978fc8239b88f72582fc6f3b1f9d227dbf51ff9e444c43325c5aead18_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/alumno/alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 304,  489 => 299,  478 => 297,  473 => 296,  470 => 295,  464 => 294,  461 => 293,  459 => 292,  449 => 284,  440 => 282,  436 => 281,  432 => 280,  427 => 279,  421 => 278,  418 => 277,  416 => 276,  383 => 246,  372 => 238,  365 => 234,  347 => 219,  340 => 214,  338 => 213,  336 => 212,  334 => 211,  332 => 210,  318 => 198,  311 => 194,  280 => 170,  272 => 164,  269 => 163,  266 => 162,  263 => 161,  260 => 160,  257 => 159,  251 => 158,  248 => 157,  245 => 156,  240 => 155,  237 => 154,  234 => 153,  228 => 152,  225 => 151,  222 => 150,  217 => 149,  214 => 148,  212 => 147,  205 => 143,  197 => 138,  175 => 119,  170 => 116,  166 => 74,  148 => 60,  145 => 59,  143 => 58,  139 => 55,  134 => 53,  131 => 52,  124 => 49,  122 => 48,  116 => 45,  113 => 44,  111 => 43,  94 => 28,  85 => 25,  82 => 24,  77 => 23,  68 => 20,  65 => 19,  61 => 18,  56 => 16,  52 => 15,  43 => 8,  40 => 7,  34 => 6,  11 => 5,);
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
Vista principal del alummno con perfil usuario.
Actualizado por GUBS, RAGZ, 2019
#}
{% extends 'base2.html.twig' %}
{% block body %}
    {% include 'convivencia/navegacion.html.twig' %}
    <script>
        (function (e, t, n) {
            var r = e.querySelectorAll(\"html\")[0];
            r.className = r.className.replace(/(^|\\s)no-js(\\s|\$)/, \"\$1js\$2\")
        })(document, window, 0);
    </script>
    <div class=\"\">
        <h3 class=\"center azul-prof fuente\">{{ alumnoData.alumno.getNombreCompleto() }}</h3>
        <h4 class=\"center fuente\" id=\"punto\">Puntos: <span style=\"margin-top: -10px; font-size: 2rem;\">{{ alumnoData.alumno.puntos }}</span>/10</h4>
        <div class=\"col s12 l5 offset-l5 center\">
            {% for flash_message in app.session.flashBag.get('alumno') %}
                <div class=\"card-panel green white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }} </span><i class=\"material-icons spanico\">done</i>
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashBag.get('alumnoError') %}
                <div class=\"card-panel red white-text flash\" style=\"position: relative;\">
                    <span class=\"spancaja\">{{ flash_message }}</span><i class=\"material-icons spanico\">clear</i>
                </div>
            {% endfor %}
        </div>
        <div class=\"row\" id=\"row1\">
            <div class=\"pad col l6 s1 hide-on-large-only left\">
                <button id=\"esta\" class=\"pad3 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Estadisticas\" title=\"Estadisticas\">
                    <i class=\"material-icons right\">assessment</i>
                </button>
            </div>
            <div class=\"pad col s1 hide-on-large-only right\">
                <button id=\"histo\" class=\"pad2 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Historico\" title=\"Historico\">
                    <i class=\"material-icons right\">assignment</i>
                </button>
            </div>
            <div class=\"col l12 s10 center\" id=\"img\">
                {% if alumnoData.alumno.foto == \"\" or alumnoData.alumno.foto == null %}
                    <img class=\"circle logo-inicial\"
                         src=\"{{ asset('img/default_user.svg' ) }}\"
                         alt=\"avatar\">

              {% elseif alumnoData.alumno.foto != \"\" or alumnoData.alumno.foto != null %}
                    <img class=\"responsive-img circle\" src=\"{{ asset('img/alumnos/'~alumnoData.alumno.foto) }}\"
                         alt=\"avatar\">
                {% else %}
                    <img class=\"responsive-img circle logo-inicial\"
                         src=\"{{ asset('img/alumnos/'~alumnoData.alumno.nie~'.PNG'  ) }}\" alt=\"avatar\">
                {% endif %}
            </div>
                <div class=\"center\" style=\"padding-bottom: 1%; margin-top: 10px\">
                    {#<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/EAN13.svg/220px-EAN13.svg.png\"#}
                    {#style=\"width:150px;\">#}
                    {% if alumnoData.alumno.idUsuario.id == app.user.id %}
                        <form method=\"post\" action=\"{{ path('change_image') }}\" enctype=\"multipart/form-data\">
                            <div class=\"content\">
                                <div class=\"box\">
                                    <input type=\"file\" accept=\"image/*\" name=\"file\" id=\"file\"
                                           class=\"inputfile inputfile-1 waves-effect waves-light\" hidden
                                           capture=\"camera\">
                                    <label for=\"file\" class=\"waves-effect waves-light\" style=\"padding-bottom: 1%; margin-top: 20px\">
                                        <span class=\"left\"> Subir Imagen (2MB) </span><i
                                                class=\"material-icons imag right\">file_upload</i>
                                    </label>
                                </div>
                            </div>
                        </form>
                    {% endif %}
                </div>
            </div>
           {# <div class=\"col l6 s12 center\" id=\"not\">
                {% if noticia is not empty %}
                    {% for noticias in noticia %}
                        {% if noticias.noticia_texto is null or
                            noticias.fechaInicio|date('d/m/Y H:i:s') >  \"now\"|date('d/m/Y H:i:s') or
                            noticias.fechaFinal|date('d/m/Y H:i:s') <  \"now\"|date('d/m/Y H:i:s') %}
                            <h3 style=\"text-align:center\">Bienvenid@s a la nueva interfaz de <strong>SHIKOBA</strong>
                            </h3>
                            <p style=\"text-align:center\">Aqu&iacute; podr&aacute;s disfrutar de una nueva experiencia
                                gracias
                                a su nuevo dise&ntilde;o</p>

                            <p style=\"text-align:center\">Adem&aacute;s aqu&iacute; insertaremos nuevas noticias
                                personalizadas
                                para t&iacute;</p>

                            <p style=\"text-align:center\">
                                <img alt=\"\" src=\"{{ asset('img/logo.jpg') }}\" style=\"height:100px; width:100px\"/>
                                <img alt=\"\" src=\"{{ asset('img/logo2.svg') }}\" style=\"border-style:solid; border-width:0px; height:92px; width:146px\"/>
                            </p>

                        {% else %}
                            {{ noticias.noticia_texto | raw }}
                        {% endif %}
                    {% endfor %}
                {% else %}
                    <h3 style=\"text-align:center\">Bienvenid@s a la nueva interfaz de <strong>SHIKOBA</strong></h3>

                    <p style=\"text-align:center\">Aqu&iacute; podr&aacute;s disfrutar de una nueva experiencia gracias
                        a su nuevo dise&ntilde;o</p>

                    <p style=\"text-align:center\">Adem&aacute;s aqu&iacute; insertaremos nuevas noticias personalizadas
                        para t&iacute;</p>

                    <p style=\"text-align:center\">
                        <img alt=\"\" src=\"{{ asset('img/logo.jpg') }}\" style=\"height:100px; width:100px\"/>
                        <img alt=\"\" src=\"{{ asset('img/logo2.svg') }}\" style=\"border-style:solid; border-width:0px; height:92px; width:146px\"/>
                    </p>
                {% endif %}
            </div>#}
            <div class=\"w3-col l6\" style=\"display: none;\">
                <div class=\"w3-row w3-center w3-text-center widthChartMobile\">
                    <div class=\"w3-content marginBottom marginTopNoMobile\">
                        <h4>Estadísticas Totales {{ alumnoData.getYear() }}</h4>
                        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
                    </div>
                </div>
            </div>
        <div class=\"row\" id=\"row2\">
            <div class=\"pad col l6 s1 hide-on-large-only left\">
                <button id=\"noti\" class=\"z-depth-3 pad3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Noticia\" title=\"Noticia\">
                    <i class=\"material-icons right\">face</i>
                </button>
            </div>
            <div class=\"col pad s1 hide-on-large-only right\">
                <button id=\"histo\" class=\"pad2 z-depth-3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Historico\" title=\"Historico\">
                    <i class=\"material-icons right\">assignment</i>
                </button>
            </div>
            <div class=\"col s10 l6 center\">
                <h5 class=\"card-title\">Partes {{ alumnoData.getYear() }}</h5>
                <canvas id=\"myChart2\"></canvas>
            </div>

            <div class=\"col offset-s1 s10 l6 center\">
                <h5 class=\"card-title\">Sanciones {{ alumnoData.getYear() }}</h5>
                <canvas id=\"myChart3\"></canvas>
            </div>
        </div>
        {% set arrMeses = [] %}
        {% set arrPartes = [] %}
        {% for mes, partesMes in alumnoData.numPartesMeses %}
            {% set arrMeses = arrMeses|merge([mes]) %}
            {% set arrPartes = arrPartes|merge([partesMes]) %}
        {% endfor %}
        {% set arrMesesSanciones= [] %}
        {% set arrSanciones = [] %}
        {% for mes, sancionesMes in alumnoData.numSancionesMeses %}
            {% set arrMesesSanciones = arrMesesSanciones|merge([mes]) %}
            {% set arrSanciones = arrSanciones|merge([sancionesMes]) %}
        {% endfor %}
        {% if arrMeses|length > 4 %}
            {% set barPercentage = 0.4 %}
        {% else %}
            {% set barPercentage = 0.2 %}
        {% endif %}
        <script>
            var ctx = document.getElementById(\"myChart\").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [{{ alumnoData.numPartes }}, {{ alumnoData.numSanciones }}, {{ alumnoData.numVisitasConvivencia }}],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(56, 136, 155, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 206, 86, 0.5)'
                        ],
                    }],

                    labels: [
                        'Partes',
                        'Sanciones',
                        'Visitas Aula Convivencia'
                    ]
                }
            });

            ctx = document.getElementById(\"myChart2\").getContext('2d');
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {{ arrMeses|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Partes',
                            data: {{ arrPartes|json_encode|raw }},
                           backgroundColor: 'rgba(56, 136, 155, 0.5)',
                   //      backgroundColor: [
                   //         'rgba(56, 136, 155, 0.5)',
                   //         'rgba(255, 206, 86, 0.5)',
                   //         'rgba(75, 192, 192, 0.5)',
                   //         'rgba(153, 102, 255, 0.5)',
                   //         'rgba(54, 162, 235, 0.5)',
                   //         'rgba(255, 159, 64, 0.5)'
                   // ],
                        },
                        {#{#}
                        {#label: 'Visitas Aula Convivencia',#}
                        {#data: {{ arrPartes|json_encode|raw }},#}
                        {#backgroundColor: 'rgba(75, 192, 192, 0.5)',#}
                        {#}#}
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: {{ barPercentage }}
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

            ctx = document.getElementById(\"myChart3\").getContext('2d');
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {{ arrMesesSanciones|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Sanciones',
                            data: {{ arrSanciones|json_encode|raw }},
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        },
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: {{ barPercentage }}
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

        </script>

        <div class=\"row\" id=\"row3\">
            <div class=\"col s1 hide-on-large-only pad left\">
                <button id=\"noti\" class=\"z-depth-3 pad3 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Noticia\" title=\"Noticia\">
                    <i class=\"material-icons right\">face</i>
                </button>
            </div>
            <div class=\"col s1 hide-on-large-only pad right\">
                <button id=\"esta\" class=\"z-depth-3 pad2 btn btn-floating blue darken-3 waves-effect waves-light\"
                        type=\"button\" value=\"Estadisticas\" title=\"Estadisticas\">
                    <i class=\"material-icons right\">assessment</i>
                </button>
            </div>
            <div class=\"col s10 l6 center\">
                <div class=\"card white darken-1\">
                    <div class=\"card-content black-text\">
                        <span class=\"card-title center \"><u>Histórico partes</u></span>
                        {% set contadorPartes = 0 %}
                        {% set break = false %}
                        {% for parte in alumnoData.partes if not break %}
                            <p style=\"margin-bottom: 2%\">El {{ parte.fecha|date('d/m/Y') }} tuvo una
                                falta {{ parte.idTipo.tipo|lower }}
                                , {{ parte.idProfesor.getNombreCompleto() }} indicó: <br/>
                                {{ parte.descripcion }}</p>
                        {% endfor %}
                    </div>
                </div>
            </div>

            <div class=\"col s10 offset-s1 l6 center\">
                <div class=\"card white darken-1\">
                    <div class=\"card-content black-text\">
                        <span class=\"card-title center\"><u>Histórico sanciones</u></span>
                        {% set contadorSanciones = 0 %}
                        {% set break = false %}
                        {% for sancion in alumnoData.sanciones if not break %}
                            {% set contadorSanciones = contadorSanciones + 1 %}
                            <p style=\"margin-bottom: 2%\">El {{ sancion.fecha|date('d/m/Y') }} tuvo una sanción de
                                tipo {{ sancion.idTipo.tipo }}<br/>Sanción: {{ sancion.sancion }}</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('js/fileInput/custom-file-input.js') }}\"></script>
{% endblock %}
", "convivencia/alumno/alumno.html.twig", "F:\\development\\www\\shikoba\\app\\Resources\\views\\convivencia\\alumno\\alumno.html.twig");
    }
}
