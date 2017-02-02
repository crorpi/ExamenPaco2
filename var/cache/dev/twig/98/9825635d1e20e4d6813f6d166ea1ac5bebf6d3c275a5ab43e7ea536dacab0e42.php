<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_145605763f6e606300fb48106613a1961ef601d241e71d0e275b7c3118f44f82 extends Twig_Template
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
        $__internal_56aec7b17960e7aa21f44942bb55dc72798af03a1c7f6ac02ff9b8a2c89643a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56aec7b17960e7aa21f44942bb55dc72798af03a1c7f6ac02ff9b8a2c89643a6->enter($__internal_56aec7b17960e7aa21f44942bb55dc72798af03a1c7f6ac02ff9b8a2c89643a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_56aec7b17960e7aa21f44942bb55dc72798af03a1c7f6ac02ff9b8a2c89643a6->leave($__internal_56aec7b17960e7aa21f44942bb55dc72798af03a1c7f6ac02ff9b8a2c89643a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
