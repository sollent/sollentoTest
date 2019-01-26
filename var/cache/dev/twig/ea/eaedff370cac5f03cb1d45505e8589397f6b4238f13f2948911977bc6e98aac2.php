<?php

/* default/homepage.html.twig */
class __TwigTemplate_5f627230a4d4e4c4540720c826c526c27b364640e2859d6147ad37ecaa476518 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'cart_header_block' => array($this, 'block_cart_header_block'),
            'after_header' => array($this, 'block_after_header'),
            'wrapper_start' => array($this, 'block_wrapper_start'),
            'slider' => array($this, 'block_slider'),
            'new_items' => array($this, 'block_new_items'),
            'features' => array($this, 'block_features'),
            'last_news' => array($this, 'block_last_news'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

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
\t";
        
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

        echo " Sollento ";
        
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
        echo "
\t";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "\t
\t";
        // line 17
        $this->displayBlock('after_header', $context, $blocks);
        // line 257
        echo "\t
\t";
        // line 258
        $this->displayBlock('footer', $context, $blocks);
        // line 261
        echo "\t
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
\t\t";
        // line 14
        $this->displayBlock('cart_header_block', $context, $blocks);
        // line 15
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_cart_header_block($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cart_header_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cart_header_block"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_after_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "after_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "after_header"));

        // line 18
        echo "\t
\t";
        // line 19
        $this->displayBlock('wrapper_start', $context, $blocks);
        // line 20
        echo "\t
\t";
        // line 21
        $this->displayBlock('slider', $context, $blocks);
        // line 57
        echo "\t
\t";
        // line 58
        $this->displayBlock('new_items', $context, $blocks);
        // line 114
        echo "\t
\t";
        // line 115
        $this->displayBlock('features', $context, $blocks);
        // line 181
        echo "\t
\t";
        // line 182
        $this->displayBlock('last_news', $context, $blocks);
        // line 253
        echo "\t
\t";
        // line 254
        $this->displayBlock('wrapper_end', $context, $blocks);
        // line 255
        echo "\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
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

    // line 21
    public function block_slider($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 22
        echo "\t\t
\t\t<div class=\"slider\">
\t\t\t<ul class=\"slides\">
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/1.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption left-align\">
\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/2.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption right-align\">
\t\t\t\t\t\t<h3>Left Aligned Caption</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/3.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption right-align\">
\t\t\t\t\t\t<h3>Right Aligned Caption</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider/4.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_new_items($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_items"));

        // line 59
        echo "\t\t<div class=\"new_items_background\">
\t\t<div class=\"container\">
\t\t\t<div class=\"new_items\">
\t\t\t\t<div class=\"new_items-title wow bounceInRight\" data-wow-delay=\"1.3s\" >
\t\t\t\t\t<h4>Последние новинки</h4>
\t\t\t\t\t<hr class=\"hr_after_new_items_title\">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m6 l4 xl4 wow bounceInLeft\" data-wow-delay=\"0.85s\">
\t\t\t\t\t\t<div class=\"card hoverable\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><span class=\"new_items-price\">38</span><span class=\"new_items-currency\">BYN</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t<span class=\"card-title-text\">Умные часы DZ09</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">clear_all</i>Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6 l4 xl4 wow bounceInLeft\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"card hoverable\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><span class=\"new_items-price\">54</span><span class=\"new_items-currency\">BYN</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t<span class=\"card-title-text\">Умные часы GT08</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">clear_all</i>Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6 l4 xl4 wow bounceInLeft\" data-wow-delay=\".15s\">
\t\t\t\t\t\t<div class=\"card hoverable\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><span class=\"new_items-price\">42</span><span class=\"new_items-currency\">BYN</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t<span class=\"card-title-text\">Нанонаушники MK80</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">clear_all</i>Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_features($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "features"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "features"));

        // line 116
        echo "\t\t<div class=\"features_background\">
\t\t<div class=\"container\">
\t\t\t<div class=\"features\">
\t\t\t\t<div class=\"features-title wow bounceInLeft\" data-wow-delay=\"0.6s\">
\t\t\t\t\t<h4>Наши приемущества</h4>
\t\t\t\t\t<hr class=\"hr_after_features_title\">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">people</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Центр поддержки клиентов</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Наш центр поддержки всегда готов помочь клиентам в любых сложностях в процессе покупки товара.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0.3s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">directions_car</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Доставка и самовывоз</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Доставка до дома действует в пределах МКАД. Жителы Беларуси могут получить товар почтой, либо самовывозом на специальных условиях</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_hide</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Итерактивные инструкции</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Наш магазин предоставляет интерактивные инструкции в описании к каждому товару. Это сильно облегчает процесс использования.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0.9s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">cake</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Постоянные акции и скидки</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Ежедневно в нашем магазине вы найдете уникальные акции на любой вид товара. Используйте промокоды.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_last_news($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "last_news"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "last_news"));

        // line 183
        echo "\t\t<div class=\"last_news_background\">
