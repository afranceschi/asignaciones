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
        $__internal_04970108f7623792da63f9c94abcea1a691387d058f77e873bfe36387f68136a = $this->env->getExtension("native_profiler");
        $__internal_04970108f7623792da63f9c94abcea1a691387d058f77e873bfe36387f68136a->enter($__internal_04970108f7623792da63f9c94abcea1a691387d058f77e873bfe36387f68136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_04970108f7623792da63f9c94abcea1a691387d058f77e873bfe36387f68136a->leave($__internal_04970108f7623792da63f9c94abcea1a691387d058f77e873bfe36387f68136a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07ef84bbf7b65068424ff0fe941575f5e631de21648869b5f2ed3048e9731f8e = $this->env->getExtension("native_profiler");
        $__internal_07ef84bbf7b65068424ff0fe941575f5e631de21648869b5f2ed3048e9731f8e->enter($__internal_07ef84bbf7b65068424ff0fe941575f5e631de21648869b5f2ed3048e9731f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07ef84bbf7b65068424ff0fe941575f5e631de21648869b5f2ed3048e9731f8e->leave($__internal_07ef84bbf7b65068424ff0fe941575f5e631de21648869b5f2ed3048e9731f8e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c94b41655135fda2e213fc274846c4546891b2c3314b9c136441fc929db7f83 = $this->env->getExtension("native_profiler");
        $__internal_9c94b41655135fda2e213fc274846c4546891b2c3314b9c136441fc929db7f83->enter($__internal_9c94b41655135fda2e213fc274846c4546891b2c3314b9c136441fc929db7f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c94b41655135fda2e213fc274846c4546891b2c3314b9c136441fc929db7f83->leave($__internal_9c94b41655135fda2e213fc274846c4546891b2c3314b9c136441fc929db7f83_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ccf553d0f870f6e75e554080348df8118afa7999d1c6c11d91b6fc2b6beb58e = $this->env->getExtension("native_profiler");
        $__internal_6ccf553d0f870f6e75e554080348df8118afa7999d1c6c11d91b6fc2b6beb58e->enter($__internal_6ccf553d0f870f6e75e554080348df8118afa7999d1c6c11d91b6fc2b6beb58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ccf553d0f870f6e75e554080348df8118afa7999d1c6c11d91b6fc2b6beb58e->leave($__internal_6ccf553d0f870f6e75e554080348df8118afa7999d1c6c11d91b6fc2b6beb58e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e698255fc7cc213a1641547a00582f910b10bd678dedc1a7c1489de86b6122ad = $this->env->getExtension("native_profiler");
        $__internal_e698255fc7cc213a1641547a00582f910b10bd678dedc1a7c1489de86b6122ad->enter($__internal_e698255fc7cc213a1641547a00582f910b10bd678dedc1a7c1489de86b6122ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e698255fc7cc213a1641547a00582f910b10bd678dedc1a7c1489de86b6122ad->leave($__internal_e698255fc7cc213a1641547a00582f910b10bd678dedc1a7c1489de86b6122ad_prof);

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
