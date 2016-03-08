<?php

/* AAFUserBundle:User:index.html.twig */
class __TwigTemplate_4ab69fc591a0a2715800a294a495d30b94325e4272244d968ef8cfc7133f12b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AAFUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c6ac68fed8b236da826aa7fdd4e807227a3ffe6db35029104fcbfaa0aa8c99 = $this->env->getExtension("native_profiler");
        $__internal_49c6ac68fed8b236da826aa7fdd4e807227a3ffe6db35029104fcbfaa0aa8c99->enter($__internal_49c6ac68fed8b236da826aa7fdd4e807227a3ffe6db35029104fcbfaa0aa8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AAFUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49c6ac68fed8b236da826aa7fdd4e807227a3ffe6db35029104fcbfaa0aa8c99->leave($__internal_49c6ac68fed8b236da826aa7fdd4e807227a3ffe6db35029104fcbfaa0aa8c99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fcd04f55b162cac1ff57a2d5fd89f1b13d64955064d83835e720f823091b34b = $this->env->getExtension("native_profiler");
        $__internal_0fcd04f55b162cac1ff57a2d5fd89f1b13d64955064d83835e720f823091b34b->enter($__internal_0fcd04f55b162cac1ff57a2d5fd89f1b13d64955064d83835e720f823091b34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">Users</h2>
            </div>
            <div class=\"table-reponsive\">
                <table class=\"table table-striped table-hover\">
                    <thread>
                        <tr>
                            <th>Username</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thread>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                            <tr>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 32
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 33
                echo "                                        <strong>Administrador</strong>
                                    ";
            } else {
                // line 35
                echo "                                        <strong>Usuario</strong>
                                    ";
            }
            // line 37
            echo "                                </td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-info\">
                                        View
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary\">
                                        Edit
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_0fcd04f55b162cac1ff57a2d5fd89f1b13d64955064d83835e720f823091b34b->leave($__internal_0fcd04f55b162cac1ff57a2d5fd89f1b13d64955064d83835e720f823091b34b_prof);

    }

    public function getTemplateName()
    {
        return "AAFUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  106 => 39,  102 => 38,  99 => 37,  95 => 35,  91 => 33,  89 => 32,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  69 => 26,  65 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig'%}*/
/* */
/* {% block body%}*/
/*     {{ parent() }}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header margin-none">*/
/*                 <h2 class="padding-none">Users</h2>*/
/*             </div>*/
/*             <div class="table-reponsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thread>*/
/*                         <tr>*/
/*                             <th>Username</th>*/
/*                             <th>First name</th>*/
/*                             <th>Last name</th>*/
/*                             <th>Email</th>*/
/*                             <th>Role</th>*/
/*                             <th>Created</th>*/
/*                             <th>Updated</th>*/
/*                             <th>Actions</th>*/
/*                         </tr>*/
/*                     </thread>*/
/*                     <tbody>*/
/*                         {% for user in users %}*/
/*                             <tr>*/
/*                                 <td>{{user.username}}</td>*/
/*                                 <td>{{user.firstName}}</td>*/
/*                                 <td>{{user.lastName}}</td>*/
/*                                 <td>{{user.email}}</td>*/
/*                                 <td>*/
/*                                     {% if user.role == 'ROLE_ADMIN' %}*/
/*                                         <strong>Administrador</strong>*/
/*                                     {% else %}*/
/*                                         <strong>Usuario</strong>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td>{{user.createAt|date('d-m-Y H:i')}}</td>*/
/*                                 <td>{{user.updatedAt|date('d-m-Y H:i')}}</td>*/
/*                                 <td class="actions">*/
/*                                     <a href="#" class="btn btn-sm btn-info">*/
/*                                         View*/
/*                                     </a>*/
/*                                     <a href="#" class="btn btn-sm btn-primary">*/
/*                                         Edit*/
/*                                     </a>*/
/*                                     <a href="#" class="btn btn-sm btn-danger btn-delete">*/
/*                                         Delete*/
/*                                     </a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
