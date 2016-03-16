<?php

/* ProductBundle:Default:index.html.twig */
class __TwigTemplate_a6f81dc1b1f7aa5173fe867e2a190bc5b2ed0f81f4e9ed7dfa39863f68b3f1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b00fbc3f75491a244f6863bd799253497d683d74c4987896f551ba68c6c5b0 = $this->env->getExtension("native_profiler");
        $__internal_56b00fbc3f75491a244f6863bd799253497d683d74c4987896f551ba68c6c5b0->enter($__internal_56b00fbc3f75491a244f6863bd799253497d683d74c4987896f551ba68c6c5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b00fbc3f75491a244f6863bd799253497d683d74c4987896f551ba68c6c5b0->leave($__internal_56b00fbc3f75491a244f6863bd799253497d683d74c4987896f551ba68c6c5b0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_864463f2142a238ba0e7e0854b669e41f4b63984617461f8ef757e32bb9df4cc = $this->env->getExtension("native_profiler");
        $__internal_864463f2142a238ba0e7e0854b669e41f4b63984617461f8ef757e32bb9df4cc->enter($__internal_864463f2142a238ba0e7e0854b669e41f4b63984617461f8ef757e32bb9df4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<table border=1>
<tr><th>Name</th><th>Price</th><th>Description</th></tr>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "<tr>
<td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</td>
<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
            echo "</td>
<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</td>
<td><a href=";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo ">Edit</a></td>
<td><a href=";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "”>Del</a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<table>
<a href=";
        // line 15
        echo $this->env->getExtension('routing')->getPath("product_add");
        echo ">Add product</a>
";
        
        $__internal_864463f2142a238ba0e7e0854b669e41f4b63984617461f8ef757e32bb9df4cc->leave($__internal_864463f2142a238ba0e7e0854b669e41f4b63984617461f8ef757e32bb9df4cc_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  76 => 14,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* <table border=1>*/
/* <tr><th>Name</th><th>Price</th><th>Description</th></tr>*/
/* {% for p in products %}*/
/* <tr>*/
/* <td>{{ p.name }}</td>*/
/* <td>{{ p.price }}</td>*/
/* <td>{{ p.description }}</td>*/
/* <td><a href={{path('product_edit',{'id':p.id} ) }}>Edit</a></td>*/
/* <td><a href={{path('product_delete',{'id':p.id} ) }}”>Del</a></td>*/
/* </tr>*/
/* {% endfor %}*/
/* <table>*/
/* <a href={{ path('product_add') }}>Add product</a>*/
/* {% endblock %}*/
/* */
