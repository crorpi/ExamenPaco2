<?php

/* GFCTBundle:Default:usuarios.html.twig */
class __TwigTemplate_d56239a527a91c46865ef962b610276b905884ca1d2ac8ba19edd977f983d083 extends Twig_Template
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
        $__internal_84af5af8c982e217723904ae880e58e9beb3a5143060ea830a709e8787168b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84af5af8c982e217723904ae880e58e9beb3a5143060ea830a709e8787168b0b->enter($__internal_84af5af8c982e217723904ae880e58e9beb3a5143060ea830a709e8787168b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:usuarios.html.twig"));

        // line 1
        echo "<body>

PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>

</body>
";
        
        $__internal_84af5af8c982e217723904ae880e58e9beb3a5143060ea830a709e8787168b0b->leave($__internal_84af5af8c982e217723904ae880e58e9beb3a5143060ea830a709e8787168b0b_prof);

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
