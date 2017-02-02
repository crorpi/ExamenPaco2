<?php

/* @GFCT/Default/login.html.twig */
class __TwigTemplate_fb57c2bcd2df89db782be1e71bae9e70b23f67e93ee47715a8412c9c3ceaac95 extends Twig_Template
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
        $__internal_ec6cbfa3d3efc5491e9de1e2503b37e3c4bd7fa5aa9e5e15b4b15d5e302a9111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6cbfa3d3efc5491e9de1e2503b37e3c4bd7fa5aa9e5e15b4b15d5e302a9111->enter($__internal_ec6cbfa3d3efc5491e9de1e2503b37e3c4bd7fa5aa9e5e15b4b15d5e302a9111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GFCT/Default/login.html.twig"));

        // line 1
        echo "<body>
";
        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuarioslogin");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 21
        echo "
    <button type=\"submit\">login</button>
</form>
</body>";
        
        $__internal_ec6cbfa3d3efc5491e9de1e2503b37e3c4bd7fa5aa9e5e15b4b15d5e302a9111->leave($__internal_ec6cbfa3d3efc5491e9de1e2503b37e3c4bd7fa5aa9e5e15b4b15d5e302a9111_prof);

    }

    public function getTemplateName()
    {
        return "@GFCT/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  44 => 11,  39 => 9,  36 => 8,  30 => 6,  28 => 5,  25 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('usuarioslogin') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>
</body>", "@GFCT/Default/login.html.twig", "C:\\xampp\\symfony\\GFCT\\src\\GFCTBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
