<?php

/* ShopBundle:Products:index.html.twig */
class __TwigTemplate_2e8f2a4ef759b49c6df3a5fd5f908b8de183f55df6fdfa9a2e5122aca359df4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:Products:index.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e9dae514536407600c1b5d39d5c015ac678c1177a8e3da14abfd76cdacc8bf7 = $this->env->getExtension("native_profiler");
        $__internal_3e9dae514536407600c1b5d39d5c015ac678c1177a8e3da14abfd76cdacc8bf7->enter($__internal_3e9dae514536407600c1b5d39d5c015ac678c1177a8e3da14abfd76cdacc8bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Products:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e9dae514536407600c1b5d39d5c015ac678c1177a8e3da14abfd76cdacc8bf7->leave($__internal_3e9dae514536407600c1b5d39d5c015ac678c1177a8e3da14abfd76cdacc8bf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7141512d58fc6da3e4432f483e4b79656c82d6317bd10cd6dcfdceb3723a16fc = $this->env->getExtension("native_profiler");
        $__internal_7141512d58fc6da3e4432f483e4b79656c82d6317bd10cd6dcfdceb3723a16fc->enter($__internal_7141512d58fc6da3e4432f483e4b79656c82d6317bd10cd6dcfdceb3723a16fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\"/>
";
        
        $__internal_7141512d58fc6da3e4432f483e4b79656c82d6317bd10cd6dcfdceb3723a16fc->leave($__internal_7141512d58fc6da3e4432f483e4b79656c82d6317bd10cd6dcfdceb3723a16fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07e885d24764b40edefd31c6a5ac72bd491c632e92d5d10715868d306fff6461 = $this->env->getExtension("native_profiler");
        $__internal_07e885d24764b40edefd31c6a5ac72bd491c632e92d5d10715868d306fff6461->enter($__internal_07e885d24764b40edefd31c6a5ac72bd491c632e92d5d10715868d306fff6461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Shop.ll";
        echo "
";
        
        $__internal_07e885d24764b40edefd31c6a5ac72bd491c632e92d5d10715868d306fff6461->leave($__internal_07e885d24764b40edefd31c6a5ac72bd491c632e92d5d10715868d306fff6461_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ff7bdd2f5b4cee95c6bb2cfcadab6157196ec78311d65aaaf5254c49ba9459a = $this->env->getExtension("native_profiler");
        $__internal_4ff7bdd2f5b4cee95c6bb2cfcadab6157196ec78311d65aaaf5254c49ba9459a->enter($__internal_4ff7bdd2f5b4cee95c6bb2cfcadab6157196ec78311d65aaaf5254c49ba9459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <!-- wpf loader Two -->
    <div id=\"wpf-loader-two\">
        <div class=\"wpf-loader-two-inner\">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class=\"scrollToTop\" href=\"#\"><i class=\"fa fa-chevron-up\"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <header id=\"aa-header\">
        <!-- start header top  -->
        <div class=\"aa-header-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"aa-header-top-area\">
                            <!-- start header top left -->
                            <div class=\"aa-header-top-left\">
                                <!-- start language -->
                                <div class=\"aa-language\">
                                    <div class=\"dropdown\">
                                        <a class=\"btn dropdown-toggle\" href=\"#\" type=\"button\" id=\"dropdownMenu1\"
                                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                            <img src=\"img/flag/english.jpg\" alt=\"english flag\">ENGLISH
                                            <span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                            <li><a href=\"#\"><img src=\"img/flag/french.jpg\" alt=\"\">FRENCH</a></li>
                                            <li><a href=\"#\"><img src=\"img/flag/english.jpg\" alt=\"\">ENGLISH</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / language -->

                                <!-- start currency -->
                                <div class=\"aa-currency\">
                                    <div class=\"dropdown\">
                                        <a class=\"btn dropdown-toggle\" href=\"#\" type=\"button\" id=\"dropdownMenu1\"
                                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                            <i class=\"fa fa-usd\"></i>USD
                                            <span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                            <li><a href=\"#\"><i class=\"fa fa-euro\"></i>EURO</a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-jpy\"></i>YEN</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / currency -->
                                <!-- start cellphone -->
                                <div class=\"cellphone hidden-xs\">
                                    <p><span class=\"fa fa-phone\"></span>00-62-658-658</p>
                                </div>
                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class=\"aa-header-top-right\">
                                <ul class=\"aa-head-top-nav-right\">
                                    <li><a href=\"account.html\">My Account</a></li>
                                    <li class=\"hidden-xs\"><a href=\"wishlist.html\">Wishlist</a></li>
                                    <li class=\"hidden-xs\"><a href=\"cart.html\">My Cart</a></li>
                                    <li class=\"hidden-xs\"><a href=\"checkout.html\">Checkout</a></li>
                                    <p>";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 78
            echo "                                        Hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                                    ";
        } else {
            // line 80
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Login</a></li>

                                    ";
        }
        // line 83
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header top  -->

        <!-- start header bottom  -->
        <div class=\"aa-header-bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"aa-header-bottom-area\">
                            <!-- logo  -->
                            <div class=\"aa-logo\">
                                <!-- Text based logo -->
                                <a href=\"index.html\">
                                    <span class=\"fa fa-shopping-cart\"></span>
                                    <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                                </a>
                                <!-- img based logo -->
                                <!-- <a href=\"index.html\"><img src=\"img/logo.jpg\" alt=\"logo img\"></a> -->
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class=\"aa-cartbox\">
                                <a class=\"aa-cart-link\" href=\"#\">
                                    <span class=\"fa fa-shopping-basket\"></span>
                                    <span class=\"aa-cart-title\">SHOPPING CART</span>
                                    <span class=\"aa-cart-notify\">2</span>
                                </a>
                                <div class=\"aa-cartbox-summary\">
                                    <ul>
                                        <li>
                                            <a class=\"aa-cartbox-img\" href=\"#\"><img src=\"img/woman-small-2.jpg\"
                                                                                    alt=\"img\"></a>
                                            <div class=\"aa-cartbox-info\">
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p>1 x \$250</p>
                                            </div>
                                            <a class=\"aa-remove-product\" href=\"#\"><span class=\"fa fa-times\"></span></a>
                                        </li>
                                        <li>
                                            <a class=\"aa-cartbox-img\" href=\"#\"><img src=\"img/woman-small-1.jpg\"
                                                                                    alt=\"img\"></a>
                                            <div class=\"aa-cartbox-info\">
                                                <h4><a href=\"#\">Product Name</a></h4>
                                                <p>1 x \$250</p>
                                            </div>
                                            <a class=\"aa-remove-product\" href=\"#\"><span class=\"fa fa-times\"></span></a>
                                        </li>
                                        <li>
                      <span class=\"aa-cartbox-total-title\">
                        Total
                      </span>
                      <span class=\"aa-cartbox-total-price\">
                        \$500
                      </span>
                                        </li>
                                    </ul>
                                    <a class=\"aa-cartbox-checkout aa-primary-btn\" href=\"checkout.html\">Checkout</a>
                                </div>
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class=\"aa-search-box\">
                                <form action=\"\">
                                    <input type=\"text\" name=\"\" id=\"\" placeholder=\"Search here ex. 'man' \">
                                    <button type=\"submit\"><span class=\"fa fa-search\"></span></button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
    </header>
    <!-- / header section -->
    <!-- menu -->
    <section id=\"menu\">
        <div class=\"container\">
            <div class=\"menu-area\">
                <!-- Navbar -->
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <!-- Left nav -->
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"index.html\">Home</a></li>
                            <li><a href=\"#\">Men <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Casual</a></li>
                                    <li><a href=\"#\">Sports</a></li>
                                    <li><a href=\"#\">Formal</a></li>
                                    <li><a href=\"#\">Standard</a></li>
                                    <li><a href=\"#\">T-Shirts</a></li>
                                    <li><a href=\"#\">Shirts</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Trousers</a></li>
                                    <li><a href=\"#\">And more.. <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"#\">Sleep Wear</a></li>
                                            <li><a href=\"#\">Sandals</a></li>
                                            <li><a href=\"#\">Loafers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Women <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Kurta & Kurti</a></li>
                                    <li><a href=\"#\">Trousers</a></li>
                                    <li><a href=\"#\">Casual</a></li>
                                    <li><a href=\"#\">Sports</a></li>
                                    <li><a href=\"#\">Formal</a></li>
                                    <li><a href=\"#\">Sarees</a></li>
                                    <li><a href=\"#\">Shoes</a></li>
                                    <li><a href=\"#\">And more.. <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"#\">Sleep Wear</a></li>
                                            <li><a href=\"#\">Sandals</a></li>
                                            <li><a href=\"#\">Loafers</a></li>
                                            <li><a href=\"#\">And more.. <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu\">
                                                    <li><a href=\"#\">Rings</a></li>
                                                    <li><a href=\"#\">Earrings</a></li>
                                                    <li><a href=\"#\">Jewellery Sets</a></li>
                                                    <li><a href=\"#\">Lockets</a></li>
                                                    <li class=\"disabled\"><a class=\"disabled\" href=\"#\">Disabled item</a>
                                                    </li>
                                                    <li><a href=\"#\">Jeans</a></li>
                                                    <li><a href=\"#\">Polo T-Shirts</a></li>
                                                    <li><a href=\"#\">SKirts</a></li>
                                                    <li><a href=\"#\">Jackets</a></li>
                                                    <li><a href=\"#\">Tops</a></li>
                                                    <li><a href=\"#\">Make Up</a></li>
                                                    <li><a href=\"#\">Hair Care</a></li>
                                                    <li><a href=\"#\">Perfumes</a></li>
                                                    <li><a href=\"#\">Skin Care</a></li>
                                                    <li><a href=\"#\">Hand Bags</a></li>
                                                    <li><a href=\"#\">Single Bags</a></li>
                                                    <li><a href=\"#\">Travel Bags</a></li>
                                                    <li><a href=\"#\">Wallets & Belts</a></li>
                                                    <li><a href=\"#\">Sunglases</a></li>
                                                    <li><a href=\"#\">Nail</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Kids <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Casual</a></li>
                                    <li><a href=\"#\">Sports</a></li>
                                    <li><a href=\"#\">Formal</a></li>
                                    <li><a href=\"#\">Standard</a></li>
                                    <li><a href=\"#\">T-Shirts</a></li>
                                    <li><a href=\"#\">Shirts</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Trousers</a></li>
                                    <li><a href=\"#\">And more.. <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"#\">Sleep Wear</a></li>
                                            <li><a href=\"#\">Sandals</a></li>
                                            <li><a href=\"#\">Loafers</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Sports</a></li>
                            <li><a href=\"#\">Digital <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Camera</a></li>
                                    <li><a href=\"#\">Mobile</a></li>
                                    <li><a href=\"#\">Tablet</a></li>
                                    <li><a href=\"#\">Laptop</a></li>
                                    <li><a href=\"#\">Accesories</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Furniture</a></li>
                            <li><a href=\"blog-archive.html\">Blog <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"blog-archive.html\">Blog Style 1</a></li>
                                    <li><a href=\"blog-archive-2.html\">Blog Style 2</a></li>
                                    <li><a href=\"blog-single.html\">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"#\">Pages <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"product.html\">Shop Page</a></li>
                                    <li><a href=\"product-detail.html\">Shop Single</a></li>
                                    <li><a href=\"404.html\">404 Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
    <section id=\"aa-slider\">
        <div class=\"aa-slider-area\">
            <div id=\"sequence\" class=\"seq\">
                <div class=\"seq-screen\">
                    <ul class=\"seq-canvas\">
                        <!-- single slide item -->
                        <li>
                            <div class=\"seq-model\">
                                <img data-seq src=\"images/130638.jpg\" alt=\"Men slide img\"/>
                            </div>
                            <div class=\"seq-title\">
                                <span data-seq>PHONE</span>
                                <h2 data-seq>PHONE</h2>
                                <p data-seq>VERY GOOD SALE</p>
                                <a data-seq href=\"#\" class=\"aa-shop-now-btn aa-secondary-btn\">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class=\"seq-model\">
                                <img data-seq src=\"images/132003.jpg\" alt=\"Wristwatch slide img\"/>
                            </div>
                            <div class=\"seq-title\">
                                <span data-seq>Save Up to 40% Off</span>
                                <h2 data-seq>NETBOOK</h2>
                                <p data-seq>ASUS,LENOVO,OTHERS</p>
                                <a data-seq href=\"#\" class=\"aa-shop-now-btn aa-secondary-btn\">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class=\"seq-model\">
                                <img data-seq src=\"images/dota-2.jpg\" alt=\"Women Jeans slide img\"/>
                            </div>
                            <div class=\"seq-title\">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>GAMES</h2>
                                <p data-seq>DOTA 2,LINEAGE,CS GO</p>
                                <a data-seq href=\"#\" class=\"aa-shop-now-btn aa-secondary-btn\">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class=\"seq-model\">
                                <img data-seq src=\"images/132500.jpg\" alt=\"Shoes slide img\"/>
                            </div>
                            <div class=\"seq-title\">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>TV</h2>
                                <p data-seq>COMMON</p>
                                <a data-seq href=\"#\" class=\"aa-shop-now-btn aa-secondary-btn\">SHOP NOW</a>
                            </div>
                        </li>
                        <li>
                            <div class=\"seq-model\">
                                <img data-seq src=\"images/130883.jpg\" alt=\"Shoes slide img\"/>
                            </div>
                            <div class=\"seq-title\">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Tablets</h2>
                                <p data-seq>COMMON</p>
                                <a data-seq href=\"#\" class=\"aa-shop-now-btn aa-secondary-btn\">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class=\"seq-nav\" aria-controls=\"sequence\" aria-label=\"Slider buttons\">
                    <a type=\"button\" class=\"seq-prev\" aria-label=\"Previous\"><span class=\"fa fa-angle-left\"></span></a>
                    <a type=\"button\" class=\"seq-next\" aria-label=\"Next\"><span class=\"fa fa-angle-right\"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <section id=\"aa-promo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"aa-promo-area\">
                        <div class=\"row\">
                            <!-- promo left -->
                            <div class=\"col-md-5 no-padding\">
                                <div class=\"aa-promo-left\">
                                    <div class=\"aa-promo-banner\">
                                        <img src=\"images/130638.jpg\" alt=\"img\">
                                        <div class=\"aa-prom-content\">
                                            <span>PHONE</span>
                                            <h4><a href=\"#\">For Women</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class=\"col-md-7 no-padding\">
                                <div class=\"aa-promo-right\">
                                    <div class=\"aa-single-promo-right\">
                                        <div class=\"aa-promo-banner\">
                                            <img src=\"images/132003.jpg\" alt=\"img\">
                                            <div class=\"aa-prom-content\">
                                                <span>Exclusive Item</span>
                                                <h4><a href=\"#\">For Men</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"aa-single-promo-right\">
                                        <div class=\"aa-promo-banner\">
                                            <img src=\"images/130883.jpg\" alt=\"img\">
                                            <div class=\"aa-prom-content\">
                                                <span>fds</span>
                                                <h4><a href=\"#\">On Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"aa-single-promo-right\">
                                        <div class=\"aa-promo-banner\">
                                            <img src=\"images/dota-2.jpg\" alt=\"img\">
                                            <div class=\"aa-prom-content\">
                                                <span>New Arrivals</span>
                                                <h4><a href=\"#\">For Kids</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"aa-single-promo-right\">
                                        <div class=\"aa-promo-banner\">
                                            <img src=\"images/132500.jpg\" alt=\"img\">
                                            <div class=\"aa-prom-content\">
                                                <span>25% Off</span>
                                                <h4><a href=\"#\">For Bags</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id=\"aa-product\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <div class=\"aa-product-area\">
                            <div class=\"aa-product-inner\">
                                <!-- start prduct navigation -->
                                <ul class=\"nav nav-tabs aa-products-tab\">
                                    ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 449
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "                                </ul>
                                <!-- Tab panes -->
                                <div class=\"tab-content\">
                                    <!-- Start men product category -->
                                    <div class=\"tab-pane fade in active\" id=\"men\">
                                        <ul class=\"aa-product-catg\">
                                            ";
        // line 457
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 458
            echo "                                                <li class=\"col-sm-4\">
                                                    <figure>
                                                        ";
            // line 461
            echo "                                                        ";
            // line 462
            echo "                                                        ";
            // line 463
            echo "                                                        ";
            // line 464
            echo "                                                        ";
            // line 465
            echo "                                                        <a class=\"aa-add-card-btn\" href=\"#\"><span
                                                                    class=\"fa fa-shopping-cart\"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class=\"aa-product-title\"><a
                                                                        href=\"#\">";
            // line 469
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></h4>
                                                            <span class=\"aa-product-price\">";
            // line 470
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "
                                                            </span>
                                                            <span class=\"aa-product-price\">
                                                                <del>";
            // line 473
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class=\"aa-product-hvr-content\">
                                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                                                           title=\"Add to Wishlist\"><span
                                                                    class=\"fa fa-heart-o\"></span></a>
                                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                                                           title=\"Compare\"><span class=\"fa fa-exchange\"></span></a>
                                                        <a href=\"#\" data-toggle2=\"tooltip\" data-placement=\"top\"
                                                           title=\"Quick View\" data-toggle=\"modal\"
                                                           data-target=\"#quick-view-modal\"><span
                                                                    class=\"fa fa-search\"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class=\"aa-badge aa-sale\" href=\"#\">";
            // line 488
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</span>
                                                </li>
                                                <!-- start single product item -->
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        echo "                                        </ul>
                                        <a class=\"aa-browse-btn\" href=\"#\">Browse next products <span
                                                    class=\"fa fa-long-arrow-right\"></span></a>
                                    </div>
                                    <!-- / women product category -->
                                    <!-- start sports product category -->
                                    <div class=\"tab-pane fade\" id=\"sports\">
                                        <ul class=\"aa-product-catg\">
                                            ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 501
            echo "                                                <li class=\"col-sm-4\">
                                                    <figure>
                                                        ";
            // line 504
            echo "                                                        ";
            // line 505
            echo "                                                        ";
            // line 506
            echo "                                                        ";
            // line 507
            echo "                                                        <a class=\"aa-add-card-btn\" href=\"#\"><span
                                                                    class=\"fa fa-shopping-cart\"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class=\"aa-product-title\"><a
                                                                        href=\"#\">";
            // line 511
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></h4>
                                                            <span class=\"aa-product-price\">";
            // line 512
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</span><span
                                                                    class=\"aa-product-price\"><del>";
            // line 513
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</del></span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class=\"aa-product-hvr-content\">
                                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                                                           title=\"Add to Wishlist\"><span
                                                                    class=\"fa fa-heart-o\"></span></a>
                                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                                                           title=\"Compare\"><span class=\"fa fa-exchange\"></span></a>
                                                        <a href=\"#\" data-toggle2=\"tooltip\" data-placement=\"top\"
                                                           title=\"Quick View\" data-toggle=\"modal\"
                                                           data-target=\"#quick-view-modal\"><span
                                                                    class=\"fa fa-search\"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class=\"aa-badge aa-sale\" href=\"#\">";
            // line 528
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</span>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        echo "                                        </ul>
                                    </div>
                                    <!-- / sports product category -->
                                    <!-- start electronic product category -->
                                    <div class=\"tab-pane fade\" id=\"electronics\">
                                        <ul class=\"aa-product-catg\">
                                            ";
        // line 537
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 538
            echo "                                                <li class=\"col-sm-4\">
                                                    <figure>
                                                        ";
            // line 541
            echo "                                                        ";
            // line 542
            echo "                                                        ";
            // line 543
            echo "                                                        ";
            // line 544
            echo "                                                        <a class=\"aa-add-card-btn\" href=\"#\"><span
                                                                    class=\"fa fa-shopping-cart\"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class=\"aa-product-title\"><a
                                                                        href=\"#\">";
            // line 548
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></h4>
                                                            <span class=\"aa-product-price\">";
            // line 549
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</span><span
                                                                    class=\"aa-product-price\"><del>";
            // line 550
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</del></span>
                                                        </figcaption>
                                                    </figure>

                                                    <div class=\"aa-product-hvr-content\">
                                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                                                           title=\"Add to Wishlist\"><span
                                                                    class=\"fa fa-heart-o\"></span></a>
                                                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\"
                                                           title=\"Compare\"><span class=\"fa fa-exchange\"></span></a>
                                                        <a href=\"#\" data-toggle2=\"tooltip\" data-placement=\"top\"
                                                           title=\"Quick View\" data-toggle=\"modal\"
                                                           data-target=\"#quick-view-modal\"><span
                                                                    class=\"fa fa-search\"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class=\"aa-badge aa-sale\" href=\"#\">";
            // line 566
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</span>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "                                        </ul>
                                        <a class=\"aa-browse-btn\" href=\"#\">Browse all Product <span
                                                    class=\"fa fa-long-arrow-right\"></span></a>
                                    </div>
                                    <!-- / electronic product category -->
                                </div>
                                <!-- quick view modal -->
                                <div class=\"modal fade\" id=\"quick-view-modal\" tabindex=\"-1\" role=\"dialog\"
                                     aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-body\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                        aria-hidden=\"true\">&times;</button>
                                                <div class=\"row\">
                                                    <!-- Modal view slider -->
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <div class=\"aa-product-view-slider\">
                                                            <div class=\"simpleLens-gallery-container\" id=\"demo-1\">
                                                                <div class=\"simpleLens-container\">
                                                                    <div class=\"simpleLens-big-image-container\">
                                                                        <a class=\"simpleLens-lens-image\"
                                                                           data-lens-image=\"images/l2560.jpg\">
                                                                            <img src=\"images/l2560.jpg\"
                                                                                 class=\"simpleLens-big-image\">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"simpleLens-thumbnails-container\">
                                                                    <a href=\"#\" class=\"simpleLens-thumbnail-wrapper\"
                                                                       data-lens-image=\"images/_72147500589.jpg\"
                                                                       data-big-image=\"images/l2560.jpg\">
                                                                        <img src=\"images/_72147500589.jpg\">
                                                                    </a>
                                                                    <a href=\"#\" class=\"simpleLens-thumbnail-wrapper\"
                                                                       data-lens-image=\"images/9aef2ea7a97b04929fa0e75ba18f4c69.jpg\"
                                                                       data-big-image=\"images/l2560.jpg\">
                                                                        <img src=\"images/l2560.jpg\">
                                                                    </a>

                                                                    <a href=\"#\" class=\"simpleLens-thumbnail-wrapper\"
                                                                       data-lens-image=\"img/view-slider/large/polo-shirt-4.png\"
                                                                       data-big-image=\"images/l2560.jpg\">
                                                                        <img src=\"images/l2560.jpg\">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                        <div class=\"aa-product-view-content\">
                                                            <h3>T-Shirt</h3>
                                                            <div class=\"aa-price-block\">
                                                                <span class=\"aa-product-view-price\">\$34.99</span>
                                                                <p class=\"aa-product-avilability\">Avilability: <span>In stock</span>
                                                                </p>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Officiis animi, veritatis quae repudiandae quod nulla
                                                                porro quidem, itaque quis quaerat!</p>
                                                            <h4>Size</h4>
                                                            <div class=\"aa-prod-view-size\">
                                                                <a href=\"#\">S</a>
                                                                <a href=\"#\">M</a>
                                                                <a href=\"#\">L</a>
                                                                <a href=\"#\">XL</a>
                                                            </div>
                                                            <div class=\"aa-prod-quantity\">
                                                                <form action=\"\">
                                                                    <select name=\"\" id=\"\">
                                                                        <option value=\"0\" selected=\"1\">1</option>
                                                                        <option value=\"1\">2</option>
                                                                        <option value=\"2\">3</option>
                                                                        <option value=\"3\">4</option>
                                                                        <option value=\"4\">5</option>
                                                                        <option value=\"5\">6</option>
                                                                    </select>
                                                                </form>
                                                                <p class=\"aa-prod-category\">
                                                                    Category: <a href=\"#\">Polo T-Shirt</a>
                                                                </p>
                                                            </div>
                                                            <div class=\"aa-prod-view-bottom\">
                                                                <a href=\"\" class=\"aa-add-to-cart-btn\"><span
                                                                            class=\"fa fa-shopping-cart\"></span>Add To
                                                                    Cart</a>
                                                                <a href=\"#\" class=\"aa-add-to-cart-btn\">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_4ff7bdd2f5b4cee95c6bb2cfcadab6157196ec78311d65aaaf5254c49ba9459a->leave($__internal_4ff7bdd2f5b4cee95c6bb2cfcadab6157196ec78311d65aaaf5254c49ba9459a_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Products:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  732 => 569,  723 => 566,  704 => 550,  700 => 549,  696 => 548,  690 => 544,  688 => 543,  686 => 542,  684 => 541,  680 => 538,  676 => 537,  668 => 531,  659 => 528,  641 => 513,  637 => 512,  633 => 511,  627 => 507,  625 => 506,  623 => 505,  621 => 504,  617 => 501,  613 => 500,  603 => 492,  593 => 488,  575 => 473,  569 => 470,  565 => 469,  559 => 465,  557 => 464,  555 => 463,  553 => 462,  551 => 461,  547 => 458,  543 => 457,  535 => 451,  524 => 449,  520 => 448,  153 => 83,  146 => 80,  140 => 78,  138 => 77,  70 => 11,  64 => 10,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>*/
/* {% endblock %}*/
/* */
/* {% block title %}{{ "Shop.ll" }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- wpf loader Two -->*/
/*     <div id="wpf-loader-two">*/
/*         <div class="wpf-loader-two-inner">*/
/*             <span>Loading</span>*/
/*         </div>*/
/*     </div>*/
/*     <!-- / wpf loader Two -->*/
/*     <!-- SCROLL TOP BUTTON -->*/
/*     <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>*/
/*     <!-- END SCROLL TOP BUTTON -->*/
/* */
/* */
/*     <!-- Start header section -->*/
/*     <header id="aa-header">*/
/*         <!-- start header top  -->*/
/*         <div class="aa-header-top">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="aa-header-top-area">*/
/*                             <!-- start header top left -->*/
/*                             <div class="aa-header-top-left">*/
/*                                 <!-- start language -->*/
/*                                 <div class="aa-language">*/
/*                                     <div class="dropdown">*/
/*                                         <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"*/
/*                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                             <img src="img/flag/english.jpg" alt="english flag">ENGLISH*/
/*                                             <span class="caret"></span>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                             <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>*/
/*                                             <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- / language -->*/
/* */
/*                                 <!-- start currency -->*/
/*                                 <div class="aa-currency">*/
/*                                     <div class="dropdown">*/
/*                                         <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"*/
/*                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                                             <i class="fa fa-usd"></i>USD*/
/*                                             <span class="caret"></span>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                             <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>*/
/*                                             <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- / currency -->*/
/*                                 <!-- start cellphone -->*/
/*                                 <div class="cellphone hidden-xs">*/
/*                                     <p><span class="fa fa-phone"></span>00-62-658-658</p>*/
/*                                 </div>*/
/*                                 <!-- / cellphone -->*/
/*                             </div>*/
/*                             <!-- / header top left -->*/
/*                             <div class="aa-header-top-right">*/
/*                                 <ul class="aa-head-top-nav-right">*/
/*                                     <li><a href="account.html">My Account</a></li>*/
/*                                     <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>*/
/*                                     <li class="hidden-xs"><a href="cart.html">My Cart</a></li>*/
/*                                     <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>*/
/*                                     <p>{% if is_granted("ROLE_USER") %}*/
/*                                         Hi {{ app.user.username }}</p>*/
/*                                     {% else %}*/
/*                                         <li><a href="{{ path("login") }}">Login</a></li>*/
/* */
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- / header top  -->*/
/* */
/*         <!-- start header bottom  -->*/
/*         <div class="aa-header-bottom">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="aa-header-bottom-area">*/
/*                             <!-- logo  -->*/
/*                             <div class="aa-logo">*/
/*                                 <!-- Text based logo -->*/
/*                                 <a href="index.html">*/
/*                                     <span class="fa fa-shopping-cart"></span>*/
/*                                     <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>*/
/*                                 </a>*/
/*                                 <!-- img based logo -->*/
/*                                 <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->*/
/*                             </div>*/
/*                             <!-- / logo  -->*/
/*                             <!-- cart box -->*/
/*                             <div class="aa-cartbox">*/
/*                                 <a class="aa-cart-link" href="#">*/
/*                                     <span class="fa fa-shopping-basket"></span>*/
/*                                     <span class="aa-cart-title">SHOPPING CART</span>*/
/*                                     <span class="aa-cart-notify">2</span>*/
/*                                 </a>*/
/*                                 <div class="aa-cartbox-summary">*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg"*/
/*                                                                                     alt="img"></a>*/
/*                                             <div class="aa-cartbox-info">*/
/*                                                 <h4><a href="#">Product Name</a></h4>*/
/*                                                 <p>1 x $250</p>*/
/*                                             </div>*/
/*                                             <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg"*/
/*                                                                                     alt="img"></a>*/
/*                                             <div class="aa-cartbox-info">*/
/*                                                 <h4><a href="#">Product Name</a></h4>*/
/*                                                 <p>1 x $250</p>*/
/*                                             </div>*/
/*                                             <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                       <span class="aa-cartbox-total-title">*/
/*                         Total*/
/*                       </span>*/
/*                       <span class="aa-cartbox-total-price">*/
/*                         $500*/
/*                       </span>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                     <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- / cart box -->*/
/*                             <!-- search box -->*/
/*                             <div class="aa-search-box">*/
/*                                 <form action="">*/
/*                                     <input type="text" name="" id="" placeholder="Search here ex. 'man' ">*/
/*                                     <button type="submit"><span class="fa fa-search"></span></button>*/
/*                                 </form>*/
/*                             </div>*/
/*                             <!-- / search box -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- / header bottom  -->*/
/*     </header>*/
/*     <!-- / header section -->*/
/*     <!-- menu -->*/
/*     <section id="menu">*/
/*         <div class="container">*/
/*             <div class="menu-area">*/
/*                 <!-- Navbar -->*/
/*                 <div class="navbar navbar-default" role="navigation">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                                 data-target=".navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse">*/
/*                         <!-- Left nav -->*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li><a href="index.html">Home</a></li>*/
/*                             <li><a href="#">Men <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Casual</a></li>*/
/*                                     <li><a href="#">Sports</a></li>*/
/*                                     <li><a href="#">Formal</a></li>*/
/*                                     <li><a href="#">Standard</a></li>*/
/*                                     <li><a href="#">T-Shirts</a></li>*/
/*                                     <li><a href="#">Shirts</a></li>*/
/*                                     <li><a href="#">Jeans</a></li>*/
/*                                     <li><a href="#">Trousers</a></li>*/
/*                                     <li><a href="#">And more.. <span class="caret"></span></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="#">Sleep Wear</a></li>*/
/*                                             <li><a href="#">Sandals</a></li>*/
/*                                             <li><a href="#">Loafers</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="#">Women <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Kurta & Kurti</a></li>*/
/*                                     <li><a href="#">Trousers</a></li>*/
/*                                     <li><a href="#">Casual</a></li>*/
/*                                     <li><a href="#">Sports</a></li>*/
/*                                     <li><a href="#">Formal</a></li>*/
/*                                     <li><a href="#">Sarees</a></li>*/
/*                                     <li><a href="#">Shoes</a></li>*/
/*                                     <li><a href="#">And more.. <span class="caret"></span></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="#">Sleep Wear</a></li>*/
/*                                             <li><a href="#">Sandals</a></li>*/
/*                                             <li><a href="#">Loafers</a></li>*/
/*                                             <li><a href="#">And more.. <span class="caret"></span></a>*/
/*                                                 <ul class="dropdown-menu">*/
/*                                                     <li><a href="#">Rings</a></li>*/
/*                                                     <li><a href="#">Earrings</a></li>*/
/*                                                     <li><a href="#">Jewellery Sets</a></li>*/
/*                                                     <li><a href="#">Lockets</a></li>*/
/*                                                     <li class="disabled"><a class="disabled" href="#">Disabled item</a>*/
/*                                                     </li>*/
/*                                                     <li><a href="#">Jeans</a></li>*/
/*                                                     <li><a href="#">Polo T-Shirts</a></li>*/
/*                                                     <li><a href="#">SKirts</a></li>*/
/*                                                     <li><a href="#">Jackets</a></li>*/
/*                                                     <li><a href="#">Tops</a></li>*/
/*                                                     <li><a href="#">Make Up</a></li>*/
/*                                                     <li><a href="#">Hair Care</a></li>*/
/*                                                     <li><a href="#">Perfumes</a></li>*/
/*                                                     <li><a href="#">Skin Care</a></li>*/
/*                                                     <li><a href="#">Hand Bags</a></li>*/
/*                                                     <li><a href="#">Single Bags</a></li>*/
/*                                                     <li><a href="#">Travel Bags</a></li>*/
/*                                                     <li><a href="#">Wallets & Belts</a></li>*/
/*                                                     <li><a href="#">Sunglases</a></li>*/
/*                                                     <li><a href="#">Nail</a></li>*/
/*                                                 </ul>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="#">Kids <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Casual</a></li>*/
/*                                     <li><a href="#">Sports</a></li>*/
/*                                     <li><a href="#">Formal</a></li>*/
/*                                     <li><a href="#">Standard</a></li>*/
/*                                     <li><a href="#">T-Shirts</a></li>*/
/*                                     <li><a href="#">Shirts</a></li>*/
/*                                     <li><a href="#">Jeans</a></li>*/
/*                                     <li><a href="#">Trousers</a></li>*/
/*                                     <li><a href="#">And more.. <span class="caret"></span></a>*/
/*                                         <ul class="dropdown-menu">*/
/*                                             <li><a href="#">Sleep Wear</a></li>*/
/*                                             <li><a href="#">Sandals</a></li>*/
/*                                             <li><a href="#">Loafers</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="#">Sports</a></li>*/
/*                             <li><a href="#">Digital <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Camera</a></li>*/
/*                                     <li><a href="#">Mobile</a></li>*/
/*                                     <li><a href="#">Tablet</a></li>*/
/*                                     <li><a href="#">Laptop</a></li>*/
/*                                     <li><a href="#">Accesories</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="#">Furniture</a></li>*/
/*                             <li><a href="blog-archive.html">Blog <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="blog-archive.html">Blog Style 1</a></li>*/
/*                                     <li><a href="blog-archive-2.html">Blog Style 2</a></li>*/
/*                                     <li><a href="blog-single.html">Blog Single</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="contact.html">Contact</a></li>*/
/*                             <li><a href="#">Pages <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="product.html">Shop Page</a></li>*/
/*                                     <li><a href="product-detail.html">Shop Single</a></li>*/
/*                                     <li><a href="404.html">404 Page</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div><!--/.nav-collapse -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <section id="aa-slider">*/
/*         <div class="aa-slider-area">*/
/*             <div id="sequence" class="seq">*/
/*                 <div class="seq-screen">*/
/*                     <ul class="seq-canvas">*/
/*                         <!-- single slide item -->*/
/*                         <li>*/
/*                             <div class="seq-model">*/
/*                                 <img data-seq src="images/130638.jpg" alt="Men slide img"/>*/
/*                             </div>*/
/*                             <div class="seq-title">*/
/*                                 <span data-seq>PHONE</span>*/
/*                                 <h2 data-seq>PHONE</h2>*/
/*                                 <p data-seq>VERY GOOD SALE</p>*/
/*                                 <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- single slide item -->*/
/*                         <li>*/
/*                             <div class="seq-model">*/
/*                                 <img data-seq src="images/132003.jpg" alt="Wristwatch slide img"/>*/
/*                             </div>*/
/*                             <div class="seq-title">*/
/*                                 <span data-seq>Save Up to 40% Off</span>*/
/*                                 <h2 data-seq>NETBOOK</h2>*/
/*                                 <p data-seq>ASUS,LENOVO,OTHERS</p>*/
/*                                 <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- single slide item -->*/
/*                         <li>*/
/*                             <div class="seq-model">*/
/*                                 <img data-seq src="images/dota-2.jpg" alt="Women Jeans slide img"/>*/
/*                             </div>*/
/*                             <div class="seq-title">*/
/*                                 <span data-seq>Save Up to 75% Off</span>*/
/*                                 <h2 data-seq>GAMES</h2>*/
/*                                 <p data-seq>DOTA 2,LINEAGE,CS GO</p>*/
/*                                 <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- single slide item -->*/
/*                         <li>*/
/*                             <div class="seq-model">*/
/*                                 <img data-seq src="images/132500.jpg" alt="Shoes slide img"/>*/
/*                             </div>*/
/*                             <div class="seq-title">*/
/*                                 <span data-seq>Save Up to 75% Off</span>*/
/*                                 <h2 data-seq>TV</h2>*/
/*                                 <p data-seq>COMMON</p>*/
/*                                 <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <li>*/
/*                             <div class="seq-model">*/
/*                                 <img data-seq src="images/130883.jpg" alt="Shoes slide img"/>*/
/*                             </div>*/
/*                             <div class="seq-title">*/
/*                                 <span data-seq>Save Up to 75% Off</span>*/
/*                                 <h2 data-seq>Tablets</h2>*/
/*                                 <p data-seq>COMMON</p>*/
/*                                 <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- single slide item -->*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- slider navigation btn -->*/
/*                 <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">*/
/*                     <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>*/
/*                     <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>*/
/*                 </fieldset>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <section id="aa-promo">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="aa-promo-area">*/
/*                         <div class="row">*/
/*                             <!-- promo left -->*/
/*                             <div class="col-md-5 no-padding">*/
/*                                 <div class="aa-promo-left">*/
/*                                     <div class="aa-promo-banner">*/
/*                                         <img src="images/130638.jpg" alt="img">*/
/*                                         <div class="aa-prom-content">*/
/*                                             <span>PHONE</span>*/
/*                                             <h4><a href="#">For Women</a></h4>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- promo right -->*/
/*                             <div class="col-md-7 no-padding">*/
/*                                 <div class="aa-promo-right">*/
/*                                     <div class="aa-single-promo-right">*/
/*                                         <div class="aa-promo-banner">*/
/*                                             <img src="images/132003.jpg" alt="img">*/
/*                                             <div class="aa-prom-content">*/
/*                                                 <span>Exclusive Item</span>*/
/*                                                 <h4><a href="#">For Men</a></h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="aa-single-promo-right">*/
/*                                         <div class="aa-promo-banner">*/
/*                                             <img src="images/130883.jpg" alt="img">*/
/*                                             <div class="aa-prom-content">*/
/*                                                 <span>fds</span>*/
/*                                                 <h4><a href="#">On Shoes</a></h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="aa-single-promo-right">*/
/*                                         <div class="aa-promo-banner">*/
/*                                             <img src="images/dota-2.jpg" alt="img">*/
/*                                             <div class="aa-prom-content">*/
/*                                                 <span>New Arrivals</span>*/
/*                                                 <h4><a href="#">For Kids</a></h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="aa-single-promo-right">*/
/*                                         <div class="aa-promo-banner">*/
/*                                             <img src="images/132500.jpg" alt="img">*/
/*                                             <div class="aa-prom-content">*/
/*                                                 <span>25% Off</span>*/
/*                                                 <h4><a href="#">For Bags</a></h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <!-- / Promo section -->*/
/*     <!-- Products section -->*/
/*     <section id="aa-product">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="row">*/
/*                         <div class="aa-product-area">*/
/*                             <div class="aa-product-inner">*/
/*                                 <!-- start prduct navigation -->*/
/*                                 <ul class="nav nav-tabs aa-products-tab">*/
/*                                     {% for category in categories %}*/
/*                                         <li><a href="{{ category.name }}" data-toggle="tab">{{ category.name }}</a></li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                                 <!-- Tab panes -->*/
/*                                 <div class="tab-content">*/
/*                                     <!-- Start men product category -->*/
/*                                     <div class="tab-pane fade in active" id="men">*/
/*                                         <ul class="aa-product-catg">*/
/*                                             {% for product in products %}*/
/*                                                 <li class="col-sm-4">*/
/*                                                     <figure>*/
/*                                                         {#TODO#}*/
/*                                                         {#<a class="aa-product-img" href="#">#}*/
/*                                                         {#<img class="img-thumbnail"#}*/
/*                                                         {#src="{{ product.images[0].uri }}"#}*/
/*                                                         {#alt="polo shirt img"></a>#}*/
/*                                                         <a class="aa-add-card-btn" href="#"><span*/
/*                                                                     class="fa fa-shopping-cart"></span>Add To Cart</a>*/
/*                                                         <figcaption>*/
/*                                                             <h4 class="aa-product-title"><a*/
/*                                                                         href="#">{{ product.name }}</a></h4>*/
/*                                                             <span class="aa-product-price">{{ product.price }}*/
/*                                                             </span>*/
/*                                                             <span class="aa-product-price">*/
/*                                                                 <del>{{ product.price }}</del></span>*/
/*                                                         </figcaption>*/
/*                                                     </figure>*/
/*                                                     <div class="aa-product-hvr-content">*/
/*                                                         <a href="#" data-toggle="tooltip" data-placement="top"*/
/*                                                            title="Add to Wishlist"><span*/
/*                                                                     class="fa fa-heart-o"></span></a>*/
/*                                                         <a href="#" data-toggle="tooltip" data-placement="top"*/
/*                                                            title="Compare"><span class="fa fa-exchange"></span></a>*/
/*                                                         <a href="#" data-toggle2="tooltip" data-placement="top"*/
/*                                                            title="Quick View" data-toggle="modal"*/
/*                                                            data-target="#quick-view-modal"><span*/
/*                                                                     class="fa fa-search"></span></a>*/
/*                                                     </div>*/
/*                                                     <!-- product badge -->*/
/*                                                     <span class="aa-badge aa-sale" href="#">{{ product.type }}</span>*/
/*                                                 </li>*/
/*                                                 <!-- start single product item -->*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                         <a class="aa-browse-btn" href="#">Browse next products <span*/
/*                                                     class="fa fa-long-arrow-right"></span></a>*/
/*                                     </div>*/
/*                                     <!-- / women product category -->*/
/*                                     <!-- start sports product category -->*/
/*                                     <div class="tab-pane fade" id="sports">*/
/*                                         <ul class="aa-product-catg">*/
/*                                             {% for product in products %}*/
/*                                                 <li class="col-sm-4">*/
/*                                                     <figure>*/
/*                                                         {#TODO#}*/
/*                                                         {#<a class="aa-product-img" href="#"><img#}*/
/*                                                         {#src="{{ product.images[0].uri }}"#}*/
/*                                                         {#alt="polo shirt img"></a>#}*/
/*                                                         <a class="aa-add-card-btn" href="#"><span*/
/*                                                                     class="fa fa-shopping-cart"></span>Add To Cart</a>*/
/*                                                         <figcaption>*/
/*                                                             <h4 class="aa-product-title"><a*/
/*                                                                         href="#">{{ product.name }}</a></h4>*/
/*                                                             <span class="aa-product-price">{{ product.price }}</span><span*/
/*                                                                     class="aa-product-price"><del>{{ product.price }}</del></span>*/
/*                                                         </figcaption>*/
/*                                                     </figure>*/
/*                                                     <div class="aa-product-hvr-content">*/
/*                                                         <a href="#" data-toggle="tooltip" data-placement="top"*/
/*                                                            title="Add to Wishlist"><span*/
/*                                                                     class="fa fa-heart-o"></span></a>*/
/*                                                         <a href="#" data-toggle="tooltip" data-placement="top"*/
/*                                                            title="Compare"><span class="fa fa-exchange"></span></a>*/
/*                                                         <a href="#" data-toggle2="tooltip" data-placement="top"*/
/*                                                            title="Quick View" data-toggle="modal"*/
/*                                                            data-target="#quick-view-modal"><span*/
/*                                                                     class="fa fa-search"></span></a>*/
/*                                                     </div>*/
/*                                                     <!-- product badge -->*/
/*                                                     <span class="aa-badge aa-sale" href="#">{{ product.type }}</span>*/
/*                                                 </li>*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <!-- / sports product category -->*/
/*                                     <!-- start electronic product category -->*/
/*                                     <div class="tab-pane fade" id="electronics">*/
/*                                         <ul class="aa-product-catg">*/
/*                                             {% for product in products %}*/
/*                                                 <li class="col-sm-4">*/
/*                                                     <figure>*/
/*                                                         {#TODO#}*/
/*                                                         {#<a class="aa-product-img" href="#"><img#}*/
/*                                                         {#src="{{ product.images[0].uri }}"#}*/
/*                                                         {#alt="polo shirt img"></a>#}*/
/*                                                         <a class="aa-add-card-btn" href="#"><span*/
/*                                                                     class="fa fa-shopping-cart"></span>Add To Cart</a>*/
/*                                                         <figcaption>*/
/*                                                             <h4 class="aa-product-title"><a*/
/*                                                                         href="#">{{ product.name }}</a></h4>*/
/*                                                             <span class="aa-product-price">{{ product.price }}</span><span*/
/*                                                                     class="aa-product-price"><del>{{ product.price }}</del></span>*/
/*                                                         </figcaption>*/
/*                                                     </figure>*/
/* */
/*                                                     <div class="aa-product-hvr-content">*/
/*                                                         <a href="#" data-toggle="tooltip" data-placement="top"*/
/*                                                            title="Add to Wishlist"><span*/
/*                                                                     class="fa fa-heart-o"></span></a>*/
/*                                                         <a href="#" data-toggle="tooltip" data-placement="top"*/
/*                                                            title="Compare"><span class="fa fa-exchange"></span></a>*/
/*                                                         <a href="#" data-toggle2="tooltip" data-placement="top"*/
/*                                                            title="Quick View" data-toggle="modal"*/
/*                                                            data-target="#quick-view-modal"><span*/
/*                                                                     class="fa fa-search"></span></a>*/
/*                                                     </div>*/
/*                                                     <!-- product badge -->*/
/*                                                     <span class="aa-badge aa-sale" href="#">{{ product.type }}</span>*/
/*                                                 </li>*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                         <a class="aa-browse-btn" href="#">Browse all Product <span*/
/*                                                     class="fa fa-long-arrow-right"></span></a>*/
/*                                     </div>*/
/*                                     <!-- / electronic product category -->*/
/*                                 </div>*/
/*                                 <!-- quick view modal -->*/
/*                                 <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"*/
/*                                      aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                                     <div class="modal-dialog">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-body">*/
/*                                                 <button type="button" class="close" data-dismiss="modal"*/
/*                                                         aria-hidden="true">&times;</button>*/
/*                                                 <div class="row">*/
/*                                                     <!-- Modal view slider -->*/
/*                                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                         <div class="aa-product-view-slider">*/
/*                                                             <div class="simpleLens-gallery-container" id="demo-1">*/
/*                                                                 <div class="simpleLens-container">*/
/*                                                                     <div class="simpleLens-big-image-container">*/
/*                                                                         <a class="simpleLens-lens-image"*/
/*                                                                            data-lens-image="images/l2560.jpg">*/
/*                                                                             <img src="images/l2560.jpg"*/
/*                                                                                  class="simpleLens-big-image">*/
/*                                                                         </a>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                                 <div class="simpleLens-thumbnails-container">*/
/*                                                                     <a href="#" class="simpleLens-thumbnail-wrapper"*/
/*                                                                        data-lens-image="images/_72147500589.jpg"*/
/*                                                                        data-big-image="images/l2560.jpg">*/
/*                                                                         <img src="images/_72147500589.jpg">*/
/*                                                                     </a>*/
/*                                                                     <a href="#" class="simpleLens-thumbnail-wrapper"*/
/*                                                                        data-lens-image="images/9aef2ea7a97b04929fa0e75ba18f4c69.jpg"*/
/*                                                                        data-big-image="images/l2560.jpg">*/
/*                                                                         <img src="images/l2560.jpg">*/
/*                                                                     </a>*/
/* */
/*                                                                     <a href="#" class="simpleLens-thumbnail-wrapper"*/
/*                                                                        data-lens-image="img/view-slider/large/polo-shirt-4.png"*/
/*                                                                        data-big-image="images/l2560.jpg">*/
/*                                                                         <img src="images/l2560.jpg">*/
/*                                                                     </a>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <!-- Modal view content -->*/
/*                                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                         <div class="aa-product-view-content">*/
/*                                                             <h3>T-Shirt</h3>*/
/*                                                             <div class="aa-price-block">*/
/*                                                                 <span class="aa-product-view-price">$34.99</span>*/
/*                                                                 <p class="aa-product-avilability">Avilability: <span>In stock</span>*/
/*                                                                 </p>*/
/*                                                             </div>*/
/*                                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.*/
/*                                                                 Officiis animi, veritatis quae repudiandae quod nulla*/
/*                                                                 porro quidem, itaque quis quaerat!</p>*/
/*                                                             <h4>Size</h4>*/
/*                                                             <div class="aa-prod-view-size">*/
/*                                                                 <a href="#">S</a>*/
/*                                                                 <a href="#">M</a>*/
/*                                                                 <a href="#">L</a>*/
/*                                                                 <a href="#">XL</a>*/
/*                                                             </div>*/
/*                                                             <div class="aa-prod-quantity">*/
/*                                                                 <form action="">*/
/*                                                                     <select name="" id="">*/
/*                                                                         <option value="0" selected="1">1</option>*/
/*                                                                         <option value="1">2</option>*/
/*                                                                         <option value="2">3</option>*/
/*                                                                         <option value="3">4</option>*/
/*                                                                         <option value="4">5</option>*/
/*                                                                         <option value="5">6</option>*/
/*                                                                     </select>*/
/*                                                                 </form>*/
/*                                                                 <p class="aa-prod-category">*/
/*                                                                     Category: <a href="#">Polo T-Shirt</a>*/
/*                                                                 </p>*/
/*                                                             </div>*/
/*                                                             <div class="aa-prod-view-bottom">*/
/*                                                                 <a href="" class="aa-add-to-cart-btn"><span*/
/*                                                                             class="fa fa-shopping-cart"></span>Add To*/
/*                                                                     Cart</a>*/
/*                                                                 <a href="#" class="aa-add-to-cart-btn">View Details</a>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div><!-- /.modal-content -->*/
/*                                     </div><!-- /.modal-dialog -->*/
/*                                 </div><!-- / quick view modal -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
