<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b8f07eee8c7c7ab849df8bc6d6412a90305f490dd51ce161da52d62605819ef extends Twig_Template
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
        $__internal_7da6fc33a0b1be1726387b63fdd460bf9643957c5c1b7e1796035f148d931e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da6fc33a0b1be1726387b63fdd460bf9643957c5c1b7e1796035f148d931e7a->enter($__internal_7da6fc33a0b1be1726387b63fdd460bf9643957c5c1b7e1796035f148d931e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7da6fc33a0b1be1726387b63fdd460bf9643957c5c1b7e1796035f148d931e7a->leave($__internal_7da6fc33a0b1be1726387b63fdd460bf9643957c5c1b7e1796035f148d931e7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
