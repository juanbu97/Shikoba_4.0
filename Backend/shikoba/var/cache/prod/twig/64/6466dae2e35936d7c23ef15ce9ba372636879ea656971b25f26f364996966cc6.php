<?php

/* :convivencia/alumno:alumno.html.twig */
class __TwigTemplate_8e5f27e639502f55df0da3d4694e7a3669e4d246d560d69ddaf49b2ba0d28702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("base2.html.twig", ":convivencia/alumno:alumno.html.twig", 5);
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->loadTemplate("convivencia/navegacion.html.twig", ":convivencia/alumno:alumno.html.twig", 7)->display($context);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h3>
        <h4 class=\"center fuente\" id=\"punto\">Puntos: <span style=\"margin-top: -10px; font-size: 2rem;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "puntos", array()), "html", null, true);
        echo "</span>/10</h4>
        <div class=\"col s12 l5 offset-l5 center\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "alumno"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "alumnoError"), "method"));
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
        if ((($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "foto", array()) == "") || ($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "foto", array()) == null))) {
            // line 44
            echo "                    <img class=\"circle logo-inicial\"
                         src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/default_user.svg"), "html", null, true);
            echo "\"
                         alt=\"avatar\">

              ";
        } elseif ((($this->getAttribute($this->getAttribute(        // line 48
($context["alumnoData"] ?? null), "alumno", array()), "foto", array()) != "") || ($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "foto", array()) != null))) {
            // line 49
            echo "                    <img class=\"responsive-img circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/alumnos/" . $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "foto", array()))), "html", null, true);
            echo "\"
                         alt=\"avatar\">
                ";
        } else {
            // line 52
            echo "                    <img class=\"responsive-img circle logo-inicial\"
                         src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("img/alumnos/" . $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "nie", array())) . ".PNG")), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["alumnoData"] ?? null), "alumno", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? null), "getYear", array(), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? null), "getYear", array(), "method"), "html", null, true);
        echo "</h5>
                <canvas id=\"myChart2\"></canvas>
            </div>

            <div class=\"col offset-s1 s10 l6 center\">
                <h5 class=\"card-title\">Sanciones ";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? null), "getYear", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? null), "numPartesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["partesMes"]) {
            // line 150
            echo "            ";
            $context["arrMeses"] = twig_array_merge(($context["arrMeses"] ?? null), array(0 => $context["mes"]));
            // line 151
            echo "            ";
            $context["arrPartes"] = twig_array_merge(($context["arrPartes"] ?? null), array(0 => $context["partesMes"]));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? null), "numSancionesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["sancionesMes"]) {
            // line 156
            echo "            ";
            $context["arrMesesSanciones"] = twig_array_merge(($context["arrMesesSanciones"] ?? null), array(0 => $context["mes"]));
            // line 157
            echo "            ";
            $context["arrSanciones"] = twig_array_merge(($context["arrSanciones"] ?? null), array(0 => $context["sancionesMes"]));
            // line 158
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['sancionesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        ";
        if ((twig_length_filter($this->env, ($context["arrMeses"] ?? null)) > 4)) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? null), "numPartes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? null), "numSanciones", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? null), "numVisitasConvivencia", array()), "html", null, true);
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
        echo twig_jsonencode_filter(($context["arrMeses"] ?? null));
        echo ",
                    datasets: [
                        {
                            label: 'Partes',
                            data: ";
        // line 198
        echo twig_jsonencode_filter(($context["arrPartes"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["barPercentage"] ?? null), "html", null, true);
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
        echo twig_jsonencode_filter(($context["arrMesesSanciones"] ?? null));
        echo ",
                    datasets: [
                        {
                            label: 'Sanciones',
                            data: ";
        // line 238
        echo twig_jsonencode_filter(($context["arrSanciones"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["barPercentage"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? null), "partes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            if ( !($context["break"] ?? null)) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? null), "sanciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            if ( !($context["break"] ?? null)) {
                // line 295
                echo "                            ";
                $context["contadorSanciones"] = (($context["contadorSanciones"] ?? null) + 1);
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
    }

    public function getTemplateName()
    {
        return ":convivencia/alumno:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 304,  480 => 299,  469 => 297,  464 => 296,  461 => 295,  455 => 294,  452 => 293,  450 => 292,  440 => 284,  431 => 282,  427 => 281,  423 => 280,  418 => 279,  412 => 278,  409 => 277,  407 => 276,  374 => 246,  363 => 238,  356 => 234,  338 => 219,  331 => 214,  329 => 213,  327 => 212,  325 => 211,  323 => 210,  309 => 198,  302 => 194,  271 => 170,  263 => 164,  260 => 163,  257 => 162,  254 => 161,  251 => 160,  248 => 159,  242 => 158,  239 => 157,  236 => 156,  231 => 155,  228 => 154,  225 => 153,  219 => 152,  216 => 151,  213 => 150,  208 => 149,  205 => 148,  203 => 147,  196 => 143,  188 => 138,  166 => 119,  161 => 116,  157 => 74,  139 => 60,  136 => 59,  134 => 58,  130 => 55,  125 => 53,  122 => 52,  115 => 49,  113 => 48,  107 => 45,  104 => 44,  102 => 43,  85 => 28,  76 => 25,  73 => 24,  68 => 23,  59 => 20,  56 => 19,  52 => 18,  47 => 16,  43 => 15,  34 => 8,  31 => 7,  28 => 6,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":convivencia/alumno:alumno.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/alumno.html.twig");
    }
}
