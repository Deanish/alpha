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

/* themes/contrib/bootstrap5/templates/admin/system-modules-uninstall.html.twig */
class __TwigTemplate_6264c859f88b9be9d2c5437b0809c4f8 extends Template
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
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "filters", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "

<table";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "table"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  <thead>
    <tr>
      <th>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Uninstall"));
        echo "</th>
      <th>";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        echo "</th>
      <th>";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "      ";
            $context["zebra"] = twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 34), 34, $this->source));
            // line 35
            echo "<tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, true, 35), "addClass", [0 => ($context["zebra"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
        <td>";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "checkbox", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            // line 38
            echo "</td>
        <td>
          <label for=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "checkbox_id", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</label>
        </td>
        <td class=\"description\">
          <span class=\"text module-description\">";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "description", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</span>
          ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["module"], "reasons_count", [], "any", false, false, true, 44) > 0)) {
                // line 45
                echo "            <div class=\"admin-requirements\">";
                // line 46
                echo \Drupal::translation()->formatPlural(abs(twig_get_attribute($this->env, $this->source,                 // line 48
$context["module"], "reasons_count", [], "any", false, false, true, 48)), "The following reason prevents @module.module_name from being uninstalled:", "The following reasons prevent @module.module_name from being uninstalled:", array("@module.module_name" => twig_get_attribute($this->env, $this->source,                 // line 47
$context["module"], "module_name", [], "any", false, false, true, 47), "@module.module_name" => twig_get_attribute($this->env, $this->source,                 // line 49
$context["module"], "module_name", [], "any", false, false, true, 49), ));
                // line 51
                echo "              <div class=\"item-list\">
                <ul>";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["module"], "validation_reasons", [], "any", false, false, true, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 54
                    echo "<li>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["reason"], 54, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 56)) {
                    // line 57
                    echo "<li>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Required by: @module-list", ["@module-list" => $this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 57), 57, $this->source), ", ")]));
                    echo "</li>";
                }
                // line 59
                echo "</ul>
              </div>
            </div>
          ";
            }
            // line 63
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 66
            echo "      <tr class=\"odd\">
        <td colspan=\"3\" class=\"empty message\">";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No modules are available to uninstall."));
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
</table>

";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 73, $this->source), "filters", "modules", "uninstall"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/admin/system-modules-uninstall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 73,  173 => 70,  164 => 67,  161 => 66,  146 => 63,  140 => 59,  135 => 57,  133 => 56,  125 => 54,  121 => 53,  118 => 51,  116 => 49,  115 => 47,  114 => 48,  113 => 46,  111 => 45,  109 => 44,  105 => 43,  97 => 40,  93 => 38,  91 => 37,  86 => 35,  83 => 34,  65 => 33,  58 => 29,  54 => 28,  50 => 27,  44 => 24,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/admin/system-modules-uninstall.html.twig", "/var/www/html/alpha/web/themes/contrib/bootstrap5/templates/admin/system-modules-uninstall.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 33, "set" => 34, "if" => 44, "trans" => 46);
        static $filters = array("escape" => 22, "t" => 27, "safe_join" => 57, "without" => 73);
        static $functions = array("cycle" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'trans'],
                ['escape', 't', 'safe_join', 'without'],
                ['cycle']
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
