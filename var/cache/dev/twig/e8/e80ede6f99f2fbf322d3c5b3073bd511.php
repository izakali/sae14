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

/* ali/home.html.twig */
class __TwigTemplate_050b560c7af1c48df8c4f6f6333b62f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ali/home.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\">Accueil</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv");
        echo "\">Mon CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("E-Portfolio");
        echo "\">E-Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=\"text-center mt-4\">
        <h1>Présentation de moi-même</h1>
    </header>

    <section class=\"container mt-4\">
        <h2>À Propos de Moi</h2>
        <p>Étudiant en BUT RT à l'IUT de Roanne, je suis passionné par le
            développement informatique et la cybersécurité. Je souhaite
            contribuer à la sécurité des systèmes d'information. Mes
            compétences en Python et en systèmes d'exploitation, ainsi que
            mon goût pour le travail en équipe, me permettront de réussir
            dans cette voie
        </p>

        <h2>Projets Futurs</h2>
        <p>Passionné par la conception de solutions innovantes, je prévois de travailler sur des projets orientés vers 
            la sécurité informatique. Mon objectif est de développer des outils et des systèmes qui renforcent 
            la protection des données et des réseaux. Je suis particulièrement intéressé par 
            [domaines spécifiques de la cybersécurité, par exemple, l'analyse des vulnérabilités, la détection d'intrusions ou la sécurité des applications web]. 
            En combinant mes connaissances en Python, ma compréhension approfondie des systèmes d'exploitation, et ma passion pour résoudre 
            des problèmes complexes, je compte contribuer de manière significative à la sécurité des systèmes d'information.
        </p>

        <div class=\"container\">
            <h2>Pour en savoir plus</h2>
            <p>Découvrez mes loisirs, passions, et envies en cliquant sur le bouton ci-dessous.</p>
            <a class=\"btn btn-primary\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("en_savoir_plus");
        echo "\">En savoir plus</a>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ali/home.html.twig";
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
        return array (  141 => 51,  105 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\">Accueil</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('cv') }}\">Mon CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('E-Portfolio') }}\">E-Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=\"text-center mt-4\">
        <h1>Présentation de moi-même</h1>
    </header>

    <section class=\"container mt-4\">
        <h2>À Propos de Moi</h2>
        <p>Étudiant en BUT RT à l'IUT de Roanne, je suis passionné par le
            développement informatique et la cybersécurité. Je souhaite
            contribuer à la sécurité des systèmes d'information. Mes
            compétences en Python et en systèmes d'exploitation, ainsi que
            mon goût pour le travail en équipe, me permettront de réussir
            dans cette voie
        </p>

        <h2>Projets Futurs</h2>
        <p>Passionné par la conception de solutions innovantes, je prévois de travailler sur des projets orientés vers 
            la sécurité informatique. Mon objectif est de développer des outils et des systèmes qui renforcent 
            la protection des données et des réseaux. Je suis particulièrement intéressé par 
            [domaines spécifiques de la cybersécurité, par exemple, l'analyse des vulnérabilités, la détection d'intrusions ou la sécurité des applications web]. 
            En combinant mes connaissances en Python, ma compréhension approfondie des systèmes d'exploitation, et ma passion pour résoudre 
            des problèmes complexes, je compte contribuer de manière significative à la sécurité des systèmes d'information.
        </p>

        <div class=\"container\">
            <h2>Pour en savoir plus</h2>
            <p>Découvrez mes loisirs, passions, et envies en cliquant sur le bouton ci-dessous.</p>
            <a class=\"btn btn-primary\" href=\"{{ path('en_savoir_plus') }}\">En savoir plus</a>
        </div>
    </section>
{% endblock %}
", "ali/home.html.twig", "C:\\projet555\\templates\\ali\\home.html.twig");
    }
}
