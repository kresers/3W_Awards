<?php

/* @Back/Home/index.html.twig */
class __TwigTemplate_61a2f88040904a43111d2f71663459d7450d9415e2a1687f07a1d09b105c64c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Back/layout.html.twig", "@Back/Home/index.html.twig", 1);
        $this->blocks = array(
            'main_title' => array($this, 'block_main_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Back/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99993e084da06d2642b4b4600f21ff30bdc57de54d5c54a84d426c4f73f10f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99993e084da06d2642b4b4600f21ff30bdc57de54d5c54a84d426c4f73f10f3c->enter($__internal_99993e084da06d2642b4b4600f21ff30bdc57de54d5c54a84d426c4f73f10f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/Home/index.html.twig"));

        $__internal_103924d389f21145f4a56b1494dce4b8f5e2d00940e37afda8c40e989f126cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103924d389f21145f4a56b1494dce4b8f5e2d00940e37afda8c40e989f126cfd->enter($__internal_103924d389f21145f4a56b1494dce4b8f5e2d00940e37afda8c40e989f126cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Back/Home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99993e084da06d2642b4b4600f21ff30bdc57de54d5c54a84d426c4f73f10f3c->leave($__internal_99993e084da06d2642b4b4600f21ff30bdc57de54d5c54a84d426c4f73f10f3c_prof);

        
        $__internal_103924d389f21145f4a56b1494dce4b8f5e2d00940e37afda8c40e989f126cfd->leave($__internal_103924d389f21145f4a56b1494dce4b8f5e2d00940e37afda8c40e989f126cfd_prof);

    }

    // line 2
    public function block_main_title($context, array $blocks = array())
    {
        $__internal_aea873d4d04dbc0b2b3a31d87cbcd4408619bbfda89e00ba44a44ac339c8ad49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea873d4d04dbc0b2b3a31d87cbcd4408619bbfda89e00ba44a44ac339c8ad49->enter($__internal_aea873d4d04dbc0b2b3a31d87cbcd4408619bbfda89e00ba44a44ac339c8ad49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_title"));

        $__internal_23e3012d47d16c8c0c9731fb81eea630677d9c20a259efb3ffca86b5aa8cfd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e3012d47d16c8c0c9731fb81eea630677d9c20a259efb3ffca86b5aa8cfd50->enter($__internal_23e3012d47d16c8c0c9731fb81eea630677d9c20a259efb3ffca86b5aa8cfd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_title"));

        // line 3
        echo "    Accueil
";
        
        $__internal_23e3012d47d16c8c0c9731fb81eea630677d9c20a259efb3ffca86b5aa8cfd50->leave($__internal_23e3012d47d16c8c0c9731fb81eea630677d9c20a259efb3ffca86b5aa8cfd50_prof);

        
        $__internal_aea873d4d04dbc0b2b3a31d87cbcd4408619bbfda89e00ba44a44ac339c8ad49->leave($__internal_aea873d4d04dbc0b2b3a31d87cbcd4408619bbfda89e00ba44a44ac339c8ad49_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_48796196b0da31f008cb512cc6a36acccc76a23d4bd943a1084c4d3f438fdbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48796196b0da31f008cb512cc6a36acccc76a23d4bd943a1084c4d3f438fdbeb->enter($__internal_48796196b0da31f008cb512cc6a36acccc76a23d4bd943a1084c4d3f438fdbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c404ef2ac639d41499758c9159ae3b1009ae23454e5ccc6faee743b40c7aaf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c404ef2ac639d41499758c9159ae3b1009ae23454e5ccc6faee743b40c7aaf35->enter($__internal_c404ef2ac639d41499758c9159ae3b1009ae23454e5ccc6faee743b40c7aaf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-warning text-center\">
                                        <i class=\"ti-server\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Capacity</p>
                                        105GB
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-reload\"></i> Updated now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-success text-center\">
                                        <i class=\"ti-wallet\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Revenue</p>
                                        \$1,345
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-calendar\"></i> Last day
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-danger text-center\">
                                        <i class=\"ti-pulse\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Errors</p>
                                        23
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-timer\"></i> In the last hour
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-info text-center\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Followers</p>
                                        +45
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-reload\"></i> Updated now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title\">Users Behavior</h4>
                            <p class=\"category\">24 Hours performance</p>
                        </div>
                        <div class=\"content\">
                            <div id=\"chartHours\" class=\"ct-chart\"></div>
                            <div class=\"footer\">
                                <div class=\"chart-legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Click
                                    <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"ti-reload\"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title\">Email Statistics</h4>
                            <p class=\"category\">Last Campaign Performance</p>
                        </div>
                        <div class=\"content\">
                            <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                            <div class=\"footer\">
                                <div class=\"chart-legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Bounce
                                    <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"ti-timer\"></i> Campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card \">
                        <div class=\"header\">
                            <h4 class=\"title\">2015 Sales</h4>
                            <p class=\"category\">All products including Taxes</p>
                        </div>
                        <div class=\"content\">
                            <div id=\"chartActivity\" class=\"ct-chart\"></div>

                            <div class=\"footer\">
                                <div class=\"chart-legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                    <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"ti-check\"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_c404ef2ac639d41499758c9159ae3b1009ae23454e5ccc6faee743b40c7aaf35->leave($__internal_c404ef2ac639d41499758c9159ae3b1009ae23454e5ccc6faee743b40c7aaf35_prof);

        
        $__internal_48796196b0da31f008cb512cc6a36acccc76a23d4bd943a1084c4d3f438fdbeb->leave($__internal_48796196b0da31f008cb512cc6a36acccc76a23d4bd943a1084c4d3f438fdbeb_prof);

    }

    public function getTemplateName()
    {
        return "@Back/Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Back/layout.html.twig' %}
{% block main_title %}
    Accueil
{% endblock %}
{% block content %}
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-warning text-center\">
                                        <i class=\"ti-server\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Capacity</p>
                                        105GB
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-reload\"></i> Updated now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-success text-center\">
                                        <i class=\"ti-wallet\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Revenue</p>
                                        \$1,345
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-calendar\"></i> Last day
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-danger text-center\">
                                        <i class=\"ti-pulse\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Errors</p>
                                        23
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-timer\"></i> In the last hour
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"content\">
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <div class=\"icon-big icon-info text-center\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </div>
                                </div>
                                <div class=\"col-xs-7\">
                                    <div class=\"numbers\">
                                        <p>Followers</p>
                                        +45
                                    </div>
                                </div>
                            </div>
                            <div class=\"footer\">
                                <hr/>
                                <div class=\"stats\">
                                    <i class=\"ti-reload\"></i> Updated now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title\">Users Behavior</h4>
                            <p class=\"category\">24 Hours performance</p>
                        </div>
                        <div class=\"content\">
                            <div id=\"chartHours\" class=\"ct-chart\"></div>
                            <div class=\"footer\">
                                <div class=\"chart-legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Click
                                    <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"ti-reload\"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h4 class=\"title\">Email Statistics</h4>
                            <p class=\"category\">Last Campaign Performance</p>
                        </div>
                        <div class=\"content\">
                            <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                            <div class=\"footer\">
                                <div class=\"chart-legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Open
                                    <i class=\"fa fa-circle text-danger\"></i> Bounce
                                    <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"ti-timer\"></i> Campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"card \">
                        <div class=\"header\">
                            <h4 class=\"title\">2015 Sales</h4>
                            <p class=\"category\">All products including Taxes</p>
                        </div>
                        <div class=\"content\">
                            <div id=\"chartActivity\" class=\"ct-chart\"></div>

                            <div class=\"footer\">
                                <div class=\"chart-legend\">
                                    <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                    <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                                </div>
                                <hr>
                                <div class=\"stats\">
                                    <i class=\"ti-check\"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "@Back/Home/index.html.twig", "C:\\wamp64\\www\\3W_Awards\\src\\BackBundle\\Resources\\views\\Home\\index.html.twig");
    }
}
