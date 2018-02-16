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
        $__internal_1e9e6a4d8348f438de32fff829f6fc12f3a5345646fa42847ecb51eb2d4d5419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9e6a4d8348f438de32fff829f6fc12f3a5345646fa42847ecb51eb2d4d5419->enter($__internal_1e9e6a4d8348f438de32fff829f6fc12f3a5345646fa42847ecb51eb2d4d5419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cdbf182646f8d2e720b3f0070632cd3ffb7ebdbc2aea4d64a3d2c501d686cd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbf182646f8d2e720b3f0070632cd3ffb7ebdbc2aea4d64a3d2c501d686cd9e->enter($__internal_cdbf182646f8d2e720b3f0070632cd3ffb7ebdbc2aea4d64a3d2c501d686cd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9e6a4d8348f438de32fff829f6fc12f3a5345646fa42847ecb51eb2d4d5419->leave($__internal_1e9e6a4d8348f438de32fff829f6fc12f3a5345646fa42847ecb51eb2d4d5419_prof);

        
        $__internal_cdbf182646f8d2e720b3f0070632cd3ffb7ebdbc2aea4d64a3d2c501d686cd9e->leave($__internal_cdbf182646f8d2e720b3f0070632cd3ffb7ebdbc2aea4d64a3d2c501d686cd9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b1f8b1cd89e56eb552ff9fd18ced25bc4b9362b45d5042bfd6c834482fd2b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1f8b1cd89e56eb552ff9fd18ced25bc4b9362b45d5042bfd6c834482fd2b6e->enter($__internal_7b1f8b1cd89e56eb552ff9fd18ced25bc4b9362b45d5042bfd6c834482fd2b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7247b80ed7dc0dd8443f10f865b63b00102e5ce649eee14571d13f02b9f3c62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7247b80ed7dc0dd8443f10f865b63b00102e5ce649eee14571d13f02b9f3c62c->enter($__internal_7247b80ed7dc0dd8443f10f865b63b00102e5ce649eee14571d13f02b9f3c62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7247b80ed7dc0dd8443f10f865b63b00102e5ce649eee14571d13f02b9f3c62c->leave($__internal_7247b80ed7dc0dd8443f10f865b63b00102e5ce649eee14571d13f02b9f3c62c_prof);

        
        $__internal_7b1f8b1cd89e56eb552ff9fd18ced25bc4b9362b45d5042bfd6c834482fd2b6e->leave($__internal_7b1f8b1cd89e56eb552ff9fd18ced25bc4b9362b45d5042bfd6c834482fd2b6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8233a67181e844e44475fbb82356987f3675eeb659bc355b014853afe4ec6714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8233a67181e844e44475fbb82356987f3675eeb659bc355b014853afe4ec6714->enter($__internal_8233a67181e844e44475fbb82356987f3675eeb659bc355b014853afe4ec6714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a7044aff9d62d1bc70404605f9de9040b789ad0b9d66e30329766617d5062f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7044aff9d62d1bc70404605f9de9040b789ad0b9d66e30329766617d5062f00->enter($__internal_a7044aff9d62d1bc70404605f9de9040b789ad0b9d66e30329766617d5062f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7044aff9d62d1bc70404605f9de9040b789ad0b9d66e30329766617d5062f00->leave($__internal_a7044aff9d62d1bc70404605f9de9040b789ad0b9d66e30329766617d5062f00_prof);

        
        $__internal_8233a67181e844e44475fbb82356987f3675eeb659bc355b014853afe4ec6714->leave($__internal_8233a67181e844e44475fbb82356987f3675eeb659bc355b014853afe4ec6714_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_886cd9e870a63d2d934433bb20e8889778c61478d12bbebc23915c0e9fe54575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886cd9e870a63d2d934433bb20e8889778c61478d12bbebc23915c0e9fe54575->enter($__internal_886cd9e870a63d2d934433bb20e8889778c61478d12bbebc23915c0e9fe54575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_376b7d79d9e7b26af9ff52b93952700699ce43b78e9e9019fce822969354911d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376b7d79d9e7b26af9ff52b93952700699ce43b78e9e9019fce822969354911d->enter($__internal_376b7d79d9e7b26af9ff52b93952700699ce43b78e9e9019fce822969354911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_376b7d79d9e7b26af9ff52b93952700699ce43b78e9e9019fce822969354911d->leave($__internal_376b7d79d9e7b26af9ff52b93952700699ce43b78e9e9019fce822969354911d_prof);

        
        $__internal_886cd9e870a63d2d934433bb20e8889778c61478d12bbebc23915c0e9fe54575->leave($__internal_886cd9e870a63d2d934433bb20e8889778c61478d12bbebc23915c0e9fe54575_prof);

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
", "@WebProfiler/Collector/router.html.twig", "D:\\workspace\\3W_Awards\\back\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
