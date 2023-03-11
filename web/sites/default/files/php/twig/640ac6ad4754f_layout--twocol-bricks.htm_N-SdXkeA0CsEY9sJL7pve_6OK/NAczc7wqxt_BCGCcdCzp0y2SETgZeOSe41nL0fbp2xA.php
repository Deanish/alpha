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

/* core/themes/stable9/layouts/layout_discovery/twocol_bricks/layout--twocol-bricks.html.twig */
class __TwigTemplate_b2080b150686c221cfd96d190a86eb18 extends Template
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
        // line 16
        $context["classes"] = [0 => "layout", 1 => "layout--twocol-bricks"];
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">
    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 23)) {
                // line 24
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "top", [], "any", false, false, true, 24), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
                echo ">
        ";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 28
            echo "
    ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_above", [], "any", false, false, true, 29)) {
                // line 30
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first_above", [], "any", false, false, true, 30), "addClass", [0 => "layout__region", 1 => "layout__region--first-above"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                echo ">
        ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_above", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_above", [], "any", false, false, true, 35)) {
                // line 36
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second_above", [], "any", false, false, true, 36), "addClass", [0 => "layout__region", 1 => "layout__region--second-above"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                echo ">
        ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_above", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 40
            echo "
    ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 41)) {
                // line 42
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "middle", [], "any", false, false, true, 42), "addClass", [0 => "layout__region", 1 => "layout__region--middle"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                echo ">
        ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 46
            echo "
    ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_below", [], "any", false, false, true, 47)) {
                // line 48
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first_below", [], "any", false, false, true, 48), "addClass", [0 => "layout__region", 1 => "layout__region--first-below"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                echo ">
        ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first_below", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 52
            echo "
    ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_below", [], "any", false, false, true, 53)) {
                // line 54
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second_below", [], "any", false, false, true, 54), "addClass", [0 => "layout__region", 1 => "layout__region--second-below"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                echo ">
        ";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second_below", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 58
            echo "
    ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 59)) {
                // line 60
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "bottom", [], "any", false, false, true, 60), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
                echo ">
        ";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 64
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable9/layouts/layout_discovery/twocol_bricks/layout--twocol-bricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  151 => 61,  146 => 60,  144 => 59,  141 => 58,  135 => 55,  130 => 54,  128 => 53,  125 => 52,  119 => 49,  114 => 48,  112 => 47,  109 => 46,  103 => 43,  98 => 42,  96 => 41,  93 => 40,  87 => 37,  82 => 36,  80 => 35,  77 => 34,  71 => 31,  66 => 30,  64 => 29,  61 => 28,  55 => 25,  50 => 24,  48 => 23,  43 => 22,  41 => 21,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable9/layouts/layout_discovery/twocol_bricks/layout--twocol-bricks.html.twig", "/var/www/html/alpha/web/core/themes/stable9/layouts/layout_discovery/twocol_bricks/layout--twocol-bricks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 21);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
