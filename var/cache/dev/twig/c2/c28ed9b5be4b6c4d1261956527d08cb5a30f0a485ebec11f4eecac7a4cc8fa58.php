<?php

/* GFCTBundle:Empresa:crearEmpresa.html.twig */
class __TwigTemplate_585cc834d8721abc613c1b4fc817ae0dd27a1ef78ea4d031b691dc55c443de19 extends Twig_Template
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
        $__internal_bd3a4cbb7019b3ef29eca7ea224603c9847005f22c433746c7640de0ff948e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3a4cbb7019b3ef29eca7ea224603c9847005f22c433746c7640de0ff948e50->enter($__internal_bd3a4cbb7019b3ef29eca7ea224603c9847005f22c433746c7640de0ff948e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Empresa:crearEmpresa.html.twig"));

        // line 1
        echo "creada la empresa! ";
        echo twig_escape_filter($this->env, (isset($context["empresaId"]) ? $context["empresaId"] : $this->getContext($context, "empresaId")), "html", null, true);
        echo "
";
        
        $__internal_bd3a4cbb7019b3ef29eca7ea224603c9847005f22c433746c7640de0ff948e50->leave($__internal_bd3a4cbb7019b3ef29eca7ea224603c9847005f22c433746c7640de0ff948e50_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Empresa:crearEmpresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("creada la empresa! {{empresaId}}
", "GFCTBundle:Empresa:crearEmpresa.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Empresa/crearEmpresa.html.twig");
    }
}
