<?php

/* default/news-page.html.twig */
class __TwigTemplate_00ce08fae3e70f5211dc50a731e2aedaec594fe67c79bc32b56157fdebbc812b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "default/news-page.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/news-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/news-page.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/news.css"), "html", null, true);
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

        echo " Новости ";
        
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
        // line 128
        echo "\t
\t";
        // line 129
        $this->displayBlock('wrapper_end', $context, $blocks);
        // line 130
        echo "\t
\t";
        // line 131
        $this->displayBlock('footer', $context, $blocks);
        // line 134
        echo "\t
\t
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
\t\t\t<div class=\"news_block\">
\t\t\t\t<div class=\"row before_news\">
\t\t\t\t\t<div class=\"col xl3 l3 m3\">
\t\t\t\t\t\t<div class=\"main_caption\">
\t\t\t\t\t\t\t<h2>Новости</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl9 l9 hide-on-med-and-down\">
\t\t\t\t\t\t<nav class=\"search_bar\">
\t\t\t\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input id=\"search\" type=\"search\" placeholder=\"Search\" required>
\t\t\t\t\t\t\t\t\t\t<label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">close</i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col xl8 l8 main_news\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Как вы думаете, то мы проготовили сегодня?</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или довериться? Объясняем, как понять, что SEO-подрядчик хорошо работает по сайту, даже если вы вообще ничего…</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl4 l4 popular_news hide-on-med-and-down\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"card-title\">Популярное</div>
\t\t\t\t\t\t\t\t<div class=\"card-content no-padding\">
\t\t\t\t\t\t\t\t\t<ul class=\"popular_news_items\">
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как сформировать бюджет на покупку сайта?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Вы знали что DZ09 водонепроницаемы?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Главная новость нашего магазина</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как вы думаете, то мы проготовили сегодня?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Каждому именнику в подарок MP3 плеер</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Использование промо-кодов на нашем сайте</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col m12 s12 popular_news show-on-medium-and-down hide-on-large-only\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"card-title\">Популярное</div>
\t\t\t\t\t\t\t\t<div class=\"card-content no-padding\">
\t\t\t\t\t\t\t\t\t<ul class=\"popular_news_items\">
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как сформировать бюджет на покупку сайта?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Вы знали что DZ09 водонепроницаемы?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Главная новость нашего магазина</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как вы думаете, то мы проготовили сегодня?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Каждому именнику в подарок MP3 плеер</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Использование промо-кодов на нашем сайте</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row news_list\">
\t\t\t\t\t<div class=\"col xl4 l4 m6 s12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Как сформировать бюджет на покупку сайта?</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl4 l4 m6 s12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Вы знали что DZ09 водонепроницаемы?</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl4 l4 m6 s12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Главная новость нашего магазина</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
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

    // line 131
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 132
        echo "\t\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/news-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 132,  342 => 131,  322 => 129,  299 => 115,  285 => 104,  271 => 93,  221 => 46,  192 => 19,  183 => 18,  163 => 16,  150 => 13,  141 => 12,  129 => 134,  127 => 131,  124 => 130,  122 => 129,  119 => 128,  117 => 18,  114 => 17,  112 => 16,  109 => 15,  107 => 12,  104 => 11,  95 => 10,  77 => 8,  65 => 5,  60 => 4,  51 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'common.html.twig' %}

{% block stylesheet %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('build/news.css') }}\">
{% endblock %}

{% block title %} Новости {% endblock %}

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
\t\t\t<div class=\"news_block\">
\t\t\t\t<div class=\"row before_news\">
\t\t\t\t\t<div class=\"col xl3 l3 m3\">
\t\t\t\t\t\t<div class=\"main_caption\">
\t\t\t\t\t\t\t<h2>Новости</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl9 l9 hide-on-med-and-down\">
\t\t\t\t\t\t<nav class=\"search_bar\">
\t\t\t\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t<input id=\"search\" type=\"search\" placeholder=\"Search\" required>
\t\t\t\t\t\t\t\t\t\t<label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">close</i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col xl8 l8 main_news\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/1.jpg') }}\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Как вы думаете, то мы проготовили сегодня?</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или довериться? Объясняем, как понять, что SEO-подрядчик хорошо работает по сайту, даже если вы вообще ничего…</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl4 l4 popular_news hide-on-med-and-down\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"card-title\">Популярное</div>
\t\t\t\t\t\t\t\t<div class=\"card-content no-padding\">
\t\t\t\t\t\t\t\t\t<ul class=\"popular_news_items\">
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как сформировать бюджет на покупку сайта?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Вы знали что DZ09 водонепроницаемы?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Главная новость нашего магазина</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как вы думаете, то мы проготовили сегодня?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Каждому именнику в подарок MP3 плеер</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Использование промо-кодов на нашем сайте</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col m12 s12 popular_news show-on-medium-and-down hide-on-large-only\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"card-title\">Популярное</div>
\t\t\t\t\t\t\t\t<div class=\"card-content no-padding\">
\t\t\t\t\t\t\t\t\t<ul class=\"popular_news_items\">
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как сформировать бюджет на покупку сайта?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Вы знали что DZ09 водонепроницаемы?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Главная новость нашего магазина</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Как вы думаете, то мы проготовили сегодня?</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Каждому именнику в подарок MP3 плеер</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_item\"><a href=\"\">Использование промо-кодов на нашем сайте</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row news_list\">
\t\t\t\t\t<div class=\"col xl4 l4 m6 s12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/4.jpg') }}\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Как сформировать бюджет на покупку сайта?</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl4 l4 m6 s12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/4.jpg') }}\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Вы знали что DZ09 водонепроницаемы?</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или ...</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col xl4 l4 m6 s12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/4.jpg') }}\">
\t\t\t\t\t\t\t\t<span class=\"card-title center-align\">Главная новость нашего магазина</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p>Прошло 3 месяца, как вы купили SEO, а лиды все еще не идут и трафика мало? Разрывать договор или ...</p>
\t\t\t\t\t\t\t</div>
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
\t
\t
{% endblock %}", "default/news-page.html.twig", "/home/sollent/Desktop/sollento/sollentomarket/app/Resources/views/default/news-page.html.twig");
    }
}
