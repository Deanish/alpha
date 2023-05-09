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

/* themes/contrib/bootstrap5/templates/admin/status-report-grouped.html.twig */
class __TwigTemplate_ed60fc24f74f63e3d482653f3c68e15d extends Template
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
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/drupal.collapse"), "html", null, true);
        echo "

<div>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 23
            echo "  ";
            // line 24
            $context["status"] = (((twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, true, 24) == "checked")) ? ("success") : ((((twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, true, 24) == "error")) ? ("danger") : ("warning"))));
            // line 26
            echo "  <h3 id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "type", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\" class=\"text-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 26, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["group"], "title", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</h3>
  <div class=\"table-responsive\">
  <table class=\"table table-striped\">
   <thead>
      <tr>
        <td>Title</td>
        <td>Details</td>
      </tr>
    </thead>
    <tbody>
      ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, true, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 37
                echo "      <tr>
        <td>";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</td>
        <td>
          ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "value", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
          ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["requirement"], "description", [], "any", false, false, true, 41)) {
                    // line 42
                    echo "            <div class=\"description\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["requirement"], "description", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</div>
          ";
                }
                // line 44
                echo "        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </tbody>
  </table>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "<div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/admin/status-report-grouped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 50,  103 => 47,  95 => 44,  89 => 42,  87 => 41,  83 => 40,  78 => 38,  75 => 37,  71 => 36,  53 => 26,  51 => 24,  49 => 23,  45 => 22,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/admin/status-report-grouped.html.twig", "/var/www/html/alpha/web/themes/contrib/bootstrap5/templates/admin/status-report-grouped.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22, "set" => 24, "if" => 41);
        static $filters = array("escape" => 19);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['attach_library']
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
