<?php

/* @GFCT/Default/usuarios.html.twig */
class __TwigTemplate_b9a443e8ba65f6475ca64781b7ee2490a4d77c840b1f9974b1f19d1b2261887e extends Twig_Template
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
        $__internal_64fb8317ca6193a66ec103bead6e1cbe8dc5bd5b7a030e0e1d0d9fd587db0cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fb8317ca6193a66ec103bead6e1cbe8dc5bd5b7a030e0e1d0d9fd587db0cc3->enter($__internal_64fb8317ca6193a66ec103bead6e1cbe8dc5bd5b7a030e0e1d0d9fd587db0cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Default/usuarios.html.twig"));

        // line 1
        echo "<body>

PRINCIPAL
<br>
<a href=\"/usuarios/logout\">Salir</a>

</body>
";
        
        $__internal_64fb8317ca6193a66ec103bead6e1cbe8dc5bd5b7a030e0e1d0d9fd587db0cc3->leave($__internal_64fb8317ca6193a66ec103bead6e1cbe8dc5bd5b7a030e0e1d0d9fd587db0cc3_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Default/usuarios.html.twig";
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
", "@GFCT/Default/usuarios.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Default\\usuarios.html.twig");
    }
}
