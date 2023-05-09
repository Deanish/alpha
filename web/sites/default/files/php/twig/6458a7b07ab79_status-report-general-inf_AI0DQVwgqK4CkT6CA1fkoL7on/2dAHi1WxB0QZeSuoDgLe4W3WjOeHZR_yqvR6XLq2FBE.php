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

/* themes/contrib/bootstrap5/templates/admin/status-report-general-info.html.twig */
class __TwigTemplate_8e9fecfed7b28207ac99918e4884ac54 extends Template
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
        // line 32
        echo "
<h2>";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("General System Information"));
        echo "</h2>
<div class=\"table-responsive\">
  <table class=\"table table-hover table-striped\">
   <thead>
      <tr>
        <td>Title</td>
        <td>Details</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal Version"));
        echo "</td>
        <td>
        ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["drupal"] ?? null), "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
        ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["drupal"] ?? null), "description", [], "any", false, false, true, 47)) {
            // line 48
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["drupal"] ?? null), "description", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 50
        echo "        </td>
      </tr>
      <tr>
        <td>";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last Cron Run"));
        echo "</td>
        <td>
        ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "value", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "run_cron", [], "any", false, false, true, 56)) {
            // line 57
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "run_cron", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 59
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "description", [], "any", false, false, true, 59)) {
            // line 60
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "description", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 62
        echo "        </td>
      </tr>
      <tr>
        <td>";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Web Server"));
        echo "</td>
        <td>
        ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webserver"] ?? null), "value", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["webserver"] ?? null), "description", [], "any", false, false, true, 68)) {
            // line 69
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webserver"] ?? null), "description", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 71
        echo "        </td>
      </tr>
      <tr>
        <td>";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("PHP"));
        echo "</td>
        <td>
          <h5>";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version"));
        echo "</h5>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php"] ?? null), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
          ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["php"] ?? null), "description", [], "any", false, false, true, 77)) {
            // line 78
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php"] ?? null), "description", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 80
        echo "
          <h5>";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Memory limit"));
        echo "</h5>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php_memory_limit"] ?? null), "value", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
          ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["php_memory_limit"] ?? null), "description", [], "any", false, false, true, 82)) {
            // line 83
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php_memory_limit"] ?? null), "description", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 85
        echo "        </td>
      </tr>
      <tr>
        <td>";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "</td>
        <td>
          <h5>";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version"));
        echo "</h5>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system_version"] ?? null), "value", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
          ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["database_system_version"] ?? null), "description", [], "any", false, false, true, 91)) {
            // line 92
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system_version"] ?? null), "description", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 94
        echo "
          <h5>";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("System"));
        echo "</h5>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system"] ?? null), "value", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
          ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["database_system"] ?? null), "description", [], "any", false, false, true, 96)) {
            // line 97
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system"] ?? null), "description", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 99
        echo "        </td>
      </tr>
    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/admin/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 99,  202 => 97,  200 => 96,  194 => 95,  191 => 94,  185 => 92,  183 => 91,  177 => 90,  172 => 88,  167 => 85,  161 => 83,  159 => 82,  153 => 81,  150 => 80,  144 => 78,  142 => 77,  136 => 76,  131 => 74,  126 => 71,  120 => 69,  118 => 68,  114 => 67,  109 => 65,  104 => 62,  98 => 60,  95 => 59,  89 => 57,  87 => 56,  83 => 55,  78 => 53,  73 => 50,  67 => 48,  65 => 47,  61 => 46,  56 => 44,  42 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/admin/status-report-general-info.html.twig", "/var/www/html/alpha/web/themes/contrib/bootstrap5/templates/admin/status-report-general-info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 47);
        static $filters = array("t" => 33, "escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
