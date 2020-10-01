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
class __TwigTemplate_57a75e04f536d4abcae53fd93426695b78dee0e8ecacf3ed820f894970787e2b extends Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "fullName", [], "any", false, false, false, 38), "html", null, true);
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
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("css/app");
        echo "
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
            ";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  213 => 80,  196 => 66,  191 => 63,  189 => 62,  183 => 60,  179 => 59,  175 => 56,  171 => 55,  163 => 7,  159 => 6,  152 => 5,  147 => 81,  145 => 59,  141 => 57,  139 => 55,  130 => 48,  122 => 45,  119 => 44,  111 => 41,  105 => 38,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  71 => 20,  68 => 19,  66 => 18,  60 => 15,  53 => 10,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/vagrant/symfony-01/templates/base.html.twig");
    }
}
