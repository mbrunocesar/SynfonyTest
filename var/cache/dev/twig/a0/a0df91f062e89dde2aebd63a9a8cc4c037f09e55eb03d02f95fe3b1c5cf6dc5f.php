<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7ee4f5362a097ee2d5bbd1e9ae836b80da8862993a96d3451bdd660191e5ec38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6ec5772d81045d94bbdc3d0a5ac7aa2553d933292687b40444f2f27538504701 = $this->env->getExtension("native_profiler");
        $__internal_6ec5772d81045d94bbdc3d0a5ac7aa2553d933292687b40444f2f27538504701->enter($__internal_6ec5772d81045d94bbdc3d0a5ac7aa2553d933292687b40444f2f27538504701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec5772d81045d94bbdc3d0a5ac7aa2553d933292687b40444f2f27538504701->leave($__internal_6ec5772d81045d94bbdc3d0a5ac7aa2553d933292687b40444f2f27538504701_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c35c5f764c4e2b69b2c6697196ac9dbd8a4a286c3367f3e4430b4ef47421773c = $this->env->getExtension("native_profiler");
        $__internal_c35c5f764c4e2b69b2c6697196ac9dbd8a4a286c3367f3e4430b4ef47421773c->enter($__internal_c35c5f764c4e2b69b2c6697196ac9dbd8a4a286c3367f3e4430b4ef47421773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c35c5f764c4e2b69b2c6697196ac9dbd8a4a286c3367f3e4430b4ef47421773c->leave($__internal_c35c5f764c4e2b69b2c6697196ac9dbd8a4a286c3367f3e4430b4ef47421773c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7438b070c8f89e92754046a2b7582333a0365dfd9130b52d0592cdcd38f27bed = $this->env->getExtension("native_profiler");
        $__internal_7438b070c8f89e92754046a2b7582333a0365dfd9130b52d0592cdcd38f27bed->enter($__internal_7438b070c8f89e92754046a2b7582333a0365dfd9130b52d0592cdcd38f27bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7438b070c8f89e92754046a2b7582333a0365dfd9130b52d0592cdcd38f27bed->leave($__internal_7438b070c8f89e92754046a2b7582333a0365dfd9130b52d0592cdcd38f27bed_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a196c43b1a1aaca1d7bdd89ab603a76680773cbae7274891d082546db76cc81c = $this->env->getExtension("native_profiler");
        $__internal_a196c43b1a1aaca1d7bdd89ab603a76680773cbae7274891d082546db76cc81c->enter($__internal_a196c43b1a1aaca1d7bdd89ab603a76680773cbae7274891d082546db76cc81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a196c43b1a1aaca1d7bdd89ab603a76680773cbae7274891d082546db76cc81c->leave($__internal_a196c43b1a1aaca1d7bdd89ab603a76680773cbae7274891d082546db76cc81c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
