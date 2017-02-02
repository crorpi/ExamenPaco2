<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c88cf097e80a02068dee48983cb171d86473caa10eee9bb086828d29d90faf4a extends Twig_Template
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
        $__internal_933c3df86f53ee8ac14f8450a7be9d535baa395e697ae89bab8cf7f8a0ac4887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933c3df86f53ee8ac14f8450a7be9d535baa395e697ae89bab8cf7f8a0ac4887->enter($__internal_933c3df86f53ee8ac14f8450a7be9d535baa395e697ae89bab8cf7f8a0ac4887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_933c3df86f53ee8ac14f8450a7be9d535baa395e697ae89bab8cf7f8a0ac4887->leave($__internal_933c3df86f53ee8ac14f8450a7be9d535baa395e697ae89bab8cf7f8a0ac4887_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
