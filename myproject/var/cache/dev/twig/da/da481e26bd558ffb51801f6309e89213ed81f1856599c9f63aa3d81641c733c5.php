<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc3495feab993915f8837883a5e1fa8be46664b7f39320559d6a1bc9de217db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad21d92bebb44f41a4f4a076f82c98e3d81061b8c0209fddb9614b49acd8b803 = $this->env->getExtension("native_profiler");
        $__internal_ad21d92bebb44f41a4f4a076f82c98e3d81061b8c0209fddb9614b49acd8b803->enter($__internal_ad21d92bebb44f41a4f4a076f82c98e3d81061b8c0209fddb9614b49acd8b803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad21d92bebb44f41a4f4a076f82c98e3d81061b8c0209fddb9614b49acd8b803->leave($__internal_ad21d92bebb44f41a4f4a076f82c98e3d81061b8c0209fddb9614b49acd8b803_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cb1292cc39bba8898fffd98bb9d01b83337eb2831122fc6c74c4a8ba8bc5d32 = $this->env->getExtension("native_profiler");
        $__internal_5cb1292cc39bba8898fffd98bb9d01b83337eb2831122fc6c74c4a8ba8bc5d32->enter($__internal_5cb1292cc39bba8898fffd98bb9d01b83337eb2831122fc6c74c4a8ba8bc5d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5cb1292cc39bba8898fffd98bb9d01b83337eb2831122fc6c74c4a8ba8bc5d32->leave($__internal_5cb1292cc39bba8898fffd98bb9d01b83337eb2831122fc6c74c4a8ba8bc5d32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed67e966f37ef1e508238c701aa590a345944c0cb60ac874b5d19783a6c07bba = $this->env->getExtension("native_profiler");
        $__internal_ed67e966f37ef1e508238c701aa590a345944c0cb60ac874b5d19783a6c07bba->enter($__internal_ed67e966f37ef1e508238c701aa590a345944c0cb60ac874b5d19783a6c07bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed67e966f37ef1e508238c701aa590a345944c0cb60ac874b5d19783a6c07bba->leave($__internal_ed67e966f37ef1e508238c701aa590a345944c0cb60ac874b5d19783a6c07bba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84493acf03f5b254a2d14403bc14f5f306a592e093d379d788b31ee165df2911 = $this->env->getExtension("native_profiler");
        $__internal_84493acf03f5b254a2d14403bc14f5f306a592e093d379d788b31ee165df2911->enter($__internal_84493acf03f5b254a2d14403bc14f5f306a592e093d379d788b31ee165df2911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_84493acf03f5b254a2d14403bc14f5f306a592e093d379d788b31ee165df2911->leave($__internal_84493acf03f5b254a2d14403bc14f5f306a592e093d379d788b31ee165df2911_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
