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

/* __string_template__e7536773c9d18631f4350f497f340953 */
class __TwigTemplate_9fab9a8e52b6414f756991df323a1b24 extends Template
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
        echo "<div class=\"row\">
  <div class=\"breadcrumb-path\">People <i class=\"fa-solid fa-chevron-right\"></i> ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_primary"] ?? null), 2, $this->source), "html", null, true);
        echo "</div>
  <div class=\"col-xs-5 col-sm-3 col-md-2\">
    <img class=\"shadow mb-5 rounded\" src=";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_image"] ?? null), 4, $this->source), "html", null, true);
        echo " />
  </div>
  <div class=\"col-xs-7 col-sm-9 col-md-10\">
    <div class=\"people-name\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_firstname"] ?? null), 7, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_lastname"] ?? null), 7, $this->source), "html", null, true);
        echo "</div>
    <div class=\"people-affiliation\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_affiliation"] ?? null), 8, $this->source), "html", null, true);
        echo "</div>
    <div class=\"people-area-research\"><span class=\"label-upper\">Area of research: </span> ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_research"] ?? null), 9, $this->source), "html", null, true);
        echo "</div>
    <div class=\"people-extn\"><i class=\"fa-solid fa-phone\"></i>+91 80 4653 ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_extn"] ?? null), 10, $this->source), "html", null, true);
        echo " &nbsp;&nbsp;<i class=\"fa-solid fa-location-dot\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_office"] ?? null), 10, $this->source), "html", null, true);
        echo "</div>
    <div class=\"people-email\"><i class=\"fa-solid fa-envelope\"></i>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["field_people_email"] ?? null), 11, $this->source), ["@" => " @ ", "." => " . "]), "html", null, true);
        echo "</div>
    <div class=\"people-website\"><i class=\"fa-solid fa-earth-asia\"></i>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_people_website"] ?? null), 12, $this->source), "html", null, true);
        echo "</div>
  </div>
</div>
<div class=\"border\"></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e7536773c9d18631f4350f497f340953";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  73 => 11,  67 => 10,  63 => 9,  59 => 8,  53 => 7,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e7536773c9d18631f4350f497f340953", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "replace" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'replace'],
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
