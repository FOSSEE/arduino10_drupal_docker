<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @help_topics/book.organizing.html.twig */
class __TwigTemplate_c0b23bcc162458b4e05e125ef05467d7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $context["overview_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Books", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["overview_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["overview_link_text"] ?? null), "book.admin"));
        // line 11
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 12
        yield t("Change the order and titles of pages within a book.", []);
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@overview_link</em>.", ["@overview_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["overview_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Edit order and titles</em> for the book you would like to change.", []);
        yield "</li>
  <li>";
        // line 17
        yield t("Drag the book pages to the desired order.", []);
        yield "</li>
  <li>";
        // line 18
        yield t("If desired, enter new text for one or more of the page titles within the book.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save book pages</em>.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/book.organizing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  60 => 13,  56 => 12,  51 => 11,  49 => 10,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/book.organizing.html.twig", "/var/www/html/upgrade_d11/arduino10_drupal_docker/modules/contrib/book/help_topics/book.organizing.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 9, "trans" => 9];
        static $filters = ["escape" => 15];
        static $functions = ["render_var" => 10, "help_route_link" => 10];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
