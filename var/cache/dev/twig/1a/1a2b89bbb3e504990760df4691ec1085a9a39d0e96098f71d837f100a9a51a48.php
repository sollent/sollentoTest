<?php

/* default/product-page.html.twig */
class __TwigTemplate_9a8e5a97a1b347f1b4994618cf1f017e24c602f50f76fdffc53b389922eaf4cb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "default/product-page.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'wrapper_start' => array($this, 'block_wrapper_start'),
            'main' => array($this, 'block_main'),
            'wrapper_end' => array($this, 'block_wrapper_end'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/product-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/product-page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/product.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Продукт ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t
\t";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "\t
\t";
        // line 16
        $this->displayBlock('wrapper_start', $context, $blocks);
        // line 17
        echo "\t
\t";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 157
        echo "\t
\t";
        // line 158
        $this->displayBlock('wrapper_end', $context, $blocks);
        // line 159
        echo "\t
\t";
        // line 160
        $this->displayBlock('footer', $context, $blocks);
        // line 163
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "\t\t";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_wrapper_start($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper_start"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper_start"));

        echo " ";
        $this->displayParentBlock("wrapper_start", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"product_block\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h2 class=\"show-on-medium-and-down hide-on-large-only before-image-block-caption\">Умные часы DZ09</h2>
\t\t\t\t\t<div class=\"col xl7 l7\">
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl5 l5 right-block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t<ul class=\"tabs\">
\t\t\t\t\t\t\t\t\t<li class=\"tab col s6\"><a class=\"active\" href=\"#product-info\">О продукте</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"tab col s6\"><a href=\"#product-characteristic\">Характеристики</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-right-info\" id=\"product-info\">
\t\t\t\t\t\t\t<div class=\"product-caption\">
\t\t\t\t\t\t\t\t<h2 class=\"hide-on-med-and-down\">Умные часы DZ09</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci ea eaque esse
\t\t\t\t\t\t\t\t\test fuga illo iusto, necessitatibus obcaecati, praesentium quod ratione soluta
\t\t\t\t\t\t\t\t\tsuscipit unde veniam. Eius iste nostrum odio provident quo. Assumenda autem
\t\t\t\t\t\t\t\t\tdoloribus ducimus fugiat, illum incidunt iste itaque odio officiis, placeat quos
\t\t\t\t\t\t\t\t\tratione recusandae tenetur veniam, voluptatum?</p>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"full_description_link\">Подробное описание и характеристики</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"product-characteristic\">
\t\t\t\t\t\t\t<table class=\"striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t<th>Item Name</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Alvin</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Alan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"buy-info\">
\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t<span class=\"product-price-caption\">Цена: </span>
\t\t\t\t\t\t\t\t<span class=\"product-price-value\">38 BYN</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-color-select\">
\t\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Выберите цвет:</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Темный</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Золотой</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Белый</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"material-icons right\">shopping_cart</i>Добавить в корзину</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row additional-info-block\">
\t\t\t\t\t<div class=\"col xl7 l7\">
\t\t\t\t\t\t<div class=\"about-product-info\">
\t\t\t\t\t\t\t";
        // line 128
        echo "\t\t\t\t\t\t\t\t<h4>Описание DZ09</h4>
\t\t\t\t\t\t\t\t<p>Smart Watch DZ09 – это часы-телефон. Гаджет, который получится использовать, как
\t\t\t\t\t\t\t\t\tавтономный девайс или синхронизировать с телефоном, получать уведомления, дистанционно
\t\t\t\t\t\t\t\t\tуправлять интерфейсом смартфона. Честный обзор на смарт-часы DZ09 и их описание помогут
\t\t\t\t\t\t\t\t\tобъективно оценить устройство и сделать правильные выводы до покупки. Российскому
\t\t\t\t\t\t\t\t\tпокупателю также доступны основные расходники и запасные элементы для устройства.
\t\t\t\t\t\t\t\t\tСтоимость DZ09 начинается от \$16, средний ценник составляет порядка \$30.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        // line 137
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl1 l1 vertical-line hide-on-med-and-down\"></div>
\t\t\t\t\t<div class=\"col xl4 l4\">
\t\t\t\t\t\t<div class=\"bonuses-info\">
\t\t\t\t\t\t\t";
        // line 143
        echo "\t\t\t\t\t\t\t\t<h4>Бонусы при покупке</h4>
\t\t\t\t\t\t\t\t<p>В зависимости от версии приложения и прошивки делать это получится с разной степенью
\t\t\t\t\t\t\t\t\tкомфортности. Есть модели, позволяющие без проблем и затруднений управлять плеером, но в
\t\t\t\t\t\t\t\t\tнекоторых эта возможность активируется только в том случае, если все треки вручную
\t\t\t\t\t\t\t\t\tдобавить в созданный плей-лист.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        // line 150
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 158
    public function block_wrapper_end($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper_end"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper_end"));

        echo " ";
        $this->displayParentBlock("wrapper_end", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 161
        echo "\t\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/product-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 161,  374 => 160,  354 => 158,  338 => 150,  330 => 143,  323 => 137,  313 => 128,  215 => 32,  211 => 31,  207 => 30,  201 => 27,  191 => 19,  182 => 18,  162 => 16,  149 => 13,  140 => 12,  129 => 163,  127 => 160,  124 => 159,  122 => 158,  119 => 157,  117 => 18,  114 => 17,  112 => 16,  109 => 15,  107 => 12,  104 => 11,  95 => 10,  77 => 8,  65 => 5,  60 => 4,  51 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'common.html.twig' %}

{% block stylesheet %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('build/product.css') }}\">
{% endblock %}

