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

/* Layouts/index.html */
class __TwigTemplate_cfde115384da71e3ef39fa1881b729c55aa878306a052fab16a2f1d1ff1a426a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <header>
        Zaglavlje
    </header>
    <main>
        ";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        // line 16
        echo "    </main>
    <footer>
        Podnozje
    </footer>
</body>
</html>";
    }

    // line 14
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        ";
    }

    public function getTemplateName()
    {
        return "Layouts/index.html";
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  55 => 16,  53 => 14,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Layouts/index.html", "C:\\xampp\\htdocs\\PHP\\Views\\Layouts\\index.html");
    }
}
