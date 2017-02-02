<?php

/* GFCTBundle:Profesores:nuevo.html.twig */
class __TwigTemplate_7f36a37506526aba7984c060d37685bb0c9f1c3150f46136487007b445607d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Profesores:nuevo.html.twig", 1);
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
        $__internal_1f747cfe5de659fac687c14c17145476055d46273b8dad8242b8f46bd43f82af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f747cfe5de659fac687c14c17145476055d46273b8dad8242b8f46bd43f82af->enter($__internal_1f747cfe5de659fac687c14c17145476055d46273b8dad8242b8f46bd43f82af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Profesores:nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f747cfe5de659fac687c14c17145476055d46273b8dad8242b8f46bd43f82af->leave($__internal_1f747cfe5de659fac687c14c17145476055d46273b8dad8242b8f46bd43f82af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73f83eae29444941b5b62f349d8e73e9fed31fd0fff56aa59e6d546bc16c4f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f83eae29444941b5b62f349d8e73e9fed31fd0fff56aa59e6d546bc16c4f42->enter($__internal_73f83eae29444941b5b62f349d8e73e9fed31fd0fff56aa59e6d546bc16c4f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Profesores:nuevo.html.twig"));

        echo "GTFC Nueva Empresa";
        
        $__internal_73f83eae29444941b5b62f349d8e73e9fed31fd0fff56aa59e6d546bc16c4f42->leave($__internal_73f83eae29444941b5b62f349d8e73e9fed31fd0fff56aa59e6d546bc16c4f42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2731c1ea4162344fa09b6302c1e89be527242e83ae687c0e287c0ffdf8b3e3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2731c1ea4162344fa09b6302c1e89be527242e83ae687c0e287c0ffdf8b3e3e3->enter($__internal_2731c1ea4162344fa09b6302c1e89be527242e83ae687c0e287c0ffdf8b3e3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Profesores:nuevo.html.twig"));

        // line 6
        echo "
<h1>Crear Empresa</h1><br>


";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div>
    <p>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Nombre Profesor:"));
        echo "
    </p>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
    </div>

<div>
    <p>
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Apellidos:"));
        echo "
    </p>
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "")));
        echo "
</div>

  <div>
    <p>
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Departamento:"));
        echo "
    </p>
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'errors');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
</div>

";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_2731c1ea4162344fa09b6302c1e89be527242e83ae687c0e287c0ffdf8b3e3e3->leave($__internal_2731c1ea4162344fa09b6302c1e89be527242e83ae687c0e287c0ffdf8b3e3e3_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Profesores:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 36,  109 => 33,  105 => 32,  100 => 30,  92 => 25,  88 => 24,  83 => 22,  75 => 17,  71 => 16,  66 => 14,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}GTFC Nueva Empresa{% endblock %}

{% block body %}

<h1>Crear Empresa</h1><br>


{{ form_start(form) }}

<div>
    <p>
    {{ form_label(form.nombre, 'Nombre Profesor:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.nombre) }}
    {{ form_widget(form.nombre, {'attr': {'class': 'caja'}}) }}
    </div>

<div>
    <p>
    {{ form_label(form.apellidos, 'Apellidos:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.apellidos) }}
    {{ form_widget(form.apellidos, {'attr': {'class': ''}}) }}
</div>

  <div>
    <p>
    {{ form_label(form.departamento, 'Departamento:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.departamento) }}
    {{ form_widget(form.departamento, {'attr': {'class': 'caja'}}) }}
</div>

{{ form_end(form) }}


{% endblock %}", "GFCTBundle:Profesores:nuevo.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Profesores/nuevo.html.twig");
    }
}
