<?php

/* base.html.twig */
class __TwigTemplate_401fdbbb98f76d70ecac1b10af5d72a077d5bf683c84c93e12db6c9bd9246153 extends Twig_Template
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
        $__internal_182b9ed5656ae2cf4f29c5aae31cce4abd1b740f50b2e1d666d5b13851217840 = $this->env->getExtension("native_profiler");
        $__internal_182b9ed5656ae2cf4f29c5aae31cce4abd1b740f50b2e1d666d5b13851217840->enter($__internal_182b9ed5656ae2cf4f29c5aae31cce4abd1b740f50b2e1d666d5b13851217840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_182b9ed5656ae2cf4f29c5aae31cce4abd1b740f50b2e1d666d5b13851217840->leave($__internal_182b9ed5656ae2cf4f29c5aae31cce4abd1b740f50b2e1d666d5b13851217840_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22b470cdd0ba0a3137f2dea2841d3d0f8b559dc79f96736070b23d5c2ce39caf = $this->env->getExtension("native_profiler");
        $__internal_22b470cdd0ba0a3137f2dea2841d3d0f8b559dc79f96736070b23d5c2ce39caf->enter($__internal_22b470cdd0ba0a3137f2dea2841d3d0f8b559dc79f96736070b23d5c2ce39caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22b470cdd0ba0a3137f2dea2841d3d0f8b559dc79f96736070b23d5c2ce39caf->leave($__internal_22b470cdd0ba0a3137f2dea2841d3d0f8b559dc79f96736070b23d5c2ce39caf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_061407204168c4baf68c09cc0ca4eda48e94c71d35ab171fb6ef8029a55f79e7 = $this->env->getExtension("native_profiler");
        $__internal_061407204168c4baf68c09cc0ca4eda48e94c71d35ab171fb6ef8029a55f79e7->enter($__internal_061407204168c4baf68c09cc0ca4eda48e94c71d35ab171fb6ef8029a55f79e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_061407204168c4baf68c09cc0ca4eda48e94c71d35ab171fb6ef8029a55f79e7->leave($__internal_061407204168c4baf68c09cc0ca4eda48e94c71d35ab171fb6ef8029a55f79e7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf8ffe8cc264503e6089409d94ac91fcb0258ce41e03c6ede8d6e0ab55937e08 = $this->env->getExtension("native_profiler");
        $__internal_cf8ffe8cc264503e6089409d94ac91fcb0258ce41e03c6ede8d6e0ab55937e08->enter($__internal_cf8ffe8cc264503e6089409d94ac91fcb0258ce41e03c6ede8d6e0ab55937e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf8ffe8cc264503e6089409d94ac91fcb0258ce41e03c6ede8d6e0ab55937e08->leave($__internal_cf8ffe8cc264503e6089409d94ac91fcb0258ce41e03c6ede8d6e0ab55937e08_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3914ff0f093f0255fc6fcfdfc7359294c0270c32efb0c9c121967100b8bfafb = $this->env->getExtension("native_profiler");
        $__internal_e3914ff0f093f0255fc6fcfdfc7359294c0270c32efb0c9c121967100b8bfafb->enter($__internal_e3914ff0f093f0255fc6fcfdfc7359294c0270c32efb0c9c121967100b8bfafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e3914ff0f093f0255fc6fcfdfc7359294c0270c32efb0c9c121967100b8bfafb->leave($__internal_e3914ff0f093f0255fc6fcfdfc7359294c0270c32efb0c9c121967100b8bfafb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
