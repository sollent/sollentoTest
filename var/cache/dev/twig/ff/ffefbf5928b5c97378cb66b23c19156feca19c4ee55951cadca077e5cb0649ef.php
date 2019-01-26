<?php

/* default/catalog-page.html.twig */
class __TwigTemplate_ec63bbc8938f37afbfcf847a2fcbf0f309e3884ed3422258472aabe73d77da76 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/catalog-page.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'after_header' => array($this, 'block_after_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/custom.css"), "html", null, true);
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

        echo " Sollento market ";
        
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
        // line 60
        echo "    
    ";
        // line 61
        $this->displayBlock('after_header', $context, $blocks);
        // line 64
        echo "    
    ";
        // line 65
        $this->displayBlock('main', $context, $blocks);
        // line 302
        echo "    
    ";
        // line 303
        $this->displayBlock('footer', $context, $blocks);
        // line 334
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
        echo "    
        <div class=\"header\">
            <div class=\"navbar-fixed\">
                <nav>
                    <div class=\"nav-wrapper\">
                        <div class=\"container\">
                            <a href=\"\" class=\"brand-logo\">Sollento market</a>
                            <ul class=\"right hide-on-med-and-down\">
                                <li><a href=\"\">Главная</a></li>
                                <li><a href=\"\">Каталог</a></li>
                                <li><a href=\"\">Новости</a></li>
                                <li><a href=\"\">Контакты</a></li>
                                <li><a href=\"\">О нас</a></li>
                            </ul>
                        </div>
                        <a href=\"\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
                    </div>
                    <div class=\"nav-content\">
                        <div class=\"cart-block\">
                            <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col hide-on-large-only\">
                                    <a href=\"\">12 товаров</a>
                                </div>
                                <div class=\"col xl5 cart-button-col\">
                                    <a class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal cart-big-button\">
                                        <i class=\"material-icons\">add_shopping_cart</i>
                                    </a>
                                </div>
                                <div class=\"col xl7 hide-on-med-and-down\">
                                    <a href=\"\">12 товаров</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
    
            <ul class=\"sidenav\" id=\"mobile-demo\">
                <li><a href=\"\">Главная</a></li>
                <li><a href=\"\">Каталог</a></li>
                <li><a href=\"\">Новости</a></li>
                <li><a href=\"\">Контакты</a></li>
                <li><a href=\"\">О нас</a></li>
            </ul>
        </div>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_after_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "after_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "after_header"));

        // line 62
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 66
        echo "    
        <div class=\"container\">
        
            <div class=\"main_block\">
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
\t\t\t\t\t\t\t\t\t\t<div class=\"collection\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Квадратные</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Фирма watch</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </li>
                                <li>
                                    <div class=\"collapsible-header\">Носимая электроника<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"collection\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Квадратные</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Фирма watch</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
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
                        <a href=\"#responsive-catalog-menu-modal\" class=\"btn-floating waves-effect waves-light catalog-menu-button modal-trigger\"><i class=\"material-icons\">apps</i></a>
                        <!--Bottom modal catalog menu-->
                        <div id=\"responsive-catalog-menu-modal\" class=\"modal bottom-sheet\">
                            ";
        // line 128
        echo "\t\t\t\t\t\t\t<div class=\"modal-close\"><i class=\"material-icons\">close</i></div>
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
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/watch.jpg"), "html", null, true);
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
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nano.png"), "html", null, true);
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
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/electronics.png"), "html", null, true);
        echo "\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Канцелярия</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/book.jpg"), "html", null, true);
        echo "\">
                                                </div>
                                            </div>
                                        </a>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                                <ul class=\"collection hide-on-med-and-up\">
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/watch.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Умные часы</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nano.png"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Микронаушники</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/electronics.png"), "html", null, true);
        echo "\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Электроника</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/book.jpg"), "html", null, true);
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
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pruducts/1.jpg"), "html", null, true);
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
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pruducts/2.jpg"), "html", null, true);
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
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pruducts/3.jpg"), "html", null, true);
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
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pruducts/4.jpg"), "html", null, true);
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
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 303
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 304
        echo "    
        <footer class=\"page-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col l6 s12\">
                        <h5 class=\"white-text\">Sollento market</h5>
                        <p class=\"grey-text text-lighten-4\">Мы рады видеть вас в нашем интернет-магазине. У нас вы найдете для себя лучших помошников в сдаче экзаменов, контрольных и самостоятельных работ.</p>
                    </div>
                    <div class=\"col l4 offset-l2 s12\">
                        <h5 class=\"white-text\">Меню</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Главная</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Каталог</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Новости</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Контакты</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">О нас</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    © 2018 Copyright Text
                    <a class=\"grey-text text-lighten-4 right\" href=\"#!\">Сайт разработан на Symfony 3</a>
                </div>
            </div>
        </footer>


\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 337
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 338
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script  src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("materialize-js/js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("materialize-js/js/custom-initial.js"), "html", null, true);
        echo "\"></script>
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
        return array (  575 => 340,  571 => 339,  568 => 338,  559 => 337,  520 => 304,  511 => 303,  462 => 263,  444 => 248,  426 => 233,  408 => 218,  381 => 194,  374 => 190,  367 => 186,  360 => 182,  349 => 174,  334 => 162,  319 => 150,  304 => 138,  292 => 128,  229 => 66,  220 => 65,  209 => 62,  200 => 61,  144 => 13,  135 => 12,  124 => 334,  122 => 303,  119 => 302,  117 => 65,  114 => 64,  112 => 61,  109 => 60,  107 => 12,  104 => 11,  95 => 10,  77 => 8,  65 => 5,  60 => 4,  51 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('build/custom.css') }}\">
{% endblock %}

