<?php

/* GFCTBundle:Default:register.html.twig */
class __TwigTemplate_66f66313012828eac7d7b7e3ac6c06dfbdaf4e41b0232df2013fa3dbba413c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad1b9fdb0e588895cc60e024cd262e6d8ad632a35fbf62c0d45c5fe7d78ce56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1b9fdb0e588895cc60e024cd262e6d8ad632a35fbf62c0d45c5fe7d78ce56a->enter($__internal_ad1b9fdb0e588895cc60e024cd262e6d8ad632a35fbf62c0d45c5fe7d78ce56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GFCTBundle:Default:register.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
\t";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
\t";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
\t";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Salvar", array()), 'row');
        echo "
\t";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Borrar", array()), 'row');
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "\t";
        
        $__internal_ad1b9fdb0e588895cc60e024cd262e6d8ad632a35fbf62c0d45c5fe7d78ce56a->leave($__internal_ad1b9fdb0e588895cc60e024cd262e6d8ad632a35fbf62c0d45c5fe7d78ce56a_prof);

    }

    public function getTemplateName()
    {
        return "GFCTBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
\t{{ form_row(form.username) }}
\t{{ form_row(form.email) }}
\t{{ form_row(form.plainPassword.first) }}
\t{{ form_row(form.plainPassword.second) }}
\t{{ form_row(form.Salvar) }}
\t{{ form_row(form.Borrar) }}
{{ form_end(form) }}\t", "GFCTBundle:Default:register.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle/Resources/views/Default/register.html.twig");
    }
}
