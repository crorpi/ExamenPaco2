<?php

/* GFCTBundle:Profesores:all.html.twig */
class __TwigTemplate_e6a3ff77f892134615d0817d14508b35747ecf7589f6ab1fed4b37d82a7dcc05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Profesores:all.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e94786c24f7fbd8ac22cb41ba94d5cb9f6e4c6002b8a9f62e6dca7ea2e7a7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e94786c24f7fbd8ac22cb41ba94d5cb9f6e4c6002b8a9f62e6dca7ea2e7a7b7->enter($__internal_0e94786c24f7fbd8ac22cb41ba94d5cb9f6e4c6002b8a9f62e6dca7ea2e7a7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Profesores:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e94786c24f7fbd8ac22cb41ba94d5cb9f6e4c6002b8a9f62e6dca7ea2e7a7b7->leave($__internal_0e94786c24f7fbd8ac22cb41ba94d5cb9f6e4c6002b8a9f62e6dca7ea2e7a7b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28f1b33c7422036b10a30c16e7d6001f43417c0b7f913d4f6f74b6697e6a7028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f1b33c7422036b10a30c16e7d6001f43417c0b7f913d4f6f74b6697e6a7028->enter($__internal_28f1b33c7422036b10a30c16e7d6001f43417c0b7f913d4f6f74b6697e6a7028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Profesores:all.html.twig"));

        echo "Profesores";
        
        $__internal_28f1b33c7422036b10a30c16e7d6001f43417c0b7f913d4f6f74b6697e6a7028->leave($__internal_28f1b33c7422036b10a30c16e7d6001f43417c0b7f913d4f6f74b6697e6a7028_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe61515c21aaa38968e8f8777ea2c37d963078e4460073bd78d6ee8a8836549e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe61515c21aaa38968e8f8777ea2c37d963078e4460073bd78d6ee8a8836549e->enter($__internal_fe61515c21aaa38968e8f8777ea2c37d963078e4460073bd78d6ee8a8836549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Profesores:all.html.twig"));

        // line 8
        echo "  <h1>GFCT</h1><br>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Id</b></th>
          <th><b>Nombre</b></th>
          <th><b>Apellido</b></th>
          <th><b>Departamento</b></th>
        </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["profesores"]);
        foreach ($context['_seq'] as $context["_key"] => $context["profesores"]) {
            // line 19
            echo "        <tr>
          <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesores"], "id", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesores"], "nombre", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesores"], "apellidos", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesores"], "departamento", array()), "html", null, true);
            echo "</th>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesores'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </table>
    </div>
    </div>
    ";
        
        $__internal_fe61515c21aaa38968e8f8777ea2c37d963078e4460073bd78d6ee8a8836549e->leave($__internal_fe61515c21aaa38968e8f8777ea2c37d963078e4460073bd78d6ee8a8836549e_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Profesores:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  53 => 8,  47 => 7,  35 => 3,  11 => 1,);
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

{% block title %}Profesores{% endblock %}



  {% block body %}
  <h1>GFCT</h1><br>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Id</b></th>
          <th><b>Nombre</b></th>
          <th><b>Apellido</b></th>
          <th><b>Departamento</b></th>
        </tr>
        {% for profesores in profesores %}
        <tr>
          <th>{{ profesores.id}}</th>
          <th>{{ profesores.nombre }}</th>
          <th>{{ profesores.apellidos }}</th>
          <th>{{ profesores.departamento }}</th>
        </tr>
        {% endfor %}
      </table>
    </div>
    </div>
    {% endblock %}
", "GFCTBundle:Profesores:all.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Profesores/all.html.twig");
    }
}
