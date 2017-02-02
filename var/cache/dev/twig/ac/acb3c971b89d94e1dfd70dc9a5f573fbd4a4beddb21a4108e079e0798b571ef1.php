<?php

/* GFCTBundle:Default:admin.html.twig */
class __TwigTemplate_fa3a85cea6040917fd0a5bdd0a7ba290c05f656b077057f0699cf699578dd653 extends Twig_Template
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
        $__internal_7eda6c897af704d9e416cc3daddc99bad29225d9981e27dd7784b9ee3d8e8749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eda6c897af704d9e416cc3daddc99bad29225d9981e27dd7784b9ee3d8e8749->enter($__internal_7eda6c897af704d9e416cc3daddc99bad29225d9981e27dd7784b9ee3d8e8749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:admin.html.twig"));

        // line 1
        echo "<body>

ADMIN ZONE!

<a href=\"/usuarios/logout\">Salir</a>

</body>";
        
        $__internal_7eda6c897af704d9e416cc3daddc99bad29225d9981e27dd7784b9ee3d8e8749->leave($__internal_7eda6c897af704d9e416cc3daddc99bad29225d9981e27dd7784b9ee3d8e8749_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Default:admin.html.twig";
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
        return new Twig_Source("<body>

ADMIN ZONE!

<a href=\"/usuarios/logout\">Salir</a>

</body>", "GFCTBundle:Default:admin.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Default/admin.html.twig");
    }
}
