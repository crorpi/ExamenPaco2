<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_85ebb80b678233129d701a9c5aca93aee0dc93a739bdf8c0fd394bab8a167bce extends Twig_Template
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
        $__internal_f6fd04d6046eeca1d7c423ff6e54b31381a445427822c00852402fb1ace80509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fd04d6046eeca1d7c423ff6e54b31381a445427822c00852402fb1ace80509->enter($__internal_f6fd04d6046eeca1d7c423ff6e54b31381a445427822c00852402fb1ace80509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f6fd04d6046eeca1d7c423ff6e54b31381a445427822c00852402fb1ace80509->leave($__internal_f6fd04d6046eeca1d7c423ff6e54b31381a445427822c00852402fb1ace80509_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
