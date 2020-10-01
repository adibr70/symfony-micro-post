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
class __TwigTemplate_721ae96ea61ca1394897bdd484401bb93b37330813cf92f88ee0cea621bc4315 extends Template
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
        // line 1
        echo "<div class=\"media text-muted pt-3\">
    ";
        // line 2
        $context["initials"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 2), "fullName", [], "any", false, false, false, 2), " ");
        // line 3
        echo "    <img data-src=\"holder.js/32x32?text=";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["initials"] ?? null), 0, [], "any", false, false, false, 3)), "html", null, true);
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["initials"] ?? null), 1, [], "any", false, false, false, 3)), "html", null, true);
        echo "&bg=e83e8c&fg=fff&size=8\" alt=\"\" class=\"mr-2 rounded\">
    <p class=\"media-body pb-3 mb-0 small lh-125 border-bottom border-gray\">
        <span class=\"d-block\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_user", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 6), "username", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\">
               <strong class=\"text-gray-dark\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong>
            </a>
            <small>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "time", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</small>
        </span>

        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_post", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "
        </a>

        <small class=\"d-block text-right mt-3\">
            ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", ($context["post"] ?? null))) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Edit</a>
            ";
        }
        // line 20
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", ($context["post"] ?? null))) {
            // line 21
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_post_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">Delete</a>
            ";
        }
        // line 23
        echo "        </small>
    </p>
</div>";
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
        return array (  93 => 23,  87 => 21,  84 => 20,  78 => 18,  76 => 17,  69 => 13,  65 => 12,  59 => 9,  54 => 7,  50 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "micro-post/row-post.html.twig", "/home/vagrant/symfony-01/templates/micro-post/row-post.html.twig");
    }
}
