<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ff2e6245373fec9a8f524b3294c953cdf2f2bdb47d22937dbf0474c4363b51bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edaff2ba7e4af619eae02549d02cb756410f272840a618267a923120d7179f07 = $this->env->getExtension("native_profiler");
        $__internal_edaff2ba7e4af619eae02549d02cb756410f272840a618267a923120d7179f07->enter($__internal_edaff2ba7e4af619eae02549d02cb756410f272840a618267a923120d7179f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edaff2ba7e4af619eae02549d02cb756410f272840a618267a923120d7179f07->leave($__internal_edaff2ba7e4af619eae02549d02cb756410f272840a618267a923120d7179f07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_267f70f79aa6a648b8f54a1add8f99620ea8d588c0464494afbbcb15af480e2d = $this->env->getExtension("native_profiler");
        $__internal_267f70f79aa6a648b8f54a1add8f99620ea8d588c0464494afbbcb15af480e2d->enter($__internal_267f70f79aa6a648b8f54a1add8f99620ea8d588c0464494afbbcb15af480e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_267f70f79aa6a648b8f54a1add8f99620ea8d588c0464494afbbcb15af480e2d->leave($__internal_267f70f79aa6a648b8f54a1add8f99620ea8d588c0464494afbbcb15af480e2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9e23a6afb0b353faa3c2b7dc009d340422bff51db5670b475719a7536af145f = $this->env->getExtension("native_profiler");
        $__internal_b9e23a6afb0b353faa3c2b7dc009d340422bff51db5670b475719a7536af145f->enter($__internal_b9e23a6afb0b353faa3c2b7dc009d340422bff51db5670b475719a7536af145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9e23a6afb0b353faa3c2b7dc009d340422bff51db5670b475719a7536af145f->leave($__internal_b9e23a6afb0b353faa3c2b7dc009d340422bff51db5670b475719a7536af145f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a1738c9ecca9256ed769c974fb72d91de756427310c356d025adfbbab7780c8 = $this->env->getExtension("native_profiler");
        $__internal_7a1738c9ecca9256ed769c974fb72d91de756427310c356d025adfbbab7780c8->enter($__internal_7a1738c9ecca9256ed769c974fb72d91de756427310c356d025adfbbab7780c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7a1738c9ecca9256ed769c974fb72d91de756427310c356d025adfbbab7780c8->leave($__internal_7a1738c9ecca9256ed769c974fb72d91de756427310c356d025adfbbab7780c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
