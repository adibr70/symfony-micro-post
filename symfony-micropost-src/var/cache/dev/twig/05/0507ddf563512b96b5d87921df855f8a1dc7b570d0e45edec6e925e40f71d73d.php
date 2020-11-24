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

/* micro-post/row-post.html.twig */
class __TwigTemplate_3866c4aa03a2b193e21428c5d55e7b433ce5e40a5899a289159c9dca82746f9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/row-post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro-post/row-post.html.twig"));

        // line 1
        echo "<div class=\"media text-muted pt-3\">
    ";
        // line 2
        $context["initials"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "fullName", [], "any", false, false, false, 2), " ");
        // line 3
        echo "    <img data-src=\"holder.js/32x32?text=";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 3, $this->source); })()), 0, [], "any", false, false, false, 3)), "html", null, true);
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 3, $this->source); })()), 1, [], "any", false, false, false, 3)), "html", null, true);
        echo "&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\">
               <strong class=\"text-gray-dark\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong>
            </a>
            <small>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "time", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</small>
        </span>

        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_post", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "
        </a>

        <small class=\"d-block text-right mt-3\">
            ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
            echo "</a>
            ";
        }
        // line 23
        echo "        </small>
    </p>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "micro-post/row-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  95 => 21,  92 => 20,  84 => 18,  82 => 17,  75 => 13,  71 => 12,  65 => 9,  60 => 7,  56 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"media text-muted pt-3\">
    {% set initials = post.user.fullName|split(' ') %}
    <img data-src=\"holder.js/32x32?text={{ attribute(initials, 0)|first }}{{ attribute(initials, 1)|first }}&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"{{ path('micro_post_user', {'username': post.user.username}) }}\">
               <strong class=\"text-gray-dark\">{{ post.user.username }}</strong>
            </a>
            <small>{{post.time|date(\"d/m/Y\")}}</small>
        </span>

        <a href=\"{{ path('micro_post_post', {'id': post.id}) }}\">
            {{ post.text }}
        </a>

        <small class=\"d-block text-right mt-3\">
            {% if is_granted('edit', post) %}
                <a href=\"{{ path('micro_post_edit', {'id': post.id}) }}\">{{ 'Edit'|trans }}</a>
            {% endif %}
            {% if is_granted('delete', post) %}
                <a href=\"{{ path('micro_post_delete', {'id': post.id}) }}\">{{ 'Delete'|trans }}</a>
            {% endif %}
        </small>
    </p>
</div>", "micro-post/row-post.html.twig", "/home/vagrant/symfony-01/symfony-micropost-src/templates/micro-post/row-post.html.twig");
    }
}
