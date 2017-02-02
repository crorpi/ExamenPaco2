<?php

/* @GFCT/Empresa/all.html.twig */
class __TwigTemplate_5d78bf1c35243c1d2738cc2f51b808bcbc07ef5e59059647c7a12362ac1ec231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@GFCT/Empresa/all.html.twig", 1);
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
        $__internal_603db09b0671beb36b257c5874f136168a5054a50670f50158a2f001304cdf39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603db09b0671beb36b257c5874f136168a5054a50670f50158a2f001304cdf39->enter($__internal_603db09b0671beb36b257c5874f136168a5054a50670f50158a2f001304cdf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Empresa/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603db09b0671beb36b257c5874f136168a5054a50670f50158a2f001304cdf39->leave($__internal_603db09b0671beb36b257c5874f136168a5054a50670f50158a2f001304cdf39_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e18a42d6d23c0db47076c653d7bcdd484a7860ec44baab5ec8b93149a29e561b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18a42d6d23c0db47076c653d7bcdd484a7860ec44baab5ec8b93149a29e561b->enter($__internal_e18a42d6d23c0db47076c653d7bcdd484a7860ec44baab5ec8b93149a29e561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Empresa/all.html.twig"));

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
        
        $__internal_e18a42d6d23c0db47076c653d7bcdd484a7860ec44baab5ec8b93149a29e561b->leave($__internal_e18a42d6d23c0db47076c653d7bcdd484a7860ec44baab5ec8b93149a29e561b_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Empresa/all.html.twig";
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
", "@GFCT/Empresa/all.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Empresa\\all.html.twig");
    }
}
