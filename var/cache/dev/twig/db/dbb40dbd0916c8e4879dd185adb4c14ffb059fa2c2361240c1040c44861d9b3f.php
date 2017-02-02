<?php

/* GFCTBundle:Empresa:nueva.html.twig */
class __TwigTemplate_d68071729e10b5b36e6138f8c97d39c1a2d55502de3b44638319f2cf7bbfafa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GFCTBundle:Empresa:nueva.html.twig", 1);
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
        $__internal_654e20bfb724890e55ccc9f29d77740fbe3aab7d3832e89213d8cdf24451444f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654e20bfb724890e55ccc9f29d77740fbe3aab7d3832e89213d8cdf24451444f->enter($__internal_654e20bfb724890e55ccc9f29d77740fbe3aab7d3832e89213d8cdf24451444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Empresa:nueva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_654e20bfb724890e55ccc9f29d77740fbe3aab7d3832e89213d8cdf24451444f->leave($__internal_654e20bfb724890e55ccc9f29d77740fbe3aab7d3832e89213d8cdf24451444f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c8d798a17d1bec0b6b768b711c8e2350058a3c57e53998577dfb190c0482e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8d798a17d1bec0b6b768b711c8e2350058a3c57e53998577dfb190c0482e25->enter($__internal_4c8d798a17d1bec0b6b768b711c8e2350058a3c57e53998577dfb190c0482e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:nueva.html.twig"));

        echo "GTFC Nueva Empresa";
        
        $__internal_4c8d798a17d1bec0b6b768b711c8e2350058a3c57e53998577dfb190c0482e25->leave($__internal_4c8d798a17d1bec0b6b768b711c8e2350058a3c57e53998577dfb190c0482e25_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aad90d1e8a2311d889536bacc01dfa123b06b363ec8f776ba6e8b737206ae4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aad90d1e8a2311d889536bacc01dfa123b06b363ec8f776ba6e8b737206ae4f->enter($__internal_6aad90d1e8a2311d889536bacc01dfa123b06b363ec8f776ba6e8b737206ae4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GFCTBundle:Empresa:nueva.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Nombre de la Empresa:"));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Direccion:"));
        echo "
    </p>
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "")));
        echo "
</div>

  <div>
    <p>
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'label', array("label_attr" => array("class" => ""), "label" => "CP:"));
        echo "
    </p>
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'errors');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cp", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
</div>

  <div>
    <p>
    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono1", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telefono1:"));
        echo "
    </p>
    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono1", array()), 'errors');
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono1", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
  </div>

<div>
    <p>
    ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono2", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Telefono2:"));
        echo "
    </p>
    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono2", array()), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono2", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
  </div>

<div>
    <p>
    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Fecha:"));
        echo "
    </p>
    ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'errors');
        echo "
    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget', array("attr" => array("class" => "caja")));
        echo "
  </div>

";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_6aad90d1e8a2311d889536bacc01dfa123b06b363ec8f776ba6e8b737206ae4f->leave($__internal_6aad90d1e8a2311d889536bacc01dfa123b06b363ec8f776ba6e8b737206ae4f_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Empresa:nueva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  160 => 57,  156 => 56,  151 => 54,  143 => 49,  139 => 48,  134 => 46,  126 => 41,  122 => 40,  117 => 38,  109 => 33,  105 => 32,  100 => 30,  92 => 25,  88 => 24,  83 => 22,  75 => 17,  71 => 16,  66 => 14,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    {{ form_label(form.nombre, 'Nombre de la Empresa:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.nombre) }}
    {{ form_widget(form.nombre, {'attr': {'class': 'caja'}}) }}
    </div>

<div>
    <p>
    {{ form_label(form.direccion, 'Direccion:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.direccion) }}
    {{ form_widget(form.direccion, {'attr': {'class': ''}}) }}
</div>

  <div>
    <p>
    {{ form_label(form.cp, 'CP:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.cp) }}
    {{ form_widget(form.cp, {'attr': {'class': 'caja'}}) }}
</div>

  <div>
    <p>
    {{ form_label(form.telefono1, 'Telefono1:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.telefono1) }}
    {{ form_widget(form.telefono1, {'attr': {'class': 'caja'}}) }}
  </div>

<div>
    <p>
    {{ form_label(form.telefono2, 'Telefono2:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.telefono2) }}
    {{ form_widget(form.telefono2, {'attr': {'class': 'caja'}}) }}
  </div>

<div>
    <p>
    {{ form_label(form.fecha, 'Fecha:', {'label_attr': {'class': ''}}) }}
    </p>
    {{ form_errors(form.fecha) }}
    {{ form_widget(form.fecha, {'attr': {'class': 'caja'}}) }}
  </div>

{{ form_end(form) }}


{% endblock %}", "GFCTBundle:Empresa:nueva.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Empresa/nueva.html.twig");
    }
}
