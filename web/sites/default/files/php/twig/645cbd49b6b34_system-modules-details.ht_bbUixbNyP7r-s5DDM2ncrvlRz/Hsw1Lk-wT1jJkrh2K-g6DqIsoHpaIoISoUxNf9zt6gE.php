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

/* themes/contrib/bootstrap5/templates/admin/system-modules-details.html.twig */
class __TwigTemplate_1bef096a26748a05a7d302aab8f151ce extends Template
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
        // line 25
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "table"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ">
  <thead>
  <tr>
    <th class=\"checkbox visually-hidden\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Installed"));
        echo "</th>
    <th class=\"name visually-hidden\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        echo "</th>
    <th class=\"description visually-hidden priority-low\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 35
            echo "    <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
      <td class=\"checkbox\">
        ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "checkbox", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
      </td>
      <td class=\"module\">
        <label id=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" for=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</label>
      </td>
      <td class=\"description expand priority-low\">
        <details class=\"js-form-wrapper form-wrapper text-wrap\" id=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "-description\">
          <summary aria-controls=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "enable_id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "-description\" role=\"button\" aria-expanded=\"false\"><span class=\"text module-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["module"], "description", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</span></summary>
          <div class=\"details-wrapper\">
            <div class=\"details-description\">
              <div class=\"requirements\">
                <div class=\"admin-requirements\">";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Machine name: <span dir=\"ltr\" class=\"table-filter-text-source\">@machine-name</span>", ["@machine-name" => twig_get_attribute($this->env, $this->source, $context["module"], "machine_name", [], "any", false, false, true, 48)]));
            echo "</div>
                ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 49)) {
                // line 50
                echo "                  <div class=\"admin-requirements\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version: @module-version", ["@module-version" => twig_get_attribute($this->env, $this->source, $context["module"], "version", [], "any", false, false, true, 50)]));
                echo "</div>
                ";
            }
            // line 52
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 52)) {
                // line 53
                echo "                  <div class=\"admin-requirements\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module-list", ["@module-list" => twig_get_attribute($this->env, $this->source, $context["module"], "requires", [], "any", false, false, true, 53)]));
                echo "</div>
                ";
            }
            // line 55
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 55)) {
                // line 56
                echo "                  <div class=\"admin-requirements\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Required by: @module-list", ["@module-list" => twig_get_attribute($this->env, $this->source, $context["module"], "required_by", [], "any", false, false, true, 56)]));
                echo "</div>
                ";
            }
            // line 58
            echo "              </div>
              ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 59)) {
                // line 60
                echo "                <div class=\"links\">
                  ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "help", 1 => "permissions", 2 => "configure"]);
                foreach ($context['_seq'] as $context["_key"] => $context["link_type"]) {
                    // line 62
                    echo "                    ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["module"], "links", [], "any", false, false, true, 62)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["link_type"]] ?? null) : null), 62, $this->source), "html", null, true);
                    echo "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                </div>
              ";
            }
            // line 66
            echo "            </div>
          </div>
        </details>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/admin/system-modules-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 72,  155 => 66,  151 => 64,  142 => 62,  138 => 61,  135 => 60,  133 => 59,  130 => 58,  124 => 56,  121 => 55,  115 => 53,  112 => 52,  106 => 50,  104 => 49,  100 => 48,  91 => 44,  87 => 43,  77 => 40,  71 => 37,  65 => 35,  61 => 34,  54 => 30,  50 => 29,  46 => 28,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/admin/system-modules-details.html.twig", "/var/www/html/alpha/web/themes/contrib/bootstrap5/templates/admin/system-modules-details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 34, "if" => 49);
        static $filters = array("escape" => 25, "t" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 't'],
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
