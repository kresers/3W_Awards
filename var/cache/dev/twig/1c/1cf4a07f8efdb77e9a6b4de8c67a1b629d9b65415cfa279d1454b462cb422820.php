<?php

/* template/nav.html.twig */
class __TwigTemplate_2fa21833d53e506f60fe6c8c83a98e094bae75b60a1f36edcf062aee9d20aadc extends Twig_Template
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
        $__internal_12f7403818a71b520c3390fbc7ff1b4e89f8dcb1f45a93c4302cb412efe50b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f7403818a71b520c3390fbc7ff1b4e89f8dcb1f45a93c4302cb412efe50b28->enter($__internal_12f7403818a71b520c3390fbc7ff1b4e89f8dcb1f45a93c4302cb412efe50b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/nav.html.twig"));

        $__internal_bfd816ae4979d829ce51830bce1c60979cda9774a795db772491b2513e932dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd816ae4979d829ce51830bce1c60979cda9774a795db772491b2513e932dfb->enter($__internal_bfd816ae4979d829ce51830bce1c60979cda9774a795db772491b2513e932dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template/nav.html.twig"));

        // line 1
        echo "<div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">
    <div class=\"sidebar-wrapper\">
        <div class=\"logo\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/img/logo.png"), "html", null, true);
        echo "\">
            </a>
        </div>

        <ul class=\"nav\">
            <li class=\"active\">
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_home");
        echo "\">
                    <i class=\"link-red ti-home\"></i>
                    <p class=\"link-black\">Accueil</p>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_form");
        echo "\">
                    <i class=\"link-red ti-face-smile\"></i>
                    <p class=\"link-black\">Formulaire</p>
                </a>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_12f7403818a71b520c3390fbc7ff1b4e89f8dcb1f45a93c4302cb412efe50b28->leave($__internal_12f7403818a71b520c3390fbc7ff1b4e89f8dcb1f45a93c4302cb412efe50b28_prof);

        
        $__internal_bfd816ae4979d829ce51830bce1c60979cda9774a795db772491b2513e932dfb->leave($__internal_bfd816ae4979d829ce51830bce1c60979cda9774a795db772491b2513e932dfb_prof);

    }

    public function getTemplateName()
    {
        return "template/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  40 => 11,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">
    <div class=\"sidebar-wrapper\">
        <div class=\"logo\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"{{ asset('bundles/back/img/logo.png') }}\">
            </a>
        </div>

        <ul class=\"nav\">
            <li class=\"active\">
                <a href=\"{{ path('back_home') }}\">
                    <i class=\"link-red ti-home\"></i>
                    <p class=\"link-black\">Accueil</p>
                </a>
            </li>
            <li>
                <a href=\"{{ path('back_form') }}\">
                    <i class=\"link-red ti-face-smile\"></i>
                    <p class=\"link-black\">Formulaire</p>
                </a>
            </li>
        </ul>
    </div>
</div>
", "template/nav.html.twig", "C:\\wamp64\\www\\3W_Awards\\app\\Resources\\views\\template\\nav.html.twig");
    }
}
