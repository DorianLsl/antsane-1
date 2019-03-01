<?php

/* C:\wamp64\www\install-master/themes/volley-club-lievin/pages/homepage.htm */
class __TwigTemplate_edc23bd20d3856995e61658bc8252cdc1c5dec90c7b722600f4a1374bed7ee6f extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("jumbotron"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!-- <div data-type=\"youtube\" data-video-id=\"1J5WeBhhO2k\" data-plyr='{\"autoplay\":true}'></div> -->

<main role=\"main\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 blog-main\">

      <h3 class=\"pb-3 mb-4 font-italic border-bottom\">
        Dernières news
      </h3>

      ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "
    </div><!-- /.blog-main -->

    <aside class=\"col-md-4 blog-sidebar\">
      <div class=\"p-3 mb-3 bg-light rounded\">
        <h4 class=\"font-italic\">A propos</h4>
        <p class=\"mb-0\">Bienvenue sur une toute nouvelle version de notre site crée par AntSane !</p>
      </div>

      <div class=\"p-3\">
        <h4 class=\"font-italic\">Retrouvez nous</h4>
        <ol class=\"list-unstyled\">
          <li><a href=\"#\">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div>
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'jumbotron' %}

<!-- <div data-type=\"youtube\" data-video-id=\"1J5WeBhhO2k\" data-plyr='{\"autoplay\":true}'></div> -->

<main role=\"main\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-8 blog-main\">

      <h3 class=\"pb-3 mb-4 font-italic border-bottom\">
        Dernières news
      </h3>

      {% component 'blogPosts' %}

    </div><!-- /.blog-main -->

    <aside class=\"col-md-4 blog-sidebar\">
      <div class=\"p-3 mb-3 bg-light rounded\">
        <h4 class=\"font-italic\">A propos</h4>
        <p class=\"mb-0\">Bienvenue sur une toute nouvelle version de notre site crée par AntSane !</p>
      </div>

      <div class=\"p-3\">
        <h4 class=\"font-italic\">Retrouvez nous</h4>
        <ol class=\"list-unstyled\">
          <li><a href=\"#\">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div>
</main>", "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/pages/homepage.htm", "");
    }
}
