<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5c50a6ee5d6155526ca2b1dcece18830bd23eba46af44c5a2df4ddd2aab095ee extends Twig_Template
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
        $__internal_8908ee8218412344382e299f3053107a7d3d588f06dfd6b46e850c41be91478c = $this->env->getExtension("native_profiler");
        $__internal_8908ee8218412344382e299f3053107a7d3d588f06dfd6b46e850c41be91478c->enter($__internal_8908ee8218412344382e299f3053107a7d3d588f06dfd6b46e850c41be91478c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8908ee8218412344382e299f3053107a7d3d588f06dfd6b46e850c41be91478c->leave($__internal_8908ee8218412344382e299f3053107a7d3d588f06dfd6b46e850c41be91478c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63095f572c11d671b62b773f582d1440839b8d32da8f301e9b8e873b6f00f22c = $this->env->getExtension("native_profiler");
        $__internal_63095f572c11d671b62b773f582d1440839b8d32da8f301e9b8e873b6f00f22c->enter($__internal_63095f572c11d671b62b773f582d1440839b8d32da8f301e9b8e873b6f00f22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63095f572c11d671b62b773f582d1440839b8d32da8f301e9b8e873b6f00f22c->leave($__internal_63095f572c11d671b62b773f582d1440839b8d32da8f301e9b8e873b6f00f22c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_664194c79f8accf70dd921ea713ce8d974868e4b7a650ba867612ce723213acc = $this->env->getExtension("native_profiler");
        $__internal_664194c79f8accf70dd921ea713ce8d974868e4b7a650ba867612ce723213acc->enter($__internal_664194c79f8accf70dd921ea713ce8d974868e4b7a650ba867612ce723213acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_664194c79f8accf70dd921ea713ce8d974868e4b7a650ba867612ce723213acc->leave($__internal_664194c79f8accf70dd921ea713ce8d974868e4b7a650ba867612ce723213acc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a41f65cd506edfec5dd243795f7392041444aa5fd26db704650c401d66ff356 = $this->env->getExtension("native_profiler");
        $__internal_9a41f65cd506edfec5dd243795f7392041444aa5fd26db704650c401d66ff356->enter($__internal_9a41f65cd506edfec5dd243795f7392041444aa5fd26db704650c401d66ff356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a41f65cd506edfec5dd243795f7392041444aa5fd26db704650c401d66ff356->leave($__internal_9a41f65cd506edfec5dd243795f7392041444aa5fd26db704650c401d66ff356_prof);

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
