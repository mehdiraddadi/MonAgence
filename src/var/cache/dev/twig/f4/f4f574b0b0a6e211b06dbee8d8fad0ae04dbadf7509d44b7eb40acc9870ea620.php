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

/* property/show.html.twig */
class __TwigTemplate_dce74d6d5e5789d7211fd853799c0aeb84cefb51e96e5df7733eaac98dacfae5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <div class=\"alert alert-danger\">
                    Erreur je ne sais pas quoi
                </div>
            ";
        }
        // line 20
        echo "
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div data-slider>
                        ";
        // line 24
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "pictures", [], "any", false, false, false, 24))) {
            // line 25
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/properties/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                        ";
        } else {
            // line 27
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 27, $this->source); })()), "pictures", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 28
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["picture"], "imageFile"), "medium"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        ";
        }
        // line 31
        echo "                    </div>
                </div>
                <div class=\"col-md-4\">
                    <h1>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), "html", null, true);
        echo "</h1>
                    <h2>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "rooms", [], "any", false, false, false, 35), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 35, $this->source); })()), "surface", [], "any", false, false, false, 35), "html", null, true);
        echo " m²</h2>
                    <div class=\"text-primary\" style=\"font-size: 4rem;font-weight: bold;\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()), "formattedPrice", [], "any", false, false, false, 36), "html", null, true);
        echo " €</div>
                    <a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\"";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "submitted", [], "any", false, false, false, 37)) {
            echo " style=\"display: none;\"";
        }
        echo ">Contacter l'agence</a>
                    <div id=\"contactForm\" class=\"mt-4\"";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "submitted", [], "any", false, false, false, 38)) {
            echo " style=\"display: block;\"";
        }
        echo ">
                        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "firstname", [], "any", false, false, false, 41), 'row');
        echo "</div>
                            <div class=\"col\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "lastname", [], "any", false, false, false, 42), 'row');
        echo "</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'row');
        echo "</div>
                            <div class=\"col\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'row');
        echo "</div>
                        </div>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'rest');
        echo "
                        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <p>
            ";
        // line 57
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "html", null, true));
        echo "
        </p>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 66, $this->source); })()), "surface", [], "any", false, false, false, 66), "html", null, true);
        echo " m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 70, $this->source); })()), "rooms", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 74, $this->source); })()), "bedrooms", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 78, $this->source); })()), "floor", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 82, $this->source); })()), "heatType", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h2>Spécificités</h2>
                <ul class=\"list-group\">
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 89, $this->source); })()), "options", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 90
            echo "                        <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </ul>
            </div>
        </div>
        <div id=\"map\" style=\"width: 100%; height: 400px\" data-lat=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 95, $this->source); })()), "lat", [], "any", false, false, false, 95), "html", null, true);
        echo "\" data-lng=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 95, $this->source); })()), "lng", [], "any", false, false, false, 95), "html", null, true);
        echo "\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 95,  284 => 92,  275 => 90,  271 => 89,  261 => 82,  254 => 78,  247 => 74,  240 => 70,  233 => 66,  221 => 57,  210 => 49,  206 => 48,  201 => 46,  197 => 45,  191 => 42,  187 => 41,  182 => 39,  176 => 38,  170 => 37,  166 => 36,  160 => 35,  156 => 34,  151 => 31,  148 => 30,  139 => 28,  134 => 27,  128 => 25,  126 => 24,  120 => 20,  114 => 16,  112 => 15,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block body %}
    <div class=\"jumbotron\">
        <div class=\"container\">

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}

            {% if not form.vars.valid %}
                <div class=\"alert alert-danger\">
                    Erreur je ne sais pas quoi
                </div>
            {% endif %}

            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div data-slider>
                        {% if property.pictures is empty %}
                            <img src=\"{{ '/images/properties/empty.jpg' | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                        {% else %}
                            {% for picture in property.pictures %}
                                <img src=\"{{ vich_uploader_asset(picture, 'imageFile') | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <h1>{{ property.title }}</h1>
                    <h2>{{ property.rooms }} pièces - {{ property.surface }} m²</h2>
                    <div class=\"text-primary\" style=\"font-size: 4rem;font-weight: bold;\">{{ property.formattedPrice }} €</div>
                    <a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\"{% if form.vars.submitted %} style=\"display: none;\"{% endif %}>Contacter l'agence</a>
                    <div id=\"contactForm\" class=\"mt-4\"{% if not form.vars.submitted %} style=\"display: block;\"{% endif %}>
                        {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col\">{{ form_row(form.firstname) }}</div>
                            <div class=\"col\">{{ form_row(form.lastname) }}</div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">{{ form_row(form.phone) }}</div>
                            <div class=\"col\">{{ form_row(form.email) }}</div>
                        </div>
                        {{ form_rest(form) }}
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4\">
        <p>
            {{ property.description | nl2br }}
        </p>

        <div class=\"row\">
            <div class=\"col-md-8\">
                <h2>Caractéristiques</h2>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ property.rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ property.bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ property.floor }}</td>
                    </tr>
                    <tr>
                        <td>Chauffage</td>
                        <td>{{ property.heatType }}</td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h2>Spécificités</h2>
                <ul class=\"list-group\">
                    {% for option in property.options %}
                        <li class=\"list-group-item\">{{ option.name }}</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div id=\"map\" style=\"width: 100%; height: 400px\" data-lat=\"{{ property.lat }}\" data-lng=\"{{ property.lng }}\"></div>
    </div>
{% endblock %}
", "property/show.html.twig", "/var/www/templates/property/show.html.twig");
    }
}
