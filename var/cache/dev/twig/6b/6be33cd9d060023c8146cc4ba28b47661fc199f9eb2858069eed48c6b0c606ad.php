<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cb1a3013d54fedfeac53ab301d313ea75b7b76fe7108552139cc75263f70ebf8 extends Twig_Template
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
        $__internal_9f5a91f1f8e20012e55e9b042be6e3fe6329d9d3235e12493d4ad8082a2243be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5a91f1f8e20012e55e9b042be6e3fe6329d9d3235e12493d4ad8082a2243be->enter($__internal_9f5a91f1f8e20012e55e9b042be6e3fe6329d9d3235e12493d4ad8082a2243be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_9f5a91f1f8e20012e55e9b042be6e3fe6329d9d3235e12493d4ad8082a2243be->leave($__internal_9f5a91f1f8e20012e55e9b042be6e3fe6329d9d3235e12493d4ad8082a2243be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
