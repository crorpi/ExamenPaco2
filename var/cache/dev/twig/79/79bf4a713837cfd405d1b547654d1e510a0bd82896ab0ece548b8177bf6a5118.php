<?php

/* @GFCT/Alumno/all.html.twig */
class __TwigTemplate_b17293cd661d23836055ba7f92b510c128a149a11cb89c7f18164265e1854170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@GFCT/Alumno/all.html.twig", 1);
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
        $__internal_3e2236523128bc3c14c1a2cf048c2345de9c3471aebe45549ab4035a5415645c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2236523128bc3c14c1a2cf048c2345de9c3471aebe45549ab4035a5415645c->enter($__internal_3e2236523128bc3c14c1a2cf048c2345de9c3471aebe45549ab4035a5415645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Alumno/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e2236523128bc3c14c1a2cf048c2345de9c3471aebe45549ab4035a5415645c->leave($__internal_3e2236523128bc3c14c1a2cf048c2345de9c3471aebe45549ab4035a5415645c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecfc61a74c698d1c4cd1ee0b21f3bc5d9c1a6a32d787c9839dca7dff8b109f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfc61a74c698d1c4cd1ee0b21f3bc5d9c1a6a32d787c9839dca7dff8b109f9f->enter($__internal_ecfc61a74c698d1c4cd1ee0b21f3bc5d9c1a6a32d787c9839dca7dff8b109f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Alumno/all.html.twig"));

        echo "Alumnos y Empresas";
        
        $__internal_ecfc61a74c698d1c4cd1ee0b21f3bc5d9c1a6a32d787c9839dca7dff8b109f9f->leave($__internal_ecfc61a74c698d1c4cd1ee0b21f3bc5d9c1a6a32d787c9839dca7dff8b109f9f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_500de0ef4dca1395fc40052280d098fc5887544dd40cc27a516ce660f0a60660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500de0ef4dca1395fc40052280d098fc5887544dd40cc27a516ce660f0a60660->enter($__internal_500de0ef4dca1395fc40052280d098fc5887544dd40cc27a516ce660f0a60660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Alumno/all.html.twig"));

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
        
        $__internal_500de0ef4dca1395fc40052280d098fc5887544dd40cc27a516ce660f0a60660->leave($__internal_500de0ef4dca1395fc40052280d098fc5887544dd40cc27a516ce660f0a60660_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Alumno/all.html.twig";
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
", "@GFCT/Alumno/all.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Alumno\\all.html.twig");
    }
}
