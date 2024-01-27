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

/* ali/en_savoir+.html.twig */
class __TwigTemplate_605744ed500b85a2c0a5f5004ba58e65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/en_savoir+.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/en_savoir+.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ali/en_savoir+.html.twig", 1);
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

        echo "En savoir plus";
        
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
        echo "    <header class=\"text-center mt-4\">
        <h1>En savoir plus</h1>
    </header>

    <section class=\"container mt-4 d-flex flex-column align-items-center\">
        <div class=\"mb-3 text-center\">
            <h2>Mes Loisirs</h2>
            <p class=\"lead\">Dans mes loisirs, j'aime beaucoup jouer aux jeux vidéo, car ils me permettent de me détendre, de m'évader et de développer ma créativité. Je suis toujours à la recherche de nouveaux jeux qui me challengent et me font vivre des aventures passionnantes.</p>
            <div class=\"text-center\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("loisirs_image1.png"), "html", null, true);
        echo "\" alt=\"Loisirs Image 1\" style=\"width: 410px; height: 500px;\">
            </div>
        </div>

        <div class=\"mb-3 text-center\">
            <h2>Mes Passions</h2>
            <p class=\"lead\">J'ai une passion pour la cybersécurité et le réseau car je suis convaincu que ce sont des domaines essentiels pour assurer la sécurité de notre monde numérique. Je suis déterminé à contribuer à protéger les systèmes informatiques des cyberattaques et à garantir que les individus et les entreprises puissent utiliser Internet en toute sécurité.</p>
            <div class=\"text-center\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("passion_image1.png"), "html", null, true);
        echo "\" alt=\"Passion Image 1\" style=\"width: 410px; height: 280px;\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("passion_image2.png"), "html", null, true);
        echo "\" alt=\"Passion Image 2\" style=\"width: 410px; height: 280px;\">
            </div>
        </div>

        <div class=\"mb-3 text-center\">
            <h2>Mes Extras</h2>
            <p class=\"lead\">Dans mes extras, j'aime beaucoup voyager et explorer le monde, car cela me permet de me développer en tant que personne. J'apprends toujours de nouvelles choses sur différentes cultures, sur moi-même et sur le monde qui m'entoure. Je suis également passionné par la photographie et la vidéo, et j'aime immortaliser mes voyages pour pouvoir les partager avec les autres.</p>
            <div class=\"text-center\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("envies_image1.png"), "html", null, true);
        echo "\" alt=\"Envies Image 1\" style=\"width: 410px; height: 280px;\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("envies_image2.png"), "html", null, true);
        echo "\" alt=\"Envies Image 2\" style=\"width: 410px; height: 280px;\">
            </div>
        </div>
    </section>

    <div class=\"text-center\">
        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ali");
        echo "\" class=\"btn btn-primary mt-3\">Retour</a>
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
        return "ali/en_savoir+.html.twig";
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
        return array (  138 => 39,  129 => 33,  125 => 32,  114 => 24,  110 => 23,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}En savoir plus{% endblock %}

{% block body %}
    <header class=\"text-center mt-4\">
        <h1>En savoir plus</h1>
    </header>

    <section class=\"container mt-4 d-flex flex-column align-items-center\">
        <div class=\"mb-3 text-center\">
            <h2>Mes Loisirs</h2>
            <p class=\"lead\">Dans mes loisirs, j'aime beaucoup jouer aux jeux vidéo, car ils me permettent de me détendre, de m'évader et de développer ma créativité. Je suis toujours à la recherche de nouveaux jeux qui me challengent et me font vivre des aventures passionnantes.</p>
            <div class=\"text-center\">
                <img src=\"{{ asset('loisirs_image1.png') }}\" alt=\"Loisirs Image 1\" style=\"width: 410px; height: 500px;\">
            </div>
        </div>

        <div class=\"mb-3 text-center\">
            <h2>Mes Passions</h2>
            <p class=\"lead\">J'ai une passion pour la cybersécurité et le réseau car je suis convaincu que ce sont des domaines essentiels pour assurer la sécurité de notre monde numérique. Je suis déterminé à contribuer à protéger les systèmes informatiques des cyberattaques et à garantir que les individus et les entreprises puissent utiliser Internet en toute sécurité.</p>
            <div class=\"text-center\">
                <img src=\"{{ asset('passion_image1.png') }}\" alt=\"Passion Image 1\" style=\"width: 410px; height: 280px;\">
                <img src=\"{{ asset('passion_image2.png') }}\" alt=\"Passion Image 2\" style=\"width: 410px; height: 280px;\">
            </div>
        </div>

        <div class=\"mb-3 text-center\">
            <h2>Mes Extras</h2>
            <p class=\"lead\">Dans mes extras, j'aime beaucoup voyager et explorer le monde, car cela me permet de me développer en tant que personne. J'apprends toujours de nouvelles choses sur différentes cultures, sur moi-même et sur le monde qui m'entoure. Je suis également passionné par la photographie et la vidéo, et j'aime immortaliser mes voyages pour pouvoir les partager avec les autres.</p>
            <div class=\"text-center\">
                <img src=\"{{ asset('envies_image1.png') }}\" alt=\"Envies Image 1\" style=\"width: 410px; height: 280px;\">
                <img src=\"{{ asset('envies_image2.png') }}\" alt=\"Envies Image 2\" style=\"width: 410px; height: 280px;\">
            </div>
        </div>
    </section>

    <div class=\"text-center\">
        <a href=\"{{ path('app_ali') }}\" class=\"btn btn-primary mt-3\">Retour</a>
    </div>
{% endblock %}", "ali/en_savoir+.html.twig", "C:\\projet555\\templates\\ali\\en_savoir+.html.twig");
    }
}
