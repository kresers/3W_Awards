<?php

/* @Back/layout.html.twig */
class __TwigTemplate_4073fe7d076609fd483c8af9b3e5cb415174fd2baf392b5b1faa4d15c9318a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Back/layout.html.twig", 1);
        $this->blocks = array(
            'wrapper' => array($this, 'block_wrapper'),
            'main_title' => array($this, 'block_main_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1aeba830ad64a3291e427e662da4e0357a77ff140b0551e64d1691c2548a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1aeba830ad64a3291e427e662da4e0357a77ff140b0551e64d1691c2548a59->enter($__internal_9d1aeba830ad64a3291e427e662da4e0357a77ff140b0551e64d1691c2548a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/layout.html.twig"));

        $__internal_ec7fde2466c52e9566268788c34e6e69d6b3a1fbeba70a6bfe1ba16ee5167801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7fde2466c52e9566268788c34e6e69d6b3a1fbeba70a6bfe1ba16ee5167801->enter($__internal_ec7fde2466c52e9566268788c34e6e69d6b3a1fbeba70a6bfe1ba16ee5167801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1aeba830ad64a3291e427e662da4e0357a77ff140b0551e64d1691c2548a59->leave($__internal_9d1aeba830ad64a3291e427e662da4e0357a77ff140b0551e64d1691c2548a59_prof);

        
        $__internal_ec7fde2466c52e9566268788c34e6e69d6b3a1fbeba70a6bfe1ba16ee5167801->leave($__internal_ec7fde2466c52e9566268788c34e6e69d6b3a1fbeba70a6bfe1ba16ee5167801_prof);

    }

    // line 3
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_3112fabcbbe9e62504b397e21337096a337ff6d374f42cde542029f8f774b97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3112fabcbbe9e62504b397e21337096a337ff6d374f42cde542029f8f774b97c->enter($__internal_3112fabcbbe9e62504b397e21337096a337ff6d374f42cde542029f8f774b97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_c74779f030eec78e7b68614a676e72b8c89aecd098be20c8ca35e1a7afb0b73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74779f030eec78e7b68614a676e72b8c89aecd098be20c8ca35e1a7afb0b73c->enter($__internal_c74779f030eec78e7b68614a676e72b8c89aecd098be20c8ca35e1a7afb0b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 4
        echo "    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar bar1\"></span>
                        <span class=\"icon-bar bar2\"></span>
                        <span class=\"icon-bar bar3\"></span>
                    </button>
                    <a class=\"navbar-brand\"
                       href=\"#\">";
        // line 15
        $this->displayBlock('main_title', $context, $blocks);
        echo "</a>
                </div>
            </div>
        </nav>
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "    </div>
";
        
        $__internal_c74779f030eec78e7b68614a676e72b8c89aecd098be20c8ca35e1a7afb0b73c->leave($__internal_c74779f030eec78e7b68614a676e72b8c89aecd098be20c8ca35e1a7afb0b73c_prof);

        
        $__internal_3112fabcbbe9e62504b397e21337096a337ff6d374f42cde542029f8f774b97c->leave($__internal_3112fabcbbe9e62504b397e21337096a337ff6d374f42cde542029f8f774b97c_prof);

    }

    // line 15
    public function block_main_title($context, array $blocks = array())
    {
        $__internal_ebcc6837f069733a667cc065ac1381f820d4644b89d3065e3a5a1d6945eeee9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcc6837f069733a667cc065ac1381f820d4644b89d3065e3a5a1d6945eeee9f->enter($__internal_ebcc6837f069733a667cc065ac1381f820d4644b89d3065e3a5a1d6945eeee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_title"));

        $__internal_06d0f390621971c6ea49d5131e75d7c849077f0ae3b7318bb184dbcc7d10f14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d0f390621971c6ea49d5131e75d7c849077f0ae3b7318bb184dbcc7d10f14c->enter($__internal_06d0f390621971c6ea49d5131e75d7c849077f0ae3b7318bb184dbcc7d10f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_title"));

        echo "Put your title page in this block when you extend your template ";
        
        $__internal_06d0f390621971c6ea49d5131e75d7c849077f0ae3b7318bb184dbcc7d10f14c->leave($__internal_06d0f390621971c6ea49d5131e75d7c849077f0ae3b7318bb184dbcc7d10f14c_prof);

        
        $__internal_ebcc6837f069733a667cc065ac1381f820d4644b89d3065e3a5a1d6945eeee9f->leave($__internal_ebcc6837f069733a667cc065ac1381f820d4644b89d3065e3a5a1d6945eeee9f_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_db7c7dca9de59365b43c325573377760f9458b2c7c0b82345711af7e74bf7323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7c7dca9de59365b43c325573377760f9458b2c7c0b82345711af7e74bf7323->enter($__internal_db7c7dca9de59365b43c325573377760f9458b2c7c0b82345711af7e74bf7323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_937f6d3308d4d9816ee69df12d9f5587d5382c41df24ad0861ce669afb2d9865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937f6d3308d4d9816ee69df12d9f5587d5382c41df24ad0861ce669afb2d9865->enter($__internal_937f6d3308d4d9816ee69df12d9f5587d5382c41df24ad0861ce669afb2d9865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "        ";
        
        $__internal_937f6d3308d4d9816ee69df12d9f5587d5382c41df24ad0861ce669afb2d9865->leave($__internal_937f6d3308d4d9816ee69df12d9f5587d5382c41df24ad0861ce669afb2d9865_prof);

        
        $__internal_db7c7dca9de59365b43c325573377760f9458b2c7c0b82345711af7e74bf7323->leave($__internal_db7c7dca9de59365b43c325573377760f9458b2c7c0b82345711af7e74bf7323_prof);

    }

    public function getTemplateName()
    {
        return "@Back/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  102 => 19,  84 => 15,  73 => 21,  71 => 19,  64 => 15,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block wrapper %}
    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar bar1\"></span>
                        <span class=\"icon-bar bar2\"></span>
                        <span class=\"icon-bar bar3\"></span>
                    </button>
                    <a class=\"navbar-brand\"
                       href=\"#\">{% block main_title %}Put your title page in this block when you extend your template {% endblock %}</a>
                </div>
            </div>
        </nav>
        {% block content %}
        {% endblock %}
    </div>
{% endblock %}", "@Back/layout.html.twig", "C:\\wamp64\\www\\3W_Awards\\src\\BackBundle\\Resources\\views\\layout.html.twig");
    }
}
