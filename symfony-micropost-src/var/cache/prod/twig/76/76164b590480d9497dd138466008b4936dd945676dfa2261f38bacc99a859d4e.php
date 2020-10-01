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

/* security/confirmation.html.twig */
class __TwigTemplate_04a5991fd9c6faed12ef157da81dc19cf6b7dd6c847769688732422f1eb6c60b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/confirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "        <h5>Congratulations!</h5>
        <p>Your account is confirmed! You can now sign in
            <a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">here</a></p>
    ";
        } else {
            // line 10
            echo "        <p>Something went wrong. Please check your email.</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "security/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  59 => 8,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/confirmation.html.twig", "/home/vagrant/symfony-01/templates/security/confirmation.html.twig");
    }
}
