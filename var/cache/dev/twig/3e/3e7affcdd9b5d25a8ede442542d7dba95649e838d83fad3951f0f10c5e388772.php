<?php

/* GFCTBundle:Empresa:all.html.twig */
class __TwigTemplate_42d717c27305aeaad583cc9057e5219f1c9e5cb2e486efc0c10125605e0ae104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Empresa:all.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58480bfe501d05f04ef364fa3b7273b83879b9984b7dd47992284e6047c5e02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58480bfe501d05f04ef364fa3b7273b83879b9984b7dd47992284e6047c5e02f->enter($__internal_58480bfe501d05f04ef364fa3b7273b83879b9984b7dd47992284e6047c5e02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Empresa:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58480bfe501d05f04ef364fa3b7273b83879b9984b7dd47992284e6047c5e02f->leave($__internal_58480bfe501d05f04ef364fa3b7273b83879b9984b7dd47992284e6047c5e02f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_19f565618491e7f7aded775906b642395052e35234403d405b09dbdabbdcd3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f565618491e7f7aded775906b642395052e35234403d405b09dbdabbdcd3fd->enter($__internal_19f565618491e7f7aded775906b642395052e35234403d405b09dbdabbdcd3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:all.html.twig"));

        // line 3
        echo "  <body>
    <h1>GFCT</h1><br>
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Empresa</b></th>
          <th><b>Nombre</b></th>
          <th><b>Direccion</b></th>
          <th><b>CP</b></th>
          <th><b>telefono1</b></th>
          <th><b>telefono2</b></th>
          <th><b>fecha</b></th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["empresa"]);
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 18
            echo "        <tr>
          <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["empresa"], "fecha", array()), "Y-m-d"), "html", null, true);
            echo "</th>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </table>
    </div>
  </body>
    ";
        
        $__internal_19f565618491e7f7aded775906b642395052e35234403d405b09dbdabbdcd3fd->leave($__internal_19f565618491e7f7aded775906b642395052e35234403d405b09dbdabbdcd3fd_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Empresa:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
  {% block body %}
  <body>
    <h1>GFCT</h1><br>
  <div class=\"panel panel-default\">
      <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Empresa</b></th>
          <th><b>Nombre</b></th>
          <th><b>Direccion</b></th>
          <th><b>CP</b></th>
          <th><b>telefono1</b></th>
          <th><b>telefono2</b></th>
          <th><b>fecha</b></th>
        </tr>
        {% for empresa in empresa %}
        <tr>
          <th>{{ empresa.id}}</th>
          <th>{{ empresa.nombre }}</th>
          <th>{{ empresa.direccion }}</th>
          <th>{{ empresa.cp }}</th>
          <th>{{ empresa.telefono1 }}</th>
          <th>{{ empresa.telefono2 }}</th>
          <th>{{ empresa.fecha | date('Y-m-d') }}</th>
        </tr>
        {% endfor %}
      </table>
    </div>
  </body>
    {% endblock %}
", "GFCTBundle:Empresa:all.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Empresa/all.html.twig");
    }
}
