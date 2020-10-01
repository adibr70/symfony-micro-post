<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_f40fd14fa0d7d8b9ac5cb037f81e6f39d53151817df4e975be54814b895972c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\">
            <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        </head>
        <body class=\"bg-light\">

            <nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
                <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
                   href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_index");
        echo "\">Micro Post App</a>
                <div class=\"w-100 order-1 order-md-0\">
                    <ul class=\"navbar-nav px-3\">
                        ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 19
            echo "                        <li class=\"nav-item text-nowrap\">
                            <a class=\"nav-link\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_add");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new"), "html", null, true);
            echo "</a>
                        </li>
                        ";
        }
        // line 23
        echo "                    </ul>
                </div>

                <div class=\"order-2 order-md-1\">
                    <ul class=\"navbar-nav px-3\">
                        ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "                            <li class=\"nav-item text-nowrap border-right border-secondary\">
                                <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_all");
            echo "\">
                                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notification"), "html", null, true);
            echo "
                                    <span class=\"badge badge-light\" id=\"notification-count\">
                                        <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                                    </span>
                                </a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"nav-link\" href=\"#\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "fullName", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"nav-link\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        } else {
            // line 44
            echo "                            <li class=\"nav-item text-nowrap\">
                                <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 48
        echo "                    </ul>
                </div>

            </nav>

            <main role=\"main\" class=\"container\">
                <div class=\"my-3 p-3 bg-white rounded box-shadow\">
                    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "                </div>
            </main>
            ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "        </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/app");
        echo "
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/app");
        echo "

                ";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 63
            echo "                    <script type=\"text/javascript\">
                        function fetchNotificationCount() {
                            fetch(
                                '";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_unread");
            echo "',
                                {'credentials': 'include'}
                            ).then(function (response) {
                                response.json().then(function (data) {
                                    document.getElementById('notification-count').innerText = data.count;
                                    setTimeout(fetchNotificationCount, 5000);
                                });
                            }).catch(function (reason) {
                                
                            });
                        }
                        fetchNotificationCount();
                    </script>
                ";
        }
        // line 80
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  267 => 80,  250 => 66,  245 => 63,  243 => 62,  237 => 60,  227 => 59,  217 => 56,  207 => 55,  193 => 7,  183 => 6,  164 => 5,  153 => 81,  151 => 59,  147 => 57,  145 => 55,  136 => 48,  128 => 45,  125 => 44,  117 => 41,  111 => 38,  101 => 31,  97 => 30,  94 => 29,  92 => 28,  85 => 23,  77 => 20,  74 => 19,  72 => 18,  66 => 15,  59 => 10,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\">
            <title>{% block title %}Welcome!{% endblock %}</title>
            {% block stylesheets %}
                {{ encore_entry_link_tags('css/app') }}
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            {% endblock %}
        </head>
        <body class=\"bg-light\">

            <nav class=\"navbar navbar-dark navbar-expand-md sticky-top bg-dark p-0\">
                <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\"
                   href=\"{{ path('micro_post_index') }}\">Micro Post App</a>
                <div class=\"w-100 order-1 order-md-0\">
                    <ul class=\"navbar-nav px-3\">
                        {% if is_granted('ROLE_USER') %}
                        <li class=\"nav-item text-nowrap\">
                            <a class=\"nav-link\" href=\"{{ path('micro_post_add') }}\">{{ 'Add new'|trans }}</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>

                <div class=\"order-2 order-md-1\">
                    <ul class=\"navbar-nav px-3\">
                        {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item text-nowrap border-right border-secondary\">
                                <a class=\"nav-link\" href=\"{{ path('notification_all') }}\">
                                    {{ 'Notification'|trans }}
                                    <span class=\"badge badge-light\" id=\"notification-count\">
                                        <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                                    </span>
                                </a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"nav-link\" href=\"#\">{{ app.user.fullName }}</a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"nav-link\" href=\"{{ logout_path() }}\">{{ 'Sign out'|trans }}</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"nav-link\" href=\"{{ path('security_login') }}\">{{ 'Sign in'|trans }}</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>

            </nav>

            <main role=\"main\" class=\"container\">
                <div class=\"my-3 p-3 bg-white rounded box-shadow\">
                    {% block body %}
                    {% endblock %}
                </div>
            </main>
            {% block javascripts %}
                {{ encore_entry_script_tags('js/app') }}

                {% if is_granted('ROLE_USER') %}
                    <script type=\"text/javascript\">
                        function fetchNotificationCount() {
                            fetch(
                                '{{ path('notification_unread') }}',
                                {'credentials': 'include'}
                            ).then(function (response) {
                                response.json().then(function (data) {
                                    document.getElementById('notification-count').innerText = data.count;
                                    setTimeout(fetchNotificationCount, 5000);
                                });
                            }).catch(function (reason) {
                                
                            });
                        }
                        fetchNotificationCount();
                    </script>
                {% endif %}
            {% endblock %}
        </body>
</html>", "base.html.twig", "/home/vagrant/symfony-01/symfony-micropost-src/templates/base.html.twig");
    }
}
