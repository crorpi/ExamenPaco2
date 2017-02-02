<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ad28a99a80950a34cb10efb8b9cd9e3695fe5e52d4f2dec21757f77d6349e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de780888209a549c73a71549a6042cfacf1a4a268f5fcc4333fc23715bffbe2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de780888209a549c73a71549a6042cfacf1a4a268f5fcc4333fc23715bffbe2d->enter($__internal_de780888209a549c73a71549a6042cfacf1a4a268f5fcc4333fc23715bffbe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de780888209a549c73a71549a6042cfacf1a4a268f5fcc4333fc23715bffbe2d->leave($__internal_de780888209a549c73a71549a6042cfacf1a4a268f5fcc4333fc23715bffbe2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4e9f6bfd9d7a8fecbdd57111c712efd314ae571b8b811c618eb3eef6310dd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e9f6bfd9d7a8fecbdd57111c712efd314ae571b8b811c618eb3eef6310dd66->enter($__internal_f4e9f6bfd9d7a8fecbdd57111c712efd314ae571b8b811c618eb3eef6310dd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_f4e9f6bfd9d7a8fecbdd57111c712efd314ae571b8b811c618eb3eef6310dd66->leave($__internal_f4e9f6bfd9d7a8fecbdd57111c712efd314ae571b8b811c618eb3eef6310dd66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_848f08a39fc6cf8bbc3d1e66b3da0dbb791e2bcc952b172a86deb31c494c326b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848f08a39fc6cf8bbc3d1e66b3da0dbb791e2bcc952b172a86deb31c494c326b->enter($__internal_848f08a39fc6cf8bbc3d1e66b3da0dbb791e2bcc952b172a86deb31c494c326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_848f08a39fc6cf8bbc3d1e66b3da0dbb791e2bcc952b172a86deb31c494c326b->leave($__internal_848f08a39fc6cf8bbc3d1e66b3da0dbb791e2bcc952b172a86deb31c494c326b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5da5123e51123cb82462eb3df7539484ea585d6485a82443b81afc1d06cea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5da5123e51123cb82462eb3df7539484ea585d6485a82443b81afc1d06cea07->enter($__internal_f5da5123e51123cb82462eb3df7539484ea585d6485a82443b81afc1d06cea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5da5123e51123cb82462eb3df7539484ea585d6485a82443b81afc1d06cea07->leave($__internal_f5da5123e51123cb82462eb3df7539484ea585d6485a82443b81afc1d06cea07_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
