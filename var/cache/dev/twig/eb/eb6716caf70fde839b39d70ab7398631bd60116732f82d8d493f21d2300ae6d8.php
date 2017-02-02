<?php

/* GFCTBundle:Default:usuarios.html.twig */
class __TwigTemplate_692e7056d884e61acfc444630cb58a40a90213b4567345d6fcc9eceee8468c88 extends Twig_Template
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
        $__internal_1f4b3e8e06f83efb6c75af274ed5e4c9fabfe2777c25f19a91d343e1189b1ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4b3e8e06f83efb6c75af274ed5e4c9fabfe2777c25f19a91d343e1189b1ce0->enter($__internal_1f4b3e8e06f83efb6c75af274ed5e4c9fabfe2777c25f19a91d343e1189b1ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:usuarios.html.twig"));

        // line 1
        echo "<body>

PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>

</body>
";
        
        $__internal_1f4b3e8e06f83efb6c75af274ed5e4c9fabfe2777c25f19a91d343e1189b1ce0->leave($__internal_1f4b3e8e06f83efb6c75af274ed5e4c9fabfe2777c25f19a91d343e1189b1ce0_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Default:usuarios.html.twig";
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

PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>

</body>
", "GFCTBundle:Default:usuarios.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Default/usuarios.html.twig");
    }
}
