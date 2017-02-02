<?php

/* @GFCT/Default/admin.html.twig */
class __TwigTemplate_c0a22bb479a831f10068d6fc054a36cbe7905c2ae4fad6d391dd02b535042d31 extends Twig_Template
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
        $__internal_11fa561b709386e5694b962e19d94c72c337359c0f76890ff03099168940dde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fa561b709386e5694b962e19d94c72c337359c0f76890ff03099168940dde7->enter($__internal_11fa561b709386e5694b962e19d94c72c337359c0f76890ff03099168940dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Default/admin.html.twig"));

        // line 1
        echo "<body>

ADMIN ZONE!

</body>";
        
        $__internal_11fa561b709386e5694b962e19d94c72c337359c0f76890ff03099168940dde7->leave($__internal_11fa561b709386e5694b962e19d94c72c337359c0f76890ff03099168940dde7_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Default/admin.html.twig";
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

</body>", "@GFCT/Default/admin.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Default\\admin.html.twig");
    }
}
