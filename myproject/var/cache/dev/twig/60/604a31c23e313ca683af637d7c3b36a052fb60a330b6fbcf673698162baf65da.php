<?php

/* ::base.html.twig */
class __TwigTemplate_24b574afef2f3c5bf4a4301904a8b3e597935e718918477124a30dc46110400c extends Twig_Template
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
        $__internal_945b7b092c3268b98cbe6321781eaf36e1083cce8401a38f3c6a7e7ff49ce3d1 = $this->env->getExtension("native_profiler");
        $__internal_945b7b092c3268b98cbe6321781eaf36e1083cce8401a38f3c6a7e7ff49ce3d1->enter($__internal_945b7b092c3268b98cbe6321781eaf36e1083cce8401a38f3c6a7e7ff49ce3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_945b7b092c3268b98cbe6321781eaf36e1083cce8401a38f3c6a7e7ff49ce3d1->leave($__internal_945b7b092c3268b98cbe6321781eaf36e1083cce8401a38f3c6a7e7ff49ce3d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a44fd6b4b4916a24cb81f881817068e2c5ccad06e43efc038417fe0eb2df059c = $this->env->getExtension("native_profiler");
        $__internal_a44fd6b4b4916a24cb81f881817068e2c5ccad06e43efc038417fe0eb2df059c->enter($__internal_a44fd6b4b4916a24cb81f881817068e2c5ccad06e43efc038417fe0eb2df059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a44fd6b4b4916a24cb81f881817068e2c5ccad06e43efc038417fe0eb2df059c->leave($__internal_a44fd6b4b4916a24cb81f881817068e2c5ccad06e43efc038417fe0eb2df059c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e88576ebcd6c0928d14307991966410b68a7262ed579fe1c4b89637b6898c02 = $this->env->getExtension("native_profiler");
        $__internal_6e88576ebcd6c0928d14307991966410b68a7262ed579fe1c4b89637b6898c02->enter($__internal_6e88576ebcd6c0928d14307991966410b68a7262ed579fe1c4b89637b6898c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e88576ebcd6c0928d14307991966410b68a7262ed579fe1c4b89637b6898c02->leave($__internal_6e88576ebcd6c0928d14307991966410b68a7262ed579fe1c4b89637b6898c02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1673bb79509eb1f66e60db0ee4e10147c9615daf6590d0d22ff05112c82a64b = $this->env->getExtension("native_profiler");
        $__internal_c1673bb79509eb1f66e60db0ee4e10147c9615daf6590d0d22ff05112c82a64b->enter($__internal_c1673bb79509eb1f66e60db0ee4e10147c9615daf6590d0d22ff05112c82a64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1673bb79509eb1f66e60db0ee4e10147c9615daf6590d0d22ff05112c82a64b->leave($__internal_c1673bb79509eb1f66e60db0ee4e10147c9615daf6590d0d22ff05112c82a64b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ae29325dc35f330ad1b0b21aaa65a24cd694c82b900c86a6974c8820588f121 = $this->env->getExtension("native_profiler");
        $__internal_3ae29325dc35f330ad1b0b21aaa65a24cd694c82b900c86a6974c8820588f121->enter($__internal_3ae29325dc35f330ad1b0b21aaa65a24cd694c82b900c86a6974c8820588f121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ae29325dc35f330ad1b0b21aaa65a24cd694c82b900c86a6974c8820588f121->leave($__internal_3ae29325dc35f330ad1b0b21aaa65a24cd694c82b900c86a6974c8820588f121_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
