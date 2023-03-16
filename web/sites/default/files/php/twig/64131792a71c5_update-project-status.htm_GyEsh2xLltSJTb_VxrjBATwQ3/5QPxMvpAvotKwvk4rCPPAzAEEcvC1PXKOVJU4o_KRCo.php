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

/* core/themes/stable9/templates/admin/update-project-status.html.twig */
class __TwigTemplate_6bac3f1ced5b1e99bee008700a608d50 extends Template
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
        // line 29
        $context["status_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 30
($context["project"] ?? null), "status", [], "any", false, false, true, 30) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 31
($context["project"] ?? null), "status", [], "any", false, false, true, 31) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-update__status--revoked") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 32
($context["project"] ?? null), "status", [], "any", false, false, true, 32) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 33
($context["project"] ?? null), "status", [], "any", false, false, true, 33) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 34
($context["project"] ?? null), "status", [], "any", false, false, true, 34) == twig_constant("Drupal\\update\\UpdateManagerInterface::CURRENT"))) ? ("project-update__status--current") : (""))];
        // line 37
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "attributes", [], "any", false, false, true, 37), "addClass", [0 => "project-update__status", 1 => ($context["status_classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 38)) {
            // line 39
            echo "<span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "</span>";
        } else {
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "reason", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        }
        // line 43
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 49
        if (($context["url"] ?? null)) {
            // line 50
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 50, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 50, $this->source), "html", null, true);
            echo "</a>";
        } else {
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 52, $this->source), "html", null, true);
        }
        // line 54
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["existing_version"] ?? null), 54, $this->source), "html", null, true);
        echo "
  ";
        // line 55
        if (((($context["install_type"] ?? null) == "dev") && ($context["datestamp"] ?? null))) {
            // line 56
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["datestamp"] ?? null), 56, $this->source), "html", null, true);
            echo ")</span>
  ";
        }
        // line 58
        echo "</div>

";
        // line 60
        if (($context["versions"] ?? null)) {
            // line 61
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 62
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["version"], 62, $this->source), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 65
        echo "
";
        // line 67
        $context["extra_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 68
($context["project"] ?? null), "status", [], "any", false, false, true, 68) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 69
($context["project"] ?? null), "status", [], "any", false, false, true, 69) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-revoked") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 70
($context["project"] ?? null), "status", [], "any", false, false, true, 70) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-not-supported") : (""))];
        // line 73
        echo "<div class=\"project-updates__details\">
  ";
        // line 74
        if (($context["extras"] ?? null)) {
            // line 75
            echo "    <div class=\"extra\">
      ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 77
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra"], "attributes", [], "any", false, false, true, 77), "addClass", [0 => ($context["extra_classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                echo ">
          ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["extra"], "label", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo ": ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["extra"], "data", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    </div>
  ";
        }
        // line 83
        echo "  ";
        $context["includes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["includes"] ?? null), 83, $this->source), ", ");
        // line 84
        echo "  ";
        if (($context["disabled"] ?? null)) {
            // line 85
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Includes:"));
            echo "
    <ul>
      <li>
        ";
            // line 88
            echo t("Enabled: %includes", array("%includes" =>             // line 89
($context["includes"] ?? null), ));
            // line 91
            echo "      </li>
      <li>
        ";
            // line 93
            $context["disabled"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 93, $this->source), ", ");
            // line 94
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 95
($context["disabled"] ?? null), ));
            // line 97
            echo "      </li>
    </ul>
  ";
        } else {
            // line 100
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 101
($context["includes"] ?? null), ));
            // line 103
            echo "  ";
        }
        // line 104
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable9/templates/admin/update-project-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 104,  191 => 103,  189 => 101,  187 => 100,  182 => 97,  180 => 95,  178 => 94,  176 => 93,  172 => 91,  170 => 89,  169 => 88,  162 => 85,  159 => 84,  156 => 83,  152 => 81,  141 => 78,  136 => 77,  132 => 76,  129 => 75,  127 => 74,  124 => 73,  122 => 70,  121 => 69,  120 => 68,  119 => 67,  116 => 65,  106 => 62,  101 => 61,  99 => 60,  95 => 58,  89 => 56,  87 => 55,  82 => 54,  79 => 52,  72 => 50,  70 => 49,  63 => 44,  60 => 43,  57 => 41,  52 => 39,  50 => 38,  46 => 37,  44 => 34,  43 => 33,  42 => 32,  41 => 31,  40 => 30,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable9/templates/admin/update-project-status.html.twig", "/var/www/html/alpha/web/core/themes/stable9/templates/admin/update-project-status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 38, "for" => 61, "trans" => 88);
        static $filters = array("escape" => 37, "join" => 83, "t" => 85, "placeholder" => 89);
        static $functions = array("constant" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'trans'],
                ['escape', 'join', 't', 'placeholder'],
                ['constant']
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
