<?php

/* GFCTBundle:Alumno:all.html.twig */
class __TwigTemplate_ed8cb8661e43e5ccd1d89b01d3b66d0c3ebbcf7e5aa8dc0ed62840568822d168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Alumno:all.html.twig", 1);
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
        $__internal_762d20974c61db98eaefc71f6702c0f3364cf02a402fa0404bc96d5ac3dd9900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762d20974c61db98eaefc71f6702c0f3364cf02a402fa0404bc96d5ac3dd9900->enter($__internal_762d20974c61db98eaefc71f6702c0f3364cf02a402fa0404bc96d5ac3dd9900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Alumno:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_762d20974c61db98eaefc71f6702c0f3364cf02a402fa0404bc96d5ac3dd9900->leave($__internal_762d20974c61db98eaefc71f6702c0f3364cf02a402fa0404bc96d5ac3dd9900_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0aacde6c5b2c4ff643baafe7da655bc67f80b127b0956a70c0a12c71af6fe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0aacde6c5b2c4ff643baafe7da655bc67f80b127b0956a70c0a12c71af6fe58->enter($__internal_c0aacde6c5b2c4ff643baafe7da655bc67f80b127b0956a70c0a12c71af6fe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Alumno:all.html.twig"));

        echo "Alumnos y Empresas";
        
        $__internal_c0aacde6c5b2c4ff643baafe7da655bc67f80b127b0956a70c0a12c71af6fe58->leave($__internal_c0aacde6c5b2c4ff643baafe7da655bc67f80b127b0956a70c0a12c71af6fe58_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb1f4ccf89533c1b0787f61abfaa40b003c69e155900523c140cfcdb5451393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb1f4ccf89533c1b0787f61abfaa40b003c69e155900523c140cfcdb5451393->enter($__internal_8eb1f4ccf89533c1b0787f61abfaa40b003c69e155900523c140cfcdb5451393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Alumno:all.html.twig"));

        // line 8
        echo "  <h1>GFCT</h1><br>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Id</b></th>
          <th><b>Nombre</b></th>
          <th><b>Apellido1</b></th>
          <th><b>Apellido2</b></th>
          <th><b>ciclo</b></th>
          <th><b>Nombre Empresa</b></th>
        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["alumno"]);
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 21
            echo "        <tr>
          <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</th>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </table>
    </div>
    </div>
    ";
        
        $__internal_8eb1f4ccf89533c1b0787f61abfaa40b003c69e155900523c140cfcdb5451393->leave($__internal_8eb1f4ccf89533c1b0787f61abfaa40b003c69e155900523c140cfcdb5451393_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Alumno:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  53 => 8,  47 => 7,  35 => 3,  11 => 1,);
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

{% block title %}Alumnos y Empresas{% endblock %}



  {% block body %}
  <h1>GFCT</h1><br>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Id</b></th>
          <th><b>Nombre</b></th>
          <th><b>Apellido1</b></th>
          <th><b>Apellido2</b></th>
          <th><b>ciclo</b></th>
          <th><b>Nombre Empresa</b></th>
        </tr>
        {% for alumno in alumno %}
        <tr>
          <th>{{ alumno.id}}</th>
          <th>{{ alumno.nombre }}</th>
          <th>{{ alumno.apellido1 }}</th>
          <th>{{ alumno.apellido2 }}</th>
          <th>{{ alumno.ciclo }}</th>
          <th>{{ alumno.empresa.nombre }}</th>
        </tr>
        {% endfor %}
      </table>
    </div>
    </div>
    {% endblock %}
", "GFCTBundle:Alumno:all.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Alumno/all.html.twig");
    }
}
