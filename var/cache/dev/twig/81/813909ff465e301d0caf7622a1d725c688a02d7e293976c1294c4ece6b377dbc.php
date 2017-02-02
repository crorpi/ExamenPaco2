<?php

/* GFCTBundle:Default:nuevoConf.html.twig */
class __TwigTemplate_2a7f30d5eafcab54cccefebbaacad712fce9e3d3d9c5f0d42f62cd3ed163be9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Default:nuevoConf.html.twig", 1);
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
        $__internal_0408ff5ea7bbd386aaee52ae544dfcecc6fb577d2d7b6e6879b19c765189b9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0408ff5ea7bbd386aaee52ae544dfcecc6fb577d2d7b6e6879b19c765189b9ac->enter($__internal_0408ff5ea7bbd386aaee52ae544dfcecc6fb577d2d7b6e6879b19c765189b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:nuevoConf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0408ff5ea7bbd386aaee52ae544dfcecc6fb577d2d7b6e6879b19c765189b9ac->leave($__internal_0408ff5ea7bbd386aaee52ae544dfcecc6fb577d2d7b6e6879b19c765189b9ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6757681d61fbe7365a36cea68a83f5db916a9f91d4fec9f0fa8f479947ecadd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6757681d61fbe7365a36cea68a83f5db916a9f91d4fec9f0fa8f479947ecadd5->enter($__internal_6757681d61fbe7365a36cea68a83f5db916a9f91d4fec9f0fa8f479947ecadd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Default:nuevoConf.html.twig"));

        echo "GTFC Nueva Empresa";
        
        $__internal_6757681d61fbe7365a36cea68a83f5db916a9f91d4fec9f0fa8f479947ecadd5->leave($__internal_6757681d61fbe7365a36cea68a83f5db916a9f91d4fec9f0fa8f479947ecadd5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5364933711395854679cc8fdb3b18a45358f105c37726cded786f6a4bc09385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5364933711395854679cc8fdb3b18a45358f105c37726cded786f6a4bc09385->enter($__internal_b5364933711395854679cc8fdb3b18a45358f105c37726cded786f6a4bc09385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Default:nuevoConf.html.twig"));

        // line 6
        echo "
<h1>Crear Nuevo conf</h1><br>


";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

<div>
    <p>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "param", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Nuevo parametro:"));
        echo "
    </p>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "param", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "param", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
    </div>

<div>
    <p>
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configuracion", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Configuracion:"));
        echo "
    </p>
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configuracion", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configuracion", array()), 'widget', array("attr" => array("class" => "")));
        echo "
</div>

";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_b5364933711395854679cc8fdb3b18a45358f105c37726cded786f6a4bc09385->leave($__internal_b5364933711395854679cc8fdb3b18a45358f105c37726cded786f6a4bc09385_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Default:nuevoConf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  92 => 25,  88 => 24,  83 => 22,  75 => 17,  71 => 16,  66 => 14,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

<h1>Crear Nuevo conf</h1><br>


{{ form_start(form) }}

<div>
    <p>
    {{ form_label(form.param, 'Nuevo parametro:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.param) }}
    {{ form_widget(form.param, {'attr': {'class': 'caja'}}) }}
    </div>

<div>
    <p>
    {{ form_label(form.configuracion, 'Configuracion:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.configuracion) }}
    {{ form_widget(form.configuracion, {'attr': {'class': ''}}) }}
</div>

{{ form_end(form) }}


{% endblock %}", "GFCTBundle:Default:nuevoConf.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Default/nuevoConf.html.twig");
    }
}
