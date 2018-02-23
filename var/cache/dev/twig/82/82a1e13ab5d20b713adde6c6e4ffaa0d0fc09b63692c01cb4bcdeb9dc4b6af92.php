<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_98a5ed2d3b0aa224336dd279669919cfa6b190e942d84f7f6088f6a61d6fefa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a5ed2d3b0aa224336dd279669919cfa6b190e942d84f7f6088f6a61d6fefa6->enter($__internal_98a5ed2d3b0aa224336dd279669919cfa6b190e942d84f7f6088f6a61d6fefa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bb63e43ae72839f7366bc6a3060010a274b817e7934aa80d687b54845e9eb08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb63e43ae72839f7366bc6a3060010a274b817e7934aa80d687b54845e9eb08b->enter($__internal_bb63e43ae72839f7366bc6a3060010a274b817e7934aa80d687b54845e9eb08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98a5ed2d3b0aa224336dd279669919cfa6b190e942d84f7f6088f6a61d6fefa6->leave($__internal_98a5ed2d3b0aa224336dd279669919cfa6b190e942d84f7f6088f6a61d6fefa6_prof);

        
        $__internal_bb63e43ae72839f7366bc6a3060010a274b817e7934aa80d687b54845e9eb08b->leave($__internal_bb63e43ae72839f7366bc6a3060010a274b817e7934aa80d687b54845e9eb08b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab42a31c17ae041bc0a3fac1f2b3662224caea730923554c0b3c3b1ec38c32ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab42a31c17ae041bc0a3fac1f2b3662224caea730923554c0b3c3b1ec38c32ba->enter($__internal_ab42a31c17ae041bc0a3fac1f2b3662224caea730923554c0b3c3b1ec38c32ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_158c520a94ff3a95ac1f79a6b429fde9120511c559f53af80d0903fe5fc9b253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158c520a94ff3a95ac1f79a6b429fde9120511c559f53af80d0903fe5fc9b253->enter($__internal_158c520a94ff3a95ac1f79a6b429fde9120511c559f53af80d0903fe5fc9b253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_158c520a94ff3a95ac1f79a6b429fde9120511c559f53af80d0903fe5fc9b253->leave($__internal_158c520a94ff3a95ac1f79a6b429fde9120511c559f53af80d0903fe5fc9b253_prof);

        
        $__internal_ab42a31c17ae041bc0a3fac1f2b3662224caea730923554c0b3c3b1ec38c32ba->leave($__internal_ab42a31c17ae041bc0a3fac1f2b3662224caea730923554c0b3c3b1ec38c32ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24f66f6eb695d086eb98ffabf1c0c34c7d44201dacf587e61c28abdcb2d7824d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f66f6eb695d086eb98ffabf1c0c34c7d44201dacf587e61c28abdcb2d7824d->enter($__internal_24f66f6eb695d086eb98ffabf1c0c34c7d44201dacf587e61c28abdcb2d7824d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_87610eb52d57d8e3e458cbc1fbb88e64dd8468995afbecb0f51fe1a1b7d725a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87610eb52d57d8e3e458cbc1fbb88e64dd8468995afbecb0f51fe1a1b7d725a2->enter($__internal_87610eb52d57d8e3e458cbc1fbb88e64dd8468995afbecb0f51fe1a1b7d725a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_87610eb52d57d8e3e458cbc1fbb88e64dd8468995afbecb0f51fe1a1b7d725a2->leave($__internal_87610eb52d57d8e3e458cbc1fbb88e64dd8468995afbecb0f51fe1a1b7d725a2_prof);

        
        $__internal_24f66f6eb695d086eb98ffabf1c0c34c7d44201dacf587e61c28abdcb2d7824d->leave($__internal_24f66f6eb695d086eb98ffabf1c0c34c7d44201dacf587e61c28abdcb2d7824d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31ac33d500b85a6c8d38048ade74caa0bb1c72b9fc627a11469e53142caee5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ac33d500b85a6c8d38048ade74caa0bb1c72b9fc627a11469e53142caee5c3->enter($__internal_31ac33d500b85a6c8d38048ade74caa0bb1c72b9fc627a11469e53142caee5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81defd08485e1472d9f55f0d9a7522637c2820097a3c3b8c298db8f7ed3bbfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81defd08485e1472d9f55f0d9a7522637c2820097a3c3b8c298db8f7ed3bbfab->enter($__internal_81defd08485e1472d9f55f0d9a7522637c2820097a3c3b8c298db8f7ed3bbfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_81defd08485e1472d9f55f0d9a7522637c2820097a3c3b8c298db8f7ed3bbfab->leave($__internal_81defd08485e1472d9f55f0d9a7522637c2820097a3c3b8c298db8f7ed3bbfab_prof);

        
        $__internal_31ac33d500b85a6c8d38048ade74caa0bb1c72b9fc627a11469e53142caee5c3->leave($__internal_31ac33d500b85a6c8d38048ade74caa0bb1c72b9fc627a11469e53142caee5c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\3W_Awards\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
