<?php

/* GFCTBundle:Profesores:msgExito.html.twig */
class __TwigTemplate_6fdc70e6a9c74c62fcf32565b373f24f3b7d079f55a251b4cbb68e376dbfefb2 extends Twig_Template
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
        $__internal_4562cd23c98d5a8193dc3bc9e72d92c36ad4f3de43676dfc8e4caa43e496df6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4562cd23c98d5a8193dc3bc9e72d92c36ad4f3de43676dfc8e4caa43e496df6f->enter($__internal_4562cd23c98d5a8193dc3bc9e72d92c36ad4f3de43676dfc8e4caa43e496df6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Profesores:msgExito.html.twig"));

        // line 1
        echo "El profesor ha sido añadido correctamente a la base de datos.";
        
        $__internal_4562cd23c98d5a8193dc3bc9e72d92c36ad4f3de43676dfc8e4caa43e496df6f->leave($__internal_4562cd23c98d5a8193dc3bc9e72d92c36ad4f3de43676dfc8e4caa43e496df6f_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Profesores:msgExito.html.twig";
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
        return new Twig_Source("El profesor ha sido añadido correctamente a la base de datos.", "GFCTBundle:Profesores:msgExito.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Profesores/msgExito.html.twig");
    }
}
