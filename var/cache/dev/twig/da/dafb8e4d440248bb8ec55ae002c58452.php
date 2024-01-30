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

/* ali/tp.html.twig */
class __TwigTemplate_f59e89215dbdac83b393af5a20036ff6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/tp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/tp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ali/tp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Travaux Pratiques";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1 class=\"text-center mt-4\">Travaux Pratiques</h1>

        <section class=\"mt-4\">
            <h2>Liste des Comptes Rendus :</h2>

            <div class=\"mb-3\">
                <h3>TP Saé 12</h3>
                <p>S'initier aux réseaux informatiques</p>
                <a class=\"btn btn-success\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_tp_report", ["reportId" => 1]);
        echo "\" target=\"_blank\">Télécharger le Compte Rendu</a>
            </div>

            <div class=\"mb-3\">
                <h3>TP R106</h3>
                <p>Architecture des systèmes numériques et informatiques</p>
                <a class=\"btn btn-success\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_tp_report", ["reportId" => 2]);
        echo "\" target=\"_blank\">Télécharger le Compte Rendu</a>
            </div>

            <div class=\"mb-3\">
                <h3>TP R102</h3>
                <p>Principes et architecture des réseaux</p>
                <a class=\"btn btn-success\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_tp_report", ["reportId" => 3]);
        echo "\" target=\"_blank\">Télécharger le Compte Rendu</a>
            </div>

        </section>

        <div class=\"mt-4\">
            <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("E-Portfolio");
        echo "\">Retour au Portfolio</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ali/tp.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  126 => 33,  117 => 27,  108 => 21,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Travaux Pratiques{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center mt-4\">Travaux Pratiques</h1>

        <section class=\"mt-4\">
            <h2>Liste des Comptes Rendus :</h2>

            <div class=\"mb-3\">
                <h3>TP Saé 12</h3>
                <p>S'initier aux réseaux informatiques</p>
                <a class=\"btn btn-success\" href=\"{{ path('download_tp_report', {'reportId': 1}) }}\" target=\"_blank\">Télécharger le Compte Rendu</a>
            </div>

            <div class=\"mb-3\">
                <h3>TP R106</h3>
                <p>Architecture des systèmes numériques et informatiques</p>
                <a class=\"btn btn-success\" href=\"{{ path('download_tp_report', {'reportId': 2}) }}\" target=\"_blank\">Télécharger le Compte Rendu</a>
            </div>

            <div class=\"mb-3\">
                <h3>TP R102</h3>
                <p>Principes et architecture des réseaux</p>
                <a class=\"btn btn-success\" href=\"{{ path('download_tp_report', {'reportId': 3}) }}\" target=\"_blank\">Télécharger le Compte Rendu</a>
            </div>

        </section>

        <div class=\"mt-4\">
            <a class=\"btn btn-primary\" href=\"{{ path('E-Portfolio') }}\">Retour au Portfolio</a>
        </div>
    </div>
{% endblock %}
", "ali/tp.html.twig", "C:\\projet555\\templates\\ali\\tp.html.twig");
    }
}
