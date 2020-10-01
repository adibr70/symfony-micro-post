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
class __TwigTemplate_2eaf3ef9b62c36ea509953950b951f87d4ef9f22a336269640e9d7f6c243885e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "micro-post/post.html.twig", 1);
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
        echo "    ";
        echo twig_include($this->env, $context, "micro-post/row-post.html.twig", ["post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 4, $this->source); })())]);
        echo "

    ";
        // line 6
        $context["isLiked"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 6, $this->source); })()), "getLikedBy", [], "any", false, false, false, 6), "contains", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)], "method", false, false, false, 6);
        // line 7
        echo "
    <div class=\"pt-2\">
        <button style=\"display: ";
        // line 9
        if ( !(isset($context["isLiked"]) || array_key_exists("isLiked", $context) ? $context["isLiked"] : (function () { throw new RuntimeError('Variable "isLiked" does not exist.', 9, $this->source); })())) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\"
                class=\"btn btn-outline-secondary btn-sm\" id=\"like\">Like
            <span class=\"badge badge-light\" id=\"likes-like\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "getLikedBy", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11), "html", null, true);
        echo "</span>
        </button>

        <button style=\"display: ";
        // line 14
        if ((isset($context["isLiked"]) || array_key_exists("isLiked", $context) ? $context["isLiked"] : (function () { throw new RuntimeError('Variable "isLiked" does not exist.', 14, $this->source); })())) {
            echo "block";
        } else {
            echo "none";
        }
        echo "\"
                class=\"btn btn-outline-danger btn-sm\" id=\"unlike\">Unlike
            <span class=\"badge badge-light\" id=\"likes-unlike\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "getLikedBy", [], "any", false, false, false, 16), "count", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
        </button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var likeButton = document.getElementById('like');
        var unlikeButton = document.getElementById('unlike');

        ";
        // line 27
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likes_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "'
        );

        addOnClick(
            unlikeButton,
            likeButton,
            document.getElementById('likes-like'),
            '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likes_unlike", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
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
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  186 => 59,  180 => 57,  178 => 56,  161 => 42,  151 => 35,  144 => 30,  140 => 28,  138 => 27,  129 => 22,  119 => 21,  105 => 16,  96 => 14,  90 => 11,  81 => 9,  77 => 7,  75 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ include('micro-post/row-post.html.twig', {'post': post}) }}

    {% set isLiked = post.getLikedBy.contains(app.user) %}

    <div class=\"pt-2\">
        <button style=\"display: {% if not isLiked %}block{% else %}none{% endif %}\"
                class=\"btn btn-outline-secondary btn-sm\" id=\"like\">Like
            <span class=\"badge badge-light\" id=\"likes-like\">{{ post.getLikedBy.count }}</span>
        </button>

        <button style=\"display: {% if isLiked %}block{% else %}none{% endif %}\"
                class=\"btn btn-outline-danger btn-sm\" id=\"unlike\">Unlike
            <span class=\"badge badge-light\" id=\"likes-unlike\">{{ post.getLikedBy.count }}</span>
        </button>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var likeButton = document.getElementById('like');
        var unlikeButton = document.getElementById('unlike');

        {% if app.user == post.user %}
            likeButton.disabled = true;
        {% endif %}

        addOnClick(
            likeButton,
            unlikeButton,
            document.getElementById('likes-unlike'),
            '{{ path('likes_like', {'id':post.id}) }}'
        );

        addOnClick(
            unlikeButton,
            likeButton,
            document.getElementById('likes-like'),
            '{{ path('likes_unlike', {'id':post.id}) }}'
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

                {% if not app.user %}
                    return window.location.replace('{{ path('security_login') }}')
                {% endif %}

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
{% endblock %}", "micro-post/post.html.twig", "/home/vagrant/symfony-01/symfony-micropost-src/templates/micro-post/post.html.twig");
    }
}
