<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_b3b2d60535678cde59080c76540cf3cf55dcdf361f18732e7f78d68f7ba77c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6175979afedd032a759847aa77db068e4381dd6f38e4ef4cdf2274b12fb0716b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6175979afedd032a759847aa77db068e4381dd6f38e4ef4cdf2274b12fb0716b->enter($__internal_6175979afedd032a759847aa77db068e4381dd6f38e4ef4cdf2274b12fb0716b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_22e78a28c759f32802b4bd66bbac5a7a67e43c492b65f7fbe6f55395e3b33396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e78a28c759f32802b4bd66bbac5a7a67e43c492b65f7fbe6f55395e3b33396->enter($__internal_22e78a28c759f32802b4bd66bbac5a7a67e43c492b65f7fbe6f55395e3b33396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_6175979afedd032a759847aa77db068e4381dd6f38e4ef4cdf2274b12fb0716b->leave($__internal_6175979afedd032a759847aa77db068e4381dd6f38e4ef4cdf2274b12fb0716b_prof);

        
        $__internal_22e78a28c759f32802b4bd66bbac5a7a67e43c492b65f7fbe6f55395e3b33396->leave($__internal_22e78a28c759f32802b4bd66bbac5a7a67e43c492b65f7fbe6f55395e3b33396_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "C:\\wamp64\\www\\3W_Awards\\src\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
