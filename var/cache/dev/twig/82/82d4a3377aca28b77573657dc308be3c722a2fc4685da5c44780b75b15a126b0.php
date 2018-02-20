<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_073af28de229b0ef1b5dc78762f949ed94eea4eba5aeed18b8714a9eddcae7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073af28de229b0ef1b5dc78762f949ed94eea4eba5aeed18b8714a9eddcae7d3->enter($__internal_073af28de229b0ef1b5dc78762f949ed94eea4eba5aeed18b8714a9eddcae7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_66e3b46c15ef8c89a88f04ab37c981c134f8e6eb9053069f3fd6cd5613e5be50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e3b46c15ef8c89a88f04ab37c981c134f8e6eb9053069f3fd6cd5613e5be50->enter($__internal_66e3b46c15ef8c89a88f04ab37c981c134f8e6eb9053069f3fd6cd5613e5be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073af28de229b0ef1b5dc78762f949ed94eea4eba5aeed18b8714a9eddcae7d3->leave($__internal_073af28de229b0ef1b5dc78762f949ed94eea4eba5aeed18b8714a9eddcae7d3_prof);

        
        $__internal_66e3b46c15ef8c89a88f04ab37c981c134f8e6eb9053069f3fd6cd5613e5be50->leave($__internal_66e3b46c15ef8c89a88f04ab37c981c134f8e6eb9053069f3fd6cd5613e5be50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce181562b44a6c3c6ebbb46db2e941f5710abaf1a64c3e801cbf46e37ea2160c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce181562b44a6c3c6ebbb46db2e941f5710abaf1a64c3e801cbf46e37ea2160c->enter($__internal_ce181562b44a6c3c6ebbb46db2e941f5710abaf1a64c3e801cbf46e37ea2160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46567dbd403846cb84c1c1ac77c2746d4ffe5f03f7277aa478624071ea927793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46567dbd403846cb84c1c1ac77c2746d4ffe5f03f7277aa478624071ea927793->enter($__internal_46567dbd403846cb84c1c1ac77c2746d4ffe5f03f7277aa478624071ea927793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46567dbd403846cb84c1c1ac77c2746d4ffe5f03f7277aa478624071ea927793->leave($__internal_46567dbd403846cb84c1c1ac77c2746d4ffe5f03f7277aa478624071ea927793_prof);

        
        $__internal_ce181562b44a6c3c6ebbb46db2e941f5710abaf1a64c3e801cbf46e37ea2160c->leave($__internal_ce181562b44a6c3c6ebbb46db2e941f5710abaf1a64c3e801cbf46e37ea2160c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ba4d734230e074f40a8299829aa435621bac4e09e44a54e2cd2413ca0ad37ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba4d734230e074f40a8299829aa435621bac4e09e44a54e2cd2413ca0ad37ca->enter($__internal_7ba4d734230e074f40a8299829aa435621bac4e09e44a54e2cd2413ca0ad37ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18ea538eb7f4130a5c3dc22646de107a7e44ba1a967ec0f541dc6705a780b332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ea538eb7f4130a5c3dc22646de107a7e44ba1a967ec0f541dc6705a780b332->enter($__internal_18ea538eb7f4130a5c3dc22646de107a7e44ba1a967ec0f541dc6705a780b332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18ea538eb7f4130a5c3dc22646de107a7e44ba1a967ec0f541dc6705a780b332->leave($__internal_18ea538eb7f4130a5c3dc22646de107a7e44ba1a967ec0f541dc6705a780b332_prof);

        
        $__internal_7ba4d734230e074f40a8299829aa435621bac4e09e44a54e2cd2413ca0ad37ca->leave($__internal_7ba4d734230e074f40a8299829aa435621bac4e09e44a54e2cd2413ca0ad37ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17618100aaaaf7c79036d680c5cee0ccc99a721308b0581b5beb9b9bb21475da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17618100aaaaf7c79036d680c5cee0ccc99a721308b0581b5beb9b9bb21475da->enter($__internal_17618100aaaaf7c79036d680c5cee0ccc99a721308b0581b5beb9b9bb21475da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5810ec0030465d354dbc09cf0c7cabd2fbf7d97b2bdf71cb65f008172d2540cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5810ec0030465d354dbc09cf0c7cabd2fbf7d97b2bdf71cb65f008172d2540cd->enter($__internal_5810ec0030465d354dbc09cf0c7cabd2fbf7d97b2bdf71cb65f008172d2540cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5810ec0030465d354dbc09cf0c7cabd2fbf7d97b2bdf71cb65f008172d2540cd->leave($__internal_5810ec0030465d354dbc09cf0c7cabd2fbf7d97b2bdf71cb65f008172d2540cd_prof);

        
        $__internal_17618100aaaaf7c79036d680c5cee0ccc99a721308b0581b5beb9b9bb21475da->leave($__internal_17618100aaaaf7c79036d680c5cee0ccc99a721308b0581b5beb9b9bb21475da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\3W_Awards\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
