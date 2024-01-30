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

/* ali/E-Portfolio.html.twig */
class __TwigTemplate_304e36a17b46276e2f74a8b7c9e82039 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/E-Portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/E-Portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ali/E-Portfolio.html.twig", 1);
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

        echo "E-Portfolio";
        
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
            <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ali");
        echo "\">Accueil</a>
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
                        <a class=\"nav-link\">E-Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=\"text-center mt-4\">
        <h1>E-Portfolio</h1>
    </header>

    <section class=\"container mt-4\">
        <h2>Compétences</h2>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"appli\" class=\"me-3\">Créer des outils et applications informatiques pour les R&T</label>
            <progress id=\"appli\" value=\"60\" max=\"100\" style=\"width: 400px; height: 60px;\">60%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"html\" class=\"me-3\">HTML</label>
            <progress id=\"html\" value=\"40\" max=\"100\" style=\"width: 400px; height: 60px;\">40%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"systeme\" class=\"me-3\">Système d'exploitation</label>
            <progress id=\"systeme\" value=\"60\" max=\"100\" style=\"width: 400px; height: 60px;\">95%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"connect\" class=\"me-3\">Connecter les entreprise et les usagers</label>
            <progress id=\"connect\" value=\"25\" max=\"100\" style=\"width: 400px; height: 60px;\">25%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"gestion\" class=\"me-3\">Gestion de projet</label>
            <progress id=\"gestion\" value=\"75\" max=\"100\" style=\"width: 400px; height: 60px;\">75%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"cybersecurity\" class=\"me-3\">Cybersécurité</label>
            <progress id=\"cybersecurity\" value=\"65\" max=\"100\" style=\"width: 400px; height: 60px;\">65%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"admin\" class=\"me-3\">Administrer les réseau et l'internet</label>
            <progress id=\"admin\" value=\"74\" max=\"100\" style=\"width: 400px; height: 60px;\">74%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"reseau\" class=\"me-3\">Réseau</label>
            <progress id=\"reseau\" value=\"80\" max=\"100\" style=\"width: 400px; height: 60px;\">80%</progress>
        </div>
    </section>

    <div class=\"text-center mt-4\">
        <a class=\"btn btn-primary\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tp_page");
        echo "\">Compte Rendu de TP</a>
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
        return "ali/E-Portfolio.html.twig";
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
        return array (  164 => 74,  102 => 15,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}E-Portfolio{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_ali') }}\">Accueil</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('cv') }}\">Mon CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\">E-Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class=\"text-center mt-4\">
        <h1>E-Portfolio</h1>
    </header>

    <section class=\"container mt-4\">
        <h2>Compétences</h2>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"appli\" class=\"me-3\">Créer des outils et applications informatiques pour les R&T</label>
            <progress id=\"appli\" value=\"60\" max=\"100\" style=\"width: 400px; height: 60px;\">60%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"html\" class=\"me-3\">HTML</label>
            <progress id=\"html\" value=\"40\" max=\"100\" style=\"width: 400px; height: 60px;\">40%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"systeme\" class=\"me-3\">Système d'exploitation</label>
            <progress id=\"systeme\" value=\"60\" max=\"100\" style=\"width: 400px; height: 60px;\">95%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"connect\" class=\"me-3\">Connecter les entreprise et les usagers</label>
            <progress id=\"connect\" value=\"25\" max=\"100\" style=\"width: 400px; height: 60px;\">25%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"gestion\" class=\"me-3\">Gestion de projet</label>
            <progress id=\"gestion\" value=\"75\" max=\"100\" style=\"width: 400px; height: 60px;\">75%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"cybersecurity\" class=\"me-3\">Cybersécurité</label>
            <progress id=\"cybersecurity\" value=\"65\" max=\"100\" style=\"width: 400px; height: 60px;\">65%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"admin\" class=\"me-3\">Administrer les réseau et l'internet</label>
            <progress id=\"admin\" value=\"74\" max=\"100\" style=\"width: 400px; height: 60px;\">74%</progress>
        </div>

        <div class=\"mb-3 d-flex align-items-center\">
            <label for=\"reseau\" class=\"me-3\">Réseau</label>
            <progress id=\"reseau\" value=\"80\" max=\"100\" style=\"width: 400px; height: 60px;\">80%</progress>
        </div>
    </section>

    <div class=\"text-center mt-4\">
        <a class=\"btn btn-primary\" href=\"{{ path('tp_page') }}\">Compte Rendu de TP</a>
    </div>
{% endblock %}
", "ali/E-Portfolio.html.twig", "C:\\projet555\\templates\\ali\\E-Portfolio.html.twig");
    }
}
