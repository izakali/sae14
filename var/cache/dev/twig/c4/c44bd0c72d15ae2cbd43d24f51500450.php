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

/* ali/cv.html.twig */
class __TwigTemplate_1b981eca6efb71f35516743db20d9b3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ali/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ali/cv.html.twig", 1);
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

        echo "Mon CV";
        
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
        echo "   <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
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
       <h1>Veuillez renseigner vos informations ci-dessous pour le CV</h1>
   </header>

   <section class=\"container mt-4 d-flex align-items-center justify-content-center\">
        <form id=\"downloadForm\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv_download");
        echo "\" method=\"post\" class=\"w-50\" onsubmit=\"return validateForm(event) && submitForm()\">
           <div class=\"form-group mb-3\">
               <h1 class=\"text-center\">Formulaire</h1>
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"nom\">Nom :</label>
               <input type=\"text\" id=\"nom\" name=\"nom\" required class=\"form-control\">
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"prenom\">Prénom :</label>
               <input type=\"text\" id=\"prenom\" name=\"prenom\" required class=\"form-control\">
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"Entreprise\">Entreprise :</label>
               <input type=\"text\" id=\"Entreprise\" name=\"Entreprise\" class=\"form-control\">
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"email\">Email :</label>
               <input type=\"email\" id=\"email\" name=\"email\" required class=\"form-control\">
           </div>

           <button type=\"submit\" class=\"btn btn-primary mt-3\">Télécharger CV</button>
       </form>
   </section>

   <script>
       function validateForm() {
           var nom = document.getElementById('nom').value;
           var prenom = document.getElementById('prenom').value;
           var email = document.getElementById('email').value;

           if (nom === '' || prenom === '' || email === '') {
               alert('Veuillez remplir tous les champs du formulaire.');
               return false;
           }

           return true;
       }
       function submitForm() {
           document.getElementById('downloadForm').method = 'get';
           document.getElementById('downloadForm').submit();
       }
   </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ali/cv.html.twig";
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
        return array (  123 => 30,  108 => 18,  102 => 15,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon CV{% endblock %}

{% block body %}
   <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
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
                       <a class=\"nav-link\" href=\"{{ path('E-Portfolio') }}\">E-Portfolio</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <header class=\"text-center mt-4\">
       <h1>Veuillez renseigner vos informations ci-dessous pour le CV</h1>
   </header>

   <section class=\"container mt-4 d-flex align-items-center justify-content-center\">
        <form id=\"downloadForm\" action=\"{{ path('cv_download') }}\" method=\"post\" class=\"w-50\" onsubmit=\"return validateForm(event) && submitForm()\">
           <div class=\"form-group mb-3\">
               <h1 class=\"text-center\">Formulaire</h1>
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"nom\">Nom :</label>
               <input type=\"text\" id=\"nom\" name=\"nom\" required class=\"form-control\">
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"prenom\">Prénom :</label>
               <input type=\"text\" id=\"prenom\" name=\"prenom\" required class=\"form-control\">
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"Entreprise\">Entreprise :</label>
               <input type=\"text\" id=\"Entreprise\" name=\"Entreprise\" class=\"form-control\">
           </div>

           <div class=\"form-group mb-3\">
               <label for=\"email\">Email :</label>
               <input type=\"email\" id=\"email\" name=\"email\" required class=\"form-control\">
           </div>

           <button type=\"submit\" class=\"btn btn-primary mt-3\">Télécharger CV</button>
       </form>
   </section>

   <script>
       function validateForm() {
           var nom = document.getElementById('nom').value;
           var prenom = document.getElementById('prenom').value;
           var email = document.getElementById('email').value;

           if (nom === '' || prenom === '' || email === '') {
               alert('Veuillez remplir tous les champs du formulaire.');
               return false;
           }

           return true;
       }
       function submitForm() {
           document.getElementById('downloadForm').method = 'get';
           document.getElementById('downloadForm').submit();
       }
   </script>
{% endblock %}
", "ali/cv.html.twig", "C:\\projet555\\templates\\ali\\cv.html.twig");
    }
}
