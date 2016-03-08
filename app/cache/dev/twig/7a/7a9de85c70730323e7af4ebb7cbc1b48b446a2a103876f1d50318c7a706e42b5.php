<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23e41a798fdf1861e9d167fd3093ef7e3c38dbc6d7d83d2851b4530e496a75da extends Twig_Template
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
        $__internal_0bb5fc14aab0b40273f92e2348f9d2fe5ab97f342936a8d2dfa9ff05df7f7a10 = $this->env->getExtension("native_profiler");
        $__internal_0bb5fc14aab0b40273f92e2348f9d2fe5ab97f342936a8d2dfa9ff05df7f7a10->enter($__internal_0bb5fc14aab0b40273f92e2348f9d2fe5ab97f342936a8d2dfa9ff05df7f7a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bb5fc14aab0b40273f92e2348f9d2fe5ab97f342936a8d2dfa9ff05df7f7a10->leave($__internal_0bb5fc14aab0b40273f92e2348f9d2fe5ab97f342936a8d2dfa9ff05df7f7a10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52be2f2b1fee740cb86ad405b330359d0d699738e94e1714622272f75f7e4580 = $this->env->getExtension("native_profiler");
        $__internal_52be2f2b1fee740cb86ad405b330359d0d699738e94e1714622272f75f7e4580->enter($__internal_52be2f2b1fee740cb86ad405b330359d0d699738e94e1714622272f75f7e4580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52be2f2b1fee740cb86ad405b330359d0d699738e94e1714622272f75f7e4580->leave($__internal_52be2f2b1fee740cb86ad405b330359d0d699738e94e1714622272f75f7e4580_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1aa7f812572d3467fe7b337d9d842eac80242f1d44d7ad0be5a7c01053912b2 = $this->env->getExtension("native_profiler");
        $__internal_a1aa7f812572d3467fe7b337d9d842eac80242f1d44d7ad0be5a7c01053912b2->enter($__internal_a1aa7f812572d3467fe7b337d9d842eac80242f1d44d7ad0be5a7c01053912b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1aa7f812572d3467fe7b337d9d842eac80242f1d44d7ad0be5a7c01053912b2->leave($__internal_a1aa7f812572d3467fe7b337d9d842eac80242f1d44d7ad0be5a7c01053912b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b10875845df815672796a720d2c549510c8cf2e6273a06fa0a47bcc975a6b5cd = $this->env->getExtension("native_profiler");
        $__internal_b10875845df815672796a720d2c549510c8cf2e6273a06fa0a47bcc975a6b5cd->enter($__internal_b10875845df815672796a720d2c549510c8cf2e6273a06fa0a47bcc975a6b5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b10875845df815672796a720d2c549510c8cf2e6273a06fa0a47bcc975a6b5cd->leave($__internal_b10875845df815672796a720d2c549510c8cf2e6273a06fa0a47bcc975a6b5cd_prof);

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
