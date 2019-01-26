<?php

/* components/cart.html.twig */
class __TwigTemplate_36e0e59f87a0e8ae0c009b7813499fe448c62fdc2c47cf4661cd54217dd5358e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "components/cart.html.twig"));

        // line 1
        echo "<div id=\"cartModal\" class=\"modal modal-fixed-footer\">
\t<div class=\"modal-content no-padding\">
\t\t<div class=\"modal-header\" id=\"cartModalHeader\">
\t\t\t<i class=\"material-icons icon-in-header\">shopping_cart</i>
\t\t\t<h3>Ваша корзина</h3>
\t\t\t<i class=\"material-icons modal-close\">close</i>
\t\t</div>
\t\t<div class=\"cart-content\" id=\"firstStep\">
\t\t\t<div class=\"row head-row hide-on-small-and-down\">
\t\t\t\t<div class=\"col xl5 l5 m7 s7\">
\t\t\t\t\t<h3 class=\"cart-head-caption\">Название</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2\">
\t\t\t\t\t<h3 class=\"cart-head-caption hide-on-med-and-down\">Количество</h3>
\t\t\t\t\t<h3 class=\"cart-head-caption hide-on-large-only\">Кол-во</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl3 l3 m3 s3\">
\t\t\t\t\t<h3 class=\"cart-head-caption\">Цена</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row product-row\">
\t\t\t\t<div class=\"col xl5 l5 m7 s12\">
\t\t\t\t\t<div class=\"row margin-min\">
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 image-col\">
\t\t\t\t\t\t\t<div class=\"image-in-cart\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 product-info-col\">
\t\t\t\t\t\t\t<div class=\"name-of-product\">
\t\t\t\t\t\t\t\t<h5>Умные часы DZ09</h5>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet. Adipisci exercitationem</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"count-of-product\">
\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl3 l3 m3 s3 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"price-of-product\">
\t\t\t\t\t\t<span>76 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 hide-on-med-and-up count-price-on-mobile\">
\t\t\t\t\t<div class=\"price-of-product-mobile\">
\t\t\t\t\t\t<span>76 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"count-of-product-mobile\">
\t\t\t\t\t\t<span>3 шт.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row product-row\">
\t\t\t\t<div class=\"col xl5 l5 m7 s12\">
\t\t\t\t\t<div class=\"row margin-min\">
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 image-col\">
\t\t\t\t\t\t\t<div class=\"image-in-cart\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 product-info-col\">
\t\t\t\t\t\t\t<div class=\"name-of-product\">
\t\t\t\t\t\t\t\t<h5>Умные часы DZ09</h5>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet. Adipisci exercitationem</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"count-of-product\">
\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl3 l3 m3 s3 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"price-of-product\">
\t\t\t\t\t\t<span>42 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 hide-on-med-and-up count-price-on-mobile\">
\t\t\t\t\t<div class=\"price-of-product-mobile\">
\t\t\t\t\t\t<span>42 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"count-of-product-mobile\">
\t\t\t\t\t\t<span>1 шт.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"cart-bonus-block\">
\t\t\t\t<h2 class=\"bones-caption\">В подарок вы получите</h2>
\t\t\t\t<div class=\"row product-row\">
\t\t\t\t\t<div class=\"col xl5 l5 m7 s12\">
\t\t\t\t\t\t<div class=\"row margin-min\">
\t\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 image-col\">
\t\t\t\t\t\t\t\t<div class=\"image-in-cart\">
\t\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/pleer.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 product-info-col\">
\t\t\t\t\t\t\t\t<div class=\"name-of-product\">
\t\t\t\t\t\t\t\t\t<h5>Умные часы DZ09</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet. Adipisci exercitationem</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2 hide-on-small-and-down\">
\t\t\t\t\t\t<div class=\"count-of-product\">
\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl3 l3 m3 s3 hide-on-small-and-down\">
\t\t\t\t\t\t<div class=\"price-of-product\">
\t\t\t\t\t\t\t<span>Бесплатно</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 hide-on-med-and-up count-price-on-mobile\">
\t\t\t\t\t\t<div class=\"price-of-product-mobile\">
\t\t\t\t\t\t\t<span>Бесплатно</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"count-of-product-mobile hide\">
\t\t\t\t\t\t\t<span>1 шт.</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"\" id=\"secondStep\" style=\"margin-top: 100px;\">
\t\t\t<div class=\"row row-with-tabs\">
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<ul class=\"tabs cart-tabs\">
\t\t\t\t\t\t<li class=\"tab col s3\"><a href=\"#secondStepMinks\" class=\"active\">По Минску</a></li>
\t\t\t\t\t\t<li class=\"tab col s3\"><a href=\"#secondStepMail\">По почте</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"secondStepMinks\">
\t\t\t\t<div class=\"row row-name-phone\">
\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t<input id=\"icon_prefix\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t<label for=\"icon_prefix\">Ваше имя</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">phone</i>
\t\t\t\t\t\t<input id=\"icon_telephone\" type=\"tel\" class=\"validate\">
\t\t\t\t\t\t<label for=\"icon_telephone\">Номер телефона</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-checkboxes\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"filled-in\" checked=\"checked\" />
\t\t\t\t\t\t<span>Filled in</span>
\t\t\t\t\t</label>
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"filled-in\" checked=\"checked\" />
\t\t\t\t\t\t<span>Filled in</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"secondStepMail\">
\t\t\t\t<h2>Почта</h2>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"\" id=\"thirdStep\" style=\"margin-top: 100px;\">
\t\t\t<h2>Third Step</h2>
\t\t\t<p>Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim explicabo id impedit nam obcaecati officiis porro quaerat quidem reprehenderit, rerum! amet, consectetur adipisicing elit. Accusamus aliquam, asperiores beatae, consequatur consequuntur, debitis enim esse hic iusto laudantium libero nam nemo nihil placeat quisquam repellat tempora veritatis. Adipisci amet culpa doloremque ea eligendi minima molestiae neque qui quod veniam? Accusamus alias aut nobis quas quisquam recusandae rem? Consequatur!</p>
\t\t</div>
\t\t
\t</div>
\t<div class=\"modal-footer\">
\t\t<div class=\"button-left hide\">
\t\t\t<i class=\"material-icons cart-icon-left\">keyboard_arrow_left</i><a id=\"prevStep\" class=\"waves-effect waves-green btn-flat\">Назад</a>
\t\t</div>
\t\t<ul class=\"tabs cart-tabs hide-on-small-and-down\">
\t\t\t<li class=\"tab col s3\"><a id=\"firstStepLink\" onclick=\"tabSelected('first')\" href=\"#firstStep\" class=\"active\">Шаг 1</a></li>
\t\t\t<li class=\"tab col s3 disabled\"><a id=\"secondStepLink\" onclick=\"tabSelected('second')\" href=\"#secondStep\">Шаг 2</a></li>
\t\t\t<li class=\"tab col s3 disabled\"><a id=\"thirdStepLink\" onclick=\"tabSelected('third')\" href=\"#thirdStep\">Шаг 3</a></li>
\t\t</ul>
\t\t<div class=\"button-right\" id=\"button-right\">
\t\t\t<a id=\"nextStep\" class=\"waves-effect waves-green btn-flat\">Дальше</a><i class=\"material-icons cart-icon-right\">keyboard_arrow_right</i>
\t\t</div>
\t</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 100,  95 => 62,  57 => 27,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"cartModal\" class=\"modal modal-fixed-footer\">
\t<div class=\"modal-content no-padding\">
\t\t<div class=\"modal-header\" id=\"cartModalHeader\">
\t\t\t<i class=\"material-icons icon-in-header\">shopping_cart</i>
\t\t\t<h3>Ваша корзина</h3>
\t\t\t<i class=\"material-icons modal-close\">close</i>
\t\t</div>
\t\t<div class=\"cart-content\" id=\"firstStep\">
\t\t\t<div class=\"row head-row hide-on-small-and-down\">
\t\t\t\t<div class=\"col xl5 l5 m7 s7\">
\t\t\t\t\t<h3 class=\"cart-head-caption\">Название</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2\">
\t\t\t\t\t<h3 class=\"cart-head-caption hide-on-med-and-down\">Количество</h3>
\t\t\t\t\t<h3 class=\"cart-head-caption hide-on-large-only\">Кол-во</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl3 l3 m3 s3\">
\t\t\t\t\t<h3 class=\"cart-head-caption\">Цена</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row product-row\">
\t\t\t\t<div class=\"col xl5 l5 m7 s12\">
\t\t\t\t\t<div class=\"row margin-min\">
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 image-col\">
\t\t\t\t\t\t\t<div class=\"image-in-cart\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/1.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 product-info-col\">
\t\t\t\t\t\t\t<div class=\"name-of-product\">
\t\t\t\t\t\t\t\t<h5>Умные часы DZ09</h5>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet. Adipisci exercitationem</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"count-of-product\">
\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl3 l3 m3 s3 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"price-of-product\">
\t\t\t\t\t\t<span>76 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 hide-on-med-and-up count-price-on-mobile\">
\t\t\t\t\t<div class=\"price-of-product-mobile\">
\t\t\t\t\t\t<span>76 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"count-of-product-mobile\">
\t\t\t\t\t\t<span>3 шт.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row product-row\">
\t\t\t\t<div class=\"col xl5 l5 m7 s12\">
\t\t\t\t\t<div class=\"row margin-min\">
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 image-col\">
\t\t\t\t\t\t\t<div class=\"image-in-cart\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/2.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 product-info-col\">
\t\t\t\t\t\t\t<div class=\"name-of-product\">
\t\t\t\t\t\t\t\t<h5>Умные часы DZ09</h5>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet. Adipisci exercitationem</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"count-of-product\">
\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl3 l3 m3 s3 hide-on-small-and-down\">
\t\t\t\t\t<div class=\"price-of-product\">
\t\t\t\t\t\t<span>42 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12 hide-on-med-and-up count-price-on-mobile\">
\t\t\t\t\t<div class=\"price-of-product-mobile\">
\t\t\t\t\t\t<span>42 BYN</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"count-of-product-mobile\">
\t\t\t\t\t\t<span>1 шт.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"cart-bonus-block\">
\t\t\t\t<h2 class=\"bones-caption\">В подарок вы получите</h2>
\t\t\t\t<div class=\"row product-row\">
\t\t\t\t\t<div class=\"col xl5 l5 m7 s12\">
\t\t\t\t\t\t<div class=\"row margin-min\">
\t\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 image-col\">
\t\t\t\t\t\t\t\t<div class=\"image-in-cart\">
\t\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/pleer.png') }}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col xl6 l6 m6 s6 product-info-col\">
\t\t\t\t\t\t\t\t<div class=\"name-of-product\">
\t\t\t\t\t\t\t\t\t<h5>Умные часы DZ09</h5>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet. Adipisci exercitationem</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl2 l2 m2 s2 offset-xl2 offset-l2 hide-on-small-and-down\">
\t\t\t\t\t\t<div class=\"count-of-product\">
\t\t\t\t\t\t\t<span>3</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl3 l3 m3 s3 hide-on-small-and-down\">
\t\t\t\t\t\t<div class=\"price-of-product\">
\t\t\t\t\t\t\t<span>Бесплатно</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 hide-on-med-and-up count-price-on-mobile\">
\t\t\t\t\t\t<div class=\"price-of-product-mobile\">
\t\t\t\t\t\t\t<span>Бесплатно</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"count-of-product-mobile hide\">
\t\t\t\t\t\t\t<span>1 шт.</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t\t<div class=\"\" id=\"secondStep\" style=\"margin-top: 100px;\">
\t\t\t<div class=\"row row-with-tabs\">
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<ul class=\"tabs cart-tabs\">
\t\t\t\t\t\t<li class=\"tab col s3\"><a href=\"#secondStepMinks\" class=\"active\">По Минску</a></li>
\t\t\t\t\t\t<li class=\"tab col s3\"><a href=\"#secondStepMail\">По почте</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"secondStepMinks\">
\t\t\t\t<div class=\"row row-name-phone\">
\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t<input id=\"icon_prefix\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t<label for=\"icon_prefix\">Ваше имя</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">phone</i>
\t\t\t\t\t\t<input id=\"icon_telephone\" type=\"tel\" class=\"validate\">
\t\t\t\t\t\t<label for=\"icon_telephone\">Номер телефона</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-checkboxes\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"filled-in\" checked=\"checked\" />
\t\t\t\t\t\t<span>Filled in</span>
\t\t\t\t\t</label>
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" class=\"filled-in\" checked=\"checked\" />
\t\t\t\t\t\t<span>Filled in</span>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"secondStepMail\">
\t\t\t\t<h2>Почта</h2>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"\" id=\"thirdStep\" style=\"margin-top: 100px;\">
\t\t\t<h2>Third Step</h2>
\t\t\t<p>Lorem ipsum dolor sit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim explicabo id impedit nam obcaecati officiis porro quaerat quidem reprehenderit, rerum! amet, consectetur adipisicing elit. Accusamus aliquam, asperiores beatae, consequatur consequuntur, debitis enim esse hic iusto laudantium libero nam nemo nihil placeat quisquam repellat tempora veritatis. Adipisci amet culpa doloremque ea eligendi minima molestiae neque qui quod veniam? Accusamus alias aut nobis quas quisquam recusandae rem? Consequatur!</p>
\t\t</div>
\t\t
\t</div>
\t<div class=\"modal-footer\">
\t\t<div class=\"button-left hide\">
\t\t\t<i class=\"material-icons cart-icon-left\">keyboard_arrow_left</i><a id=\"prevStep\" class=\"waves-effect waves-green btn-flat\">Назад</a>
\t\t</div>
\t\t<ul class=\"tabs cart-tabs hide-on-small-and-down\">
\t\t\t<li class=\"tab col s3\"><a id=\"firstStepLink\" onclick=\"tabSelected('first')\" href=\"#firstStep\" class=\"active\">Шаг 1</a></li>
\t\t\t<li class=\"tab col s3 disabled\"><a id=\"secondStepLink\" onclick=\"tabSelected('second')\" href=\"#secondStep\">Шаг 2</a></li>
\t\t\t<li class=\"tab col s3 disabled\"><a id=\"thirdStepLink\" onclick=\"tabSelected('third')\" href=\"#thirdStep\">Шаг 3</a></li>
\t\t</ul>
\t\t<div class=\"button-right\" id=\"button-right\">
\t\t\t<a id=\"nextStep\" class=\"waves-effect waves-green btn-flat\">Дальше</a><i class=\"material-icons cart-icon-right\">keyboard_arrow_right</i>
\t\t</div>
\t</div>
</div>", "components/cart.html.twig", "/home/sollent/Desktop/sollento/testSollento/app/Resources/views/components/cart.html.twig");
    }
}
