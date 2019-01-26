<?php

/* components/header.html.twig */
class __TwigTemplate_a084310b805b5b62e735313b54a8ab4fdb325becc657ae91a4f5f1b462066f43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'cart_header_block' => array($this, 'block_cart_header_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/header.html.twig"));

        // line 1
        echo "<div class=\"header\">
\t
\t";
        // line 4
        echo "\t<div class=\"navbar-fixed\">
\t\t<nav>
\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a href=\"\" class=\"brand-logo\">Sollento market</a>
\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage-action");
        echo "\">Главная</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalog-page-action");
        echo "\">Каталог</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news-page-action");
        echo "\">Новости</a></li>
\t\t\t\t\t\t<li><a href=\"\">Контакты</a></li>
\t\t\t\t\t\t<li><a href=\"\">О нас</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
\t\t\t</div>
\t\t\t";
        // line 19
        $this->displayBlock('cart_header_block', $context, $blocks);
        // line 40
        echo "\t\t</nav>
\t</div>
\t
\t";
        // line 43
        $this->loadTemplate("components/cart.html.twig", "components/header.html.twig", 43)->display($context);
        // line 44
        echo "\t
\t";
        // line 46
        echo "\t";
        $this->loadTemplate("components/responsive-menu.html.twig", "components/header.html.twig", 46)->display($context);
        // line 47
        echo "\t
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_cart_header_block($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cart_header_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cart_header_block"));

        // line 20
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") != "homepage-action")) {
            // line 21
            echo "\t\t\t\t\t<div class=\"nav-content\">
\t\t\t\t\t\t<div class=\"cart-block\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col hide-on-large-only\">
\t\t\t\t\t\t\t\t\t<a href=\"\">12 товаров</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col xl5 cart-button-col\">
\t\t\t\t\t\t\t\t\t<a href=\"#cartModal\" class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal cart-big-button modal-trigger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">add_shopping_cart</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col xl7 hide-on-med-and-down\">
\t\t\t\t\t\t\t\t\t<a href=\"\">12 товаров</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  98 => 21,  95 => 20,  86 => 19,  75 => 47,  72 => 46,  69 => 44,  67 => 43,  62 => 40,  60 => 19,  50 => 12,  46 => 11,  42 => 10,  34 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header\">
\t
\t{#Navbar#}
\t<div class=\"navbar-fixed\">
\t\t<nav>
\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a href=\"\" class=\"brand-logo\">Sollento market</a>
\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t<li><a href=\"{{ path('homepage-action') }}\">Главная</a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('catalog-page-action') }}\">Каталог</a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('news-page-action') }}\">Новости</a></li>
\t\t\t\t\t\t<li><a href=\"\">Контакты</a></li>
\t\t\t\t\t\t<li><a href=\"\">О нас</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<a href=\"\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
\t\t\t</div>
\t\t\t{% block cart_header_block %}
\t\t\t\t{% if app.request.get('_route') != 'homepage-action' %}
\t\t\t\t\t<div class=\"nav-content\">
\t\t\t\t\t\t<div class=\"cart-block\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col hide-on-large-only\">
\t\t\t\t\t\t\t\t\t<a href=\"\">12 товаров</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col xl5 cart-button-col\">
\t\t\t\t\t\t\t\t\t<a href=\"#cartModal\" class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal cart-big-button modal-trigger\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">add_shopping_cart</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col xl7 hide-on-med-and-down\">
\t\t\t\t\t\t\t\t\t<a href=\"\">12 товаров</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endblock %}
\t\t</nav>
\t</div>
\t
\t{% include 'components/cart.html.twig' %}
\t
\t{#Responsive menu#}
\t{% include 'components/responsive-menu.html.twig' %}
\t
</div>", "components/header.html.twig", "/home/sollent/Desktop/sollento/testSollento/app/Resources/views/components/header.html.twig");
    }
}
