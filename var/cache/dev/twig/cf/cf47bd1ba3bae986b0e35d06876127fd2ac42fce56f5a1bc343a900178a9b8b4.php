<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_177f5e246c37b869994cfe0733f275ea138b8bcdd65a576b587264df71ba04cf extends Twig_Template
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
        $__internal_3694864e23cf046567a7bd23808e21f95a89aec4a71e56f8293a26fd243c4a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3694864e23cf046567a7bd23808e21f95a89aec4a71e56f8293a26fd243c4a62->enter($__internal_3694864e23cf046567a7bd23808e21f95a89aec4a71e56f8293a26fd243c4a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3694864e23cf046567a7bd23808e21f95a89aec4a71e56f8293a26fd243c4a62->leave($__internal_3694864e23cf046567a7bd23808e21f95a89aec4a71e56f8293a26fd243c4a62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49404d0b3f95ea1a7c6507f2ae1d89d5b5f0af32ad90e7a492794c141c6fa723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49404d0b3f95ea1a7c6507f2ae1d89d5b5f0af32ad90e7a492794c141c6fa723->enter($__internal_49404d0b3f95ea1a7c6507f2ae1d89d5b5f0af32ad90e7a492794c141c6fa723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_49404d0b3f95ea1a7c6507f2ae1d89d5b5f0af32ad90e7a492794c141c6fa723->leave($__internal_49404d0b3f95ea1a7c6507f2ae1d89d5b5f0af32ad90e7a492794c141c6fa723_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b12f173a2bd8574f188c9083bd80410d9edddc7c10564e98ef658bf70f5db6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b12f173a2bd8574f188c9083bd80410d9edddc7c10564e98ef658bf70f5db6e->enter($__internal_4b12f173a2bd8574f188c9083bd80410d9edddc7c10564e98ef658bf70f5db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b12f173a2bd8574f188c9083bd80410d9edddc7c10564e98ef658bf70f5db6e->leave($__internal_4b12f173a2bd8574f188c9083bd80410d9edddc7c10564e98ef658bf70f5db6e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27469126ed6d2b92dbaaf6f0875e959bafe06c31cc051b14676e1d722cf23f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27469126ed6d2b92dbaaf6f0875e959bafe06c31cc051b14676e1d722cf23f33->enter($__internal_27469126ed6d2b92dbaaf6f0875e959bafe06c31cc051b14676e1d722cf23f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_27469126ed6d2b92dbaaf6f0875e959bafe06c31cc051b14676e1d722cf23f33->leave($__internal_27469126ed6d2b92dbaaf6f0875e959bafe06c31cc051b14676e1d722cf23f33_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
