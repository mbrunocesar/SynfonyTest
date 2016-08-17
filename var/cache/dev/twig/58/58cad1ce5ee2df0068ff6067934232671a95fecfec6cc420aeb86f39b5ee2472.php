<?php

/* user/list.html.twig */
class __TwigTemplate_eedb35165400d850900c2941715a5f93fcc02614177269113c27be8661ae8887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bdf31fe30e91915ef1411a83246cb863cc7e6f123c387883a436a77a63a0012 = $this->env->getExtension("native_profiler");
        $__internal_2bdf31fe30e91915ef1411a83246cb863cc7e6f123c387883a436a77a63a0012->enter($__internal_2bdf31fe30e91915ef1411a83246cb863cc7e6f123c387883a436a77a63a0012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bdf31fe30e91915ef1411a83246cb863cc7e6f123c387883a436a77a63a0012->leave($__internal_2bdf31fe30e91915ef1411a83246cb863cc7e6f123c387883a436a77a63a0012_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e87bb2e842e7ae382b5d5d721f34f609e06b31df7395609a3380f08d95cf1a1 = $this->env->getExtension("native_profiler");
        $__internal_9e87bb2e842e7ae382b5d5d721f34f609e06b31df7395609a3380f08d95cf1a1->enter($__internal_9e87bb2e842e7ae382b5d5d721f34f609e06b31df7395609a3380f08d95cf1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">

                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "                    <li>
                        <a href=\"/user/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "idUser", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
            </div>

        </div>
    </div>
";
        
        $__internal_9e87bb2e842e7ae382b5d5d721f34f609e06b31df7395609a3380f08d95cf1a1->leave($__internal_9e87bb2e842e7ae382b5d5d721f34f609e06b31df7395609a3380f08d95cf1a1_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e53a3f59aab174a1766cffa5158004268d61a342e9e19020d0b0cd147995c880 = $this->env->getExtension("native_profiler");
        $__internal_e53a3f59aab174a1766cffa5158004268d61a342e9e19020d0b0cd147995c880->enter($__internal_e53a3f59aab174a1766cffa5158004268d61a342e9e19020d0b0cd147995c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_e53a3f59aab174a1766cffa5158004268d61a342e9e19020d0b0cd147995c880->leave($__internal_e53a3f59aab174a1766cffa5158004268d61a342e9e19020d0b0cd147995c880_prof);

    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  77 => 20,  65 => 13,  54 => 10,  51 => 9,  47 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/* */
/*                 {% for user in users %}*/
/*                     <li>*/
/*                         <a href="/user/{{ user.idUser }}">{{ user.name }}</a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
