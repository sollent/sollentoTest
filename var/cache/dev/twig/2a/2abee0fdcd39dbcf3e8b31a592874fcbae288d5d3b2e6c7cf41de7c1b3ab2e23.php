<?php

/* default/catalog-page.html.twig */
class __TwigTemplate_a35926198bbc08b7e7498fadc5a8c2603afcafeddad17dc8fd49f005fca237a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("common.html.twig", "default/catalog-page.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/catalog-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/catalog-page.html.twig"));

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
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
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

        echo " Каталог ";
        
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
    ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "    
    ";
        // line 16
        $this->displayBlock('wrapper_start', $context, $blocks);
        // line 17
        echo "\t
\t";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 269
        echo "    
    ";
        // line 270
        $this->displayBlock('wrapper_end', $context, $blocks);
        // line 271
        echo "    
    ";
        // line 272
        $this->displayBlock('footer', $context, $blocks);
        // line 275
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
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
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
        echo "        
        <div class=\"container\">
            
            <div class=\"main_block\">
                <div class=\"row before_catalog\">
                    <div class=\"col xl3\">
                        <div class=\"main_caption\">
                            <h2>Каталог</h2>
                        </div>
                    </div>
                    <div class=\"col xl9\">
                        <div class=\"page_info\">
                            <p>При заказе от 45 рублей мы дарим вам MP4-плеер. Посоветуйте часы DZ09 другу и получите 5 рублей прямым переводом.</p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col xl3 col-catalog-menu\">
                        <div class=\"catalog_menu\">
                            <ul class=\"collapsible expandable\">
                                <li class=\"active\">
                                    <div class=\"collapsible-header\">Умные часы<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
                                        <div class=\"collection\">
                                            <a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
                                            <a href=\"\" class=\"collection-item active\">Квадратные</a>
                                            <a href=\"\" class=\"collection-item\">Фирма watch</a>
                                            <a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"collapsible-header\">Микронаушники<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
                                        <div class=\"collection\">
                                            <a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
                                            <a href=\"\" class=\"collection-item\">Квадратные</a>
                                            <a href=\"\" class=\"collection-item\">Фирма watch</a>
                                            <a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"collapsible-header\">Носимая электроника<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
                                        <div class=\"collection\">
                                            <a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
                                            <a href=\"\" class=\"collection-item\">Квадратные</a>
                                            <a href=\"\" class=\"collection-item\">Фирма watch</a>
                                            <a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col s10 m11 l11 xl9\">
                        <nav class=\"search_bar\">
                            <div class=\"nav-wrapper\">
                                <form>
                                    <div class=\"input-field\">
                                        <input id=\"search\" type=\"search\" placeholder=\"Search\" required>
                                        <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
                                        <i class=\"material-icons\">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class=\"col s2 m1 l1 hide-on-extra-large-only responsive-catalog-menu center\">
                        <a href=\"#responsive-catalog-menu-modal\" class=\"btn-floating waves-effect waves-light catalog-menu-button modal-trigger pulse\"><i class=\"material-icons\">apps</i></a>
                        <!--Bottom modal catalog menu-->
                        <div id=\"responsive-catalog-menu-modal\" class=\"modal bottom-sheet\">
