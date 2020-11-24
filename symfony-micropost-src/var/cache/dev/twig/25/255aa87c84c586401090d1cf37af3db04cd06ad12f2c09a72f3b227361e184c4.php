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
class __TwigTemplate_06155e6f5175449af2295c871ec4f77d6486cf682afd300895fb6278e6168ad5 extends Template
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
                            <a class=\"btn btn-dark nav-link\" href=\"";
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
                                <a class=\"btn btn-dark nav-link\" href=\"";
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
                                <a class=\"btn btn-dark nav-link\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "fullName", [], "any", false, false, false, 38), "html", null, true);
            echo "</a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"btn btn-dark nav-link\" href=\"";
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
                                <a class=\"btn btn-dark nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 48
        echo "                        <li class=\"nav-item text-nowrap dropdown\">
                            <a class=\"btn btn-dark btn-secondary nav-link\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 50
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "locale", [], "any", false, false, false, 50)), "html", null, true);
        echo "
                            </a>

                            ";
        // line 53
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "get", [0 => "_route"], "method", false, false, false, 53);
        // line 54
        echo "                            ";
        $context["route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route_params"], "method", false, false, false, 54);
        // line 55
        echo "                            ";
        $context["params"] = twig_array_merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "query", [], "any", false, false, false, 55), "all", [], "any", false, false, false, 55));
        // line 56
        echo "
                            ";
        // line 57
        $context["applocales"] = twig_split_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 57, $this->source); })()), "|");
        // line 58
        echo "
                            <div class=\"dropdown-menu dropdown-menu-right\" style=\"min-width: min-content\" aria-labelledby=\"dropdownMenuLink\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applocales"]) || array_key_exists("applocales", $context) ? $context["applocales"] : (function () { throw new RuntimeError('Variable "applocales" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 61
            echo "                                    ";
            if ((0 !== twig_compare($context["locale"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "locale", [], "any", false, false, false, 61)))) {
                // line 62
                echo "                                        <a id=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\" class=\"dropdown-item\"
                                                href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 63, $this->source); })()), twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 63, $this->source); })()), ["_locale" => $context["locale"]])), "html", null, true);
                echo "\">
                                            ";
                // line 64
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["locale"]), "html", null, true);
                echo "
                                        </a>
                                    ";
            }
            // line 67
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </div>
                        </li>
                    </ul>

                </div>

            </nav>

            <main role=\"main\" class=\"container\">
                <div class=\"my-3 p-3 bg-white rounded box-shadow\">
                    ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "                </div>
            </main>
            ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
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

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("js/app");
        echo "

                <script type=\"text/javascript\">
                    ";
        // line 86
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 87
            echo "                        function fetchNotificationCount() {
                            fetch(
                                '";
            // line 89
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
                    ";
        }
        // line 102
        echo "                </script>
            ";
        
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
        return array (  326 => 102,  310 => 89,  306 => 87,  304 => 86,  297 => 83,  287 => 82,  277 => 79,  267 => 78,  253 => 7,  243 => 6,  224 => 5,  213 => 104,  211 => 82,  207 => 80,  205 => 78,  193 => 68,  187 => 67,  181 => 64,  177 => 63,  172 => 62,  169 => 61,  165 => 60,  161 => 58,  159 => 57,  156 => 56,  153 => 55,  150 => 54,  148 => 53,  142 => 50,  138 => 48,  130 => 45,  127 => 44,  119 => 41,  111 => 38,  101 => 31,  97 => 30,  94 => 29,  92 => 28,  85 => 23,  77 => 20,  74 => 19,  72 => 18,  66 => 15,  59 => 10,  57 => 6,  53 => 5,  47 => 1,);
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
                            <a class=\"btn btn-dark nav-link\" href=\"{{ path('micro_post_add') }}\">{{ 'Add new'|trans }}</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>

                <div class=\"order-2 order-md-1\">
                    <ul class=\"navbar-nav px-3\">
                        {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item text-nowrap border-right border-secondary\">
                                <a class=\"btn btn-dark nav-link\" href=\"{{ path('notification_all') }}\">
                                    {{ 'Notification'|trans }}
                                    <span class=\"badge badge-light\" id=\"notification-count\">
                                        <i class=\"fa fa-circle fa-circle-o-notch fa-spin\"></i>
                                    </span>
                                </a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"btn btn-dark nav-link\" href=\"{{ path('micro_post_user', {'username': app.user.username} ) }}\">{{ app.user.fullName }}</a>
                            </li>
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"btn btn-dark nav-link\" href=\"{{ logout_path() }}\">{{ 'Sign out'|trans }}</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item text-nowrap\">
                                <a class=\"btn btn-dark nav-link\" href=\"{{ path('security_login') }}\">{{ 'Sign in'|trans }}</a>
                            </li>
                        {% endif %}
                        <li class=\"nav-item text-nowrap dropdown\">
                            <a class=\"btn btn-dark btn-secondary nav-link\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {{ app.request.locale|capitalize }}
                            </a>

                            {% set route = app.request.attributes.get('_route') %}
                            {% set route_params = app.request.attributes.get('_route_params') %}
                            {% set params = route_params|merge(app.request.query.all) %}

                            {% set applocales = locales|split('|') %}

                            <div class=\"dropdown-menu dropdown-menu-right\" style=\"min-width: min-content\" aria-labelledby=\"dropdownMenuLink\">
                                {% for locale in applocales %}
                                    {% if locale != app.request.locale %}
                                        <a id=\"{{ locale }}\" class=\"dropdown-item\"
                                                href=\"{{ path(route, params|merge({_locale: locale})) }}\">
                                            {{ locale|capitalize }}
                                        </a>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </li>
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

                <script type=\"text/javascript\">
                    {% if is_granted('ROLE_USER') %}
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
                    {% endif %}
                </script>
            {% endblock %}
        </body>
</html>", "base.html.twig", "/home/vagrant/symfony-01/symfony-micropost-src/templates/base.html.twig");
    }
}
