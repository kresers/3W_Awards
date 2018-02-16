<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df9d12d9d7fc82b6d7b0fd4c35ffe03578cf22ef2276806de437e09738f69416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9d12d9d7fc82b6d7b0fd4c35ffe03578cf22ef2276806de437e09738f69416->enter($__internal_df9d12d9d7fc82b6d7b0fd4c35ffe03578cf22ef2276806de437e09738f69416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a1d2b2e5e2cacc324eb155db9be907e101684045d62ae6b00021cbf326f5cd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d2b2e5e2cacc324eb155db9be907e101684045d62ae6b00021cbf326f5cd47->enter($__internal_a1d2b2e5e2cacc324eb155db9be907e101684045d62ae6b00021cbf326f5cd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9d12d9d7fc82b6d7b0fd4c35ffe03578cf22ef2276806de437e09738f69416->leave($__internal_df9d12d9d7fc82b6d7b0fd4c35ffe03578cf22ef2276806de437e09738f69416_prof);

        
        $__internal_a1d2b2e5e2cacc324eb155db9be907e101684045d62ae6b00021cbf326f5cd47->leave($__internal_a1d2b2e5e2cacc324eb155db9be907e101684045d62ae6b00021cbf326f5cd47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0eaf306350f656e2a060d593f75eb5a9b6d035de134141e1353a81e4ae84d3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eaf306350f656e2a060d593f75eb5a9b6d035de134141e1353a81e4ae84d3ce->enter($__internal_0eaf306350f656e2a060d593f75eb5a9b6d035de134141e1353a81e4ae84d3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26b3edc0448d0b15bc2d51335f7c17abe4c7c11c9f71f8693dc32e62508245da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b3edc0448d0b15bc2d51335f7c17abe4c7c11c9f71f8693dc32e62508245da->enter($__internal_26b3edc0448d0b15bc2d51335f7c17abe4c7c11c9f71f8693dc32e62508245da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_26b3edc0448d0b15bc2d51335f7c17abe4c7c11c9f71f8693dc32e62508245da->leave($__internal_26b3edc0448d0b15bc2d51335f7c17abe4c7c11c9f71f8693dc32e62508245da_prof);

        
        $__internal_0eaf306350f656e2a060d593f75eb5a9b6d035de134141e1353a81e4ae84d3ce->leave($__internal_0eaf306350f656e2a060d593f75eb5a9b6d035de134141e1353a81e4ae84d3ce_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_808ecaf36f53dbc774fe37fc74b8b81a3da2a1d12fb636c99403cc1bcf9333f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808ecaf36f53dbc774fe37fc74b8b81a3da2a1d12fb636c99403cc1bcf9333f9->enter($__internal_808ecaf36f53dbc774fe37fc74b8b81a3da2a1d12fb636c99403cc1bcf9333f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e984ea02c685d1c8eb046b32f1f9b959b595ae161966e87c047e87f8355a222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e984ea02c685d1c8eb046b32f1f9b959b595ae161966e87c047e87f8355a222->enter($__internal_1e984ea02c685d1c8eb046b32f1f9b959b595ae161966e87c047e87f8355a222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e984ea02c685d1c8eb046b32f1f9b959b595ae161966e87c047e87f8355a222->leave($__internal_1e984ea02c685d1c8eb046b32f1f9b959b595ae161966e87c047e87f8355a222_prof);

        
        $__internal_808ecaf36f53dbc774fe37fc74b8b81a3da2a1d12fb636c99403cc1bcf9333f9->leave($__internal_808ecaf36f53dbc774fe37fc74b8b81a3da2a1d12fb636c99403cc1bcf9333f9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9902ed8fead029f635f37e504f9c563c067fbcb985eed30f7e3dbddf0649b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9902ed8fead029f635f37e504f9c563c067fbcb985eed30f7e3dbddf0649b8->enter($__internal_bb9902ed8fead029f635f37e504f9c563c067fbcb985eed30f7e3dbddf0649b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd30b764ca8e92b1301ebe35a238d2aeb14c834de1de49e49def13828fe1adc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd30b764ca8e92b1301ebe35a238d2aeb14c834de1de49e49def13828fe1adc6->enter($__internal_fd30b764ca8e92b1301ebe35a238d2aeb14c834de1de49e49def13828fe1adc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fd30b764ca8e92b1301ebe35a238d2aeb14c834de1de49e49def13828fe1adc6->leave($__internal_fd30b764ca8e92b1301ebe35a238d2aeb14c834de1de49e49def13828fe1adc6_prof);

        
        $__internal_bb9902ed8fead029f635f37e504f9c563c067fbcb985eed30f7e3dbddf0649b8->leave($__internal_bb9902ed8fead029f635f37e504f9c563c067fbcb985eed30f7e3dbddf0649b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\workspace\\3W_Awards\\back\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
