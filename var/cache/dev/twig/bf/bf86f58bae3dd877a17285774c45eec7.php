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

/* parteners/index.html.twig */
class __TwigTemplate_3de02df616fe7f8ba615a96ca840e17f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parteners/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parteners/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parteners/index.html.twig", 1);
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

        echo "Partenaires
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/offres.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"img_top_logo\">
\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b2/Campingazlogo.jpg\" alt=\"l'image charge\">
\t</div>
\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/home\" id=\"home\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/home-closed.png"), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a id=\"news\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/news-closed.png"), "html", null, true);
        echo "\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href-\"/offers\" id=\"offers\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discount-open.png"), "html", null, true);
        echo "\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
                <h1>LE CE DE CAMPINGAZ</h1>
                <p>Retrouvez toutes les offres du ce de campingaz.</p>
            </section>
        </div>

\t\t
\t\t<div id=\"link\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/desktop\">Le bureau</a>
\t\t\t\t<a href=\"/hobbies\">Culture / Loisirs</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/travel\">Voyages</a>
\t\t\t\t<a href=\"/parteners\">Partenaires</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/ticket\">Billeteries</a>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"bar\">
\t\t\t
\t\t</div>

\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parteners"]) || array_key_exists("parteners", $context) ? $context["parteners"] : (function () { throw new RuntimeError('Variable "parteners" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partener"]) {
            // line 57
            echo "\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partener"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</h2>
\t\t\t\t<p>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partener"], "description", [], "any", false, false, false, 59), "html", null, true);
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["partener"], "link", [], "any", false, false, false, 59))) {
                // line 60
                echo "\t\t\t\t\t<a id=\"link_offers_db\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partener"], "link", [], "any", false, false, false, 60), "html", null, true);
                echo "\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t";
            }
            // line 62
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "parteners/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 64,  189 => 62,  183 => 60,  180 => 59,  176 => 58,  173 => 57,  169 => 56,  131 => 21,  126 => 19,  121 => 17,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Partenaires
{% endblock %}

{% block stylesheets %}
\t<link href=\"{{asset('css/offres.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
\t<div class=\"img_top_logo\">
\t\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b2/Campingazlogo.jpg\" alt=\"l'image charge\">
\t</div>
\t<header>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/home\" id=\"home\"><img src=\"{{asset('img/home-closed.png')}}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li><a id=\"news\"><img src=\"{{asset('img/news-closed.png')}}\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li><a href-\"/offers\" id=\"offers\"><img src=\"{{asset('img/discount-open.png')}}\">Offres</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</header>

    <main>
        <div id=\"banner_top\">
            <section id=\"banner_top_filter\">
                <h1>LE CE DE CAMPINGAZ</h1>
                <p>Retrouvez toutes les offres du ce de campingaz.</p>
            </section>
        </div>

\t\t
\t\t<div id=\"link\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/desktop\">Le bureau</a>
\t\t\t\t<a href=\"/hobbies\">Culture / Loisirs</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/travel\">Voyages</a>
\t\t\t\t<a href=\"/parteners\">Partenaires</a>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"/ticket\">Billeteries</a>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"bar\">
\t\t\t
\t\t</div>

\t\t{% for partener in parteners %}
\t\t\t<div class=\"offers_db\">
\t\t\t\t<h2>{{partener.title}}</h2>
\t\t\t\t<p>{{partener.description}}{% if partener.link is not empty %}
\t\t\t\t\t<a id=\"link_offers_db\" href=\"{{partener.link}}\"> lien vers le partenaire ici</a>.</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}
    </main>
{% endblock %}
", "parteners/index.html.twig", "/Applications/MAMP/htdocs/campingaz-ce/templates/parteners/index.html.twig");
    }
}
