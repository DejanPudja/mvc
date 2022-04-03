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

/* Category/show.html */
class __TwigTemplate_acc29c377080ae2088cb85cd0e359ea651c8e4506e5ab2768bc74c5f9feef472 extends Template
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
        echo "<!-- <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 1));
        echo "</h1> -->
<p>ID ove kategorije jeee: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_id", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>

<a href=\"/PHP/index.php\">Vrati se nazad</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque assumenda nobis excepturi possimus veritatis accusantium veniam, cumque ipsa quos nam quae quisquam ipsam eum iure consequatur recusandae autem ad! Quia.</p>";
    }

    public function getTemplateName()
    {
        return "Category/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Category/show.html", "C:\\xampp\\htdocs\\PHP\\Views\\Category\\show.html");
    }
}
