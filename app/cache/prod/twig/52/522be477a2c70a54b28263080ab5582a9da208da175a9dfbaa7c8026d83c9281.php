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
        $__internal_1423cb22c82a1dc4226f6b75d4d66736aa939e08e96100f4a05bbf05f668e0ba = $this->env->getExtension("native_profiler");
        $__internal_1423cb22c82a1dc4226f6b75d4d66736aa939e08e96100f4a05bbf05f668e0ba->enter($__internal_1423cb22c82a1dc4226f6b75d4d66736aa939e08e96100f4a05bbf05f668e0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1423cb22c82a1dc4226f6b75d4d66736aa939e08e96100f4a05bbf05f668e0ba->leave($__internal_1423cb22c82a1dc4226f6b75d4d66736aa939e08e96100f4a05bbf05f668e0ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7658509ba04ae021d6d2046966b7a088c0de4dbcddd7067481a98c5734bfaf5f = $this->env->getExtension("native_profiler");
        $__internal_7658509ba04ae021d6d2046966b7a088c0de4dbcddd7067481a98c5734bfaf5f->enter($__internal_7658509ba04ae021d6d2046966b7a088c0de4dbcddd7067481a98c5734bfaf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7658509ba04ae021d6d2046966b7a088c0de4dbcddd7067481a98c5734bfaf5f->leave($__internal_7658509ba04ae021d6d2046966b7a088c0de4dbcddd7067481a98c5734bfaf5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f24aa760db465c673f22da1161e2678691ab11fe368165fd3f4cf1a3b0fc0412 = $this->env->getExtension("native_profiler");
        $__internal_f24aa760db465c673f22da1161e2678691ab11fe368165fd3f4cf1a3b0fc0412->enter($__internal_f24aa760db465c673f22da1161e2678691ab11fe368165fd3f4cf1a3b0fc0412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f24aa760db465c673f22da1161e2678691ab11fe368165fd3f4cf1a3b0fc0412->leave($__internal_f24aa760db465c673f22da1161e2678691ab11fe368165fd3f4cf1a3b0fc0412_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cc58f95ff5dd68ee0db0b5b97b6bd881d5d59bc64fb53f350d5f6f6559403cc = $this->env->getExtension("native_profiler");
        $__internal_4cc58f95ff5dd68ee0db0b5b97b6bd881d5d59bc64fb53f350d5f6f6559403cc->enter($__internal_4cc58f95ff5dd68ee0db0b5b97b6bd881d5d59bc64fb53f350d5f6f6559403cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4cc58f95ff5dd68ee0db0b5b97b6bd881d5d59bc64fb53f350d5f6f6559403cc->leave($__internal_4cc58f95ff5dd68ee0db0b5b97b6bd881d5d59bc64fb53f350d5f6f6559403cc_prof);

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
