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
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* task/index.html.twig */
class __TwigTemplate_b69f27d446af2974f6d7d57c3b768a13 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "TODO List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <section class=\"vh-100\" style=\"background-color: #e2d5de;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">

                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-5\">

                            <h6 class=\"mb-3\">Todo List</h6>

                            <form
                                    class=\"d-flex justify-content-center align-items-center mb-4\"
                                    action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_create");
        yield "\"
                                    method=\"post\"
                            >
                                <div class=\"form-outline flex-fill\">
                                    <input type=\"text\" name=\"content\" class=\"form-control form-control-lg\"/>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-lg ms-2\">Add</button>
                            </form>

                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "                                <div class=\"alert alert-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
                            <ul class=\"list-group mb-0\">
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 33
            yield "                                    <li
                                            class=\"list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <form action=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" method=\"post\">
                                                <input
                                                        class=\"form-check-input me-2\" type=\"checkbox\" value=\"\"
                                                        aria-label=\"...\"
                                                        ";
            // line 40
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "isFinished", [], "any", false, false, false, 40)) ? ("checked") : (""));
            yield "
                                                        onclick=\"this.form.submit()\"
                                                />
                                            </form>
                                            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, $context["task"], "isFinished", [], "any", false, false, false, 44)) {
                // line 45
                yield "                                                <s>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 45), "html", null, true);
                yield "</s>
                                            ";
            } else {
                // line 47
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "content", [], "any", false, false, false, 47), "html", null, true);
                yield "
                                            ";
            }
            // line 49
            yield "                                        </div>

                                        <form action=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['task'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "task/index.html.twig";
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
        return array (  195 => 56,  184 => 51,  180 => 49,  174 => 47,  168 => 45,  166 => 44,  159 => 40,  152 => 36,  147 => 33,  143 => 32,  139 => 30,  130 => 28,  126 => 27,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TODO List{% endblock %}

{% block body %}
    <section class=\"vh-100\" style=\"background-color: #e2d5de;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col col-xl-10\">

                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body p-5\">

                            <h6 class=\"mb-3\">Todo List</h6>

                            <form
                                    class=\"d-flex justify-content-center align-items-center mb-4\"
                                    action=\"{{ path('task_create') }}\"
                                    method=\"post\"
                            >
                                <div class=\"form-outline flex-fill\">
                                    <input type=\"text\" name=\"content\" class=\"form-control form-control-lg\"/>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-lg ms-2\">Add</button>
                            </form>

                            {% for message in app.flashes('notice') %}
                                <div class=\"alert alert-warning\">{{ message }}</div>
                            {% endfor %}

                            <ul class=\"list-group mb-0\">
                                {% for task in tasks %}
                                    <li
                                            class=\"list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2\">
                                        <div class=\"d-flex align-items-center\">
                                            <form action=\"{{ path('task_toggle', {id: task.id}) }}\" method=\"post\">
                                                <input
                                                        class=\"form-check-input me-2\" type=\"checkbox\" value=\"\"
                                                        aria-label=\"...\"
                                                        {{ task.isFinished ? 'checked' : '' }}
                                                        onclick=\"this.form.submit()\"
                                                />
                                            </form>
                                            {% if task.isFinished %}
                                                <s>{{ task.content }}</s>
                                            {% else %}
                                                {{ task.content }}
                                            {% endif %}
                                        </div>

                                        <form action=\"{{ path('task_delete', {'id': task.id}) }}\" method=\"post\">
                                            <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                        </form>
                                    </li>
                                {% endfor %}
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
{% endblock %}", "task/index.html.twig", "C:\\Users\\samor\\Desktop\\my_php\\todo\\templates\\task\\index.html.twig");
    }
}
