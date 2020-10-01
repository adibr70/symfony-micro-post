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
class __TwigTemplate_ae8e3d76885ba3c7906efc6a76dc3330925f7aac3b66c6335f1419de7118c7cd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/user-posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"card-group py-2\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 9), "html", null, true);
        echo "
                    <small class=\"text-muted\">· @";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "</small>
                </h5>

                ";
        // line 13
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (0 !== twig_compare(($context["user"] ?? null), twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13))))) {
            // line 14
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "followers", [], "any", false, false, false, 14), "contains", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)], "method", false, false, false, 14), false))) {
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_follow", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\"
                           class=\"btn btn-outline-primary\">Follow</a>
                    ";
            } else {
                // line 18
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("following_unfollow", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "followers", [], "any", false, false, false, 31));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "following", [], "any", false, false, false, 45));
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
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        return array (  175 => 58,  172 => 57,  155 => 56,  147 => 50,  138 => 47,  133 => 46,  129 => 45,  118 => 36,  109 => 33,  104 => 32,  100 => 31,  89 => 22,  86 => 21,  79 => 18,  72 => 15,  69 => 14,  67 => 13,  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "micro-post/user-posts.html.twig", "/home/vagrant/symfony-01/templates/micro-post/user-posts.html.twig");
    }
}
