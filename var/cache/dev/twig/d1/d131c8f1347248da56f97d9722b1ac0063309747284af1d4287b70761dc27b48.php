<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a0deab1120d253772087485adfaa944b47378f3a7d362c794f398298c5d04ed6 extends Twig_Template
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
        $__internal_be80aa4d529ba228e8ebff5c8dc6c4570b61c83f5b51b2b16a89a23143806f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be80aa4d529ba228e8ebff5c8dc6c4570b61c83f5b51b2b16a89a23143806f46->enter($__internal_be80aa4d529ba228e8ebff5c8dc6c4570b61c83f5b51b2b16a89a23143806f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_be80aa4d529ba228e8ebff5c8dc6c4570b61c83f5b51b2b16a89a23143806f46->leave($__internal_be80aa4d529ba228e8ebff5c8dc6c4570b61c83f5b51b2b16a89a23143806f46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
