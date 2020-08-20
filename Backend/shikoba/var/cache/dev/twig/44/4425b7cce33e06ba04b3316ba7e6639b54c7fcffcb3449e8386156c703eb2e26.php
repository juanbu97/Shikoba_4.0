<?php

/* base2.html.twig */
class __TwigTemplate_d346d728a092ac18a3fc1a1a6a39c68ad9ea8ff3b1746856e4d4e7dd77c18536 extends Twig_Template
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
        $__internal_181754eeb4afcfc2fa5099357b91e490886ebc38a8e034e41f080b62216c20da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181754eeb4afcfc2fa5099357b91e490886ebc38a8e034e41f080b62216c20da->enter($__internal_181754eeb4afcfc2fa5099357b91e490886ebc38a8e034e41f080b62216c20da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_f7e99bada914188720b405bb44166c4708cf1e5d050976a8436b478c0c5bbf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e99bada914188720b405bb44166c4708cf1e5d050976a8436b478c0c5bbf2a->enter($__internal_f7e99bada914188720b405bb44166c4708cf1e5d050976a8436b478c0c5bbf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        
        $__internal_181754eeb4afcfc2fa5099357b91e490886ebc38a8e034e41f080b62216c20da->leave($__internal_181754eeb4afcfc2fa5099357b91e490886ebc38a8e034e41f080b62216c20da_prof);

        
        $__internal_f7e99bada914188720b405bb44166c4708cf1e5d050976a8436b478c0c5bbf2a->leave($__internal_f7e99bada914188720b405bb44166c4708cf1e5d050976a8436b478c0c5bbf2a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ece4c3a55225f7383fdfd4039cbdee9c945d4175f57c61af0baa2373ad601f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece4c3a55225f7383fdfd4039cbdee9c945d4175f57c61af0baa2373ad601f28->enter($__internal_ece4c3a55225f7383fdfd4039cbdee9c945d4175f57c61af0baa2373ad601f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be7aa463f6b259c41fb10083529550f94bc7bbbcdbc4a414ab59ca95687cfe42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7aa463f6b259c41fb10083529550f94bc7bbbcdbc4a414ab59ca95687cfe42->enter($__internal_be7aa463f6b259c41fb10083529550f94bc7bbbcdbc4a414ab59ca95687cfe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SHIKOBA";
        
        $__internal_be7aa463f6b259c41fb10083529550f94bc7bbbcdbc4a414ab59ca95687cfe42->leave($__internal_be7aa463f6b259c41fb10083529550f94bc7bbbcdbc4a414ab59ca95687cfe42_prof);

        
        $__internal_ece4c3a55225f7383fdfd4039cbdee9c945d4175f57c61af0baa2373ad601f28->leave($__internal_ece4c3a55225f7383fdfd4039cbdee9c945d4175f57c61af0baa2373ad601f28_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0a608c186fbea01d57a52b7468b3661547fc5a63d4f26689fb99baaf88309c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a608c186fbea01d57a52b7468b3661547fc5a63d4f26689fb99baaf88309c4->enter($__internal_b0a608c186fbea01d57a52b7468b3661547fc5a63d4f26689fb99baaf88309c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ba2449e321921d2ed6b97cb0291b4e09156bc81513bb07e74767ad2605b6401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba2449e321921d2ed6b97cb0291b4e09156bc81513bb07e74767ad2605b6401->enter($__internal_7ba2449e321921d2ed6b97cb0291b4e09156bc81513bb07e74767ad2605b6401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7ba2449e321921d2ed6b97cb0291b4e09156bc81513bb07e74767ad2605b6401->leave($__internal_7ba2449e321921d2ed6b97cb0291b4e09156bc81513bb07e74767ad2605b6401_prof);

        
        $__internal_b0a608c186fbea01d57a52b7468b3661547fc5a63d4f26689fb99baaf88309c4->leave($__internal_b0a608c186fbea01d57a52b7468b3661547fc5a63d4f26689fb99baaf88309c4_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c76982cc65f5544f250bf3188908693d4d5d7ed12c6fb5c34030eb98c99c0793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76982cc65f5544f250bf3188908693d4d5d7ed12c6fb5c34030eb98c99c0793->enter($__internal_c76982cc65f5544f250bf3188908693d4d5d7ed12c6fb5c34030eb98c99c0793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e13542ecd93097d52d0ec583abba55301424191564b62eefea0477670f8d8e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13542ecd93097d52d0ec583abba55301424191564b62eefea0477670f8d8e0c->enter($__internal_e13542ecd93097d52d0ec583abba55301424191564b62eefea0477670f8d8e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "
    ";
        
        $__internal_e13542ecd93097d52d0ec583abba55301424191564b62eefea0477670f8d8e0c->leave($__internal_e13542ecd93097d52d0ec583abba55301424191564b62eefea0477670f8d8e0c_prof);

        
        $__internal_c76982cc65f5544f250bf3188908693d4d5d7ed12c6fb5c34030eb98c99c0793->leave($__internal_c76982cc65f5544f250bf3188908693d4d5d7ed12c6fb5c34030eb98c99c0793_prof);

    }

    // line 173
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d86a2843e236b669eeed00526bdd94ffab864d7fa6179b77abba95c1b023ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d86a2843e236b669eeed00526bdd94ffab864d7fa6179b77abba95c1b023ef->enter($__internal_c8d86a2843e236b669eeed00526bdd94ffab864d7fa6179b77abba95c1b023ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3e70eba8ba30fe8b12adc1d8746b8cd1cdd76854f40b0109ee9891c6ac1f87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e70eba8ba30fe8b12adc1d8746b8cd1cdd76854f40b0109ee9891c6ac1f87f->enter($__internal_f3e70eba8ba30fe8b12adc1d8746b8cd1cdd76854f40b0109ee9891c6ac1f87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3e70eba8ba30fe8b12adc1d8746b8cd1cdd76854f40b0109ee9891c6ac1f87f->leave($__internal_f3e70eba8ba30fe8b12adc1d8746b8cd1cdd76854f40b0109ee9891c6ac1f87f_prof);

        
        $__internal_c8d86a2843e236b669eeed00526bdd94ffab864d7fa6179b77abba95c1b023ef->leave($__internal_c8d86a2843e236b669eeed00526bdd94ffab864d7fa6179b77abba95c1b023ef_prof);

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
        return array (  398 => 173,  387 => 112,  378 => 111,  362 => 56,  356 => 53,  350 => 50,  346 => 49,  340 => 46,  334 => 43,  328 => 40,  322 => 37,  319 => 36,  314 => 33,  310 => 32,  307 => 31,  302 => 28,  299 => 27,  294 => 24,  290 => 23,  286 => 22,  283 => 21,  278 => 18,  275 => 17,  272 => 15,  270 => 14,  266 => 11,  257 => 10,  239 => 9,  217 => 174,  214 => 173,  211 => 171,  153 => 114,  151 => 111,  147 => 110,  141 => 107,  137 => 106,  131 => 103,  125 => 100,  121 => 99,  115 => 96,  109 => 93,  103 => 90,  97 => 87,  91 => 84,  85 => 81,  79 => 78,  73 => 75,  69 => 74,  65 => 73,  59 => 70,  53 => 67,  48 => 65,  41 => 62,  39 => 10,  35 => 9,  29 => 5,);
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
", "base2.html.twig", "/opt/lampp/htdocs/shikobaEventos/shikoba/app/Resources/views/base2.html.twig");
    }
}
