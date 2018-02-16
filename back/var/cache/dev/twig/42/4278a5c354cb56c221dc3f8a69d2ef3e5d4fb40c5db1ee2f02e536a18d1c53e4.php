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
        $__internal_2c4dbad3225659661e84c0d88a07e286cfb649e1949918c1dc690772ea180026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4dbad3225659661e84c0d88a07e286cfb649e1949918c1dc690772ea180026->enter($__internal_2c4dbad3225659661e84c0d88a07e286cfb649e1949918c1dc690772ea180026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_75f5317309ae1da7b527d231e848cc3ee522c221e8670a25752acdb912fd5f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f5317309ae1da7b527d231e848cc3ee522c221e8670a25752acdb912fd5f02->enter($__internal_75f5317309ae1da7b527d231e848cc3ee522c221e8670a25752acdb912fd5f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2c4dbad3225659661e84c0d88a07e286cfb649e1949918c1dc690772ea180026->leave($__internal_2c4dbad3225659661e84c0d88a07e286cfb649e1949918c1dc690772ea180026_prof);

        
        $__internal_75f5317309ae1da7b527d231e848cc3ee522c221e8670a25752acdb912fd5f02->leave($__internal_75f5317309ae1da7b527d231e848cc3ee522c221e8670a25752acdb912fd5f02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61ba42304049ae8a91a4a40ead9227818191b59c400504f90d91475d87b8a777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ba42304049ae8a91a4a40ead9227818191b59c400504f90d91475d87b8a777->enter($__internal_61ba42304049ae8a91a4a40ead9227818191b59c400504f90d91475d87b8a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6aaeaee53b0475aec0821a16eceacf192dca5792bb21aa233cd44ec74e1e16f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaeaee53b0475aec0821a16eceacf192dca5792bb21aa233cd44ec74e1e16f8->enter($__internal_6aaeaee53b0475aec0821a16eceacf192dca5792bb21aa233cd44ec74e1e16f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6aaeaee53b0475aec0821a16eceacf192dca5792bb21aa233cd44ec74e1e16f8->leave($__internal_6aaeaee53b0475aec0821a16eceacf192dca5792bb21aa233cd44ec74e1e16f8_prof);

        
        $__internal_61ba42304049ae8a91a4a40ead9227818191b59c400504f90d91475d87b8a777->leave($__internal_61ba42304049ae8a91a4a40ead9227818191b59c400504f90d91475d87b8a777_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_17edf93f77832c0ab22879e5d62592fd508704f00f933c21dd2d34a0629c11c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17edf93f77832c0ab22879e5d62592fd508704f00f933c21dd2d34a0629c11c3->enter($__internal_17edf93f77832c0ab22879e5d62592fd508704f00f933c21dd2d34a0629c11c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2b2e7f1c15304844c1a84b97b9c383df05cea047e5e0c754e39853943dacb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b2e7f1c15304844c1a84b97b9c383df05cea047e5e0c754e39853943dacb86->enter($__internal_a2b2e7f1c15304844c1a84b97b9c383df05cea047e5e0c754e39853943dacb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a2b2e7f1c15304844c1a84b97b9c383df05cea047e5e0c754e39853943dacb86->leave($__internal_a2b2e7f1c15304844c1a84b97b9c383df05cea047e5e0c754e39853943dacb86_prof);

        
        $__internal_17edf93f77832c0ab22879e5d62592fd508704f00f933c21dd2d34a0629c11c3->leave($__internal_17edf93f77832c0ab22879e5d62592fd508704f00f933c21dd2d34a0629c11c3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0b3839b63df7abbcc931a7423fe7cc37577b4350fc760279a4b58d28f6a291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0b3839b63df7abbcc931a7423fe7cc37577b4350fc760279a4b58d28f6a291->enter($__internal_9e0b3839b63df7abbcc931a7423fe7cc37577b4350fc760279a4b58d28f6a291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c74577701510483607c315061498f5338ebba0f4f25e6e4e59665af7f1fdeaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74577701510483607c315061498f5338ebba0f4f25e6e4e59665af7f1fdeaf9->enter($__internal_c74577701510483607c315061498f5338ebba0f4f25e6e4e59665af7f1fdeaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c74577701510483607c315061498f5338ebba0f4f25e6e4e59665af7f1fdeaf9->leave($__internal_c74577701510483607c315061498f5338ebba0f4f25e6e4e59665af7f1fdeaf9_prof);

        
        $__internal_9e0b3839b63df7abbcc931a7423fe7cc37577b4350fc760279a4b58d28f6a291->leave($__internal_9e0b3839b63df7abbcc931a7423fe7cc37577b4350fc760279a4b58d28f6a291_prof);

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
", "@Twig/layout.html.twig", "D:\\workspace\\3W_Awards\\back\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
