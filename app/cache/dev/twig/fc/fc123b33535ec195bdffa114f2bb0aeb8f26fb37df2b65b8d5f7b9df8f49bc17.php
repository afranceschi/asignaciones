<?php

/* layout.html.twig */
class __TwigTemplate_ed850707e2c8079784ec9d183666aba58d45d53c55d93957438e9b0d69c19d93 extends Twig_Template
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
        $__internal_4780ce5c8409fc4e2b8cc5af30f66f5f7dee65da376ef714f0fec7294e5aa463 = $this->env->getExtension("native_profiler");
        $__internal_4780ce5c8409fc4e2b8cc5af30f66f5f7dee65da376ef714f0fec7294e5aa463->enter($__internal_4780ce5c8409fc4e2b8cc5af30f66f5f7dee65da376ef714f0fec7294e5aa463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_4780ce5c8409fc4e2b8cc5af30f66f5f7dee65da376ef714f0fec7294e5aa463->leave($__internal_4780ce5c8409fc4e2b8cc5af30f66f5f7dee65da376ef714f0fec7294e5aa463_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a42e2ddce89d3a3ed37028083ad52b754dc981b0428bcc4ec925ca25ec89a9a0 = $this->env->getExtension("native_profiler");
        $__internal_a42e2ddce89d3a3ed37028083ad52b754dc981b0428bcc4ec925ca25ec89a9a0->enter($__internal_a42e2ddce89d3a3ed37028083ad52b754dc981b0428bcc4ec925ca25ec89a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de tareas";
        
        $__internal_a42e2ddce89d3a3ed37028083ad52b754dc981b0428bcc4ec925ca25ec89a9a0->leave($__internal_a42e2ddce89d3a3ed37028083ad52b754dc981b0428bcc4ec925ca25ec89a9a0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9d021e886eedfc6d7068939f5d3a7da06475e0c9840693d17e53b81647183f1 = $this->env->getExtension("native_profiler");
        $__internal_a9d021e886eedfc6d7068939f5d3a7da06475e0c9840693d17e53b81647183f1->enter($__internal_a9d021e886eedfc6d7068939f5d3a7da06475e0c9840693d17e53b81647183f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a9d021e886eedfc6d7068939f5d3a7da06475e0c9840693d17e53b81647183f1->leave($__internal_a9d021e886eedfc6d7068939f5d3a7da06475e0c9840693d17e53b81647183f1_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_839670ccc77d4a63ed79dd29f77a0f887d0f2bec587af260fcd93da26b45d3d8 = $this->env->getExtension("native_profiler");
        $__internal_839670ccc77d4a63ed79dd29f77a0f887d0f2bec587af260fcd93da26b45d3d8->enter($__internal_839670ccc77d4a63ed79dd29f77a0f887d0f2bec587af260fcd93da26b45d3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_839670ccc77d4a63ed79dd29f77a0f887d0f2bec587af260fcd93da26b45d3d8->leave($__internal_839670ccc77d4a63ed79dd29f77a0f887d0f2bec587af260fcd93da26b45d3d8_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27b30bd1f891571f7b6c464ac58116eeeb3da73f312dfa58fd39227546331df5 = $this->env->getExtension("native_profiler");
        $__internal_27b30bd1f891571f7b6c464ac58116eeeb3da73f312dfa58fd39227546331df5->enter($__internal_27b30bd1f891571f7b6c464ac58116eeeb3da73f312dfa58fd39227546331df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_27b30bd1f891571f7b6c464ac58116eeeb3da73f312dfa58fd39227546331df5->leave($__internal_27b30bd1f891571f7b6c464ac58116eeeb3da73f312dfa58fd39227546331df5_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Asignacion de tareas{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {{ include('menu.html.twig') }}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-1.12.1.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
