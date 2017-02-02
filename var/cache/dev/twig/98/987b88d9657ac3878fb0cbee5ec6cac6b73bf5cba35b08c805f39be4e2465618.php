<?php

/* base.html.twig */
class __TwigTemplate_a61535d952e6f420bd0500ba095e8397a24e116f77670c2b161499e58f1d3874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_261bcd166e720a10614336ab96f4a09dff487a386826d4edeaf920b48294dba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261bcd166e720a10614336ab96f4a09dff487a386826d4edeaf920b48294dba3->enter($__internal_261bcd166e720a10614336ab96f4a09dff487a386826d4edeaf920b48294dba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Desarrolo Web en Entorno Servidor: Cristian Ortola</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\"></a>
                    </li>
                    <li>
                        <a href=\"#\"></a>
                    </li>
                    <li>
                        <a href=\"#\"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">GFCT</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Empresa/nueva"), "html", null, true);
        echo "\" class=\"list-group-item active\">Crear Empresa</a>
                    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Empresa/all"), "html", null, true);
        echo "\" class=\"list-group-item\">Empresas</a>
                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Alumno/all"), "html", null, true);
        echo "\" class=\"list-group-item\">Alumnos y Empresas</a>
                </div>
            </div>

            <div class=\"col-md-9\">

               ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>
        ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "        </body>
        </html>
";
        
        $__internal_261bcd166e720a10614336ab96f4a09dff487a386826d4edeaf920b48294dba3->leave($__internal_261bcd166e720a10614336ab96f4a09dff487a386826d4edeaf920b48294dba3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30f05c2ee5f5d04026f1e123728a15bd40f9a76d71ff32fb87d85e7032991f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f05c2ee5f5d04026f1e123728a15bd40f9a76d71ff32fb87d85e7032991f35->enter($__internal_30f05c2ee5f5d04026f1e123728a15bd40f9a76d71ff32fb87d85e7032991f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_30f05c2ee5f5d04026f1e123728a15bd40f9a76d71ff32fb87d85e7032991f35->leave($__internal_30f05c2ee5f5d04026f1e123728a15bd40f9a76d71ff32fb87d85e7032991f35_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e86f3a1adc0487182f39965ad8b94e2c1fb58bd1b5419323807bb4b23bdfede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e86f3a1adc0487182f39965ad8b94e2c1fb58bd1b5419323807bb4b23bdfede->enter($__internal_6e86f3a1adc0487182f39965ad8b94e2c1fb58bd1b5419323807bb4b23bdfede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styleForm.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/shop-item.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"style4.css\">
    ";
        
        $__internal_6e86f3a1adc0487182f39965ad8b94e2c1fb58bd1b5419323807bb4b23bdfede->leave($__internal_6e86f3a1adc0487182f39965ad8b94e2c1fb58bd1b5419323807bb4b23bdfede_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fc0fd0a212c385d88704b5098ba86e61cc037b8164a942fd2e717f6e5acc0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc0fd0a212c385d88704b5098ba86e61cc037b8164a942fd2e717f6e5acc0ef->enter($__internal_1fc0fd0a212c385d88704b5098ba86e61cc037b8164a942fd2e717f6e5acc0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 73
        echo "                ";
        
        $__internal_1fc0fd0a212c385d88704b5098ba86e61cc037b8164a942fd2e717f6e5acc0ef->leave($__internal_1fc0fd0a212c385d88704b5098ba86e61cc037b8164a942fd2e717f6e5acc0ef_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7b4d53b0916ed6a4938e0ddce5852be25e6aede9ead7d42b0912192e5044d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b4d53b0916ed6a4938e0ddce5852be25e6aede9ead7d42b0912192e5044d5f->enter($__internal_e7b4d53b0916ed6a4938e0ddce5852be25e6aede9ead7d42b0912192e5044d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e7b4d53b0916ed6a4938e0ddce5852be25e6aede9ead7d42b0912192e5044d5f->leave($__internal_e7b4d53b0916ed6a4938e0ddce5852be25e6aede9ead7d42b0912192e5044d5f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 105,  195 => 73,  189 => 72,  169 => 8,  166 => 7,  160 => 6,  148 => 5,  139 => 106,  137 => 105,  104 => 74,  102 => 72,  93 => 66,  89 => 65,  85 => 64,  38 => 21,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styleForm.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/shop-item.css')}}\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"style4.css\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Desarrolo Web en Entorno Servidor: Cristian Ortola</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\"></a>
                    </li>
                    <li>
                        <a href=\"#\"></a>
                    </li>
                    <li>
                        <a href=\"#\"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">GFCT</p>
                <div class=\"list-group\">
                    <a href=\"{{asset('/Empresa/nueva')}}\" class=\"list-group-item active\">Crear Empresa</a>
                    <a href=\"{{asset('/Empresa/all')}}\" class=\"list-group-item\">Empresas</a>
                    <a href=\"{{asset('/Alumno/all')}}\" class=\"list-group-item\">Alumnos y Empresas</a>
                </div>
            </div>

            <div class=\"col-md-9\">

               {% block body %}
                {% endblock %}

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
        </body>
        </html>
", "base.html.twig", "C:\\xampp\\symfony\\GFCT\\app\\Resources\\views\\base.html.twig");
    }
}
