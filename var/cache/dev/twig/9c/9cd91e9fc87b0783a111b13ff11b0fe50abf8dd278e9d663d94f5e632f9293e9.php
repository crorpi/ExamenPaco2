<?php

/* @GFCT/Empresa/msgExito.html.twig */
class __TwigTemplate_fdfbe86656da9d788ff1abe5bb2a53ea3ece002b910f3f86e7b678960dd458c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tiitle' => array($this, 'block_tiitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef92c491642d3314a2f6043447da8b9567a36a765351f35b42c1b09c95344899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef92c491642d3314a2f6043447da8b9567a36a765351f35b42c1b09c95344899->enter($__internal_ef92c491642d3314a2f6043447da8b9567a36a765351f35b42c1b09c95344899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Empresa/msgExito.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
\t<title>";
        // line 6
        $this->displayBlock('tiitle', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
  La base empresa ha sido añadida con exito a la base de datos.
</body>
</html>";
        
        $__internal_ef92c491642d3314a2f6043447da8b9567a36a765351f35b42c1b09c95344899->leave($__internal_ef92c491642d3314a2f6043447da8b9567a36a765351f35b42c1b09c95344899_prof);

    }

    // line 6
    public function block_tiitle($context, array $blocks = array())
    {
        $__internal_db4be2c24235c98dc20bdacb6125185bc303d5ccd9ea5b76ed0ecdb977eb9928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4be2c24235c98dc20bdacb6125185bc303d5ccd9ea5b76ed0ecdb977eb9928->enter($__internal_db4be2c24235c98dc20bdacb6125185bc303d5ccd9ea5b76ed0ecdb977eb9928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Empresa/msgExito.html.twig"));

        echo "Base de datos ha sido creada";
        
        $__internal_db4be2c24235c98dc20bdacb6125185bc303d5ccd9ea5b76ed0ecdb977eb9928->leave($__internal_db4be2c24235c98dc20bdacb6125185bc303d5ccd9ea5b76ed0ecdb977eb9928_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_902bf85f0766f6d6d60c71c5107b1bd5425438fc7bc6dc56646be31fa3de52f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902bf85f0766f6d6d60c71c5107b1bd5425438fc7bc6dc56646be31fa3de52f6->enter($__internal_902bf85f0766f6d6d60c71c5107b1bd5425438fc7bc6dc56646be31fa3de52f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Empresa/msgExito.html.twig"));

        // line 8
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_902bf85f0766f6d6d60c71c5107b1bd5425438fc7bc6dc56646be31fa3de52f6->leave($__internal_902bf85f0766f6d6d60c71c5107b1bd5425438fc7bc6dc56646be31fa3de52f6_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Empresa/msgExito.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  60 => 7,  48 => 6,  37 => 10,  35 => 7,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
\t<title>{% block tiitle %}Base de datos ha sido creada{% endblock %}</title>
  {% block stylesheets %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/style.css')}}\">
  {% endblock %}
</head>
<body>
  La base empresa ha sido añadida con exito a la base de datos.
</body>
</html>", "@GFCT/Empresa/msgExito.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Empresa\\msgExito.html.twig");
    }
}