\t\t\t\t\t\t\t";
        // line 93
        echo "                            <div class=\"modal-close\"><i class=\"material-icons\">close</i></div>
                            <div class=\"modal-content\">
                                <div class=\"row hide-on-small-and-down\">
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Умные часы</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/watch.jpg"), "html", null, true);
        echo "\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Микронаушники</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/nano.png"), "html", null, true);
        echo "\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Электроника</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/electronics.png"), "html", null, true);
        echo "\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Канцелярия</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/book.jpg"), "html", null, true);
        echo "\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <ul class=\"collection hide-on-med-and-up\">
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/watch.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Умные часы</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/nano.png"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Микронаушники</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/electronics.png"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Электроника</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/book.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Канцелярия</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col xl9\">
                            <div class=\"products_content\">
                                <nav class=\"breadcrumb-section\">
                                    <div class=\"nav-wrapper\">
                                        <div class=\"col s12\">
                                            <a href=\"\" class=\"breadcrumb\">Каталог</a>
                                            <a href=\"\" class=\"breadcrumb second-child\">Умные часы</a>
                                            <a href=\"\" class=\"breadcrumb\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </nav>
                                <div class=\"row\">
                                    <div class=\"col xl6 l4 m6 s12\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product-page-action");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card product_card hoverable\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">Умные часы DZ09</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"price-number\">35 BYN</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
                                    </div>
                                    <div class=\"col xl6 l4 m6 s12\">
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/2.jpg"), "html", null, true);
        echo "\">
                                                </div>
                                                <a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
                                            </div>
                                            <div class=\"card-content\">
                                                <span class=\"card-title\">Умные часы DZ09</span>
                                                <p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
                                                <h4 class=\"price-number\">35 BYN</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col xl6 l4 m6 s12\">
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/3.jpg"), "html", null, true);
        echo "\">
                                                </div>
                                                <a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
                                            </div>
                                            <div class=\"card-content\">
                                                <span class=\"card-title\">Умные часы DZ09</span>
                                                <p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
                                                <h4 class=\"price-number\">35 BYN</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col xl6 l4 m6 s12\">
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/pruducts/4.jpg"), "html", null, true);
        echo "\">
                                                </div>
                                                <a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
                                            </div>
                                            <div class=\"card-content\">
                                                <span class=\"card-title\">Умные часы DZ09</span>
                                                <p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
                                                <h4 class=\"price-number\">35 BYN</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"pagination-block center\">
                                <ul class=\"pagination\">
                                    <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
                                    <li class=\"active\"><a href=\"#!\">1</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">2</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">3</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">4</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">5</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">6</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">7</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">8</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">9</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>
                                </ul>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            
            </div>
        </div>
\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 270
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

    // line 272
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 273
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/catalog-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 273,  506 => 272,  486 => 270,  437 => 230,  419 => 215,  401 => 200,  382 => 184,  375 => 180,  351 => 159,  344 => 155,  337 => 151,  330 => 147,  319 => 139,  304 => 127,  289 => 115,  274 => 103,  262 => 93,  187 => 19,  178 => 18,  158 => 16,  145 => 13,  136 => 12,  125 => 275,  123 => 272,  120 => 271,  118 => 270,  115 => 269,  113 => 18,  110 => 17,  108 => 16,  105 => 15,  103 => 12,  100 => 11,  91 => 10,  73 => 8,  60 => 4,  51 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'common.html.twig' %}

