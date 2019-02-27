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

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
      <div class=\"card-body d-flex flex-column align-items-start\">
        <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
        <h3 class=\"mb-0\">
          <a class=\"text-dark\" href=\"#\">Featured post</a>
        </h3>
        <div class=\"mb-1 text-muted\">Nov 12</div>
        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional
          content.</p>
        <a href=\"#\">Continue reading</a>
      </div>
      <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Card image cap\">
    </div>
  </div>
  <div class=\"col-md-6\">
    <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
      <div class=\"card-body d-flex flex-column align-items-start\">
        <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
        <h3 class=\"mb-0\">
          <a class=\"text-dark\" href=\"#\">Post title</a>
        </h3>
        <div class=\"mb-1 text-muted\">Nov 11</div>
        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional
          content.</p>
        <a href=\"#\">Continue reading</a>
      </div>
      <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Card image cap\">
    </div>
  </div>
</div>";
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
        return array (  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'jumbotron' %}

<!-- <div data-type=\"youtube\" data-video-id=\"1J5WeBhhO2k\" data-plyr='{\"autoplay\":true}'></div> -->

<div class=\"row\">
  <div class=\"col-md-6\">
    <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
      <div class=\"card-body d-flex flex-column align-items-start\">
        <strong class=\"d-inline-block mb-2 text-primary\">World</strong>
        <h3 class=\"mb-0\">
          <a class=\"text-dark\" href=\"#\">Featured post</a>
        </h3>
        <div class=\"mb-1 text-muted\">Nov 12</div>
        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional
          content.</p>
        <a href=\"#\">Continue reading</a>
      </div>
      <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Card image cap\">
    </div>
  </div>
  <div class=\"col-md-6\">
    <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
      <div class=\"card-body d-flex flex-column align-items-start\">
        <strong class=\"d-inline-block mb-2 text-success\">Design</strong>
        <h3 class=\"mb-0\">
          <a class=\"text-dark\" href=\"#\">Post title</a>
        </h3>
        <div class=\"mb-1 text-muted\">Nov 11</div>
        <p class=\"card-text mb-auto\">This is a wider card with supporting text below as a natural lead-in to additional
          content.</p>
        <a href=\"#\">Continue reading</a>
      </div>
      <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Card image cap\">
    </div>
  </div>
</div>", "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/pages/homepage.htm", "");
    }
}
