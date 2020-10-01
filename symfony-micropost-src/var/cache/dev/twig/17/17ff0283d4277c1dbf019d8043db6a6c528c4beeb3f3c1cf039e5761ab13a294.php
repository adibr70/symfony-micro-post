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

/* micro-post/user-posts.html.twig */
class __TwigTemplate_b219e51eb50b20f19e3563f8cd5e9cd3af42037b2e916a762ca7eb5615919a58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/user-posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/user-posts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/user-posts.html.twig", 1);
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
        echo "
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "fullName", [], "any", false, false, false, 9), "html", null, true);
        echo "
                    <small class=\"text-muted\">· @";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "</small>
                </h5>

                ";
        // line 13
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (0 !== twig_compare((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13))))) {
            // line 14
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "followers", [], "any", false, false, false, 14), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)], "method", false, false, false, 14), false))) {
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_follow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    ";
            } else {
                // line 18
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_unfollow", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-danger\">Unfollow</a>
                    ";
            }
            // line 21
            echo "                ";
        }
        // line 22
        echo "            </div>
        </div>
    </div>
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Followers</h5>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "followers", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["follower"]) {
            // line 32
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, $context["follower"], "username", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                                @";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["follower"], "username", [], "any", false, false, false, 33), "html", null, true);
            echo "
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['follower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Following</h5>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "following", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["following"]) {
            // line 46
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, $context["following"], "username", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
                                @";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["following"], "username", [], "any", false, false, false, 47), "html", null, true);
            echo "
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['following'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </li>
                </ul>
            </div>
        </div>
    </div>

    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 56, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 57
            echo "
        ";
            // line 58
            echo twig_include($this->env, $context, "micro-post/row-post.html.twig", ["post" => $context["post"]]);
            echo "

    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/user-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 58,  190 => 57,  173 => 56,  165 => 50,  156 => 47,  151 => 46,  147 => 45,  136 => 36,  127 => 33,  122 => 32,  118 => 31,  107 => 22,  104 => 21,  97 => 18,  90 => 15,  87 => 14,  85 => 13,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    {{ user.fullName }}
                    <small class=\"text-muted\">· @{{ user.username }}</small>
                </h5>

                {% if is_granted('ROLE_USER') and user != app.user  %}
                    {% if user.followers.contains(app.user) == false %}
                        <a href=\"{{ path('following_follow', {'id':user.id}) }}\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    {% else %}
                        <a href=\"{{ path('following_unfollow', {'id':user.id}) }}\"
                           class=\"btn btn-outline-danger\">Unfollow</a>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Followers</h5>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        {% for follower in user.followers %}
                            <a href=\"{{ path(\"micro_post_user\", {'username': follower.username}) }}\">
                                @{{ follower.username }}
                            </a>
                        {% endfor %}
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Following</h5>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        {% for following in user.following %}
                            <a href=\"{{ path(\"micro_post_user\", {'username': following.username}) }}\">
                                @{{ following.username }}
                            </a>
                        {% endfor %}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {% for post in posts %}

        {{ include('micro-post/row-post.html.twig', {'post': post}) }}

    {% endfor %}
{% endblock %}", "micro-post/user-posts.html.twig", "/home/vagrant/symfony-01/symfony-micropost-src/templates/micro-post/user-posts.html.twig");
    }
}
