<?php

/* base.html.twig */
class __TwigTemplate_2deb1587ff1c2a58ac3a65f6486ea71b3755b7249bc999206b69553f3889f701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8c24773a40c8503a24329af3d905bf8d39203165dba4ae6f8ef67ed68d1f543 = $this->env->getExtension("native_profiler");
        $__internal_f8c24773a40c8503a24329af3d905bf8d39203165dba4ae6f8ef67ed68d1f543->enter($__internal_f8c24773a40c8503a24329af3d905bf8d39203165dba4ae6f8ef67ed68d1f543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font awesome -->
    <link href=\"css/font-awesome.css\" rel=\"stylesheet\">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href=\"css/jquery.smartmenus.bootstrap.css\" rel=\"stylesheet\">
    <!-- Product view slider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.simpleLens.css\">
    <!-- slick slider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/slick.css\">
    <!-- price picker slider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/nouislider.css\">
    <!-- Theme color -->
    <link id=\"switcher\" href=\"css/theme-color/default-theme.css\" rel=\"stylesheet\">
    <!-- <link id=\"switcher\" href=\"css/theme-color/bridge-theme.css\" rel=\"stylesheet\"> -->
    <!-- Top Slider CSS -->
    <link href=\"css/sequence-theme.modern-slide-in.css\" rel=\"stylesheet\" media=\"all\">

    <!-- Main style sheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : 'your-app-id',
            xfbml      : true,
            version    : 'v2.5'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/en_US/sdk.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class=\"container\">
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">Shop.ll</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"create\">Create</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                           aria-expanded=\"false\">Products type<span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    ";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "</div>

<footer id=\"aa-footer\">
    <!-- footer bottom -->
    <div class=\"aa-footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"aa-footer-top-area\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"aa-footer-widget\">
                                    <h3>Main Menu</h3>
                                    <ul class=\"aa-footer-nav\">
                                        <li><a href=\"#\">Home</a></li>
                                        <li><a href=\"#\">Our Services</a></li>
                                        <li><a href=\"#\">Our Products</a></li>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"aa-footer-widget\">
                                    <div class=\"aa-footer-widget\">
                                        <h3>Knowledge Base</h3>
                                        <ul class=\"aa-footer-nav\">
                                            <li><a href=\"#\">Delivery</a></li>
                                            <li><a href=\"#\">Returns</a></li>
                                            <li><a href=\"#\">Services</a></li>
                                            <li><a href=\"#\">Discount</a></li>
                                            <li><a href=\"#\">Special Offer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"aa-footer-widget\">
                                    <div class=\"aa-footer-widget\">
                                        <h3>Useful Links</h3>
                                        <ul class=\"aa-footer-nav\">
                                            <li><a href=\"#\">Site Map</a></li>
                                            <li><a href=\"#\">Search</a></li>
                                            <li><a href=\"#\">Advanced Search</a></li>
                                            <li><a href=\"#\">Suppliers</a></li>
                                            <li><a href=\"#\">FAQ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"aa-footer-widget\">
                                    <div class=\"aa-footer-widget\">
                                        <h3>Contact Us</h3>
                                        <address>
                                            <p> 25 Astor Pl, NY 10003, USA</p>
                                            <p><span class=\"fa fa-phone\"></span>+1 212-982-4589</p>
                                            <p><span class=\"fa fa-envelope\"></span>dailyshop@gmail.com</p>
                                        </address>
                                        <div class=\"aa-footer-social\">
                                            <a href=\"#\"><span class=\"fa fa-facebook\"></span></a>
                                            <a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
                                            <a href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
                                            <a href=\"#\"><span class=\"fa fa-youtube\"></span></a>
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
    <!-- footer-bottom -->
    <div class=\"aa-footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"aa-footer-bottom-area\">
                        <p>Designed by <a href=\"http://www.markups.io/\">MarkUps.io</a></p>
                        <div class=\"aa-footer-payment\">
                            <span class=\"fa fa-cc-mastercard\"></span>
                            <span class=\"fa fa-cc-visa\"></span>
                            <span class=\"fa fa-paypal\"></span>
                            <span class=\"fa fa-cc-discover\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- SmartMenus jQuery plugin -->
<script type=\"text/javascript\" src=\"js/jquery.smartmenus.js\"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type=\"text/javascript\" src=\"js/jquery.smartmenus.bootstrap.js\"></script>
<!-- To Slider JS -->
<script src=\"js/sequence.js\"></script>
<script src=\"js/sequence-theme.modern-slide-in.js\"></script>
<!-- Product view slider -->
<script type=\"text/javascript\" src=\"js/jquery.simpleGallery.js\"></script>
<script type=\"text/javascript\" src=\"js/jquery.simpleLens.js\"></script>
<!-- slick slider -->
<script type=\"text/javascript\" src=\"js/slick.js\"></script>
<!-- Price picker slider -->
<script type=\"text/javascript\" src=\"js/nouislider.js\"></script>
<!-- Custom js -->
<script src=\"js/custom.js\"></script>

</body>
</html>
";
        
        $__internal_f8c24773a40c8503a24329af3d905bf8d39203165dba4ae6f8ef67ed68d1f543->leave($__internal_f8c24773a40c8503a24329af3d905bf8d39203165dba4ae6f8ef67ed68d1f543_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5634c2f8c152e9744e35d7e26627621da9c807eaf7443f0d1f5528365a58e0cb = $this->env->getExtension("native_profiler");
        $__internal_5634c2f8c152e9744e35d7e26627621da9c807eaf7443f0d1f5528365a58e0cb->enter($__internal_5634c2f8c152e9744e35d7e26627621da9c807eaf7443f0d1f5528365a58e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5634c2f8c152e9744e35d7e26627621da9c807eaf7443f0d1f5528365a58e0cb->leave($__internal_5634c2f8c152e9744e35d7e26627621da9c807eaf7443f0d1f5528365a58e0cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c83daeba305e906eec0eebbc107c858ec51bc6bd1486248b84da3d408e96e1c = $this->env->getExtension("native_profiler");
        $__internal_1c83daeba305e906eec0eebbc107c858ec51bc6bd1486248b84da3d408e96e1c->enter($__internal_1c83daeba305e906eec0eebbc107c858ec51bc6bd1486248b84da3d408e96e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c83daeba305e906eec0eebbc107c858ec51bc6bd1486248b84da3d408e96e1c->leave($__internal_1c83daeba305e906eec0eebbc107c858ec51bc6bd1486248b84da3d408e96e1c_prof);

    }

    // line 97
    public function block_body($context, array $blocks = array())
    {
        $__internal_77433bc2701e6d4643b686e5f3f38f2995fe40b78f4b06fce8622a481acba5f6 = $this->env->getExtension("native_profiler");
        $__internal_77433bc2701e6d4643b686e5f3f38f2995fe40b78f4b06fce8622a481acba5f6->enter($__internal_77433bc2701e6d4643b686e5f3f38f2995fe40b78f4b06fce8622a481acba5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77433bc2701e6d4643b686e5f3f38f2995fe40b78f4b06fce8622a481acba5f6->leave($__internal_77433bc2701e6d4643b686e5f3f38f2995fe40b78f4b06fce8622a481acba5f6_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b729a8acd08387a760f45feb1d7aa6143f6248e7c65db2d75524e36604cb9c59 = $this->env->getExtension("native_profiler");
        $__internal_b729a8acd08387a760f45feb1d7aa6143f6248e7c65db2d75524e36604cb9c59->enter($__internal_b729a8acd08387a760f45feb1d7aa6143f6248e7c65db2d75524e36604cb9c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b729a8acd08387a760f45feb1d7aa6143f6248e7c65db2d75524e36604cb9c59->leave($__internal_b729a8acd08387a760f45feb1d7aa6143f6248e7c65db2d75524e36604cb9c59_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 98,  294 => 97,  283 => 6,  271 => 5,  243 => 194,  239 => 193,  143 => 99,  140 => 98,  138 => 97,  72 => 34,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- Font awesome -->*/
/*     <link href="css/font-awesome.css" rel="stylesheet">*/
/*     <!-- SmartMenus jQuery Bootstrap Addon CSS -->*/
/*     <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">*/
/*     <!-- Product view slider -->*/
/*     <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">*/
/*     <!-- slick slider -->*/
/*     <link rel="stylesheet" type="text/css" href="css/slick.css">*/
/*     <!-- price picker slider -->*/
/*     <link rel="stylesheet" type="text/css" href="css/nouislider.css">*/
/*     <!-- Theme color -->*/
/*     <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">*/
/*     <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->*/
/*     <!-- Top Slider CSS -->*/
/*     <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">*/
/* */
/*     <!-- Main style sheet -->*/
/*     <link href="css/style.css" rel="stylesheet">*/
/* */
/*     <!-- Google Font -->*/
/*     <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>*/
/*     <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/* </head>*/
/* <body>*/
/* <script>*/
/*     window.fbAsyncInit = function() {*/
/*         FB.init({*/
/*             appId      : 'your-app-id',*/
/*             xfbml      : true,*/
/*             version    : 'v2.5'*/
/*         });*/
/*     };*/
/* */
/*     (function(d, s, id){*/
/*         var js, fjs = d.getElementsByTagName(s)[0];*/
/*         if (d.getElementById(id)) {return;}*/
/*         js = d.createElement(s); js.id = id;*/
/*         js.src = "//connect.facebook.net/en_US/sdk.js";*/
/*         fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));*/
/* </script>*/
/* <div class="container">*/
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"*/
/*                         data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="/">Shop.ll</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="create">Create</a></li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"*/
/*                            aria-expanded="false">Products type<span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">One more separated link</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <form class="navbar-form navbar-left" role="search">*/
/*                     <div class="form-group">*/
/*                         <input type="text" class="form-control" placeholder="Search">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-default">Submit</button>*/
/*                 </form>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/*     {% block body %}{% endblock %}*/
/*     {% block javascripts %}{% endblock %}*/
/* </div>*/
/* */
/* <footer id="aa-footer">*/
/*     <!-- footer bottom -->*/
/*     <div class="aa-footer-top">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="aa-footer-top-area">*/
/*                         <div class="row">*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="aa-footer-widget">*/
/*                                     <h3>Main Menu</h3>*/
/*                                     <ul class="aa-footer-nav">*/
/*                                         <li><a href="#">Home</a></li>*/
/*                                         <li><a href="#">Our Services</a></li>*/
/*                                         <li><a href="#">Our Products</a></li>*/
/*                                         <li><a href="#">About Us</a></li>*/
/*                                         <li><a href="#">Contact Us</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="aa-footer-widget">*/
/*                                     <div class="aa-footer-widget">*/
/*                                         <h3>Knowledge Base</h3>*/
/*                                         <ul class="aa-footer-nav">*/
/*                                             <li><a href="#">Delivery</a></li>*/
/*                                             <li><a href="#">Returns</a></li>*/
/*                                             <li><a href="#">Services</a></li>*/
/*                                             <li><a href="#">Discount</a></li>*/
/*                                             <li><a href="#">Special Offer</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="aa-footer-widget">*/
/*                                     <div class="aa-footer-widget">*/
/*                                         <h3>Useful Links</h3>*/
/*                                         <ul class="aa-footer-nav">*/
/*                                             <li><a href="#">Site Map</a></li>*/
/*                                             <li><a href="#">Search</a></li>*/
/*                                             <li><a href="#">Advanced Search</a></li>*/
/*                                             <li><a href="#">Suppliers</a></li>*/
/*                                             <li><a href="#">FAQ</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="aa-footer-widget">*/
/*                                     <div class="aa-footer-widget">*/
/*                                         <h3>Contact Us</h3>*/
/*                                         <address>*/
/*                                             <p> 25 Astor Pl, NY 10003, USA</p>*/
/*                                             <p><span class="fa fa-phone"></span>+1 212-982-4589</p>*/
/*                                             <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>*/
/*                                         </address>*/
/*                                         <div class="aa-footer-social">*/
/*                                             <a href="#"><span class="fa fa-facebook"></span></a>*/
/*                                             <a href="#"><span class="fa fa-twitter"></span></a>*/
/*                                             <a href="#"><span class="fa fa-google-plus"></span></a>*/
/*                                             <a href="#"><span class="fa fa-youtube"></span></a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- footer-bottom -->*/
/*     <div class="aa-footer-bottom">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="aa-footer-bottom-area">*/
/*                         <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>*/
/*                         <div class="aa-footer-payment">*/
/*                             <span class="fa fa-cc-mastercard"></span>*/
/*                             <span class="fa fa-cc-visa"></span>*/
/*                             <span class="fa fa-paypal"></span>*/
/*                             <span class="fa fa-cc-discover"></span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/* <!-- SmartMenus jQuery plugin -->*/
/* <script type="text/javascript" src="js/jquery.smartmenus.js"></script>*/
/* <!-- SmartMenus jQuery Bootstrap Addon -->*/
/* <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>*/
/* <!-- To Slider JS -->*/
/* <script src="js/sequence.js"></script>*/
/* <script src="js/sequence-theme.modern-slide-in.js"></script>*/
/* <!-- Product view slider -->*/
/* <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>*/
/* <script type="text/javascript" src="js/jquery.simpleLens.js"></script>*/
/* <!-- slick slider -->*/
/* <script type="text/javascript" src="js/slick.js"></script>*/
/* <!-- Price picker slider -->*/
/* <script type="text/javascript" src="js/nouislider.js"></script>*/
/* <!-- Custom js -->*/
/* <script src="js/custom.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
