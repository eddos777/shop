<?php

/* ShopBundle:site:index.html.twig */
class __TwigTemplate_4f1a375f1ab633426be9ef8a7aec5457ecbd053f8cf32850487693414cbed2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:site:index.html.twig", 1);
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
        // line 6
        echo "    <div class=\"count\">
       ";
        // line 8
        echo "    </div>
    <table class=\"table table-condensed\">
        <tr>
            ";
        // line 12
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Id", "p.id");
        echo "</th>
            <th";
        // line 13
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "isSorted", array(0 => "p.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">
                ";
        // line 14
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Name", "p.name");
        echo "</th>
            <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Price", array(0 => "Price", 1 => "p.price"));
        echo "</th>
            <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Count", array(0 => "Count", 1 => "p.count"));
        echo "</th>
            <th>Actions</th>
        </tr>

        ";
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "count", array()), "html", null, true);
            echo "</td>
                <td><a class=\"glyphicon glyphicon-eye-open\" href=\"/view?id=";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" role=\"button\"></a>
                    <a class=\"glyphicon glyphicon-pencil\" href=\"/update?id=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" role=\"button\"></a>
                    <a class=\"glyphicon glyphicon-trash\" href=\"/delete?id=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" role=\"button\"></a>
                </td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </table>
    ";
        // line 35
        echo "    <div class=\"navigation\">
        ";
        // line 36
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShopBundle:site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 36,  138 => 35,  135 => 33,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  86 => 22,  68 => 21,  61 => 16,  57 => 15,  53 => 14,  47 => 13,  42 => 12,  37 => 8,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {# total items count #}*/
/*     <div class="count">*/
/*        {# {{ pagination.getTotalItemCount }} #}*/
/*     </div>*/
/*     <table class="table table-condensed">*/
/*         <tr>*/
/*             {# sorting of properties based on query components #}*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Id', 'p.id') }}</th>*/
/*             <th{% if pagination.isSorted('p.name') %} class="sorted"{% endif %}>*/
/*                 {{ knp_pagination_sortable(pagination, 'Name', 'p.name') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Price', ['Price', 'p.price']) }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Count', ['Count', 'p.count']) }}</th>*/
/*             <th>Actions</th>*/
/*         </tr>*/
/* */
/*         {# table body #}*/
/*         {% for product in pagination %}*/
/*             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                 <td>{{ product.id }}</td>*/
/*                 <td>{{ product.name }}</td>*/
/*                 <td>{{ product.price }}</td>*/
/*                 <td>{{ product.count }}</td>*/
/*                 <td><a class="glyphicon glyphicon-eye-open" href="/view?id={{ product.id }}" role="button"></a>*/
/*                     <a class="glyphicon glyphicon-pencil" href="/update?id={{ product.id }}" role="button"></a>*/
/*                     <a class="glyphicon glyphicon-trash" href="/delete?id={{ product.id }}" role="button"></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     {# display navigation #}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
