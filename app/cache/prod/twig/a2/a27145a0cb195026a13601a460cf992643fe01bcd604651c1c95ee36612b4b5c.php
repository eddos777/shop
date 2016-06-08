<?php

/* ShopBundle:site:create.html.twig */
class __TwigTemplate_5cd4f2229f279f04680159573957c251759a9525ea58be11d073a1b8c464606f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:site:create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <select>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" name=\"category_id\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </select>
    <select>
        <option value=\"1\" name=\"type_id\">fewjfkejkl</option>
        ";
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_length_filter($this->env, (isset($context["types"]) ? $context["types"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"type_id\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["types"]) ? $context["types"] : null), $context["i"], array(), "array"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </select>

    <input type=\"submit\"/>
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ShopBundle:site:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  79 => 18,  68 => 16,  63 => 15,  58 => 11,  47 => 9,  43 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     <select>*/
/*         {% for category in categories %}*/
/*             <option value="{{ category.id }}" name="category_id">{{ category.name }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/*     <select>*/
/*         <option value="1" name="type_id">fewjfkejkl</option>*/
/*         {#TODO#}*/
/*         {% for i in types|length %}*/
/*             <option value="{{ i }}" name="type_id">{{ types[i] }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* */
/*     <input type="submit"/>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
