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

/* blog/post.html.twig */
class __TwigTemplate_0ea328902907c824a286ff13019fb19a5e592e1ce5f93eb41587c5544c077c41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    
    <p>ID ";
        // line 7
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</p>
    <h3>";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 8)), "html", null, true);
        echo "</h3>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "text", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date", [], "any", false, false, false, 10), "H:i:s"), "html", null, true);
        echo "</p>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->priceFilter(560), "html", null, true);
        echo "</p>
    Here is the current locale ";
        // line 12
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo " 
    <p>";
        // line 13
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
    
    <p>Env: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
    <p>User: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
    <p>Request: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
    <p>Session started: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 18), "isStarted", [], "method", false, false, false, 18), "html", null, true);
        echo "</p>
    <p>Debug: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "debug", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
    
";
    }

    public function getTemplateName()
    {
        return "blog/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/post.html.twig", "/home/vagrant/symfony-01/templates/blog/post.html.twig");
    }
}
