<?php

/* @GFCT/Profesores/msgExito.html.twig */
class __TwigTemplate_207d5c332deddc1bbd8b3b028a601877b37cd9d70449a5b52fa1fdb4f0e3db10 extends Twig_Template
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
        $__internal_39933fbf5395b381ad2065f3c445c468afbbce8213820ca970cfb34694e70fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39933fbf5395b381ad2065f3c445c468afbbce8213820ca970cfb34694e70fc9->enter($__internal_39933fbf5395b381ad2065f3c445c468afbbce8213820ca970cfb34694e70fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Profesores/msgExito.html.twig"));

        // line 1
        echo "El profesor ha sido añadido correctamente a la base de datos.";
        
        $__internal_39933fbf5395b381ad2065f3c445c468afbbce8213820ca970cfb34694e70fc9->leave($__internal_39933fbf5395b381ad2065f3c445c468afbbce8213820ca970cfb34694e70fc9_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Profesores/msgExito.html.twig";
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
        return new Twig_Source("El profesor ha sido añadido correctamente a la base de datos.", "@GFCT/Profesores/msgExito.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Profesores\\msgExito.html.twig");
    }
}
