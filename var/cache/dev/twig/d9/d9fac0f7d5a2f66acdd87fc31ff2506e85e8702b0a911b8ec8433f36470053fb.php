<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ac530fd336f30a45bda0b3d6481a0730449c1de06b323efe838b3b114dca36a1 extends Twig_Template
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
        $__internal_17a1850f26c8ff5e87e7c775c34d99e0de12c281e39d35d162c5e7a2084549ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a1850f26c8ff5e87e7c775c34d99e0de12c281e39d35d162c5e7a2084549ab->enter($__internal_17a1850f26c8ff5e87e7c775c34d99e0de12c281e39d35d162c5e7a2084549ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a1850f26c8ff5e87e7c775c34d99e0de12c281e39d35d162c5e7a2084549ab->leave($__internal_17a1850f26c8ff5e87e7c775c34d99e0de12c281e39d35d162c5e7a2084549ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbfae0af0d717e304b9db5afedbaba91a8225314c2b072805737774fb0fbcd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfae0af0d717e304b9db5afedbaba91a8225314c2b072805737774fb0fbcd95->enter($__internal_cbfae0af0d717e304b9db5afedbaba91a8225314c2b072805737774fb0fbcd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cbfae0af0d717e304b9db5afedbaba91a8225314c2b072805737774fb0fbcd95->leave($__internal_cbfae0af0d717e304b9db5afedbaba91a8225314c2b072805737774fb0fbcd95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf8f75898702f4171ceb5916722ee5f6e7cdd6cd53878f00863fe7fcd8483d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8f75898702f4171ceb5916722ee5f6e7cdd6cd53878f00863fe7fcd8483d48->enter($__internal_cf8f75898702f4171ceb5916722ee5f6e7cdd6cd53878f00863fe7fcd8483d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf8f75898702f4171ceb5916722ee5f6e7cdd6cd53878f00863fe7fcd8483d48->leave($__internal_cf8f75898702f4171ceb5916722ee5f6e7cdd6cd53878f00863fe7fcd8483d48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5061631d6115e3a3cc4feec26f3a1e7559cc01922260c7c0f852d5fc4c69a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5061631d6115e3a3cc4feec26f3a1e7559cc01922260c7c0f852d5fc4c69a9b->enter($__internal_f5061631d6115e3a3cc4feec26f3a1e7559cc01922260c7c0f852d5fc4c69a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f5061631d6115e3a3cc4feec26f3a1e7559cc01922260c7c0f852d5fc4c69a9b->leave($__internal_f5061631d6115e3a3cc4feec26f3a1e7559cc01922260c7c0f852d5fc4c69a9b_prof);

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
