<?php

/* GFCTBundle:Empresa:msgExito.html.twig */
class __TwigTemplate_cb699a7693b3751103ae93e6a19d0d233c4380e3b792896e11d2a0845e7d97fd extends Twig_Template
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
        $__internal_e903a40065ef69e45a44b38acd0bf4f6376ee76b8aa1b3384aa27ecc1225b416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e903a40065ef69e45a44b38acd0bf4f6376ee76b8aa1b3384aa27ecc1225b416->enter($__internal_e903a40065ef69e45a44b38acd0bf4f6376ee76b8aa1b3384aa27ecc1225b416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Empresa:msgExito.html.twig"));

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
        
        $__internal_e903a40065ef69e45a44b38acd0bf4f6376ee76b8aa1b3384aa27ecc1225b416->leave($__internal_e903a40065ef69e45a44b38acd0bf4f6376ee76b8aa1b3384aa27ecc1225b416_prof);

    }

    // line 6
    public function block_tiitle($context, array $blocks = array())
    {
        $__internal_4a4a81d243ec241984c4ff7fbba041247f9a4e2c4c3f31860652d907fbf2e53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4a81d243ec241984c4ff7fbba041247f9a4e2c4c3f31860652d907fbf2e53c->enter($__internal_4a4a81d243ec241984c4ff7fbba041247f9a4e2c4c3f31860652d907fbf2e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:msgExito.html.twig"));

        echo "Base de datos ha sido creada";
        
        $__internal_4a4a81d243ec241984c4ff7fbba041247f9a4e2c4c3f31860652d907fbf2e53c->leave($__internal_4a4a81d243ec241984c4ff7fbba041247f9a4e2c4c3f31860652d907fbf2e53c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_332f0ffdc07a0512e66a3031f6ac0f3b1444de0531fc2c74dc45c5c3fb5ced3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332f0ffdc07a0512e66a3031f6ac0f3b1444de0531fc2c74dc45c5c3fb5ced3e->enter($__internal_332f0ffdc07a0512e66a3031f6ac0f3b1444de0531fc2c74dc45c5c3fb5ced3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:msgExito.html.twig"));

        // line 8
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_332f0ffdc07a0512e66a3031f6ac0f3b1444de0531fc2c74dc45c5c3fb5ced3e->leave($__internal_332f0ffdc07a0512e66a3031f6ac0f3b1444de0531fc2c74dc45c5c3fb5ced3e_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Empresa:msgExito.html.twig";
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
</html>", "GFCTBundle:Empresa:msgExito.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Empresa/msgExito.html.twig");
    }
}
