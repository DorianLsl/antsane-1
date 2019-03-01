<?php

/* C:\wamp64\www\install-master/themes/volley-club-lievin/partials/navbar.htm */
class __TwigTemplate_37ce1b2ab312e1538a0cf4756c56afd0848c439b0a5aa765fa8c833a1bc40764 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"blog-header py-3\">
\t<div class=\"row flex-nowrap justify-content-between align-items-center\">
\t\t<div class=\"col-4 pt-1\">
\t\t\t<a class=\"text-muted\" href=\"#\">S'enregistrer ?</a>
\t\t</div>
\t\t<div class=\"col-4 text-center\">
\t\t\t<a class=\"blog-header-logo text-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["homepage"] ?? null), "url", array()), "html", null, true);
        echo "\">Volley Club Lievin</a>
\t\t</div>
\t\t<div class=\"col-4 d-flex justify-content-end align-items-center\">
\t\t\t<a class=\"text-muted\" href=\"#\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
\t\t\t\t stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"mx-3\">
\t\t\t\t\t<circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"></circle>
\t\t\t\t\t<line x1=\"21\" y1=\"21\" x2=\"15.8\" y2=\"15.8\"></line>
\t\t\t\t</svg>
\t\t\t</a>
\t\t</div>
\t</div>
</header>

<div class=\"nav-scroller py-1 mb-2\">
\t<nav class=\"nav d-flex justify-content-between\">
\t\t<a class=\"p-2 text-muted\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["homepage"] ?? null), "url", array()), "html", null, true);
        echo "\">Accueil</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Actualités</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Le Club</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Les équipes</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Championnats et résultats</a>
\t</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"blog-header py-3\">
\t<div class=\"row flex-nowrap justify-content-between align-items-center\">
\t\t<div class=\"col-4 pt-1\">
\t\t\t<a class=\"text-muted\" href=\"#\">S'enregistrer ?</a>
\t\t</div>
\t\t<div class=\"col-4 text-center\">
\t\t\t<a class=\"blog-header-logo text-dark\" href=\"{{ homepage.url }}\">Volley Club Lievin</a>
\t\t</div>
\t\t<div class=\"col-4 d-flex justify-content-end align-items-center\">
\t\t\t<a class=\"text-muted\" href=\"#\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
\t\t\t\t stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"mx-3\">
\t\t\t\t\t<circle cx=\"10.5\" cy=\"10.5\" r=\"7.5\"></circle>
\t\t\t\t\t<line x1=\"21\" y1=\"21\" x2=\"15.8\" y2=\"15.8\"></line>
\t\t\t\t</svg>
\t\t\t</a>
\t\t</div>
\t</div>
</header>

<div class=\"nav-scroller py-1 mb-2\">
\t<nav class=\"nav d-flex justify-content-between\">
\t\t<a class=\"p-2 text-muted\" href=\"{{ homepage.url }}\">Accueil</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Actualités</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Le Club</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Les équipes</a>
\t\t<a class=\"p-2 text-muted\" href=\"#\">Championnats et résultats</a>
\t</nav>
</div>", "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/partials/navbar.htm", "");
    }
}
