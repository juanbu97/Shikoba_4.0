<?php

/* base2.html.twig */
class __TwigTemplate_2d5c5ea7af647695bdd30f3388344c5fef88b9887134326a3468662959845099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b11d900dc356fe6275a8d7d1240359335b8cfd76a118e6407feaf4eeea35222c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11d900dc356fe6275a8d7d1240359335b8cfd76a118e6407feaf4eeea35222c->enter($__internal_b11d900dc356fe6275a8d7d1240359335b8cfd76a118e6407feaf4eeea35222c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 5
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <!--Import jQuery before materialize.js-->
    <!-- Actualizado a la versión 3.4.1 -->
    <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Actualizado a la versión 1.0.0 -->
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 1.8.7 -->
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- En versiones estables -->
    <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tooltip/tooltipster.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 2.8.0 -->
    <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 3.3.4 -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-confirm.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 1.10.18 -->
    <script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>

    <!-- En versión estable -->
    <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileInput/custom-file-input.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 2.24.0 -->
    <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Genera un error en consola, revisar. -->
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepickerrang.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 0.20.0 -->
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker/jquery.daterangepicker.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Scripts personalizados para datatables y otras funcionalidades. -->
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/convivencia.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 1.10.18 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables/datatables-downloads.min.css"), "html", null, true);
        echo "\"/>

    <!-- Actualizado a la versión estable 0.1.56 -->
    <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

    <!-- Actualizado a la versión 1.10.18 -->
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datatables/datatables-downloads.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 111
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "</head>
<body class=\"daterange\">
<main>
    <div class=\"loaderIntro\">
        <div class=\"preloader-wrapper big active\">
            <div class=\"spinner-layer spinner-blue\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-yellow\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-green\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"containerLoader\">
        ";
        // line 171
        echo "        <div class=\"row\" style=\"margin-bottom: -10px;display: none;\">
            ";
        // line 173
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 174
        echo "        </div>
    </div>
</main>
<footer class=\"page-footer blue darken-3\">
    <div class=\"footer-copyright\">
        <div class=\"container center\">
            © 2017 - 2019  Shikoba - Sawabona
        </div>
    </div>
</footer>
</body>
</html>
";
        
        $__internal_b11d900dc356fe6275a8d7d1240359335b8cfd76a118e6407feaf4eeea35222c->leave($__internal_b11d900dc356fe6275a8d7d1240359335b8cfd76a118e6407feaf4eeea35222c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75ffc97eb4564446fc2caadaf84ff45e8543041c7183d2a8a3d4d85314a2bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75ffc97eb4564446fc2caadaf84ff45e8543041c7183d2a8a3d4d85314a2bef->enter($__internal_f75ffc97eb4564446fc2caadaf84ff45e8543041c7183d2a8a3d4d85314a2bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SHIKOBA";
        
        $__internal_f75ffc97eb4564446fc2caadaf84ff45e8543041c7183d2a8a3d4d85314a2bef->leave($__internal_f75ffc97eb4564446fc2caadaf84ff45e8543041c7183d2a8a3d4d85314a2bef_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61c4f68b3347ff38a8ddb99e89fda0c6cb551ebd064427bf394066aceb3e67c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c4f68b3347ff38a8ddb99e89fda0c6cb551ebd064427bf394066aceb3e67c3->enter($__internal_61c4f68b3347ff38a8ddb99e89fda0c6cb551ebd064427bf394066aceb3e67c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <!--Import Google Icon Font-->
        ";
        // line 14
        echo "        ";
        // line 15
        echo "
        ";
        // line 17
        echo "        <!-- Versión custom, no se actualiza -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosenmaterial.css"), "html", null, true);
        echo "\">

        ";
        // line 21
        echo "        <!-- Actualizado a la última estable -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.structure.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.theme.min.css"), "html", null, true);
        echo "\">

        ";
        // line 27
        echo "        <!-- Actualizado a la última estable -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/iCheck/blue.css"), "html", null, true);
        echo "\">

        ";
        // line 31
        echo "        <!-- Actualizado a la última estable -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster.bundle.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster-sideTip-light.min.css"), "html", null, true);
        echo "\">

        ";
        // line 36
        echo "        <!-- Actualizado a la última estable 3.3.4 -->
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-confirm.min.css"), "html", null, true);
        echo "\">

        <!-- Actualizado a la versión 1.10.18 -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datatables/datatables.min.css"), "html", null, true);
        echo "\">

        <!-- Actualizado -->
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fileInput/component.css"), "html", null, true);
        echo "\">

        <!-- Actualizado a la versión 0.20.0 -->
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker/daterangepicker.min.css"), "html", null, true);
        echo "\">

        <!--Import materialize.css, en versión v0.100.2, conviene no actualizar.-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>

        <!-- Actualizado a la versión 2.8.0 -->
        <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chart.min.css"), "html", null, true);
        echo "\">

        <!-- Actualizado a la versión 3.7.0 -->
        <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    ";
        
        $__internal_61c4f68b3347ff38a8ddb99e89fda0c6cb551ebd064427bf394066aceb3e67c3->leave($__internal_61c4f68b3347ff38a8ddb99e89fda0c6cb551ebd064427bf394066aceb3e67c3_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8325619d9651e7ceba54c1cc4e1d9cad37cd2fb251f759f2f1b75a209df0c7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8325619d9651e7ceba54c1cc4e1d9cad37cd2fb251f759f2f1b75a209df0c7f1->enter($__internal_8325619d9651e7ceba54c1cc4e1d9cad37cd2fb251f759f2f1b75a209df0c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "
    ";
        
        $__internal_8325619d9651e7ceba54c1cc4e1d9cad37cd2fb251f759f2f1b75a209df0c7f1->leave($__internal_8325619d9651e7ceba54c1cc4e1d9cad37cd2fb251f759f2f1b75a209df0c7f1_prof);

    }

    // line 173
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e38a42c45f8fe772adca9f4d5980d1db27d11f6c6103d6cf16b9476b0a68ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e38a42c45f8fe772adca9f4d5980d1db27d11f6c6103d6cf16b9476b0a68ebe->enter($__internal_1e38a42c45f8fe772adca9f4d5980d1db27d11f6c6103d6cf16b9476b0a68ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e38a42c45f8fe772adca9f4d5980d1db27d11f6c6103d6cf16b9476b0a68ebe->leave($__internal_1e38a42c45f8fe772adca9f4d5980d1db27d11f6c6103d6cf16b9476b0a68ebe_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 173,  366 => 112,  360 => 111,  347 => 56,  341 => 53,  335 => 50,  331 => 49,  325 => 46,  319 => 43,  313 => 40,  307 => 37,  304 => 36,  299 => 33,  295 => 32,  292 => 31,  287 => 28,  284 => 27,  279 => 24,  275 => 23,  271 => 22,  268 => 21,  263 => 18,  260 => 17,  257 => 15,  255 => 14,  251 => 11,  245 => 10,  233 => 9,  214 => 174,  211 => 173,  208 => 171,  150 => 114,  148 => 111,  144 => 110,  138 => 107,  134 => 106,  128 => 103,  122 => 100,  118 => 99,  112 => 96,  106 => 93,  100 => 90,  94 => 87,  88 => 84,  82 => 81,  76 => 78,  70 => 75,  66 => 74,  62 => 73,  56 => 70,  50 => 67,  45 => 65,  38 => 62,  36 => 10,  32 => 9,  26 => 5,);
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
Vista base de la que extiende el resto.
Actualizado por GUBS, RAGZ, 2019
#}
<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}SHIKOBA{% endblock %}</title>
    {% block stylesheets %}

        <!--Import Google Icon Font-->
        {#  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> #}
        {#  <link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\"> #}

        {# Chosen css #}
        <!-- Versión custom, no se actualiza -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/chosenmaterial.css') }}\">

        {# jquey-ui css #}
        <!-- Actualizado a la última estable -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.structure.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.theme.min.css') }}\">

        {# iCheck square blue.css #}
        <!-- Actualizado a la última estable -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/iCheck/blue.css') }}\">

        {# tooltipster css #}
        <!-- Actualizado a la última estable -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/tooltip/tooltipster.bundle.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/tooltip/tooltipster-sideTip-light.min.css') }}\">

        {# jquery-confirm css #}
        <!-- Actualizado a la última estable 3.3.4 -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-confirm.min.css') }}\">

        <!-- Actualizado a la versión 1.10.18 -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/datatables/datatables.min.css') }}\">

        <!-- Actualizado -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/fileInput/component.css') }}\">

        <!-- Actualizado a la versión 0.20.0 -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/datepicker/daterangepicker.min.css') }}\">

        <!--Import materialize.css, en versión v0.100.2, conviene no actualizar.-->
        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\" media=\"screen,projection\"/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" media=\"screen,projection\"/>

        <!-- Actualizado a la versión 2.8.0 -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/chart.min.css') }}\">

        <!-- Actualizado a la versión 3.7.0 -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\">

        <!--Let browser know website is optimized for mobile-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <!--Import jQuery before materialize.js-->
    <!-- Actualizado a la versión 3.4.1 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.4.1.min.js') }}\"></script>
    <!-- Actualizado a la versión 1.0.0 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/materialize.min.js') }}\"></script>

    <!-- Actualizado a la versión 1.8.7 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/chosen/chosen.jquery.min.js') }}\"></script>

    <!-- En versiones estables -->
    <script type=\"text/javascript\" src=\"{{ asset('js/datepicker/jquery-ui.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/iCheck/icheck.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/tooltip/tooltipster.bundle.min.js') }}\"></script>

    <!-- Actualizado a la versión 2.8.0 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/chart.min.js') }}\"></script>

    <!-- Actualizado a la versión 3.3.4 -->
    <script src=\"{{ asset('js/jquery-confirm.min.js') }}\"></script>

    <!-- Actualizado a la versión 1.10.18 -->
    <script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('js/datatables/datatables.min.js') }}\"></script>

    <!-- En versión estable -->
    <script type=\"text/javascript\" src=\"{{ asset('js/fileInput/custom-file-input.js') }}\"></script>

    <!-- Actualizado a la versión 2.24.0 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/moment.min.js') }}\"></script>

    <!-- Genera un error en consola, revisar. -->
    <script type=\"text/javascript\" src=\"{{ asset('js/datepickerrang.js') }}\"></script>

    <!-- Actualizado a la versión 0.20.0 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/datepicker/jquery.daterangepicker.min.js') }}\"></script>

    <!-- Scripts personalizados para datatables y otras funcionalidades. -->
    <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/convivencia.js') }}\"></script>

    <!-- Actualizado a la versión 1.10.18 -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/datatables/datatables-downloads.min.css') }}\"/>

    <!-- Actualizado a la versión estable 0.1.56 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/pdfmake.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/vfs_fonts.js') }}\"></script>

    <!-- Actualizado a la versión 1.10.18 -->
    <script type=\"text/javascript\" src=\"{{ asset('js/datatables/datatables-downloads.min.js') }}\"></script>
    {% block javascripts %}

    {% endblock %}
</head>
<body class=\"daterange\">
<main>
    <div class=\"loaderIntro\">
        <div class=\"preloader-wrapper big active\">
            <div class=\"spinner-layer spinner-blue\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-red\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-yellow\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>

            <div class=\"spinner-layer spinner-green\">
                <div class=\"circle-clipper left\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"gap-patch\">
                    <div class=\"circle\"></div>
                </div>
                <div class=\"circle-clipper right\">
                    <div class=\"circle\"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"containerLoader\">
        {#<div class=\"\">#}
        <div class=\"row\" style=\"margin-bottom: -10px;display: none;\">
            {# <div class=\"row\" style=\"margin-bottom: -10px;\">#}
            {% block body %}{% endblock %}
        </div>
    </div>
</main>
<footer class=\"page-footer blue darken-3\">
    <div class=\"footer-copyright\">
        <div class=\"container center\">
            © 2017 - 2019  Shikoba - Sawabona
        </div>
    </div>
</footer>
</body>
</html>
", "base2.html.twig", "/var/www/html/shikoba/app/Resources/views/base2.html.twig");
    }
}
