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
        $__internal_971f03e7b0e81e7d445716635bab06ad955d737e3b4db6047d11d152a07e89cb = $this->env->getExtension("native_profiler");
        $__internal_971f03e7b0e81e7d445716635bab06ad955d737e3b4db6047d11d152a07e89cb->enter($__internal_971f03e7b0e81e7d445716635bab06ad955d737e3b4db6047d11d152a07e89cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
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
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 221
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
        
        $__internal_971f03e7b0e81e7d445716635bab06ad955d737e3b4db6047d11d152a07e89cb->leave($__internal_971f03e7b0e81e7d445716635bab06ad955d737e3b4db6047d11d152a07e89cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9df536e96db1d1755ba9947ae2bc48a49d81c3cbacc4478bc0f88f7134b98e6f = $this->env->getExtension("native_profiler");
        $__internal_9df536e96db1d1755ba9947ae2bc48a49d81c3cbacc4478bc0f88f7134b98e6f->enter($__internal_9df536e96db1d1755ba9947ae2bc48a49d81c3cbacc4478bc0f88f7134b98e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_9df536e96db1d1755ba9947ae2bc48a49d81c3cbacc4478bc0f88f7134b98e6f->leave($__internal_9df536e96db1d1755ba9947ae2bc48a49d81c3cbacc4478bc0f88f7134b98e6f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a74d491fe8194f7c97f1b2e900011e583fe09af4feb7b817180b024b7079cae = $this->env->getExtension("native_profiler");
        $__internal_7a74d491fe8194f7c97f1b2e900011e583fe09af4feb7b817180b024b7079cae->enter($__internal_7a74d491fe8194f7c97f1b2e900011e583fe09af4feb7b817180b024b7079cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a74d491fe8194f7c97f1b2e900011e583fe09af4feb7b817180b024b7079cae->leave($__internal_7a74d491fe8194f7c97f1b2e900011e583fe09af4feb7b817180b024b7079cae_prof);

    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        $__internal_db51660ec246df89255285f74650988b95768c7efcd8685ac01af76b51ff44ef = $this->env->getExtension("native_profiler");
        $__internal_db51660ec246df89255285f74650988b95768c7efcd8685ac01af76b51ff44ef->enter($__internal_db51660ec246df89255285f74650988b95768c7efcd8685ac01af76b51ff44ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db51660ec246df89255285f74650988b95768c7efcd8685ac01af76b51ff44ef->leave($__internal_db51660ec246df89255285f74650988b95768c7efcd8685ac01af76b51ff44ef_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a9bd093df92bd363b6a82429c737df78a1ea9992e591043aa15bbbc3fdadef8 = $this->env->getExtension("native_profiler");
        $__internal_4a9bd093df92bd363b6a82429c737df78a1ea9992e591043aa15bbbc3fdadef8->enter($__internal_4a9bd093df92bd363b6a82429c737df78a1ea9992e591043aa15bbbc3fdadef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a9bd093df92bd363b6a82429c737df78a1ea9992e591043aa15bbbc3fdadef8->leave($__internal_4a9bd093df92bd363b6a82429c737df78a1ea9992e591043aa15bbbc3fdadef8_prof);

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
        return array (  330 => 125,  319 => 124,  308 => 6,  296 => 5,  268 => 221,  264 => 220,  168 => 126,  165 => 125,  163 => 124,  70 => 34,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
