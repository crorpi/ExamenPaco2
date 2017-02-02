<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8774c08e6db9ee5442193440a5af5d4f5332ce1fcb6bab53c944165f6d981d59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4b1a6712ecad767cb88b902aa7c042de2c117e18db88e00ab598c11dd818c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1a6712ecad767cb88b902aa7c042de2c117e18db88e00ab598c11dd818c1d3->enter($__internal_4b1a6712ecad767cb88b902aa7c042de2c117e18db88e00ab598c11dd818c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1a6712ecad767cb88b902aa7c042de2c117e18db88e00ab598c11dd818c1d3->leave($__internal_4b1a6712ecad767cb88b902aa7c042de2c117e18db88e00ab598c11dd818c1d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_724a2409d60f937899c7308c81f14ac924dea58436f17cf06f6d7e46b1c32d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724a2409d60f937899c7308c81f14ac924dea58436f17cf06f6d7e46b1c32d3a->enter($__internal_724a2409d60f937899c7308c81f14ac924dea58436f17cf06f6d7e46b1c32d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_724a2409d60f937899c7308c81f14ac924dea58436f17cf06f6d7e46b1c32d3a->leave($__internal_724a2409d60f937899c7308c81f14ac924dea58436f17cf06f6d7e46b1c32d3a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0421785e395683ea1c01634f273242e06a16c817b461600ffc69d72216447cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0421785e395683ea1c01634f273242e06a16c817b461600ffc69d72216447cd->enter($__internal_e0421785e395683ea1c01634f273242e06a16c817b461600ffc69d72216447cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e0421785e395683ea1c01634f273242e06a16c817b461600ffc69d72216447cd->leave($__internal_e0421785e395683ea1c01634f273242e06a16c817b461600ffc69d72216447cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
