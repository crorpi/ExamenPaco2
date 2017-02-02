<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31467f1ba79b8b1da0b9633f6f75d74ab93810b25384c2135363bdd9fdcfd398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3617ac019d73a173e9899b37092ed15696f41a1f79ea7c6db502c8b6f38a8e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3617ac019d73a173e9899b37092ed15696f41a1f79ea7c6db502c8b6f38a8e6e->enter($__internal_3617ac019d73a173e9899b37092ed15696f41a1f79ea7c6db502c8b6f38a8e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3617ac019d73a173e9899b37092ed15696f41a1f79ea7c6db502c8b6f38a8e6e->leave($__internal_3617ac019d73a173e9899b37092ed15696f41a1f79ea7c6db502c8b6f38a8e6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dc8ff88f04b4aafa3d5591bb043c0c71280ce7dadcc2645b7899fe3f1825a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc8ff88f04b4aafa3d5591bb043c0c71280ce7dadcc2645b7899fe3f1825a25->enter($__internal_6dc8ff88f04b4aafa3d5591bb043c0c71280ce7dadcc2645b7899fe3f1825a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6dc8ff88f04b4aafa3d5591bb043c0c71280ce7dadcc2645b7899fe3f1825a25->leave($__internal_6dc8ff88f04b4aafa3d5591bb043c0c71280ce7dadcc2645b7899fe3f1825a25_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f91bf105074b475b36035a34b9e6ca21c568331a0ae5b746f3a05801847ed88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91bf105074b475b36035a34b9e6ca21c568331a0ae5b746f3a05801847ed88c->enter($__internal_f91bf105074b475b36035a34b9e6ca21c568331a0ae5b746f3a05801847ed88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f91bf105074b475b36035a34b9e6ca21c568331a0ae5b746f3a05801847ed88c->leave($__internal_f91bf105074b475b36035a34b9e6ca21c568331a0ae5b746f3a05801847ed88c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1147e22e50dfac465c465f6cbe44f80c2f40f298a1febbd75c2ae35d0631c66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1147e22e50dfac465c465f6cbe44f80c2f40f298a1febbd75c2ae35d0631c66f->enter($__internal_1147e22e50dfac465c465f6cbe44f80c2f40f298a1febbd75c2ae35d0631c66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1147e22e50dfac465c465f6cbe44f80c2f40f298a1febbd75c2ae35d0631c66f->leave($__internal_1147e22e50dfac465c465f6cbe44f80c2f40f298a1febbd75c2ae35d0631c66f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
