<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6f57f13d589aba153ac0a400e63912d33ad5b656cf83b3a86d85e0196f2ce137 extends Twig_Template
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
        $__internal_f2513c2d42ee67e230a85988d5cf83ca78d3f974ddc3588a2a4d2a48f6b3c42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2513c2d42ee67e230a85988d5cf83ca78d3f974ddc3588a2a4d2a48f6b3c42a->enter($__internal_f2513c2d42ee67e230a85988d5cf83ca78d3f974ddc3588a2a4d2a48f6b3c42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f2513c2d42ee67e230a85988d5cf83ca78d3f974ddc3588a2a4d2a48f6b3c42a->leave($__internal_f2513c2d42ee67e230a85988d5cf83ca78d3f974ddc3588a2a4d2a48f6b3c42a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
