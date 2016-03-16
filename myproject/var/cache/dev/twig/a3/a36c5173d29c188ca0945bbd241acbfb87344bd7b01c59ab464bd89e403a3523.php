<?php

/* ProductBundle:Default:product_form.html.twig */
class __TwigTemplate_ddcd23b92bebab271cae298cdc8e8a5721e90d29e3185883a0383cc1b97dba22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Default:product_form.html.twig", 1);
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
        $__internal_f8f5485f2fb6f65e2cc5c7a336d24221b8cc63c30c3f616c06180ab41bf19b2e = $this->env->getExtension("native_profiler");
        $__internal_f8f5485f2fb6f65e2cc5c7a336d24221b8cc63c30c3f616c06180ab41bf19b2e->enter($__internal_f8f5485f2fb6f65e2cc5c7a336d24221b8cc63c30c3f616c06180ab41bf19b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:product_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f5485f2fb6f65e2cc5c7a336d24221b8cc63c30c3f616c06180ab41bf19b2e->leave($__internal_f8f5485f2fb6f65e2cc5c7a336d24221b8cc63c30c3f616c06180ab41bf19b2e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8bb10f315a7c54e8ee227c5a5b53b5a58125ddfc447778d02bcd5189eadfcea = $this->env->getExtension("native_profiler");
        $__internal_f8bb10f315a7c54e8ee227c5a5b53b5a58125ddfc447778d02bcd5189eadfcea->enter($__internal_f8bb10f315a7c54e8ee227c5a5b53b5a58125ddfc447778d02bcd5189eadfcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\" value=\"Add product\" /> 
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<a href=";
        // line 7
        echo $this->env->getExtension('routing')->getPath("product_homepage");
        echo ">Cancel</a>
";
        
        $__internal_f8bb10f315a7c54e8ee227c5a5b53b5a58125ddfc447778d02bcd5189eadfcea->leave($__internal_f8bb10f315a7c54e8ee227c5a5b53b5a58125ddfc447778d02bcd5189eadfcea_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:product_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  49 => 6,  44 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* <input type="submit" value="Add product" /> */
/* {{ form_end(form) }}*/
/* <a href={{ path('product_homepage') }}>Cancel</a>*/
/* {% endblock %}*/
/* */
