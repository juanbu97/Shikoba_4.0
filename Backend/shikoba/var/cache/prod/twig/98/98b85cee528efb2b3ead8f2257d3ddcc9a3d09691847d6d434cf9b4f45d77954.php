<?php

/* ::base2.html.twig */
class __TwigTemplate_7938b7e2b612b2846cc29881f631bdfbff8aaff8373d4aa380b8a1682450d06e extends Twig_Template
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
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "SHIKOBA";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
        echo "
    ";
    }

    // line 173
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 173,  345 => 112,  342 => 111,  332 => 56,  326 => 53,  320 => 50,  316 => 49,  310 => 46,  304 => 43,  298 => 40,  292 => 37,  289 => 36,  284 => 33,  280 => 32,  277 => 31,  272 => 28,  269 => 27,  264 => 24,  260 => 23,  256 => 22,  253 => 21,  248 => 18,  245 => 17,  242 => 15,  240 => 14,  236 => 11,  233 => 10,  227 => 9,  211 => 174,  208 => 173,  205 => 171,  147 => 114,  145 => 111,  141 => 110,  135 => 107,  131 => 106,  125 => 103,  119 => 100,  115 => 99,  109 => 96,  103 => 93,  97 => 90,  91 => 87,  85 => 84,  79 => 81,  73 => 78,  67 => 75,  63 => 74,  59 => 73,  53 => 70,  47 => 67,  42 => 65,  35 => 62,  33 => 10,  29 => 9,  23 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base2.html.twig", "/var/www/html/shikoba/app/Resources/views/base2.html.twig");
    }
}
