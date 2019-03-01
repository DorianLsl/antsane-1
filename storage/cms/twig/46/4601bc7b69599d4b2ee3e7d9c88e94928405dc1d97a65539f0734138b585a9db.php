<?php

/* C:\wamp64\www\install-master/themes/volley-club-lievin/layouts/default.htm */
class __TwigTemplate_5ca2e419d1ab039b6f988a55be0af955521a38245b736e4048d5a4eeb5154c84 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

  <link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/css/style.css"));
        // line 14
        echo "\"
    rel=\"stylesheet\">
  ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "
</head>
<body>

  <div class=\"container\">

    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "
    <section id=\"page\">
      ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "    </section>

  </div>

  ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
  <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/vendor/jquery/dist/jquery.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js", 3 => "assets/vendor/wow/dist/wow.min.js", 4 => "assets/vendor/holderjs/holder.min.js", 5 => "assets/vendor/plyr/dist/plyr.js", 6 => "assets/js/scripts.js"));
        // line 41
        echo "\"></script>
  ";
        // line 42
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 43
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 44
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  93 => 43,  78 => 42,  75 => 41,  73 => 33,  70 => 32,  66 => 31,  60 => 27,  58 => 26,  54 => 24,  50 => 23,  42 => 17,  39 => 16,  35 => 14,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

  <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/css/style.css'
      ]|theme }}\"
    rel=\"stylesheet\">
  {% styles %}

</head>
<body>

  <div class=\"container\">

    {% partial 'navbar' %}

    <section id=\"page\">
      {% page %}
    </section>

  </div>

  {% partial 'footer' %}

  <script src=\"{{ [
      'assets/vendor/jquery/dist/jquery.min.js',
      'assets/vendor/tether/dist/js/tether.min.js',
      'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
      'assets/vendor/wow/dist/wow.min.js',
      'assets/vendor/holderjs/holder.min.js',
      'assets/vendor/plyr/dist/plyr.js',
      'assets/js/scripts.js'
    ]|theme }}\"></script>
  {% framework extras %}
  {% scripts %}
</body>

</html>", "C:\\wamp64\\www\\install-master/themes/volley-club-lievin/layouts/default.htm", "");
    }
}
