<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2016452ebf451d175f24781ada48b995e89e59f126fb08bfad690a824d962031 extends Twig_Template
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
        $__internal_0fbd6dc6294e2084f6cd4b57d0834e2c33e3dece66dec7b0e38e83e0b779240c = $this->env->getExtension("native_profiler");
        $__internal_0fbd6dc6294e2084f6cd4b57d0834e2c33e3dece66dec7b0e38e83e0b779240c->enter($__internal_0fbd6dc6294e2084f6cd4b57d0834e2c33e3dece66dec7b0e38e83e0b779240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbd6dc6294e2084f6cd4b57d0834e2c33e3dece66dec7b0e38e83e0b779240c->leave($__internal_0fbd6dc6294e2084f6cd4b57d0834e2c33e3dece66dec7b0e38e83e0b779240c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb51f493d16ff87ad2e82a4756d06e00158795160003dae247ff594fbe3e1db9 = $this->env->getExtension("native_profiler");
        $__internal_cb51f493d16ff87ad2e82a4756d06e00158795160003dae247ff594fbe3e1db9->enter($__internal_cb51f493d16ff87ad2e82a4756d06e00158795160003dae247ff594fbe3e1db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cb51f493d16ff87ad2e82a4756d06e00158795160003dae247ff594fbe3e1db9->leave($__internal_cb51f493d16ff87ad2e82a4756d06e00158795160003dae247ff594fbe3e1db9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a380aecef8ca71e02e0366c8d5e0b5a15dcb710525967d0c0b495f14629d7707 = $this->env->getExtension("native_profiler");
        $__internal_a380aecef8ca71e02e0366c8d5e0b5a15dcb710525967d0c0b495f14629d7707->enter($__internal_a380aecef8ca71e02e0366c8d5e0b5a15dcb710525967d0c0b495f14629d7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a380aecef8ca71e02e0366c8d5e0b5a15dcb710525967d0c0b495f14629d7707->leave($__internal_a380aecef8ca71e02e0366c8d5e0b5a15dcb710525967d0c0b495f14629d7707_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c17efc65d73225826beae561d79482640c3eeb1b5f4395f5acba564413221899 = $this->env->getExtension("native_profiler");
        $__internal_c17efc65d73225826beae561d79482640c3eeb1b5f4395f5acba564413221899->enter($__internal_c17efc65d73225826beae561d79482640c3eeb1b5f4395f5acba564413221899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c17efc65d73225826beae561d79482640c3eeb1b5f4395f5acba564413221899->leave($__internal_c17efc65d73225826beae561d79482640c3eeb1b5f4395f5acba564413221899_prof);

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
