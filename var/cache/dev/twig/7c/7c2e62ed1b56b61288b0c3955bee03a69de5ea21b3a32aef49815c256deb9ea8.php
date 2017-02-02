<?php

/* @GFCT/Profesores/all.html.twig */
class __TwigTemplate_535986a92645c477ffc7cee8097bea96fa0a7760f8307f3e119107250d200ac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@GFCT/Profesores/all.html.twig", 1);
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
        $__internal_c40f8574649cb485df6815a4763965101b21bdd2d9a705e4082f47301c6ef8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40f8574649cb485df6815a4763965101b21bdd2d9a705e4082f47301c6ef8e1->enter($__internal_c40f8574649cb485df6815a4763965101b21bdd2d9a705e4082f47301c6ef8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Profesores/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c40f8574649cb485df6815a4763965101b21bdd2d9a705e4082f47301c6ef8e1->leave($__internal_c40f8574649cb485df6815a4763965101b21bdd2d9a705e4082f47301c6ef8e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_836bba7577c589267b5414b52f0c48c5b645cb91471ef7cb94243e7054ea5c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836bba7577c589267b5414b52f0c48c5b645cb91471ef7cb94243e7054ea5c93->enter($__internal_836bba7577c589267b5414b52f0c48c5b645cb91471ef7cb94243e7054ea5c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Profesores/all.html.twig"));

        echo "Profesores";
        
        $__internal_836bba7577c589267b5414b52f0c48c5b645cb91471ef7cb94243e7054ea5c93->leave($__internal_836bba7577c589267b5414b52f0c48c5b645cb91471ef7cb94243e7054ea5c93_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2a8cc709777f5429e6215981a4ee4d11e46f11026e09f3fda860a46e94947a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a8cc709777f5429e6215981a4ee4d11e46f11026e09f3fda860a46e94947a9->enter($__internal_f2a8cc709777f5429e6215981a4ee4d11e46f11026e09f3fda860a46e94947a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Profesores/all.html.twig"));

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
        
        $__internal_f2a8cc709777f5429e6215981a4ee4d11e46f11026e09f3fda860a46e94947a9->leave($__internal_f2a8cc709777f5429e6215981a4ee4d11e46f11026e09f3fda860a46e94947a9_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Profesores/all.html.twig";
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
", "@GFCT/Profesores/all.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Profesores\\all.html.twig");
    }
}
