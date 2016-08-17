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
        $__internal_6b4cb11188a7b841e0b5e7fa3294e82fc1046c75ba3adbc9f3998ee07dc110d6 = $this->env->getExtension("native_profiler");
        $__internal_6b4cb11188a7b841e0b5e7fa3294e82fc1046c75ba3adbc9f3998ee07dc110d6->enter($__internal_6b4cb11188a7b841e0b5e7fa3294e82fc1046c75ba3adbc9f3998ee07dc110d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4cb11188a7b841e0b5e7fa3294e82fc1046c75ba3adbc9f3998ee07dc110d6->leave($__internal_6b4cb11188a7b841e0b5e7fa3294e82fc1046c75ba3adbc9f3998ee07dc110d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5db1859f3baa4ebb2b5ae9bf32d3cf1c3b075dd524b784d934e21e2545cbe982 = $this->env->getExtension("native_profiler");
        $__internal_5db1859f3baa4ebb2b5ae9bf32d3cf1c3b075dd524b784d934e21e2545cbe982->enter($__internal_5db1859f3baa4ebb2b5ae9bf32d3cf1c3b075dd524b784d934e21e2545cbe982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5db1859f3baa4ebb2b5ae9bf32d3cf1c3b075dd524b784d934e21e2545cbe982->leave($__internal_5db1859f3baa4ebb2b5ae9bf32d3cf1c3b075dd524b784d934e21e2545cbe982_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1bfe94ec36d3aec38a188030e9641c24fc676010b5daad497a3a8489ea6ff7e = $this->env->getExtension("native_profiler");
        $__internal_e1bfe94ec36d3aec38a188030e9641c24fc676010b5daad497a3a8489ea6ff7e->enter($__internal_e1bfe94ec36d3aec38a188030e9641c24fc676010b5daad497a3a8489ea6ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1bfe94ec36d3aec38a188030e9641c24fc676010b5daad497a3a8489ea6ff7e->leave($__internal_e1bfe94ec36d3aec38a188030e9641c24fc676010b5daad497a3a8489ea6ff7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc7b9193a24bfa36e00501a694270a8a6514b7f867e96428b45f992c8a9c095d = $this->env->getExtension("native_profiler");
        $__internal_dc7b9193a24bfa36e00501a694270a8a6514b7f867e96428b45f992c8a9c095d->enter($__internal_dc7b9193a24bfa36e00501a694270a8a6514b7f867e96428b45f992c8a9c095d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc7b9193a24bfa36e00501a694270a8a6514b7f867e96428b45f992c8a9c095d->leave($__internal_dc7b9193a24bfa36e00501a694270a8a6514b7f867e96428b45f992c8a9c095d_prof);

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
