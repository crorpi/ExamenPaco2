<?php

/* GFCTBundle:Default:conf.html.twig */
class __TwigTemplate_7c88de513aa2063367db9e890debcb30ccf382bdd99920e9e388ce94d9390d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Default:conf.html.twig", 1);
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
        $__internal_1941cd7b2754a999689606a55a127bb6ce0afeeccd79dad3455f1ea1fd25e769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1941cd7b2754a999689606a55a127bb6ce0afeeccd79dad3455f1ea1fd25e769->enter($__internal_1941cd7b2754a999689606a55a127bb6ce0afeeccd79dad3455f1ea1fd25e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:conf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1941cd7b2754a999689606a55a127bb6ce0afeeccd79dad3455f1ea1fd25e769->leave($__internal_1941cd7b2754a999689606a55a127bb6ce0afeeccd79dad3455f1ea1fd25e769_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_388a6976705b2454720f11790946c771abac1b10769abd6cd2f54e9ed6e827b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388a6976705b2454720f11790946c771abac1b10769abd6cd2f54e9ed6e827b2->enter($__internal_388a6976705b2454720f11790946c771abac1b10769abd6cd2f54e9ed6e827b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Default:conf.html.twig"));

        echo "Alumnos y Empresas";
        
        $__internal_388a6976705b2454720f11790946c771abac1b10769abd6cd2f54e9ed6e827b2->leave($__internal_388a6976705b2454720f11790946c771abac1b10769abd6cd2f54e9ed6e827b2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d478b2b086a6e3fa5f9f0e7007b88c3d04cedc7704b46aac5a997e5e42e786d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d478b2b086a6e3fa5f9f0e7007b88c3d04cedc7704b46aac5a997e5e42e786d4->enter($__internal_d478b2b086a6e3fa5f9f0e7007b88c3d04cedc7704b46aac5a997e5e42e786d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Default:conf.html.twig"));

        // line 8
        echo "  <h1>GFCT</h1><br>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Panel heading</div>
        <table class=\"table\">
        <tr>
          <th><b>Id</b></th>
          <th><b>Param</b></th>
          <th><b>Configuracion</b></th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["conf"]);
        foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
            // line 18
            echo "        <tr>
          <th>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "id", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "param", array()), "html", null, true);
            echo "</th>
          <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "configuracion", array()), "html", null, true);
            echo "</th>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </table>
    </div>
    </div>
    ";
        
        $__internal_d478b2b086a6e3fa5f9f0e7007b88c3d04cedc7704b46aac5a997e5e42e786d4->leave($__internal_d478b2b086a6e3fa5f9f0e7007b88c3d04cedc7704b46aac5a997e5e42e786d4_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Default:conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  79 => 21,  75 => 20,  71 => 19,  68 => 18,  64 => 17,  53 => 8,  47 => 7,  35 => 3,  11 => 1,);
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
          <th><b>Param</b></th>
          <th><b>Configuracion</b></th>
        </tr>
        {% for conf in conf %}
        <tr>
          <th>{{ conf.id}}</th>
          <th>{{ conf.param }}</th>
          <th>{{ conf.configuracion }}</th>
        </tr>
        {% endfor %}
      </table>
    </div>
    </div>
    {% endblock %}
", "GFCTBundle:Default:conf.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Default/conf.html.twig");
    }
}
