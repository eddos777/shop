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
        $__internal_5cedac8806b692b9e8dfe6082fad628120e5651410658cd7353461cf1a775905 = $this->env->getExtension("native_profiler");
        $__internal_5cedac8806b692b9e8dfe6082fad628120e5651410658cd7353461cf1a775905->enter($__internal_5cedac8806b692b9e8dfe6082fad628120e5651410658cd7353461cf1a775905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cedac8806b692b9e8dfe6082fad628120e5651410658cd7353461cf1a775905->leave($__internal_5cedac8806b692b9e8dfe6082fad628120e5651410658cd7353461cf1a775905_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b965fe0818d1df2f20e94e1aadebae8adf183701f4a09b9c90628bf4bcc273d5 = $this->env->getExtension("native_profiler");
        $__internal_b965fe0818d1df2f20e94e1aadebae8adf183701f4a09b9c90628bf4bcc273d5->enter($__internal_b965fe0818d1df2f20e94e1aadebae8adf183701f4a09b9c90628bf4bcc273d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b965fe0818d1df2f20e94e1aadebae8adf183701f4a09b9c90628bf4bcc273d5->leave($__internal_b965fe0818d1df2f20e94e1aadebae8adf183701f4a09b9c90628bf4bcc273d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e15206b4287ddd8156f21d35be37438696953f99fbf24ccaaaf3c25bd9ee6ab = $this->env->getExtension("native_profiler");
        $__internal_1e15206b4287ddd8156f21d35be37438696953f99fbf24ccaaaf3c25bd9ee6ab->enter($__internal_1e15206b4287ddd8156f21d35be37438696953f99fbf24ccaaaf3c25bd9ee6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e15206b4287ddd8156f21d35be37438696953f99fbf24ccaaaf3c25bd9ee6ab->leave($__internal_1e15206b4287ddd8156f21d35be37438696953f99fbf24ccaaaf3c25bd9ee6ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e00b8d5b9933f8402e3c7627b6b5f1bf81ca76dae1e9929bc24d1d669bb7c1 = $this->env->getExtension("native_profiler");
        $__internal_84e00b8d5b9933f8402e3c7627b6b5f1bf81ca76dae1e9929bc24d1d669bb7c1->enter($__internal_84e00b8d5b9933f8402e3c7627b6b5f1bf81ca76dae1e9929bc24d1d669bb7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_84e00b8d5b9933f8402e3c7627b6b5f1bf81ca76dae1e9929bc24d1d669bb7c1->leave($__internal_84e00b8d5b9933f8402e3c7627b6b5f1bf81ca76dae1e9929bc24d1d669bb7c1_prof);

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