{% block title %} Sollento market {% endblock %}

{% block body %}

    {% block header %}
    
        <div class=\"header\">
            <div class=\"navbar-fixed\">
                <nav>
                    <div class=\"nav-wrapper\">
                        <div class=\"container\">
                            <a href=\"\" class=\"brand-logo\">Sollento market</a>
                            <ul class=\"right hide-on-med-and-down\">
                                <li><a href=\"\">Главная</a></li>
                                <li><a href=\"\">Каталог</a></li>
                                <li><a href=\"\">Новости</a></li>
                                <li><a href=\"\">Контакты</a></li>
                                <li><a href=\"\">О нас</a></li>
                            </ul>
                        </div>
                        <a href=\"\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
                    </div>
                    <div class=\"nav-content\">
                        <div class=\"cart-block\">
                            <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col hide-on-large-only\">
                                    <a href=\"\">12 товаров</a>
                                </div>
                                <div class=\"col xl5 cart-button-col\">
                                    <a class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal cart-big-button\">
                                        <i class=\"material-icons\">add_shopping_cart</i>
                                    </a>
                                </div>
                                <div class=\"col xl7 hide-on-med-and-down\">
                                    <a href=\"\">12 товаров</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
    
            <ul class=\"sidenav\" id=\"mobile-demo\">
                <li><a href=\"\">Главная</a></li>
                <li><a href=\"\">Каталог</a></li>
                <li><a href=\"\">Новости</a></li>
                <li><a href=\"\">Контакты</a></li>
                <li><a href=\"\">О нас</a></li>
            </ul>
        </div>
    
    {% endblock %}
    
    {% block after_header %}
    
    {% endblock %}
    
    {% block main %}
    
        <div class=\"container\">
        
            <div class=\"main_block\">
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
\t\t\t\t\t\t\t\t\t\t<div class=\"collection\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Квадратные</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Фирма watch</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </li>
                                <li>
                                    <div class=\"collapsible-header\">Носимая электроника<i class=\"material-icons\">arrow_drop_down</i></div>
                                    <div class=\"collapsible-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"collection\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Часы с циферблатом</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Квадратные</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Фирма watch</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"collection-item\">Водонепроницаемые</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
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
                        <a href=\"#responsive-catalog-menu-modal\" class=\"btn-floating waves-effect waves-light catalog-menu-button modal-trigger\"><i class=\"material-icons\">apps</i></a>
                        <!--Bottom modal catalog menu-->
                        <div id=\"responsive-catalog-menu-modal\" class=\"modal bottom-sheet\">
                            {#<h4>Каталог</h4>#}
\t\t\t\t\t\t\t<div class=\"modal-close\"><i class=\"material-icons\">close</i></div>
                            <div class=\"modal-content\">
                                <div class=\"row hide-on-small-and-down\">
                                    <div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Умные часы</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"{{ asset('img/watch.jpg') }}\">
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
                                                    <img src=\"{{ asset('img/nano.png') }}\">
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
                                                    <img src=\"{{ asset('img/electronics.png') }}\">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"col s12 m6 l3\">
                                        <a href=\"\">
                                            <div class=\"card category_card hoverable\">
                                                <div class=\"card-title\">
                                                    <h5>Канцелярия</h5>
                                                </div>
                                                <div class=\"card-image center\">
                                                    <img src=\"{{ asset('img/book.jpg') }}\">
                                                </div>
                                            </div>
                                        </a>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                                <ul class=\"collection hide-on-med-and-up\">
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('img/watch.jpg') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Умные часы</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('img/nano.png') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Микронаушники</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('img/electronics.png') }}\" alt=\"\" class=\"circle\">
                                        <span class=\"title left\">Электроника</span>
                                    </li>
                                    <li class=\"collection-item avatar\">
                                        <img src=\"{{ asset('img/book.jpg') }}\" alt=\"\" class=\"circle\">
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
                                        <div class=\"card product_card hoverable\">
                                            <div class=\"card-image\">
                                                <div class=\"product-image\">
                                                    <img src=\"{{ asset('img/pruducts/1.jpg') }}\">
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
                                                    <img src=\"{{ asset('img/pruducts/2.jpg') }}\">
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
                                                    <img src=\"{{ asset('img/pruducts/3.jpg') }}\">
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
                                                    <img src=\"{{ asset('img/pruducts/4.jpg') }}\">
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
    
    {% endblock %}
    
    {% block footer %}
    
        <footer class=\"page-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col l6 s12\">
                        <h5 class=\"white-text\">Sollento market</h5>
                        <p class=\"grey-text text-lighten-4\">Мы рады видеть вас в нашем интернет-магазине. У нас вы найдете для себя лучших помошников в сдаче экзаменов, контрольных и самостоятельных работ.</p>
                    </div>
                    <div class=\"col l4 offset-l2 s12\">
                        <h5 class=\"white-text\">Меню</h5>
                        <ul>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Главная</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Каталог</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Новости</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">Контакты</a></li>
                            <li><a class=\"grey-text text-lighten-3\" href=\"\">О нас</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"footer-copyright\">
                <div class=\"container\">
                    © 2018 Copyright Text
                    <a class=\"grey-text text-lighten-4 right\" href=\"#!\">Сайт разработан на Symfony 3</a>
                </div>
            </div>
        </footer>


\t{% endblock %}
 
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script  src=\"{{ asset('materialize-js/js/materialize.min.js') }}\"></script>
    <script src=\"{{ asset('materialize-js/js/custom-initial.js') }}\"></script>
{% endblock %}", "default/catalog-page.html.twig", "/home/sollent/Desktop/sollentomarket/app/Resources/views/default/catalog-page.html.twig");
    }
}
