<?php

/* GFCTBundle:Alumno:all.html.twig */
class __TwigTemplate_3739d7103d1e84555ed8f4ef30dde65a367ea071ec16cdf257fd2e91fbe062fc extends Twig_Template
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
        $__internal_87892049d68fd9700266bd8b1b1094a02b295ceb4ab724bfbcc3021f6cba2bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87892049d68fd9700266bd8b1b1094a02b295ceb4ab724bfbcc3021f6cba2bf9->enter($__internal_87892049d68fd9700266bd8b1b1094a02b295ceb4ab724bfbcc3021f6cba2bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Alumno:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87892049d68fd9700266bd8b1b1094a02b295ceb4ab724bfbcc3021f6cba2bf9->leave($__internal_87892049d68fd9700266bd8b1b1094a02b295ceb4ab724bfbcc3021f6cba2bf9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c216831d34a4960058bcfb6ec245ddc6a1842194c4cf49832b2355e76010386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c216831d34a4960058bcfb6ec245ddc6a1842194c4cf49832b2355e76010386->enter($__internal_6c216831d34a4960058bcfb6ec245ddc6a1842194c4cf49832b2355e76010386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Alumno:all.html.twig"));

        echo "Alumnos y Empresas";
        
        $__internal_6c216831d34a4960058bcfb6ec245ddc6a1842194c4cf49832b2355e76010386->leave($__internal_6c216831d34a4960058bcfb6ec245ddc6a1842194c4cf49832b2355e76010386_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_27bc320a378a46d6fd65c4f79c69ff811eeef1bc0e12556f81432c85d100effa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bc320a378a46d6fd65c4f79c69ff811eeef1bc0e12556f81432c85d100effa->enter($__internal_27bc320a378a46d6fd65c4f79c69ff811eeef1bc0e12556f81432c85d100effa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Alumno:all.html.twig"));

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
        
        $__internal_27bc320a378a46d6fd65c4f79c69ff811eeef1bc0e12556f81432c85d100effa->leave($__internal_27bc320a378a46d6fd65c4f79c69ff811eeef1bc0e12556f81432c85d100effa_prof);

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
