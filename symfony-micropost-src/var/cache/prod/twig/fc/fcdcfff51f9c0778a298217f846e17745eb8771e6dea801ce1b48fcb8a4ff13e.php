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

/* notification/notifications.html.twig */
class __TwigTemplate_8e28bdd85d4cee98ad81d7a993cedfc45bfc93f2d07282ea90c1b73efa72f128 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "notification/notifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"card\">
        ";
        // line 5
        if (twig_length_filter($this->env, ($context["notifications"] ?? null))) {
            // line 6
            echo "            <div class=\"card-body\">
                <h5>Unread notifications</h5>
            </div>
            <ul class=\"list-group-item list-group-flush\">
                <li class=\"list-group-item\">
                    <a class=\"btn btn-block btn-default btn-link btn-outline-info\"
                        href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_acknowledge_all");
            echo "\">
                        Mark all as read
                    </a>
                </li>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 17
                echo "                    <li class=\"list-group-item\">
                        <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notification_acknowledge", ["id" => twig_get_attribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\"
                                class=\"btn btn-sm btn-primary float-right\">
                            Ok
                        </a>
                        ";
                // line 22
                if (call_user_func_array($this->env->getTest('like')->getCallable(), [$context["notification"]])) {
                    // line 23
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\">
                                ";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "likedBy", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
                    echo "</a>
                            likes your
                            <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["notification"], "microPost", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
                    echo "\">post</a>
                        ";
                }
                // line 28
                echo "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </ul>
        ";
        } else {
            // line 32
            echo "            <div class=\"card-body\">
                You have no notifications.
            </div>
        ";
        }
        // line 36
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "notification/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  112 => 32,  108 => 30,  101 => 28,  96 => 26,  91 => 24,  86 => 23,  84 => 22,  77 => 18,  74 => 17,  70 => 16,  63 => 12,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification/notifications.html.twig", "/home/vagrant/symfony-01/templates/notification/notifications.html.twig");
    }
}
