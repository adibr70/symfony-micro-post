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

/* micro-post/post.html.twig */
class __TwigTemplate_998145786fd1fdd45db6dd536a2ae714e1abfe90e8ea8842bc8adc83b96aba3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "micro-post/row-post.html.twig", ["post" => ($context["post"] ?? null)]);
        echo "

    ";
        // line 6
        $context["isLiked"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getLikedBy", [], "any", false, false, false, 6), "contains", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)], "method", false, false, false, 6);
        // line 7
        echo "
    <div class=\"pt-2\">
        <button style=\"display: ";
        // line 9
        if ( !($context["isLiked"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\"
                class=\"btn btn-outline-secondary btn-sm\" id=\"like\">Like
            <span class=\"badge badge-light\" id=\"likes-like\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getLikedBy", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11), "html", null, true);
        echo "</span>
        </button>

        <button style=\"display: ";
        // line 14
        if (($context["isLiked"] ?? null)) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\"
                class=\"btn btn-outline-danger btn-sm\" id=\"unlike\">Unlike
            <span class=\"badge badge-light\" id=\"likes-unlike\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getLikedBy", [], "any", false, false, false, 16), "count", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
        </button>
    </div>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var likeButton = document.getElementById('like');
        var unlikeButton = document.getElementById('unlike');

        ";
        // line 27
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 27)))) {
            // line 28
            echo "            likeButton.disabled = true;
        ";
        }
        // line 30
        echo "
        addOnClick(
            likeButton,
            unlikeButton,
            document.getElementById('likes-unlike'),
            '";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likes_like", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "'
        );

        addOnClick(
            unlikeButton,
            likeButton,
            document.getElementById('likes-like'),
            '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likes_unlike", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "'
        )

        function switchButtons(button, oppositeButton)
        {
            button.disabled = false;
            button.style.display = 'none';
            oppositeButton.style.display = 'block';
        }

        function addOnClick(button, oppositeButton, likeCount, path)
        {
            button.addEventListener('click', function (event) {

                ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    return window.location.replace('";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "')
                ";
        }
        // line 59
        echo "
                button.disabled = true;
                fetch(path, {'credentials': 'include'}).then(function (response) {
                    response.json().then(function (data) {
                        likeCount.innerText = data.count;
                        switchButtons(button, oppositeButton);
                    });
                }).catch(function () {
                    switchButtons(button, oppositeButton);
                });
                event.preventDefault();
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "micro-post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 59,  150 => 57,  148 => 56,  131 => 42,  121 => 35,  114 => 30,  110 => 28,  108 => 27,  99 => 22,  95 => 21,  87 => 16,  78 => 14,  72 => 11,  63 => 9,  59 => 7,  57 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "micro-post/post.html.twig", "/home/vagrant/symfony-01/templates/micro-post/post.html.twig");
    }
}
