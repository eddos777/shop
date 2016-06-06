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
        $__internal_0f6466574d8ed272ee7e1ed8ced3a9e9d630d6449b2112add81b3f9b3259a233 = $this->env->getExtension("native_profiler");
        $__internal_0f6466574d8ed272ee7e1ed8ced3a9e9d630d6449b2112add81b3f9b3259a233->enter($__internal_0f6466574d8ed272ee7e1ed8ced3a9e9d630d6449b2112add81b3f9b3259a233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Products:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6466574d8ed272ee7e1ed8ced3a9e9d630d6449b2112add81b3f9b3259a233->leave($__internal_0f6466574d8ed272ee7e1ed8ced3a9e9d630d6449b2112add81b3f9b3259a233_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e079f7813693ca82d58bb6323d521e922fbe675b67933cca22869d98cbe43c0a = $this->env->getExtension("native_profiler");
        $__internal_e079f7813693ca82d58bb6323d521e922fbe675b67933cca22869d98cbe43c0a->enter($__internal_e079f7813693ca82d58bb6323d521e922fbe675b67933cca22869d98cbe43c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\"/>
    ";
        
        $__internal_e079f7813693ca82d58bb6323d521e922fbe675b67933cca22869d98cbe43c0a->leave($__internal_e079f7813693ca82d58bb6323d521e922fbe675b67933cca22869d98cbe43c0a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5fd3547914d0d8105b9db25f436acf2a1585d62312bf87346de9f93198db2c3 = $this->env->getExtension("native_profiler");
        $__internal_e5fd3547914d0d8105b9db25f436acf2a1585d62312bf87346de9f93198db2c3->enter($__internal_e5fd3547914d0d8105b9db25f436acf2a1585d62312bf87346de9f93198db2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Shop.ll";
        echo "
    ";
        
        $__internal_e5fd3547914d0d8105b9db25f436acf2a1585d62312bf87346de9f93198db2c3->leave($__internal_e5fd3547914d0d8105b9db25f436acf2a1585d62312bf87346de9f93198db2c3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb07d993a07f8033cc335206c1679ef5af82268d80d9aec1d604c923b8dca68 = $this->env->getExtension("native_profiler");
        $__internal_4cb07d993a07f8033cc335206c1679ef5af82268d80d9aec1d604c923b8dca68->enter($__internal_4cb07d993a07f8033cc335206c1679ef5af82268d80d9aec1d604c923b8dca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
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
                        </li><li>
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
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 162
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
        // line 164
        echo "                                </ul>
                                <!-- Tab panes -->
                                <div class=\"tab-content\">
                                    <!-- Start men product category -->
                                    <div class=\"tab-pane fade in active\" id=\"men\">
                                        <ul class=\"aa-product-catg\">
                                            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 171
            echo "                                                <li class=\"col-sm-4\">
                                                    <figure>
                                                        ";
            // line 174
            echo "                                                        ";
            // line 175
            echo "                                                            ";
            // line 176
            echo "                                                                 ";
            // line 177
            echo "                                                                 ";
            // line 178
            echo "                                                        <a class=\"aa-add-card-btn\" href=\"#\"><span
                                                                    class=\"fa fa-shopping-cart\"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class=\"aa-product-title\"><a
                                                                        href=\"#\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></h4>
                                                            <span class=\"aa-product-price\">";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "
                                                            </span>
                                                            <span class=\"aa-product-price\">
                                                                <del>";
            // line 186
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
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</span>
                                                </li>
                                                <!-- start single product item -->
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                                        </ul>
                                        <a class=\"aa-browse-btn\" href=\"#\">Browse next products <span
                                                    class=\"fa fa-long-arrow-right\"></span></a>
                                    </div>
                                    <!-- / women product category -->
                                    <!-- start sports product category -->
                                    <div class=\"tab-pane fade\" id=\"sports\">
                                        <ul class=\"aa-product-catg\">
                                            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 214
            echo "                                                <li class=\"col-sm-4\">
                                                    <figure>
                                                        ";
            // line 217
            echo "                                                        ";
            // line 218
            echo "                                                                    ";
            // line 219
            echo "                                                                    ";
            // line 220
            echo "                                                        <a class=\"aa-add-card-btn\" href=\"#\"><span
                                                                    class=\"fa fa-shopping-cart\"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class=\"aa-product-title\"><a
                                                                        href=\"#\">";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></h4>
                                                            <span class=\"aa-product-price\">";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</span><span
                                                                    class=\"aa-product-price\"><del>";
            // line 226
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
            // line 241
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</span>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                                        </ul>
                                    </div>
                                    <!-- / sports product category -->
                                    <!-- start electronic product category -->
                                    <div class=\"tab-pane fade\" id=\"electronics\">
                                        <ul class=\"aa-product-catg\">
                                            ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 251
            echo "                                                <li class=\"col-sm-4\">
                                                    <figure>
                                                        ";
            // line 254
            echo "                                                        ";
            // line 255
            echo "                                                                    ";
            // line 256
            echo "                                                                    ";
            // line 257
            echo "                                                        <a class=\"aa-add-card-btn\" href=\"#\"><span
                                                                    class=\"fa fa-shopping-cart\"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class=\"aa-product-title\"><a
                                                                        href=\"#\">";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></h4>
                                                            <span class=\"aa-product-price\">";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</span><span
                                                                    class=\"aa-product-price\"><del>";
            // line 263
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
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</span>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
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
        
        $__internal_4cb07d993a07f8033cc335206c1679ef5af82268d80d9aec1d604c923b8dca68->leave($__internal_4cb07d993a07f8033cc335206c1679ef5af82268d80d9aec1d604c923b8dca68_prof);

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
        return array (  434 => 282,  425 => 279,  406 => 263,  402 => 262,  398 => 261,  392 => 257,  390 => 256,  388 => 255,  386 => 254,  382 => 251,  378 => 250,  370 => 244,  361 => 241,  343 => 226,  339 => 225,  335 => 224,  329 => 220,  327 => 219,  325 => 218,  323 => 217,  319 => 214,  315 => 213,  305 => 205,  295 => 201,  277 => 186,  271 => 183,  267 => 182,  261 => 178,  259 => 177,  257 => 176,  255 => 175,  253 => 174,  249 => 171,  245 => 170,  237 => 164,  226 => 162,  222 => 161,  69 => 10,  63 => 9,  49 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block head %}<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>*/
/*     {% endblock %}*/
/* */
/* {% block title %}{{ "Shop.ll" }}*/
/*     {% endblock %}*/
/* */
/* {% block body %}*/
/* */
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
/*                         </li><li>*/
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
/*                                             <div class="aa-promo-banner">*/
/*                                                 <img src="images/130883.jpg" alt="img">*/
/*                                                 <div class="aa-prom-content">*/
/*                                                     <span>fds</span>*/
/*                                                     <h4><a href="#">On Shoes</a></h4>*/
/*                                                 </div>*/
/*                                             </div>*/
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
/*                                                             {#<img class="img-thumbnail"#}*/
/*                                                                  {#src="{{ product.images[0].uri }}"#}*/
/*                                                                  {#alt="polo shirt img"></a>#}*/
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
/*                                                                     {#src="{{ product.images[0].uri }}"#}*/
/*                                                                     {#alt="polo shirt img"></a>#}*/
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
/*                                                                     {#src="{{ product.images[0].uri }}"#}*/
/*                                                                     {#alt="polo shirt img"></a>#}*/
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
