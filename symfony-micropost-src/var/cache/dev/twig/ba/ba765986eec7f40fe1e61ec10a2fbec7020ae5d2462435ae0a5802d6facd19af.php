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
class __TwigTemplate_2e72744edabf7523f3af901fcf0c8bea5ea1e689f0a68588c49aec69dc876614 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/notifications.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notification/notifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card\">
        ";
        // line 5
        if (twig_length_filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 5, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 16, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  136 => 36,  130 => 32,  126 => 30,  119 => 28,  114 => 26,  109 => 24,  104 => 23,  102 => 22,  95 => 18,  92 => 17,  88 => 16,  81 => 12,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"card\">
        {% if notifications|length %}
            <div class=\"card-body\">
                <h5>Unread notifications</h5>
            </div>
            <ul class=\"list-group-item list-group-flush\">
                <li class=\"list-group-item\">
                    <a class=\"btn btn-block btn-default btn-link btn-outline-info\"
                        href=\"{{ path('notification_acknowledge_all') }}\">
                        Mark all as read
                    </a>
                </li>
                {% for notification in notifications %}
                    <li class=\"list-group-item\">
                        <a href=\"{{ path('notification_acknowledge', {'id':notification.id}) }}\"
                                class=\"btn btn-sm btn-primary float-right\">
                            Ok
                        </a>
                        {% if notification is like %}
                            <a href=\"{{ path('micro_post_user', {'username': notification.likedBy.username}) }}\">
                                {{ notification.likedBy.username }}</a>
                            likes your
                            <a href=\"{{ path('micro_post_post', {'id': notification.microPost.id}) }}\">post</a>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            <div class=\"card-body\">
                You have no notifications.
            </div>
        {% endif %}
    </div>
{% endblock %}", "notification/notifications.html.twig", "/home/vagrant/symfony-01/symfony-micropost-src/templates/notification/notifications.html.twig");
    }
}
