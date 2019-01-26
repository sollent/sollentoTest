<?php

/* components/responsive-menu.html.twig */
class __TwigTemplate_70fa60d5bc5faaf6c7b536885d1698ea269140a650ccc4282a45c9023a8e45b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/responsive-menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/responsive-menu.html.twig"));

        // line 1
        echo "<div class=\"sidenav\" id=\"mobile-demo\">
\t<ul class=\"sidenav-menu\">
\t\t<li><a href=\"\" class=\"brand-logo\">Sollento</a></li>
\t\t<li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage-action");
        echo "\"><i class=\"material-icons\">home</i>Главная</a></li>
\t\t<li class=\"active\"><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalog-page-action");
        echo "\"><i class=\"material-icons\">apps</i>Каталог</a></li>
\t\t<li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news-page-action");
        echo "\"><i class=\"material-icons\">content_paste</i>Новости</a></li>
\t\t<li><a href=\"\"><i class=\"material-icons\">local_phone</i>Контакты</a></li>
\t\t<li><a href=\"\"><i class=\"material-icons\">people</i>О нас</a></li>
\t</ul>
\t<div class=\"sidenav-cart-block\">
\t\t<div class=\"container\">
\t\t\t<div class=\"sidenav-cart-button center\">
\t\t\t\t<a class=\"btn-floating btn-large waves-effect waves-light pulse\">
\t\t\t\t\t<i class=\"material-icons\">shopping_cart</i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sidenav-cart-information center-align\">
\t\t\t\t<span class=\"sidenav-cart-count\">12 </span>
\t\t\t\t<span class=\"sidenav-cart-products\">товаров</span>
\t\t\t\t<span class=\"sidenav-cart-other-information\">в вашей корзине</span>
\t\t\t</div>
\t\t\t<div class=\"sidenav-cart-going center\">
\t\t\t\t<button class=\"btn waves-effect waves-light\">Перейти
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sidenav-block-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"sidenav-sitemap\">
\t\t\t\t<a href=\"\">Карта сайта</a>
\t\t\t</div>
\t\t\t<div class=\"sidenav-address\">
\t\t\t\tг.Минск ул.Рафиева 52-48, Офис 902
\t\t\t</div>
\t\t\t<div class=\"sidenav-copyright\">
\t\t\t\t© 2009-2019 iMedia.by
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidenav\" id=\"mobile-demo\">
\t<ul class=\"sidenav-menu\">
\t\t<li><a href=\"\" class=\"brand-logo\">Sollento</a></li>
\t\t<li><a href=\"{{ path('homepage-action') }}\"><i class=\"material-icons\">home</i>Главная</a></li>
\t\t<li class=\"active\"><a href=\"{{ path('catalog-page-action') }}\"><i class=\"material-icons\">apps</i>Каталог</a></li>
\t\t<li><a href=\"{{ path('news-page-action') }}\"><i class=\"material-icons\">content_paste</i>Новости</a></li>
\t\t<li><a href=\"\"><i class=\"material-icons\">local_phone</i>Контакты</a></li>
\t\t<li><a href=\"\"><i class=\"material-icons\">people</i>О нас</a></li>
\t</ul>
\t<div class=\"sidenav-cart-block\">
\t\t<div class=\"container\">
\t\t\t<div class=\"sidenav-cart-button center\">
\t\t\t\t<a class=\"btn-floating btn-large waves-effect waves-light pulse\">
\t\t\t\t\t<i class=\"material-icons\">shopping_cart</i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sidenav-cart-information center-align\">
\t\t\t\t<span class=\"sidenav-cart-count\">12 </span>
\t\t\t\t<span class=\"sidenav-cart-products\">товаров</span>
\t\t\t\t<span class=\"sidenav-cart-other-information\">в вашей корзине</span>
\t\t\t</div>
\t\t\t<div class=\"sidenav-cart-going center\">
\t\t\t\t<button class=\"btn waves-effect waves-light\">Перейти
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sidenav-block-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"sidenav-sitemap\">
\t\t\t\t<a href=\"\">Карта сайта</a>
\t\t\t</div>
\t\t\t<div class=\"sidenav-address\">
\t\t\t\tг.Минск ул.Рафиева 52-48, Офис 902
\t\t\t</div>
\t\t\t<div class=\"sidenav-copyright\">
\t\t\t\t© 2009-2019 iMedia.by
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "components/responsive-menu.html.twig", "/home/sollent/Desktop/sollento/testSollento/app/Resources/views/components/responsive-menu.html.twig");
    }
}
