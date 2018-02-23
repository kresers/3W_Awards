<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97959c265453df696e56fed3bb04a906587dc854f54b5a0b8f639ca93867199d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97959c265453df696e56fed3bb04a906587dc854f54b5a0b8f639ca93867199d->enter($__internal_97959c265453df696e56fed3bb04a906587dc854f54b5a0b8f639ca93867199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_aa3d6b4ace492062fdcd4c63499e76df7f5e58c0565e9be4203ee12271639c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3d6b4ace492062fdcd4c63499e76df7f5e58c0565e9be4203ee12271639c4c->enter($__internal_aa3d6b4ace492062fdcd4c63499e76df7f5e58c0565e9be4203ee12271639c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_97959c265453df696e56fed3bb04a906587dc854f54b5a0b8f639ca93867199d->leave($__internal_97959c265453df696e56fed3bb04a906587dc854f54b5a0b8f639ca93867199d_prof);

        
        $__internal_aa3d6b4ace492062fdcd4c63499e76df7f5e58c0565e9be4203ee12271639c4c->leave($__internal_aa3d6b4ace492062fdcd4c63499e76df7f5e58c0565e9be4203ee12271639c4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7215dd655daad0880f818d28b4164d9aff6cf803897fc4693633858b09c3304e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7215dd655daad0880f818d28b4164d9aff6cf803897fc4693633858b09c3304e->enter($__internal_7215dd655daad0880f818d28b4164d9aff6cf803897fc4693633858b09c3304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8281b240e8e8c21001237bc2aae2e5cb3f8b7d046c0a0d39251f4d55a0928ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8281b240e8e8c21001237bc2aae2e5cb3f8b7d046c0a0d39251f4d55a0928ff5->enter($__internal_8281b240e8e8c21001237bc2aae2e5cb3f8b7d046c0a0d39251f4d55a0928ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8281b240e8e8c21001237bc2aae2e5cb3f8b7d046c0a0d39251f4d55a0928ff5->leave($__internal_8281b240e8e8c21001237bc2aae2e5cb3f8b7d046c0a0d39251f4d55a0928ff5_prof);

        
        $__internal_7215dd655daad0880f818d28b4164d9aff6cf803897fc4693633858b09c3304e->leave($__internal_7215dd655daad0880f818d28b4164d9aff6cf803897fc4693633858b09c3304e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad04c2649186d58895ff65d2a0ae7af5ef77d3a59043d9e091bdf7d910ab9adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad04c2649186d58895ff65d2a0ae7af5ef77d3a59043d9e091bdf7d910ab9adb->enter($__internal_ad04c2649186d58895ff65d2a0ae7af5ef77d3a59043d9e091bdf7d910ab9adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d47b0b9281e77cb075ad8ae36b270cf7bd52512bf875ba88967601615dafc25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47b0b9281e77cb075ad8ae36b270cf7bd52512bf875ba88967601615dafc25c->enter($__internal_d47b0b9281e77cb075ad8ae36b270cf7bd52512bf875ba88967601615dafc25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d47b0b9281e77cb075ad8ae36b270cf7bd52512bf875ba88967601615dafc25c->leave($__internal_d47b0b9281e77cb075ad8ae36b270cf7bd52512bf875ba88967601615dafc25c_prof);

        
        $__internal_ad04c2649186d58895ff65d2a0ae7af5ef77d3a59043d9e091bdf7d910ab9adb->leave($__internal_ad04c2649186d58895ff65d2a0ae7af5ef77d3a59043d9e091bdf7d910ab9adb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffba8d71a63f401409909bd40ae4eb79fa23864e8983090c3b86d9791a3ea7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffba8d71a63f401409909bd40ae4eb79fa23864e8983090c3b86d9791a3ea7d->enter($__internal_8ffba8d71a63f401409909bd40ae4eb79fa23864e8983090c3b86d9791a3ea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ba2997327b3f8ca0ec106907ccda5473adc937bac0883152068c8fe8a7268ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba2997327b3f8ca0ec106907ccda5473adc937bac0883152068c8fe8a7268ca->enter($__internal_3ba2997327b3f8ca0ec106907ccda5473adc937bac0883152068c8fe8a7268ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ba2997327b3f8ca0ec106907ccda5473adc937bac0883152068c8fe8a7268ca->leave($__internal_3ba2997327b3f8ca0ec106907ccda5473adc937bac0883152068c8fe8a7268ca_prof);

        
        $__internal_8ffba8d71a63f401409909bd40ae4eb79fa23864e8983090c3b86d9791a3ea7d->leave($__internal_8ffba8d71a63f401409909bd40ae4eb79fa23864e8983090c3b86d9791a3ea7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\3W_Awards\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
