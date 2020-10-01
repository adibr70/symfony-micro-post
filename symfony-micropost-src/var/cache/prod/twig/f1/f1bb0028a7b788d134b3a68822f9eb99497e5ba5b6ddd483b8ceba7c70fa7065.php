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

/* email/registration.html.twig */
class __TwigTemplate_6c863ff87a3b5a5bcfddb8cdeb686694af417b7223557ea65098010902e55216 extends Template
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email.registration", ["%name%" => twig_get_attribute($this->env, $this->source,         // line 2
($context["user"] ?? null), "fullName", [], "any", false, false, false, 2), "%confirm-link%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_confirm", ["token" => twig_get_attribute($this->env, $this->source,         // line 3
($context["user"] ?? null), "confirmationToken", [], "any", false, false, false, 3)]), "%login-link%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("security_login")]);
    }

    public function getTemplateName()
    {
        return "email/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "email/registration.html.twig", "/home/vagrant/symfony-01/templates/email/registration.html.twig");
    }
}
