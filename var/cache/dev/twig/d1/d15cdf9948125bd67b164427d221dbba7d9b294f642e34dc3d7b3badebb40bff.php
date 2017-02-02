<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_62f1b4cc94cf82eaeab65a0dd3ba7d4807cffe8ab2f120c47e5c1039c65bea6c extends Twig_Template
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
        $__internal_6a09c5bec04c592b63110707f777c7b3b360d2557ac5c67e99c6b597c9813b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a09c5bec04c592b63110707f777c7b3b360d2557ac5c67e99c6b597c9813b12->enter($__internal_6a09c5bec04c592b63110707f777c7b3b360d2557ac5c67e99c6b597c9813b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6a09c5bec04c592b63110707f777c7b3b360d2557ac5c67e99c6b597c9813b12->leave($__internal_6a09c5bec04c592b63110707f777c7b3b360d2557ac5c67e99c6b597c9813b12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
