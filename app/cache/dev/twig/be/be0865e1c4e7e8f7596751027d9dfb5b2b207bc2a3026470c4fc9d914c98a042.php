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
        $__internal_2a36bc7cc9080ec742e29bcbea6211b751d9b78fa0dcfb9db6dacdd34a4f52f4 = $this->env->getExtension("native_profiler");
        $__internal_2a36bc7cc9080ec742e29bcbea6211b751d9b78fa0dcfb9db6dacdd34a4f52f4->enter($__internal_2a36bc7cc9080ec742e29bcbea6211b751d9b78fa0dcfb9db6dacdd34a4f52f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a36bc7cc9080ec742e29bcbea6211b751d9b78fa0dcfb9db6dacdd34a4f52f4->leave($__internal_2a36bc7cc9080ec742e29bcbea6211b751d9b78fa0dcfb9db6dacdd34a4f52f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67f88c54324a158bdaabdd4a4226acfeb5cf8fb2140e5e423a30b56c7bc27c21 = $this->env->getExtension("native_profiler");
        $__internal_67f88c54324a158bdaabdd4a4226acfeb5cf8fb2140e5e423a30b56c7bc27c21->enter($__internal_67f88c54324a158bdaabdd4a4226acfeb5cf8fb2140e5e423a30b56c7bc27c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67f88c54324a158bdaabdd4a4226acfeb5cf8fb2140e5e423a30b56c7bc27c21->leave($__internal_67f88c54324a158bdaabdd4a4226acfeb5cf8fb2140e5e423a30b56c7bc27c21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffdca7526ef405afd925afb7769366025444edeefbe957ffc75a897ffc06101a = $this->env->getExtension("native_profiler");
        $__internal_ffdca7526ef405afd925afb7769366025444edeefbe957ffc75a897ffc06101a->enter($__internal_ffdca7526ef405afd925afb7769366025444edeefbe957ffc75a897ffc06101a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffdca7526ef405afd925afb7769366025444edeefbe957ffc75a897ffc06101a->leave($__internal_ffdca7526ef405afd925afb7769366025444edeefbe957ffc75a897ffc06101a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_064563dbf631c09d050d11732b5414d90af095ae0066c8c7e8cbbf82f09e0f55 = $this->env->getExtension("native_profiler");
        $__internal_064563dbf631c09d050d11732b5414d90af095ae0066c8c7e8cbbf82f09e0f55->enter($__internal_064563dbf631c09d050d11732b5414d90af095ae0066c8c7e8cbbf82f09e0f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_064563dbf631c09d050d11732b5414d90af095ae0066c8c7e8cbbf82f09e0f55->leave($__internal_064563dbf631c09d050d11732b5414d90af095ae0066c8c7e8cbbf82f09e0f55_prof);

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
