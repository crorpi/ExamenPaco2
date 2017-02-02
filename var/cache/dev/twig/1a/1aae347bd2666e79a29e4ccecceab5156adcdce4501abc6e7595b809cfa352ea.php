<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8e842deaa56023a7735db099c07ff2d2c5013e52df766b4df09faa75674b7764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_807dc5d6cd26a966b2198923c1b2e17d74717ab718d860d6d1a2b6156b69c599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807dc5d6cd26a966b2198923c1b2e17d74717ab718d860d6d1a2b6156b69c599->enter($__internal_807dc5d6cd26a966b2198923c1b2e17d74717ab718d860d6d1a2b6156b69c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807dc5d6cd26a966b2198923c1b2e17d74717ab718d860d6d1a2b6156b69c599->leave($__internal_807dc5d6cd26a966b2198923c1b2e17d74717ab718d860d6d1a2b6156b69c599_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17ba5a3365cbae33a5436968249e602fa4f1e718a50116d7778808ceb7346673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ba5a3365cbae33a5436968249e602fa4f1e718a50116d7778808ceb7346673->enter($__internal_17ba5a3365cbae33a5436968249e602fa4f1e718a50116d7778808ceb7346673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_17ba5a3365cbae33a5436968249e602fa4f1e718a50116d7778808ceb7346673->leave($__internal_17ba5a3365cbae33a5436968249e602fa4f1e718a50116d7778808ceb7346673_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45cf029f076e570117b69d96ef87ede4794c8c0e465e466a1221467bd5abfda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cf029f076e570117b69d96ef87ede4794c8c0e465e466a1221467bd5abfda9->enter($__internal_45cf029f076e570117b69d96ef87ede4794c8c0e465e466a1221467bd5abfda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45cf029f076e570117b69d96ef87ede4794c8c0e465e466a1221467bd5abfda9->leave($__internal_45cf029f076e570117b69d96ef87ede4794c8c0e465e466a1221467bd5abfda9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a3aeda37b6e2b2ae479495f9436daa3dd0a4e4f86bea6992b225dfe9a85d4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3aeda37b6e2b2ae479495f9436daa3dd0a4e4f86bea6992b225dfe9a85d4c0->enter($__internal_4a3aeda37b6e2b2ae479495f9436daa3dd0a4e4f86bea6992b225dfe9a85d4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a3aeda37b6e2b2ae479495f9436daa3dd0a4e4f86bea6992b225dfe9a85d4c0->leave($__internal_4a3aeda37b6e2b2ae479495f9436daa3dd0a4e4f86bea6992b225dfe9a85d4c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
