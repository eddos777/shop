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
        $__internal_08689ad24b1feb16056ba7dce375bc1a9a2a84c0ceb7ada1dce930bd15239446 = $this->env->getExtension("native_profiler");
        $__internal_08689ad24b1feb16056ba7dce375bc1a9a2a84c0ceb7ada1dce930bd15239446->enter($__internal_08689ad24b1feb16056ba7dce375bc1a9a2a84c0ceb7ada1dce930bd15239446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\"/>
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
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === '1601390663506352') {
            // Logged into your app and Facebook.
            testAPI();
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '{1601390663506352}',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.6' // use version 2.2
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/en_US/sdk.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function (response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
        });
    }
</script>
<div
        class=\"fb-like\"
        data-share=\"true\"
        data-width=\"450\"
        data-show-faces=\"true\">
</div>
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
                    <li><a href=\"login\">Login</a></li>
                    <li><a href=\"register\">Register</a></li>
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
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
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
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 264
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
        
        $__internal_08689ad24b1feb16056ba7dce375bc1a9a2a84c0ceb7ada1dce930bd15239446->leave($__internal_08689ad24b1feb16056ba7dce375bc1a9a2a84c0ceb7ada1dce930bd15239446_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce248badd10f63ecace31cf5b62887fbfef1f1e60d1fd05149fb941ac9ef9724 = $this->env->getExtension("native_profiler");
        $__internal_ce248badd10f63ecace31cf5b62887fbfef1f1e60d1fd05149fb941ac9ef9724->enter($__internal_ce248badd10f63ecace31cf5b62887fbfef1f1e60d1fd05149fb941ac9ef9724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_ce248badd10f63ecace31cf5b62887fbfef1f1e60d1fd05149fb941ac9ef9724->leave($__internal_ce248badd10f63ecace31cf5b62887fbfef1f1e60d1fd05149fb941ac9ef9724_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da06e60da9630099130319d7ed34470be6d418f236f53d6974b87aaa3c434cc5 = $this->env->getExtension("native_profiler");
        $__internal_da06e60da9630099130319d7ed34470be6d418f236f53d6974b87aaa3c434cc5->enter($__internal_da06e60da9630099130319d7ed34470be6d418f236f53d6974b87aaa3c434cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da06e60da9630099130319d7ed34470be6d418f236f53d6974b87aaa3c434cc5->leave($__internal_da06e60da9630099130319d7ed34470be6d418f236f53d6974b87aaa3c434cc5_prof);

    }

    // line 167
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9a1c49af9583c57657a2f46ae4014c3cd1d732abb969ff076038cdf096c7c0a = $this->env->getExtension("native_profiler");
        $__internal_b9a1c49af9583c57657a2f46ae4014c3cd1d732abb969ff076038cdf096c7c0a->enter($__internal_b9a1c49af9583c57657a2f46ae4014c3cd1d732abb969ff076038cdf096c7c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9a1c49af9583c57657a2f46ae4014c3cd1d732abb969ff076038cdf096c7c0a->leave($__internal_b9a1c49af9583c57657a2f46ae4014c3cd1d732abb969ff076038cdf096c7c0a_prof);

    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4c616b28672068907d02cb6fd692ca2f88aaa0ad4c712d733b19afade75a10b = $this->env->getExtension("native_profiler");
        $__internal_f4c616b28672068907d02cb6fd692ca2f88aaa0ad4c712d733b19afade75a10b->enter($__internal_f4c616b28672068907d02cb6fd692ca2f88aaa0ad4c712d733b19afade75a10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4c616b28672068907d02cb6fd692ca2f88aaa0ad4c712d733b19afade75a10b->leave($__internal_f4c616b28672068907d02cb6fd692ca2f88aaa0ad4c712d733b19afade75a10b_prof);

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
        return array (  373 => 168,  362 => 167,  351 => 6,  339 => 5,  311 => 264,  307 => 263,  211 => 169,  208 => 168,  206 => 167,  70 => 34,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Admin{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>*/
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
/*     // This is called with the results from from FB.getLoginStatus().*/
/*     function statusChangeCallback(response) {*/
/*         console.log('statusChangeCallback');*/
/*         console.log(response);*/
/*         // The response object is returned with a status field that lets the*/
/*         // app know the current login status of the person.*/
/*         // Full docs on the response object can be found in the documentation*/
/*         // for FB.getLoginStatus().*/
/*         if (response.status === '1601390663506352') {*/
/*             // Logged into your app and Facebook.*/
/*             testAPI();*/
/*         } else if (response.status === 'not_authorized') {*/
/*             // The person is logged into Facebook, but not your app.*/
/*             document.getElementById('status').innerHTML = 'Please log ' +*/
/*                     'into this app.';*/
/*         } else {*/
/*             // The person is not logged into Facebook, so we're not sure if*/
/*             // they are logged into this app or not.*/
/*             document.getElementById('status').innerHTML = 'Please log ' +*/
/*                     'into Facebook.';*/
/*         }*/
/*     }*/
/* */
/*     // This function is called when someone finishes with the Login*/
/*     // Button.  See the onlogin handler attached to it in the sample*/
/*     // code below.*/
/*     function checkLoginState() {*/
/*         FB.getLoginStatus(function(response) {*/
/*             statusChangeCallback(response);*/
/*         });*/
/*     }*/
/* */
/*     window.fbAsyncInit = function() {*/
/*         FB.init({*/
/*             appId      : '{1601390663506352}',*/
/*             cookie     : true,  // enable cookies to allow the server to access*/
/*                                 // the session*/
/*             xfbml      : true,  // parse social plugins on this page*/
/*             version    : 'v2.6' // use version 2.2*/
/*         });*/
/* */
/*         // Now that we've initialized the JavaScript SDK, we call*/
/*         // FB.getLoginStatus().  This function gets the state of the*/
/*         // person visiting this page and can return one of three states to*/
/*         // the callback you provide.  They can be:*/
/*         //*/
/*         // 1. Logged into your app ('connected')*/
/*         // 2. Logged into Facebook, but not your app ('not_authorized')*/
/*         // 3. Not logged into Facebook and can't tell if they are logged into*/
/*         //    your app or not.*/
/*         //*/
/*         // These three cases are handled in the callback function.*/
/* */
/*         FB.getLoginStatus(function(response) {*/
/*             statusChangeCallback(response);*/
/*         });*/
/* */
/*     };*/
/* */
/*     // Load the SDK asynchronously*/
/*     (function(d, s, id) {*/
/*         var js, fjs = d.getElementsByTagName(s)[0];*/
/*         if (d.getElementById(id)) return;*/
/*         js = d.createElement(s); js.id = id;*/
/*         js.src = "//connect.facebook.net/en_US/sdk.js";*/
/*         fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));*/
/* */
/*     // Here we run a very simple test of the Graph API after login is*/
/*     // successful.  See statusChangeCallback() for when this call is made.*/
/*     function testAPI() {*/
/*         console.log('Welcome!  Fetching your information.... ');*/
/*         FB.api('/me', function (response) {*/
/*             console.log('Successful login for: ' + response.name);*/
/*             document.getElementById('status').innerHTML =*/
/*                     'Thanks for logging in, ' + response.name + '!';*/
/*         });*/
/*     }*/
/* </script>*/
/* <div*/
/*         class="fb-like"*/
/*         data-share="true"*/
/*         data-width="450"*/
/*         data-show-faces="true">*/
/* </div>*/
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
/*                     <li><a href="login">Login</a></li>*/
/*                     <li><a href="register">Register</a></li>*/
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