{% block title %} Продукт {% endblock %}

{% block body %}
\t
\t{% block header %}
\t\t{{ parent() }}
\t{% endblock %}
\t
\t{% block wrapper_start %} {{ parent() }} {% endblock %}
\t
\t{% block main %}
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"product_block\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h2 class=\"show-on-medium-and-down hide-on-large-only before-image-block-caption\">Умные часы DZ09</h2>
\t\t\t\t\t<div class=\"col xl7 l7\">
\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/1.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/2.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/3.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t<img class=\"materialboxed\" src=\"{{ asset('assets/img/pruducts/4.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl5 l5 right-block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t\t<ul class=\"tabs\">
\t\t\t\t\t\t\t\t\t<li class=\"tab col s6\"><a class=\"active\" href=\"#product-info\">О продукте</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"tab col s6\"><a href=\"#product-characteristic\">Характеристики</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-right-info\" id=\"product-info\">
\t\t\t\t\t\t\t<div class=\"product-caption\">
\t\t\t\t\t\t\t\t<h2 class=\"hide-on-med-and-down\">Умные часы DZ09</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-description\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci ea eaque esse
\t\t\t\t\t\t\t\t\test fuga illo iusto, necessitatibus obcaecati, praesentium quod ratione soluta
\t\t\t\t\t\t\t\t\tsuscipit unde veniam. Eius iste nostrum odio provident quo. Assumenda autem
\t\t\t\t\t\t\t\t\tdoloribus ducimus fugiat, illum incidunt iste itaque odio officiis, placeat quos
\t\t\t\t\t\t\t\t\tratione recusandae tenetur veniam, voluptatum?</p>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"full_description_link\">Подробное описание и характеристики</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"product-characteristic\">
\t\t\t\t\t\t\t<table class=\"striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t<th>Item Name</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Alvin</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Alan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Jonathan</td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>Lorem ipsum dolor sit amet, consectetur.</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"buy-info\">
\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t<span class=\"product-price-caption\">Цена: </span>
\t\t\t\t\t\t\t\t<span class=\"product-price-value\">38 BYN</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-color-select\">
\t\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Выберите цвет:</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Темный</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Золотой</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Белый</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"add-to-cart\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"material-icons right\">shopping_cart</i>Добавить в корзину</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row additional-info-block\">
\t\t\t\t\t<div class=\"col xl7 l7\">
\t\t\t\t\t\t<div class=\"about-product-info\">
\t\t\t\t\t\t\t{#<div class=\"card\">#}
\t\t\t\t\t\t\t\t<h4>Описание DZ09</h4>
\t\t\t\t\t\t\t\t<p>Smart Watch DZ09 – это часы-телефон. Гаджет, который получится использовать, как
\t\t\t\t\t\t\t\t\tавтономный девайс или синхронизировать с телефоном, получать уведомления, дистанционно
\t\t\t\t\t\t\t\t\tуправлять интерфейсом смартфона. Честный обзор на смарт-часы DZ09 и их описание помогут
\t\t\t\t\t\t\t\t\tобъективно оценить устройство и сделать правильные выводы до покупки. Российскому
\t\t\t\t\t\t\t\t\tпокупателю также доступны основные расходники и запасные элементы для устройства.
\t\t\t\t\t\t\t\t\tСтоимость DZ09 начинается от \$16, средний ценник составляет порядка \$30.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{#</div>#}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl1 l1 vertical-line hide-on-med-and-down\"></div>
\t\t\t\t\t<div class=\"col xl4 l4\">
\t\t\t\t\t\t<div class=\"bonuses-info\">
\t\t\t\t\t\t\t{#<div class=\"card\">#}
\t\t\t\t\t\t\t\t<h4>Бонусы при покупке</h4>
\t\t\t\t\t\t\t\t<p>В зависимости от версии приложения и прошивки делать это получится с разной степенью
\t\t\t\t\t\t\t\t\tкомфортности. Есть модели, позволяющие без проблем и затруднений управлять плеером, но в
\t\t\t\t\t\t\t\t\tнекоторых эта возможность активируется только в том случае, если все треки вручную
\t\t\t\t\t\t\t\t\tдобавить в созданный плей-лист.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{#</div>#}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t{% endblock %}
\t
\t{% block wrapper_end %} {{ parent() }} {% endblock %}
\t
\t{% block footer %}
\t\t{{ parent() }}
\t{% endblock %}

{% endblock %}", "default/product-page.html.twig", "/home/sollent/Desktop/sollento/sollentomarket/app/Resources/views/default/product-page.html.twig");
    }
}
