<?php

/* @GFCT/Profesores/nuevo.html.twig */
class __TwigTemplate_a2a633763808a825de7fafe122c92016ec5ce83e3b706588d810d751fa18a0c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@GFCT/Profesores/nuevo.html.twig", 1);
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
        $__internal_3f04b446846036bb9b9717c80f2c408195c1ecd57b9baa921e496333120b796f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f04b446846036bb9b9717c80f2c408195c1ecd57b9baa921e496333120b796f->enter($__internal_3f04b446846036bb9b9717c80f2c408195c1ecd57b9baa921e496333120b796f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Profesores/nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f04b446846036bb9b9717c80f2c408195c1ecd57b9baa921e496333120b796f->leave($__internal_3f04b446846036bb9b9717c80f2c408195c1ecd57b9baa921e496333120b796f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4969f39e76f6f4d3549e1cfdfa7364a3addd25cecd98a5e19e2bd8b0748b6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4969f39e76f6f4d3549e1cfdfa7364a3addd25cecd98a5e19e2bd8b0748b6e7->enter($__internal_d4969f39e76f6f4d3549e1cfdfa7364a3addd25cecd98a5e19e2bd8b0748b6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Profesores/nuevo.html.twig"));

        echo "GTFC Nueva Empresa";
        
        $__internal_d4969f39e76f6f4d3549e1cfdfa7364a3addd25cecd98a5e19e2bd8b0748b6e7->leave($__internal_d4969f39e76f6f4d3549e1cfdfa7364a3addd25cecd98a5e19e2bd8b0748b6e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c72708ddee54abd643ebfaa37c8626c11836468c5902fa17dfc44f8e6afa97cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72708ddee54abd643ebfaa37c8626c11836468c5902fa17dfc44f8e6afa97cc->enter($__internal_c72708ddee54abd643ebfaa37c8626c11836468c5902fa17dfc44f8e6afa97cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@GFCT/Profesores/nuevo.html.twig"));

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
        
        $__internal_c72708ddee54abd643ebfaa37c8626c11836468c5902fa17dfc44f8e6afa97cc->leave($__internal_c72708ddee54abd643ebfaa37c8626c11836468c5902fa17dfc44f8e6afa97cc_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Profesores/nuevo.html.twig";
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


{% endblock %}", "@GFCT/Profesores/nuevo.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Profesores\\nuevo.html.twig");
    }
}
