<?php

/* GFCTBundle:Default:admin.html.twig */
class __TwigTemplate_f3245fc2a3145764efc742ce3be2b869fb830e60f67ba1b4bf35caae77b63224 extends Twig_Template
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
        $__internal_8ac75c14d94da823e3b69a24aebd112404dc05d28c7e08442fd326d51c837e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac75c14d94da823e3b69a24aebd112404dc05d28c7e08442fd326d51c837e3b->enter($__internal_8ac75c14d94da823e3b69a24aebd112404dc05d28c7e08442fd326d51c837e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:admin.html.twig"));

        // line 1
        echo "<body>

ADMIN ZONE!

</body>";
        
        $__internal_8ac75c14d94da823e3b69a24aebd112404dc05d28c7e08442fd326d51c837e3b->leave($__internal_8ac75c14d94da823e3b69a24aebd112404dc05d28c7e08442fd326d51c837e3b_prof);

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

</body>", "GFCTBundle:Default:admin.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Default/admin.html.twig");
    }
}
