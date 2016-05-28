<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d502d6dae1c174d44b456ece51bd1b07f69207da517b19edc38f6a566f4a9b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fee34cc1b5b7722b2ed937aa7ee1fa93881336c624d6dbf6c47e31f9e4127a55 = $this->env->getExtension("native_profiler");
        $__internal_fee34cc1b5b7722b2ed937aa7ee1fa93881336c624d6dbf6c47e31f9e4127a55->enter($__internal_fee34cc1b5b7722b2ed937aa7ee1fa93881336c624d6dbf6c47e31f9e4127a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee34cc1b5b7722b2ed937aa7ee1fa93881336c624d6dbf6c47e31f9e4127a55->leave($__internal_fee34cc1b5b7722b2ed937aa7ee1fa93881336c624d6dbf6c47e31f9e4127a55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a42b757f12b5637a73a2f7498b24f3374ee53d80c43ee699c01e03d036d66371 = $this->env->getExtension("native_profiler");
        $__internal_a42b757f12b5637a73a2f7498b24f3374ee53d80c43ee699c01e03d036d66371->enter($__internal_a42b757f12b5637a73a2f7498b24f3374ee53d80c43ee699c01e03d036d66371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a42b757f12b5637a73a2f7498b24f3374ee53d80c43ee699c01e03d036d66371->leave($__internal_a42b757f12b5637a73a2f7498b24f3374ee53d80c43ee699c01e03d036d66371_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af53abadfbfb2dda99de010713dd7a0430e9d5c7b32454c7a16c822698184787 = $this->env->getExtension("native_profiler");
        $__internal_af53abadfbfb2dda99de010713dd7a0430e9d5c7b32454c7a16c822698184787->enter($__internal_af53abadfbfb2dda99de010713dd7a0430e9d5c7b32454c7a16c822698184787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af53abadfbfb2dda99de010713dd7a0430e9d5c7b32454c7a16c822698184787->leave($__internal_af53abadfbfb2dda99de010713dd7a0430e9d5c7b32454c7a16c822698184787_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b89bdb951b9730bedeff9662730b0bb1c7477a0d2490bc613deaab7832a5a63c = $this->env->getExtension("native_profiler");
        $__internal_b89bdb951b9730bedeff9662730b0bb1c7477a0d2490bc613deaab7832a5a63c->enter($__internal_b89bdb951b9730bedeff9662730b0bb1c7477a0d2490bc613deaab7832a5a63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b89bdb951b9730bedeff9662730b0bb1c7477a0d2490bc613deaab7832a5a63c->leave($__internal_b89bdb951b9730bedeff9662730b0bb1c7477a0d2490bc613deaab7832a5a63c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
