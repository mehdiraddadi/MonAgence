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

/* admin/property/_form.html.twig */
class __TwigTemplate_1d4956d4cf5ef6dad4439881ced1c5095d37abbf7f1438c5dd8a717053e9f0fd extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/property/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/property/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-md-8\">
        <div class=\"row\">
            <div class=\"col-md-4\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'row');
        echo "</div>
            <div class=\"col-md-4\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "surface", [], "any", false, false, false, 6), 'row');
        echo "</div>
            <div class=\"col-md-4\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "price", [], "any", false, false, false, 7), 'row');
        echo "</div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"row flex justify-content-start flex-wrap\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "pictures", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 13
            echo "                <div class=\"col\" style=\"width: 100px; flex: none; margin: 5px;\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["picture"], "imageFile"), "thumb"), "html", null, true);
            echo "\" width=\"100\" alt=\"\">
                    ";
            // line 16
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.picture.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" data-delete data-token=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["picture"], "id", [], "any", false, false, false, 16))), "html", null, true);
            echo "\">Supprimer</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "rooms", [], "any", false, false, false, 23), 'row');
        echo "</div>
    <div class=\"col-md-2\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "bedrooms", [], "any", false, false, false, 24), 'row');
        echo "</div>
    <div class=\"col-md-2\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "heat", [], "any", false, false, false, 25), 'row');
        echo "</div>
    <div class=\"col-md-2\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "floor", [], "any", false, false, false, 26), 'row');
        echo "</div>
</div>
<div class=\"row\">
    <div class=\"col- md-10\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "pictureFiles", [], "any", false, false, false, 29), 'row');
        echo "</div>
    <div class=\"col-md-2\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "sold", [], "any", false, false, false, 30), 'row');
        echo "</div>
</div>
<div class=\"row\">
    <div class=\"col-md-9\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "address", [], "any", false, false, false, 33), 'row');
        echo "</div>
    <div class=\"col-md-2\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "city", [], "any", false, false, false, 34), 'row');
        echo "</div>
    <div class=\"col-md-1\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "postal_code", [], "any", false, false, false, 35), 'row');
        echo "</div>
</div>
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'rest');
        echo "
<button class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 38, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/property/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 39,  140 => 38,  136 => 37,  131 => 35,  127 => 34,  123 => 33,  117 => 30,  113 => 29,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  89 => 19,  77 => 16,  73 => 14,  70 => 13,  66 => 12,  58 => 7,  54 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"row\">
    <div class=\"col-md-8\">
        <div class=\"row\">
            <div class=\"col-md-4\">{{ form_row(form.title) }}</div>
            <div class=\"col-md-4\">{{ form_row(form.surface) }}</div>
            <div class=\"col-md-4\">{{ form_row(form.price) }}</div>
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"row flex justify-content-start flex-wrap\">
            {% for picture in property.pictures %}
                <div class=\"col\" style=\"width: 100px; flex: none; margin: 5px;\">
                    <img src=\"{{ vich_uploader_asset(picture, 'imageFile') | imagine_filter('thumb') }}\" width=\"100\" alt=\"\">
                    {#                    <a href=\"{{ path('admin.picture.delete', {id: picture.id}) }}\" class=\"btn btn-danger\" data-delete data-token=\"{{ csrf_token('delete' ~ picture.id) }}\">Supprimer</a>#}
                    <a href=\"{{ path('admin.picture.delete', {id: picture.id}) }}\" class=\"btn btn-danger\" data-delete data-token=\"{{ csrf_token('delete' ~ picture.id) }}\">Supprimer</a>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-2\">{{ form_row(form.rooms) }}</div>
    <div class=\"col-md-2\">{{ form_row(form.bedrooms) }}</div>
    <div class=\"col-md-2\">{{ form_row(form.heat) }}</div>
    <div class=\"col-md-2\">{{ form_row(form.floor) }}</div>
</div>
<div class=\"row\">
    <div class=\"col- md-10\">{{ form_row(form.pictureFiles) }}</div>
    <div class=\"col-md-2\">{{ form_row(form.sold) }}</div>
</div>
<div class=\"row\">
    <div class=\"col-md-9\">{{ form_row(form.address) }}</div>
    <div class=\"col-md-2\">{{ form_row(form.city) }}</div>
    <div class=\"col-md-1\">{{ form_row(form.postal_code) }}</div>
</div>
{{ form_rest(form) }}
<button class=\"btn btn-primary\">{{ button|default('Enregistrer') }}</button>
{{ form_end(form) }}", "admin/property/_form.html.twig", "/var/www/templates/admin/property/_form.html.twig");
    }
}
