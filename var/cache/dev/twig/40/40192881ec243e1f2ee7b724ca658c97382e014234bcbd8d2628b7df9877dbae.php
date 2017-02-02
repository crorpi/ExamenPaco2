<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eccc03f1a46efb29987352cf5847d16f5b123115064429f5d454bdf69c671324 extends Twig_Template
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
        $__internal_f13e343c15933596976320561a01c68322c63fa88b1b930cd226ee9ecb3c41be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13e343c15933596976320561a01c68322c63fa88b1b930cd226ee9ecb3c41be->enter($__internal_f13e343c15933596976320561a01c68322c63fa88b1b930cd226ee9ecb3c41be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f13e343c15933596976320561a01c68322c63fa88b1b930cd226ee9ecb3c41be->leave($__internal_f13e343c15933596976320561a01c68322c63fa88b1b930cd226ee9ecb3c41be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_334b1f96257716b6d2c2dcbfc8903b95b9588820fec1f495c2f4d0a7dd7dca91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334b1f96257716b6d2c2dcbfc8903b95b9588820fec1f495c2f4d0a7dd7dca91->enter($__internal_334b1f96257716b6d2c2dcbfc8903b95b9588820fec1f495c2f4d0a7dd7dca91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_334b1f96257716b6d2c2dcbfc8903b95b9588820fec1f495c2f4d0a7dd7dca91->leave($__internal_334b1f96257716b6d2c2dcbfc8903b95b9588820fec1f495c2f4d0a7dd7dca91_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