{% block stylesheet %}
    {{ parent() }}
    {#<link rel=\"stylesheet\" href=\"{{ asset('build/catalog.css') }}\">#}
{% endblock %}

{% block title %} Каталог {% endblock %}

{% block body %}
    
    {% block header %}
        {{ parent() }}
    {% endblock %}
    
    {% block wrapper_start %} {{ parent() }} {% endblock %}
\t
\t{% block main %}
        
        <div class=\"container\">
            
            <div class=\"main_block\">
                <div class=\"row before_catalog\">
                    <div class=\"col xl3\">
                        <div class=\"main_caption\">
                            <h2>Каталог</h2>
                        </div>
                    </div>
                    <div class=\"col xl9\">
                        <div class=\"page_info\">
                            <p>При заказе от 45 рублей мы дарим вам MP4-плеер. Посоветуйте часы DZ09 другу и получите 5 рублей прямым переводом.</p>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col xl3 col-catalog-menu\">
                        <div class=\"catalog_menu\">
                            <ul class=\"collapsible expandable\">
                                <li class=\"active\">
                                    <div class=\"collapsible-header\">Умные часы<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
                                        <div class=\"collection\">
                                            <a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
                                            <a href=\"\" class=\"collection-item active\">Квадратные</a>
                                            <a href=\"\" class=\"collection-item\">Фирма watch</a>
                                            <a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"collapsible-header\">Микронаушники<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
                                        <div class=\"collection\">
                                            <a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
                                            <a href=\"\" class=\"collection-item\">Квадратные</a>
                                            <a href=\"\" class=\"collection-item\">Фирма watch</a>
                                            <a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"collapsible-header\">Носимая электроника<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
                                        <div class=\"collection\">
                                            <a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
                                            <a href=\"\" class=\"collection-item\">Квадратные</a>
                                            <a href=\"\" class=\"collection-item\">Фирма watch</a>
                                            <a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col s10 m11 l11 xl9\">
                        <nav class=\"search_bar\">
                            <div class=\"nav-wrapper\">
                                <form>
                                    <div class=\"input-field\">
                                        <input id=\"search\" type=\"search\" placeholder=\"Search\" required>
                                        <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
                                        <i class=\"material-icons\">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class=\"col s2 m1 l1 hide-on-extra-large-only responsive-catalog-menu center\">
                        <a href=\"#responsive-catalog-menu-modal\" class=\"btn-floating waves-effect waves-light catalog-menu-button modal-trigger pulse\"><i class=\"material-icons\">apps</i></a>
                        <!--Bottom modal catalog menu-->
                        <div id=\"responsive-catalog-menu-modal\" class=\"modal bottom-sheet\">
\t\t\t\t\t\t\t{#<h4>Каталог</h4>#}
                            <div class=\"modal-close\"><i class=\"material-icons\">close</i></div>
                            <div class=\"modal-content\">
                                <div class=\"row hide-on-small-and-down\">
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Умные часы</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"{{ asset('assets/img/watch.jpg') }}\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Микронаушники</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"{{ asset('assets/img/nano.png') }}\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Электроника</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"{{ asset('assets/img/electronics.png') }}\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Канцелярия</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"{{ asset('assets/img/book.jpg') }}\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <ul class=\"collection hide-on-med-and-up\">
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('assets/img/watch.jpg') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Умные часы</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('assets/img/nano.png') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Микронаушники</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('assets/img/electronics.png') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Электроника</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('assets/img/book.jpg') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Канцелярия</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col xl9\">
                            <div class=\"products_content\">
                                <nav class=\"breadcrumb-section\">
                                    <div class=\"nav-wrapper\">
                                        <div class=\"col s12\">
                                            <a href=\"\" class=\"breadcrumb\">Каталог</a>
                                            <a href=\"\" class=\"breadcrumb second-child\">Умные часы</a>
                                            <a href=\"\" class=\"breadcrumb\">Водонепроницаемые</a>
                                        </div>
                                    </div>
                                </nav>
                                <div class=\"row\">
                                    <div class=\"col xl6 l4 m6 s12\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('product-page-action') }}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card product_card hoverable\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/pruducts/1.jpg') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"card-title\">Умные часы DZ09</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"price-number\">35 BYN</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
                                    </div>
                                    <div class=\"col xl6 l4 m6 s12\">
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"{{ asset('assets/img/pruducts/2.jpg') }}\">
                                                </div>
                                                <a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
                                            </div>
                                            <div class=\"card-content\">
                                                <span class=\"card-title\">Умные часы DZ09</span>
                                                <p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
                                                <h4 class=\"price-number\">35 BYN</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col xl6 l4 m6 s12\">
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"{{ asset('assets/img/pruducts/3.jpg') }}\">
                                                </div>
                                                <a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
                                            </div>
                                            <div class=\"card-content\">
                                                <span class=\"card-title\">Умные часы DZ09</span>
                                                <p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
                                                <h4 class=\"price-number\">35 BYN</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col xl6 l4 m6 s12\">
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"{{ asset('assets/img/pruducts/4.jpg') }}\">
                                                </div>
                                                <a class=\"btn-floating halfway-fab waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a>
                                            </div>
                                            <div class=\"card-content\">
                                                <span class=\"card-title\">Умные часы DZ09</span>
                                                <p>Умные часы DZ09 - лучший помощник на экзаменах и зачетах...</p>
                                                <h4 class=\"price-number\">35 BYN</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"pagination-block center\">
                                <ul class=\"pagination\">
                                    <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
                                    <li class=\"active\"><a href=\"#!\">1</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">2</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">3</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">4</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">5</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">6</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">7</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">8</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\">9</a></li>
                                    <li class=\"waves-effect\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>
                                </ul>
                            </div>
                        
                        </div>
                    </div>
                
                </div>
            
            </div>
        </div>
\t
\t{% endblock %}
    
    {% block wrapper_end %} {{ parent() }} {% endblock %}
    
    {% block footer %}
        {{ parent() }}
    {% endblock %}
 
{% endblock %}", "default/catalog-page.html.twig", "/home/sollent/Desktop/sollento/testSollento/app/Resources/views/default/catalog-page.html.twig");
    }
}
