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
        $__internal_fe95e27036a24f3f8a8c0e72712f02472f5d2a304bcee5a23748213e8431d687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe95e27036a24f3f8a8c0e72712f02472f5d2a304bcee5a23748213e8431d687->enter($__internal_fe95e27036a24f3f8a8c0e72712f02472f5d2a304bcee5a23748213e8431d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e9be036369d05568e8604543973f7054dd36358e2f8e1814761326257cb4e0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9be036369d05568e8604543973f7054dd36358e2f8e1814761326257cb4e0ca->enter($__internal_e9be036369d05568e8604543973f7054dd36358e2f8e1814761326257cb4e0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe95e27036a24f3f8a8c0e72712f02472f5d2a304bcee5a23748213e8431d687->leave($__internal_fe95e27036a24f3f8a8c0e72712f02472f5d2a304bcee5a23748213e8431d687_prof);

        
        $__internal_e9be036369d05568e8604543973f7054dd36358e2f8e1814761326257cb4e0ca->leave($__internal_e9be036369d05568e8604543973f7054dd36358e2f8e1814761326257cb4e0ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_058b1c7c8a75dd5472352e7f4b1dc762243637f2e093243ed6461a755e60c7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058b1c7c8a75dd5472352e7f4b1dc762243637f2e093243ed6461a755e60c7d8->enter($__internal_058b1c7c8a75dd5472352e7f4b1dc762243637f2e093243ed6461a755e60c7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e4f8fbc7233755aaae93f336e9cab6c48ab1e852c5431b14d48f9ac457b2a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4f8fbc7233755aaae93f336e9cab6c48ab1e852c5431b14d48f9ac457b2a6c->enter($__internal_8e4f8fbc7233755aaae93f336e9cab6c48ab1e852c5431b14d48f9ac457b2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8e4f8fbc7233755aaae93f336e9cab6c48ab1e852c5431b14d48f9ac457b2a6c->leave($__internal_8e4f8fbc7233755aaae93f336e9cab6c48ab1e852c5431b14d48f9ac457b2a6c_prof);

        
        $__internal_058b1c7c8a75dd5472352e7f4b1dc762243637f2e093243ed6461a755e60c7d8->leave($__internal_058b1c7c8a75dd5472352e7f4b1dc762243637f2e093243ed6461a755e60c7d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_358b3e8abf55ce34fd10e548cf4f46a09ca79a7296f7b0626e2b43a41afbeaca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358b3e8abf55ce34fd10e548cf4f46a09ca79a7296f7b0626e2b43a41afbeaca->enter($__internal_358b3e8abf55ce34fd10e548cf4f46a09ca79a7296f7b0626e2b43a41afbeaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_70e2bddf6972abe5e4ce911ab479f91fa77584844e42516ac959375f08f9562b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e2bddf6972abe5e4ce911ab479f91fa77584844e42516ac959375f08f9562b->enter($__internal_70e2bddf6972abe5e4ce911ab479f91fa77584844e42516ac959375f08f9562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_70e2bddf6972abe5e4ce911ab479f91fa77584844e42516ac959375f08f9562b->leave($__internal_70e2bddf6972abe5e4ce911ab479f91fa77584844e42516ac959375f08f9562b_prof);

        
        $__internal_358b3e8abf55ce34fd10e548cf4f46a09ca79a7296f7b0626e2b43a41afbeaca->leave($__internal_358b3e8abf55ce34fd10e548cf4f46a09ca79a7296f7b0626e2b43a41afbeaca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f6c2724a794e982a768bcbe6f03a10ed7412fd9574d2db5a4c0dda3eca5bdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6c2724a794e982a768bcbe6f03a10ed7412fd9574d2db5a4c0dda3eca5bdaa->enter($__internal_0f6c2724a794e982a768bcbe6f03a10ed7412fd9574d2db5a4c0dda3eca5bdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9cb97a6b3df0ccde87c3c9d66cdf38a58b4b3cd44d991fb565fa760b34b9c351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb97a6b3df0ccde87c3c9d66cdf38a58b4b3cd44d991fb565fa760b34b9c351->enter($__internal_9cb97a6b3df0ccde87c3c9d66cdf38a58b4b3cd44d991fb565fa760b34b9c351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9cb97a6b3df0ccde87c3c9d66cdf38a58b4b3cd44d991fb565fa760b34b9c351->leave($__internal_9cb97a6b3df0ccde87c3c9d66cdf38a58b4b3cd44d991fb565fa760b34b9c351_prof);

        
        $__internal_0f6c2724a794e982a768bcbe6f03a10ed7412fd9574d2db5a4c0dda3eca5bdaa->leave($__internal_0f6c2724a794e982a768bcbe6f03a10ed7412fd9574d2db5a4c0dda3eca5bdaa_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\workspace\\3W_Awards\\back\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
