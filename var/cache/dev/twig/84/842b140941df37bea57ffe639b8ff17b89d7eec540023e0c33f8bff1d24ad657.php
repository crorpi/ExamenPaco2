<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_beac9965e684622c0c1d546b1d618f0546936600f53b187530bc76243ae953f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10db6f266e55b2e4b4d5d5d4f97b2c9b6cb667cf2080fb5ca719a10382573b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10db6f266e55b2e4b4d5d5d4f97b2c9b6cb667cf2080fb5ca719a10382573b67->enter($__internal_10db6f266e55b2e4b4d5d5d4f97b2c9b6cb667cf2080fb5ca719a10382573b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_10db6f266e55b2e4b4d5d5d4f97b2c9b6cb667cf2080fb5ca719a10382573b67->leave($__internal_10db6f266e55b2e4b4d5d5d4f97b2c9b6cb667cf2080fb5ca719a10382573b67_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_45e67137f671345d43196cd9ee4a95d2b49d62ff600dd6a63184a8cab33dd99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e67137f671345d43196cd9ee4a95d2b49d62ff600dd6a63184a8cab33dd99c->enter($__internal_45e67137f671345d43196cd9ee4a95d2b49d62ff600dd6a63184a8cab33dd99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_45e67137f671345d43196cd9ee4a95d2b49d62ff600dd6a63184a8cab33dd99c->leave($__internal_45e67137f671345d43196cd9ee4a95d2b49d62ff600dd6a63184a8cab33dd99c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
