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

/* security/login.html.twig */
class __TwigTemplate_710f1c96b9960b0567539ac8f527f376cdc68fbbc26f573f5c234fec7a909da9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        if (($context["error"] ?? null)) {
            // line 6
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 10
        echo "
    <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
        <div>
            <div class=\"form-group\">
                <label class=\"form-control-label required\" for=\"username\">Username</label>
                <input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" class=\"form-control\"
                    value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label class=\"form-control-label required\" for=\"password\">Password</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <button type=\"submit\" id=\"Login\" name=\"Login\" class=\"btn-secondary btn\">Login</button>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "get", [0 => "redirect_to"], "method", false, false, false, 26), "html", null, true);
        echo "\">
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  87 => 25,  75 => 16,  67 => 11,  64 => 10,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/vagrant/symfony-01/templates/security/login.html.twig");
    }
}
