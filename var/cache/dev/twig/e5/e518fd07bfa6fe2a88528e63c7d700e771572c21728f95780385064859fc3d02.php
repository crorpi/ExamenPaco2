<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bf5745ea7cf4ed66f611645dd2b0da376e129cec4650207a4aa5bf439838f21c extends Twig_Template
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
        $__internal_18f9597d5a0d98e033c36b83db7d59e0224f7b55aaf3c3b4069f6ccce02f3029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f9597d5a0d98e033c36b83db7d59e0224f7b55aaf3c3b4069f6ccce02f3029->enter($__internal_18f9597d5a0d98e033c36b83db7d59e0224f7b55aaf3c3b4069f6ccce02f3029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_18f9597d5a0d98e033c36b83db7d59e0224f7b55aaf3c3b4069f6ccce02f3029->leave($__internal_18f9597d5a0d98e033c36b83db7d59e0224f7b55aaf3c3b4069f6ccce02f3029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