\t\t<div class=\"container\">
\t\t<div class=\"last_news\">
\t\t\t<div class=\"last_news-title\">
\t\t\t\t<h4>Последние новости</h4>
\t\t\t\t<hr class=\"hr_after_last_news_title\">
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col xl9\">
\t\t\t\t\t<div class=\"news_block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col m6 l4 xl4\">
\t\t\t\t\t\t\t\t<div class=\"news_image_block\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col m6 l8 xl8\">
\t\t\t\t\t\t\t\t<div class=\"news_title_block\">Вышла новая модель Apple watch 64gb</div>
\t\t\t\t\t\t\t\t<div class=\"news_summary\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum, error expedita magnam maiores obcaecati provident repudiandae. Asperiores autem dolor doloribus expedita, ipsa iure iusto obcaecati officia tempora tenetur, vitae.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_date\">29.09.2018</div>
\t\t\t\t\t\t\t\t<div class=\"news_rating\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl9\">
\t\t\t\t\t<div class=\"news_block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col m6 l4 xl4\">
\t\t\t\t\t\t\t\t<div class=\"news_image_block\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col m6 l8 xl8\">
\t\t\t\t\t\t\t\t<div class=\"news_title_block\">Вышла новая модель Apple watch 64gb</div>
\t\t\t\t\t\t\t\t<div class=\"news_summary\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum, error expedita magnam maiores obcaecati provident repudiandae. Asperiores autem dolor doloribus expedita, ipsa iure iusto obcaecati officia tempora tenetur, vitae.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_date\">29.09.2018</div>
\t\t\t\t\t\t\t\t<div class=\"news_rating\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl9\">
\t\t\t\t\t<div class=\"news_block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col m6 l4 xl4\">
\t\t\t\t\t\t\t\t<div class=\"news_image_block\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col m6 l8 xl8\">
\t\t\t\t\t\t\t\t<div class=\"news_title_block\">Вышла новая модель Apple watch 64gb</div>
\t\t\t\t\t\t\t\t<div class=\"news_summary\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum, error expedita magnam maiores obcaecati provident repudiandae. Asperiores autem dolor doloribus expedita, ipsa iure iusto obcaecati officia tempora tenetur, vitae.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_date\">29.09.2018</div>
\t\t\t\t\t\t\t\t<div class=\"news_rating\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 254
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

    // line 258
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 259
        echo "\t\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 259,  592 => 258,  572 => 254,  543 => 234,  521 => 215,  499 => 196,  484 => 183,  475 => 182,  401 => 116,  392 => 115,  366 => 98,  349 => 84,  332 => 70,  319 => 59,  310 => 58,  290 => 47,  280 => 40,  270 => 33,  260 => 26,  254 => 22,  245 => 21,  225 => 19,  214 => 255,  212 => 254,  209 => 253,  207 => 182,  204 => 181,  202 => 115,  199 => 114,  197 => 58,  194 => 57,  192 => 21,  189 => 20,  187 => 19,  184 => 18,  175 => 17,  157 => 14,  147 => 15,  145 => 14,  140 => 13,  131 => 12,  120 => 261,  118 => 258,  115 => 257,  113 => 17,  110 => 16,  108 => 12,  105 => 11,  96 => 10,  78 => 8,  65 => 4,  56 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'common.html.twig' %}

