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
        $__internal_d2487b23cc100793b356307cb71326f4dd4a089b068d6bc430d78af162e47358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2487b23cc100793b356307cb71326f4dd4a089b068d6bc430d78af162e47358->enter($__internal_d2487b23cc100793b356307cb71326f4dd4a089b068d6bc430d78af162e47358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8ad350293f819140d20e7013ff6eae651682033156b70fb18a56aebc1b023102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad350293f819140d20e7013ff6eae651682033156b70fb18a56aebc1b023102->enter($__internal_8ad350293f819140d20e7013ff6eae651682033156b70fb18a56aebc1b023102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2487b23cc100793b356307cb71326f4dd4a089b068d6bc430d78af162e47358->leave($__internal_d2487b23cc100793b356307cb71326f4dd4a089b068d6bc430d78af162e47358_prof);

        
        $__internal_8ad350293f819140d20e7013ff6eae651682033156b70fb18a56aebc1b023102->leave($__internal_8ad350293f819140d20e7013ff6eae651682033156b70fb18a56aebc1b023102_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f32b89c254a49ba6bcfd976e0c43c850dcd25f0dd24b9f07a1e09e8d4c601736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32b89c254a49ba6bcfd976e0c43c850dcd25f0dd24b9f07a1e09e8d4c601736->enter($__internal_f32b89c254a49ba6bcfd976e0c43c850dcd25f0dd24b9f07a1e09e8d4c601736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_500e81bd24301aa6d66f5f5d99a8f1216d2925a05e6fdded72f4e9fbf53a8068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500e81bd24301aa6d66f5f5d99a8f1216d2925a05e6fdded72f4e9fbf53a8068->enter($__internal_500e81bd24301aa6d66f5f5d99a8f1216d2925a05e6fdded72f4e9fbf53a8068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_500e81bd24301aa6d66f5f5d99a8f1216d2925a05e6fdded72f4e9fbf53a8068->leave($__internal_500e81bd24301aa6d66f5f5d99a8f1216d2925a05e6fdded72f4e9fbf53a8068_prof);

        
        $__internal_f32b89c254a49ba6bcfd976e0c43c850dcd25f0dd24b9f07a1e09e8d4c601736->leave($__internal_f32b89c254a49ba6bcfd976e0c43c850dcd25f0dd24b9f07a1e09e8d4c601736_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b15f056967a818131b6551714ed714f098b8ff2b4afdb45d71b0d67af136e83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15f056967a818131b6551714ed714f098b8ff2b4afdb45d71b0d67af136e83e->enter($__internal_b15f056967a818131b6551714ed714f098b8ff2b4afdb45d71b0d67af136e83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3511ae5842d615903b1a3f3f70caf8f0fbda336aaab18abb1a8240bd56f4af84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3511ae5842d615903b1a3f3f70caf8f0fbda336aaab18abb1a8240bd56f4af84->enter($__internal_3511ae5842d615903b1a3f3f70caf8f0fbda336aaab18abb1a8240bd56f4af84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3511ae5842d615903b1a3f3f70caf8f0fbda336aaab18abb1a8240bd56f4af84->leave($__internal_3511ae5842d615903b1a3f3f70caf8f0fbda336aaab18abb1a8240bd56f4af84_prof);

        
        $__internal_b15f056967a818131b6551714ed714f098b8ff2b4afdb45d71b0d67af136e83e->leave($__internal_b15f056967a818131b6551714ed714f098b8ff2b4afdb45d71b0d67af136e83e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e71c39eaf41910500b988282be9a39bb41dc54ec23bd4a996b0034a1dfaeceb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71c39eaf41910500b988282be9a39bb41dc54ec23bd4a996b0034a1dfaeceb2->enter($__internal_e71c39eaf41910500b988282be9a39bb41dc54ec23bd4a996b0034a1dfaeceb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_186e0a9aa3aa98b60705153968280f49b2e9bb54bb21020e455c413a86d0c78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186e0a9aa3aa98b60705153968280f49b2e9bb54bb21020e455c413a86d0c78c->enter($__internal_186e0a9aa3aa98b60705153968280f49b2e9bb54bb21020e455c413a86d0c78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_186e0a9aa3aa98b60705153968280f49b2e9bb54bb21020e455c413a86d0c78c->leave($__internal_186e0a9aa3aa98b60705153968280f49b2e9bb54bb21020e455c413a86d0c78c_prof);

        
        $__internal_e71c39eaf41910500b988282be9a39bb41dc54ec23bd4a996b0034a1dfaeceb2->leave($__internal_e71c39eaf41910500b988282be9a39bb41dc54ec23bd4a996b0034a1dfaeceb2_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\3W_Awards\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
