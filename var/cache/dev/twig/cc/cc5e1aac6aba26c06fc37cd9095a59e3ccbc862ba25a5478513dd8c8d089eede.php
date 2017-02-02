<?php

/* @GFCT/Default/register.html.twig */
class __TwigTemplate_ae1cf31f84f9b7a2998952ac298e683a7e1330796080404c1dd8a70a283381df extends Twig_Template
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
        $__internal_c25ffb04c57902af4a5c93f36af343af946963753b245b67d508f1aad4a5cb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25ffb04c57902af4a5c93f36af343af946963753b245b67d508f1aad4a5cb4e->enter($__internal_c25ffb04c57902af4a5c93f36af343af946963753b245b67d508f1aad4a5cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Default/register.html.twig"));

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
        
        $__internal_c25ffb04c57902af4a5c93f36af343af946963753b245b67d508f1aad4a5cb4e->leave($__internal_c25ffb04c57902af4a5c93f36af343af946963753b245b67d508f1aad4a5cb4e_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Default/register.html.twig";
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
{{ form_end(form) }}\t", "@GFCT/Default/register.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Default\\register.html.twig");
    }
}