{% block stylesheet %}
\t{{ parent() }}
\t{#<link rel=\"stylesheet\" href=\"{{ asset('build/homepage.css') }}\">#}
{% endblock %}

{% block title %} Sollento {% endblock %}

{% block body %}

\t{% block header %}
\t\t{{ parent() }}
\t\t{% block cart_header_block %}  {% endblock %}
\t{% endblock %}
\t
\t{% block after_header %}
\t
\t{% block wrapper_start %} {{ parent() }} {% endblock %}
\t
\t{% block slider %}
\t\t
\t\t<div class=\"slider\">
\t\t\t<ul class=\"slides\">
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ asset('assets/img/slider/1.jpg') }}\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption left-align\">
\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ asset('assets/img/slider/2.jpg') }}\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption right-align\">
\t\t\t\t\t\t<h3>Left Aligned Caption</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ asset('assets/img/slider/3.jpg') }}\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption right-align\">
\t\t\t\t\t\t<h3>Right Aligned Caption</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<img src=\"{{ asset('assets/img/slider/4.jpg') }}\"> <!-- random image -->
\t\t\t\t\t<div class=\"caption center-align\">
\t\t\t\t\t\t<h3>This is our big Tagline!</h3>
\t\t\t\t\t\t<h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t
\t{% endblock %}
\t
\t{% block new_items %}
\t\t<div class=\"new_items_background\">
\t\t<div class=\"container\">
\t\t\t<div class=\"new_items\">
\t\t\t\t<div class=\"new_items-title wow bounceInRight\" data-wow-delay=\"1.3s\" >
\t\t\t\t\t<h4>Последние новинки</h4>
\t\t\t\t\t<hr class=\"hr_after_new_items_title\">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m6 l4 xl4 wow bounceInLeft\" data-wow-delay=\"0.85s\">
\t\t\t\t\t\t<div class=\"card hoverable\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/1.jpg') }}\">
\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><span class=\"new_items-price\">38</span><span class=\"new_items-currency\">BYN</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t<span class=\"card-title-text\">Умные часы DZ09</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">clear_all</i>Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6 l4 xl4 wow bounceInLeft\" data-wow-delay=\".5s\">
\t\t\t\t\t\t<div class=\"card hoverable\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/4.jpg') }}\">
\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><span class=\"new_items-price\">54</span><span class=\"new_items-currency\">BYN</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t<span class=\"card-title-text\">Умные часы GT08</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">clear_all</i>Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6 l4 xl4 wow bounceInLeft\" data-wow-delay=\".15s\">
\t\t\t\t\t\t<div class=\"card hoverable\">
\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/3.jpg') }}\">
\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><span class=\"new_items-price\">42</span><span class=\"new_items-currency\">BYN</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t<span class=\"card-title-text\">Нанонаушники MK80</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">clear_all</i>Подробнее</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t{% endblock %}
\t
\t{% block features %}
\t\t<div class=\"features_background\">
\t\t<div class=\"container\">
\t\t\t<div class=\"features\">
\t\t\t\t<div class=\"features-title wow bounceInLeft\" data-wow-delay=\"0.6s\">
\t\t\t\t\t<h4>Наши приемущества</h4>
\t\t\t\t\t<hr class=\"hr_after_features_title\">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">people</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Центр поддержки клиентов</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Наш центр поддержки всегда готов помочь клиентам в любых сложностях в процессе покупки товара.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0.3s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">directions_car</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Доставка и самовывоз</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Доставка до дома действует в пределах МКАД. Жителы Беларуси могут получить товар почтой, либо самовывозом на специальных условиях</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">keyboard_hide</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Итерактивные инструкции</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Наш магазин предоставляет интерактивные инструкции в описании к каждому товару. Это сильно облегчает процесс использования.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m12 l12 xl6 wow fadeIn\" data-wow-delay=\"0.9s\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 m4 l5 xl4\">
\t\t\t\t\t\t\t\t<div class=\"half-cicrle-feature center\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">cake</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s7 m8 l7 xl8\">
\t\t\t\t\t\t\t\t<div class=\"feature-title\">Постоянные акции и скидки</div>
\t\t\t\t\t\t\t\t<div class=\"feature-content\">Ежедневно в нашем магазине вы найдете уникальные акции на любой вид товара. Используйте промокоды.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t{% endblock %}
\t
\t{% block last_news %}
\t\t<div class=\"last_news_background\">
\t\t<div class=\"container\">
\t\t<div class=\"last_news\">
\t\t\t<div class=\"last_news-title\">
\t\t\t\t<h4>Последние новости</h4>
\t\t\t\t<hr class=\"hr_after_last_news_title\">
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col xl9\">
\t\t\t\t\t<div class=\"news_block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col m6 l4 xl4\">
\t\t\t\t\t\t\t\t<div class=\"news_image_block\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/1.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col m6 l8 xl8\">
\t\t\t\t\t\t\t\t<div class=\"news_title_block\">Вышла новая модель Apple watch 64gb</div>
\t\t\t\t\t\t\t\t<div class=\"news_summary\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum, error expedita magnam maiores obcaecati provident repudiandae. Asperiores autem dolor doloribus expedita, ipsa iure iusto obcaecati officia tempora tenetur, vitae.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_date\">29.09.2018</div>
\t\t\t\t\t\t\t\t<div class=\"news_rating\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl9\">
\t\t\t\t\t<div class=\"news_block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col m6 l4 xl4\">
\t\t\t\t\t\t\t\t<div class=\"news_image_block\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/1.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col m6 l8 xl8\">
\t\t\t\t\t\t\t\t<div class=\"news_title_block\">Вышла новая модель Apple watch 64gb</div>
\t\t\t\t\t\t\t\t<div class=\"news_summary\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum, error expedita magnam maiores obcaecati provident repudiandae. Asperiores autem dolor doloribus expedita, ipsa iure iusto obcaecati officia tempora tenetur, vitae.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_date\">29.09.2018</div>
\t\t\t\t\t\t\t\t<div class=\"news_rating\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col xl9\">
\t\t\t\t\t<div class=\"news_block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col m6 l4 xl4\">
\t\t\t\t\t\t\t\t<div class=\"news_image_block\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/1.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col m6 l8 xl8\">
\t\t\t\t\t\t\t\t<div class=\"news_title_block\">Вышла новая модель Apple watch 64gb</div>
\t\t\t\t\t\t\t\t<div class=\"news_summary\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum, error expedita magnam maiores obcaecati provident repudiandae. Asperiores autem dolor doloribus expedita, ipsa iure iusto obcaecati officia tempora tenetur, vitae.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_date\">29.09.2018</div>
\t\t\t\t\t\t\t\t<div class=\"news_rating\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t{% endblock %}
\t
\t{% block wrapper_end %} {{ parent() }} {% endblock %}
\t
\t{% endblock %}
\t
\t{% block footer %}
\t\t{{ parent() }}
\t{% endblock %}
\t
{% endblock %}


", "default/homepage.html.twig", "/home/sollent/Desktop/sollento/testSollento/app/Resources/views/default/homepage.html.twig");
    }
}
