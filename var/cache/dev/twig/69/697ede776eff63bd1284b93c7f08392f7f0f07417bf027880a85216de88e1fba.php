<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fddb36280d0b3c9bb7c76106b5ff8ec1bffbd37d084a2dd75045cf85d320e0df extends Twig_Template
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
        $__internal_095ab4b6e363350dcadc3a779b4c46c0ea18c08c43283811eb4a639f81125004 = $this->env->getExtension("native_profiler");
        $__internal_095ab4b6e363350dcadc3a779b4c46c0ea18c08c43283811eb4a639f81125004->enter($__internal_095ab4b6e363350dcadc3a779b4c46c0ea18c08c43283811eb4a639f81125004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095ab4b6e363350dcadc3a779b4c46c0ea18c08c43283811eb4a639f81125004->leave($__internal_095ab4b6e363350dcadc3a779b4c46c0ea18c08c43283811eb4a639f81125004_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4e93b51201cc23bead3a02b22bced1f324cea770fd86eebdd31aaab4685e5d7 = $this->env->getExtension("native_profiler");
        $__internal_e4e93b51201cc23bead3a02b22bced1f324cea770fd86eebdd31aaab4685e5d7->enter($__internal_e4e93b51201cc23bead3a02b22bced1f324cea770fd86eebdd31aaab4685e5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4e93b51201cc23bead3a02b22bced1f324cea770fd86eebdd31aaab4685e5d7->leave($__internal_e4e93b51201cc23bead3a02b22bced1f324cea770fd86eebdd31aaab4685e5d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57d0bbc6723b805a9121e55f3c3ab8d25430444b82369155673c9a89144bbed7 = $this->env->getExtension("native_profiler");
        $__internal_57d0bbc6723b805a9121e55f3c3ab8d25430444b82369155673c9a89144bbed7->enter($__internal_57d0bbc6723b805a9121e55f3c3ab8d25430444b82369155673c9a89144bbed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57d0bbc6723b805a9121e55f3c3ab8d25430444b82369155673c9a89144bbed7->leave($__internal_57d0bbc6723b805a9121e55f3c3ab8d25430444b82369155673c9a89144bbed7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_715cb0f7472edb9067c1fdc0bf85f76c550c1077651cc4033bcaf545dbff1978 = $this->env->getExtension("native_profiler");
        $__internal_715cb0f7472edb9067c1fdc0bf85f76c550c1077651cc4033bcaf545dbff1978->enter($__internal_715cb0f7472edb9067c1fdc0bf85f76c550c1077651cc4033bcaf545dbff1978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_715cb0f7472edb9067c1fdc0bf85f76c550c1077651cc4033bcaf545dbff1978->leave($__internal_715cb0f7472edb9067c1fdc0bf85f76c550c1077651cc4033bcaf545dbff1978_prof);

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
