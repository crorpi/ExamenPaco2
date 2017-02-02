<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9c93689acc5368e5fe8fb129805f6b88f8c554e81c65265a4f580225d93a6cd6 extends Twig_Template
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
        $__internal_962ce9e6f1a5af5d52377db47c017dd8dbd9c2474736a70d338ece230d9f072b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962ce9e6f1a5af5d52377db47c017dd8dbd9c2474736a70d338ece230d9f072b->enter($__internal_962ce9e6f1a5af5d52377db47c017dd8dbd9c2474736a70d338ece230d9f072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_962ce9e6f1a5af5d52377db47c017dd8dbd9c2474736a70d338ece230d9f072b->leave($__internal_962ce9e6f1a5af5d52377db47c017dd8dbd9c2474736a70d338ece230d9f072b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
