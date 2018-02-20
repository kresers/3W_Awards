<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'wrapper' => array($this, 'block_wrapper'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e3139f6fe318d64f2777275cdd862e65d84e9caff8be2ed9b8d39f47d8ff283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3139f6fe318d64f2777275cdd862e65d84e9caff8be2ed9b8d39f47d8ff283->enter($__internal_4e3139f6fe318d64f2777275cdd862e65d84e9caff8be2ed9b8d39f47d8ff283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dd75d5bcb270ff4041bfdde2c7f5e6275373b434302d55642535824c3b1b6cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd75d5bcb270ff4041bfdde2c7f5e6275373b434302d55642535824c3b1b6cda->enter($__internal_dd75d5bcb270ff4041bfdde2c7f5e6275373b434302d55642535824c3b1b6cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>
<body>
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>
";
        
        $__internal_4e3139f6fe318d64f2777275cdd862e65d84e9caff8be2ed9b8d39f47d8ff283->leave($__internal_4e3139f6fe318d64f2777275cdd862e65d84e9caff8be2ed9b8d39f47d8ff283_prof);

        
        $__internal_dd75d5bcb270ff4041bfdde2c7f5e6275373b434302d55642535824c3b1b6cda->leave($__internal_dd75d5bcb270ff4041bfdde2c7f5e6275373b434302d55642535824c3b1b6cda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c54c1bf3486d01d0d37e28415e502bdd5f232237911f0e2a5cda5e122a02443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c54c1bf3486d01d0d37e28415e502bdd5f232237911f0e2a5cda5e122a02443->enter($__internal_3c54c1bf3486d01d0d37e28415e502bdd5f232237911f0e2a5cda5e122a02443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_416d0d428e06bded326a25724e4e63cdb70e9ba2154b80afaf9e4c1374560a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416d0d428e06bded326a25724e4e63cdb70e9ba2154b80afaf9e4c1374560a81->enter($__internal_416d0d428e06bded326a25724e4e63cdb70e9ba2154b80afaf9e4c1374560a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "3W_Awards";
        
        $__internal_416d0d428e06bded326a25724e4e63cdb70e9ba2154b80afaf9e4c1374560a81->leave($__internal_416d0d428e06bded326a25724e4e63cdb70e9ba2154b80afaf9e4c1374560a81_prof);

        
        $__internal_3c54c1bf3486d01d0d37e28415e502bdd5f232237911f0e2a5cda5e122a02443->leave($__internal_3c54c1bf3486d01d0d37e28415e502bdd5f232237911f0e2a5cda5e122a02443_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15e845efbd51fb01569ad8ee71d2917c97ccb833932e24b017639a79a608b89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e845efbd51fb01569ad8ee71d2917c97ccb833932e24b017639a79a608b89a->enter($__internal_15e845efbd51fb01569ad8ee71d2917c97ccb833932e24b017639a79a608b89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e8781a98da448b4dd3a31c9df5c8c0e8a060dcb84ea9079ef57ec0afdddc827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8781a98da448b4dd3a31c9df5c8c0e8a060dcb84ea9079ef57ec0afdddc827->enter($__internal_2e8781a98da448b4dd3a31c9df5c8c0e8a060dcb84ea9079ef57ec0afdddc827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
        ";
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/css/paper-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        
        $__internal_2e8781a98da448b4dd3a31c9df5c8c0e8a060dcb84ea9079ef57ec0afdddc827->leave($__internal_2e8781a98da448b4dd3a31c9df5c8c0e8a060dcb84ea9079ef57ec0afdddc827_prof);

        
        $__internal_15e845efbd51fb01569ad8ee71d2917c97ccb833932e24b017639a79a608b89a->leave($__internal_15e845efbd51fb01569ad8ee71d2917c97ccb833932e24b017639a79a608b89a_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_653847fa3e79a9f55a543b22eb0c93b037f000ccfffe32514a35bcc8ff3f57d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653847fa3e79a9f55a543b22eb0c93b037f000ccfffe32514a35bcc8ff3f57d9->enter($__internal_653847fa3e79a9f55a543b22eb0c93b037f000ccfffe32514a35bcc8ff3f57d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b612a3fc7a51568aa2aa78e489375326bb19b40fd5d6f8653bc065019f186858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b612a3fc7a51568aa2aa78e489375326bb19b40fd5d6f8653bc065019f186858->enter($__internal_b612a3fc7a51568aa2aa78e489375326bb19b40fd5d6f8653bc065019f186858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
    <div class=\"wrapper\">
        ";
        // line 24
        echo twig_include($this->env, $context, "template/nav.html.twig");
        echo " ";
        // line 25
        echo "        ";
        $this->displayBlock('wrapper', $context, $blocks);
        // line 28
        echo "    </div>

";
        
        $__internal_b612a3fc7a51568aa2aa78e489375326bb19b40fd5d6f8653bc065019f186858->leave($__internal_b612a3fc7a51568aa2aa78e489375326bb19b40fd5d6f8653bc065019f186858_prof);

        
        $__internal_653847fa3e79a9f55a543b22eb0c93b037f000ccfffe32514a35bcc8ff3f57d9->leave($__internal_653847fa3e79a9f55a543b22eb0c93b037f000ccfffe32514a35bcc8ff3f57d9_prof);

    }

    // line 25
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_a2d5b39015b77ea34e7460401035206a29263be28fcfdc0d4525e8142b92a613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d5b39015b77ea34e7460401035206a29263be28fcfdc0d4525e8142b92a613->enter($__internal_a2d5b39015b77ea34e7460401035206a29263be28fcfdc0d4525e8142b92a613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_049218a6117b4269000061752b4f87cce3bca567621e95da5331b28cde04ac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049218a6117b4269000061752b4f87cce3bca567621e95da5331b28cde04ac72->enter($__internal_049218a6117b4269000061752b4f87cce3bca567621e95da5331b28cde04ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 26
        echo "
        ";
        
        $__internal_049218a6117b4269000061752b4f87cce3bca567621e95da5331b28cde04ac72->leave($__internal_049218a6117b4269000061752b4f87cce3bca567621e95da5331b28cde04ac72_prof);

        
        $__internal_a2d5b39015b77ea34e7460401035206a29263be28fcfdc0d4525e8142b92a613->leave($__internal_a2d5b39015b77ea34e7460401035206a29263be28fcfdc0d4525e8142b92a613_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ae0dd412c9a9d6fb7175f906ae6eb0419f56cf2450dc4e210c6aed980d000dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae0dd412c9a9d6fb7175f906ae6eb0419f56cf2450dc4e210c6aed980d000dc->enter($__internal_3ae0dd412c9a9d6fb7175f906ae6eb0419f56cf2450dc4e210c6aed980d000dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d8eddb4e05307d80f7b199e64b29ef4faacefc87697551b7ae01b96b1232f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8eddb4e05307d80f7b199e64b29ef4faacefc87697551b7ae01b96b1232f02->enter($__internal_6d8eddb4e05307d80f7b199e64b29ef4faacefc87697551b7ae01b96b1232f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "
    ";
        // line 35
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/bootstrap-checkbox-radio.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/paper-dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            demo.initChartist();

            \$.notify({
                icon: 'ti-home',
                message: \"Bienvenue sur le panel d'administration de <b>3W_Awards</b>\"

            }, {
                type: 'success',
                timer: 4000
            });

        });
    </script>

";
        
        $__internal_6d8eddb4e05307d80f7b199e64b29ef4faacefc87697551b7ae01b96b1232f02->leave($__internal_6d8eddb4e05307d80f7b199e64b29ef4faacefc87697551b7ae01b96b1232f02_prof);

        
        $__internal_3ae0dd412c9a9d6fb7175f906ae6eb0419f56cf2450dc4e210c6aed980d000dc->leave($__internal_3ae0dd412c9a9d6fb7175f906ae6eb0419f56cf2450dc4e210c6aed980d000dc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 42,  217 => 41,  212 => 39,  208 => 38,  204 => 37,  200 => 36,  195 => 35,  192 => 33,  183 => 32,  172 => 26,  163 => 25,  151 => 28,  148 => 25,  145 => 24,  141 => 22,  132 => 21,  119 => 16,  115 => 15,  109 => 12,  105 => 11,  101 => 10,  96 => 9,  93 => 7,  84 => 6,  66 => 5,  53 => 61,  51 => 32,  48 => 31,  46 => 21,  42 => 19,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}3W_Awards{% endblock %}</title>
    {% block stylesheets %}

        {# css for back template #}
        <link href=\"{{ asset('bundles/back/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('bundles/back/css/animate.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('bundles/back/css/paper-dashboard.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('bundles/back/css/demo.css') }}\" rel=\"stylesheet\"/>
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href=\"{{ asset('bundles/back/css/themify-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bundles/back/style.css') }}\" rel=\"stylesheet\">

    {% endblock %}
</head>
<body>
{% block body %}

    <div class=\"wrapper\">
        {{ include('template/nav.html.twig') }} {# check this file to add link in the nav #}
        {% block wrapper %}

        {% endblock %}
    </div>

{% endblock %}

{% block javascripts %}

    {# js for back office template#}
    <script src=\"{{ asset('bundles/back/js/jquery-1.10.2.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/back/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/back/js/bootstrap-checkbox-radio.js') }}\"></script>
    <script src=\"{{ asset('bundles/back/js/chartist.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/back/js/bootstrap-notify.js') }}\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script src=\"{{ asset('bundles/back/js/paper-dashboard.js') }}\"></script>
    <script src=\"{{ asset('bundles/back/js/demo.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            demo.initChartist();

            \$.notify({
                icon: 'ti-home',
                message: \"Bienvenue sur le panel d'administration de <b>3W_Awards</b>\"

            }, {
                type: 'success',
                timer: 4000
            });

        });
    </script>

{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\3W_Awards\\app\\Resources\\views\\base.html.twig");
    }
}
