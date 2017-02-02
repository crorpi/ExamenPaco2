<?php

/* ::base.html.twig */
class __TwigTemplate_02253ad41d2814326035cbd934a24651c2b57297bd24a4887b2bec87b65734a7 extends Twig_Template
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
        $__internal_1ad74aa4b3d26e5e6f2c48ef64d50d6c3fc3f064d56c188b288b8b272dea2695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad74aa4b3d26e5e6f2c48ef64d50d6c3fc3f064d56c188b288b8b272dea2695->enter($__internal_1ad74aa4b3d26e5e6f2c48ef64d50d6c3fc3f064d56c188b288b8b272dea2695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                    ";
        // line 67
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 68
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Default/conf"), "html", null, true);
            echo "\" class=\"list-group-item\">Conf</a>
                    ";
        }
        // line 70
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 71
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/admin"), "html", null, true);
            echo "\" class=\"list-group-item\">Admin</a> <!-- If para dejar ver la barra admin solo a los usuarios que pasen por /admin <-!-->

                    ";
        }
        // line 74
        echo "
                    ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 76
            echo "
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Default/nuevoConf"), "html", null, true);
            echo "\" class=\"list-group-item active\">Crear Nuevo Conf</a>

                     ";
        }
        // line 80
        echo "                     
                </div>
            </div>

            <div class=\"col-md-9\">

               ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
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
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "        </body>
        </html>
";
        
        $__internal_1ad74aa4b3d26e5e6f2c48ef64d50d6c3fc3f064d56c188b288b8b272dea2695->leave($__internal_1ad74aa4b3d26e5e6f2c48ef64d50d6c3fc3f064d56c188b288b8b272dea2695_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec5d653f0515fd9f39a469cb1541018e70ed75c7ff88e2780ec9b2c9c7f4d9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5d653f0515fd9f39a469cb1541018e70ed75c7ff88e2780ec9b2c9c7f4d9a8->enter($__internal_ec5d653f0515fd9f39a469cb1541018e70ed75c7ff88e2780ec9b2c9c7f4d9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "GFCT";
        
        $__internal_ec5d653f0515fd9f39a469cb1541018e70ed75c7ff88e2780ec9b2c9c7f4d9a8->leave($__internal_ec5d653f0515fd9f39a469cb1541018e70ed75c7ff88e2780ec9b2c9c7f4d9a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bc6f520cf35f203c19b995ca1a8a68369848e9479257006c8967e23c51132d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc6f520cf35f203c19b995ca1a8a68369848e9479257006c8967e23c51132d1->enter($__internal_3bc6f520cf35f203c19b995ca1a8a68369848e9479257006c8967e23c51132d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

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
        
        $__internal_3bc6f520cf35f203c19b995ca1a8a68369848e9479257006c8967e23c51132d1->leave($__internal_3bc6f520cf35f203c19b995ca1a8a68369848e9479257006c8967e23c51132d1_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4cf24632594d441e6491436c35faacd186df66a5e69e505cf2d4a71a21f58e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cf24632594d441e6491436c35faacd186df66a5e69e505cf2d4a71a21f58e2->enter($__internal_a4cf24632594d441e6491436c35faacd186df66a5e69e505cf2d4a71a21f58e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 87
        echo "                ";
        
        $__internal_a4cf24632594d441e6491436c35faacd186df66a5e69e505cf2d4a71a21f58e2->leave($__internal_a4cf24632594d441e6491436c35faacd186df66a5e69e505cf2d4a71a21f58e2_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbe7db6f40a29f4059d0447e35df72bcf42d456d93cf693592657fe37804a095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe7db6f40a29f4059d0447e35df72bcf42d456d93cf693592657fe37804a095->enter($__internal_dbe7db6f40a29f4059d0447e35df72bcf42d456d93cf693592657fe37804a095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_dbe7db6f40a29f4059d0447e35df72bcf42d456d93cf693592657fe37804a095->leave($__internal_dbe7db6f40a29f4059d0447e35df72bcf42d456d93cf693592657fe37804a095_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 119,  230 => 87,  224 => 86,  204 => 8,  201 => 7,  195 => 6,  183 => 5,  174 => 120,  172 => 119,  139 => 88,  137 => 86,  129 => 80,  123 => 77,  120 => 76,  118 => 75,  115 => 74,  108 => 71,  105 => 70,  99 => 68,  97 => 67,  93 => 66,  89 => 65,  85 => 64,  38 => 21,  36 => 6,  32 => 5,  26 => 1,);
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
    <title>{% block title %}GFCT{% endblock %}</title>
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
                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                    <a href=\"{{asset('/Default/conf')}}\" class=\"list-group-item\">Conf</a>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{asset('/admin')}}\" class=\"list-group-item\">Admin</a> <!-- If para dejar ver la barra admin solo a los usuarios que pasen por /admin <-!-->

                    {% endif %}

                    {% if is_granted('ROLE_SUPER_ADMIN') %}

                    <a href=\"{{asset('/Default/nuevoConf')}}\" class=\"list-group-item active\">Crear Nuevo Conf</a>

                     {% endif %}
                     
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
", "::base.html.twig", "C:\\xampp\\symfony\\GFCT\\app/Resources\\views/base.html.twig");
    }
}
