<?php

/* base.html.twig */
class __TwigTemplate_cb445fedf54d06991663d5b104ce4c0e79dbb356454c3c7073a9be6fdf27d418 extends Twig_Template
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
        $__internal_6224ac05554adaac155f039eae0330e03dfd4e18c3784b14b78fa91cf6178186 = $this->env->getExtension("native_profiler");
        $__internal_6224ac05554adaac155f039eae0330e03dfd4e18c3784b14b78fa91cf6178186->enter($__internal_6224ac05554adaac155f039eae0330e03dfd4e18c3784b14b78fa91cf6178186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6224ac05554adaac155f039eae0330e03dfd4e18c3784b14b78fa91cf6178186->leave($__internal_6224ac05554adaac155f039eae0330e03dfd4e18c3784b14b78fa91cf6178186_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_187d241f186934d4db0b151bf38410485d89e15f8bb032d38b964e2e5994cb23 = $this->env->getExtension("native_profiler");
        $__internal_187d241f186934d4db0b151bf38410485d89e15f8bb032d38b964e2e5994cb23->enter($__internal_187d241f186934d4db0b151bf38410485d89e15f8bb032d38b964e2e5994cb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_187d241f186934d4db0b151bf38410485d89e15f8bb032d38b964e2e5994cb23->leave($__internal_187d241f186934d4db0b151bf38410485d89e15f8bb032d38b964e2e5994cb23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e150d0f9a9b407b4bbd59ccd66959032e1e8612dc2a633c60f9134c868b3b95 = $this->env->getExtension("native_profiler");
        $__internal_2e150d0f9a9b407b4bbd59ccd66959032e1e8612dc2a633c60f9134c868b3b95->enter($__internal_2e150d0f9a9b407b4bbd59ccd66959032e1e8612dc2a633c60f9134c868b3b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e150d0f9a9b407b4bbd59ccd66959032e1e8612dc2a633c60f9134c868b3b95->leave($__internal_2e150d0f9a9b407b4bbd59ccd66959032e1e8612dc2a633c60f9134c868b3b95_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66549ed2b9552f0c48a25a27f0fa9efdf6e0373e08a61a3548ab873eb559efdb = $this->env->getExtension("native_profiler");
        $__internal_66549ed2b9552f0c48a25a27f0fa9efdf6e0373e08a61a3548ab873eb559efdb->enter($__internal_66549ed2b9552f0c48a25a27f0fa9efdf6e0373e08a61a3548ab873eb559efdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66549ed2b9552f0c48a25a27f0fa9efdf6e0373e08a61a3548ab873eb559efdb->leave($__internal_66549ed2b9552f0c48a25a27f0fa9efdf6e0373e08a61a3548ab873eb559efdb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e5294abb384347e32a27b9a47b74dd40a93ee18721149e45856142e0111773a = $this->env->getExtension("native_profiler");
        $__internal_8e5294abb384347e32a27b9a47b74dd40a93ee18721149e45856142e0111773a->enter($__internal_8e5294abb384347e32a27b9a47b74dd40a93ee18721149e45856142e0111773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e5294abb384347e32a27b9a47b74dd40a93ee18721149e45856142e0111773a->leave($__internal_8e5294abb384347e32a27b9a47b74dd40a93ee18721149e45856142e0111773a_prof);

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
