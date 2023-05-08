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

/* __string_template__5b774dcc660f1195dbc74b7cfad0b8ab */
class __TwigTemplate_b532c33cbb203722cdd1cbe1560465be extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
  <div class=\"row logos\">
    <div class=\"col-3\">
      <a href=\"/alpha/web/\" title=\"Home\" rel=\"home\">
        <img alt=\"ICTS Logo\" data-entity-type=\"\" data-entity-uuid=\"\" src=\"/alpha/web/sites/default/files/theme/icts-logo.png\" height=\"127px\" width=\"auto\" />
      </a>
    </div>
    <div class=\"col-7 logo-tri\">
    </div>
    <div class=\"col-2 text-center align-middle\">
      <a href=\"https://www.tifr.res.in/\" target=\"_blank\" title=\"TIFR\">
        <img alt=\"TIFR Logo\" data-entity-type=\"\" data-entity-uuid=\"\" src=\"/alpha/web/sites/default/files/theme/tifr-logo.png\" height=\"66px\" width=\"auto\" style=\"margin-top: 25px;\" />
      </a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__5b774dcc660f1195dbc74b7cfad0b8ab";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5b774dcc660f1195dbc74b7cfad0b8ab", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
