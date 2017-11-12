<?php

/* AdminBundle:includes:admin_cu.html.twig */
class __TwigTemplate_33cf8cee1dba02cce176227719fdde8d4ebe3ea6638237aaff0f9dda2f02d904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6e3dff509cbff2096f3abdd7b82eb17d778bae66ab5563223ebbfd664ae3250 = $this->env->getExtension("native_profiler");
        $__internal_c6e3dff509cbff2096f3abdd7b82eb17d778bae66ab5563223ebbfd664ae3250->enter($__internal_c6e3dff509cbff2096f3abdd7b82eb17d778bae66ab5563223ebbfd664ae3250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:includes:admin_cu.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        $context["module"] = twig_lower_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")));
        // line 3
        echo "    ";
        $context["title"] = (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"));
        // line 4
        echo "    ";
        $context["name"] = twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        // line 5
        echo "    ";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "update")) {
            // line 6
            echo "        ";
            $context["action"] = $this->env->getExtension('routing')->getPath(((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_") . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_update"), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())));
            // line 7
            echo "        ";
            $context["type"] = "Edit";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["action"] = $this->env->getExtension('routing')->getPath(((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_") . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_create"));
            // line 10
            echo "        ";
            $context["type"] = "Create";
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "AdminBundle:Default:formTemplate.html.twig"));
        // line 14
        echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            ";
        // line 16
        echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) . " ") . twig_lower_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
        echo "
        </div>
        <div class=\"panel-body pan\">
            <form class=\"form-horizontal form-bordered form-label-stripped\" id=\"form-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "html", null, true);
        echo "-edit\"
                  action=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"
                  method=\"post\" ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                <div class=\"form-body pal\">
                    <div id=\"form-error\" class=\"note note-danger\">
                        <h4 class=\"box-heading\">An error occurred</h4>

                        <p id=\"form-error-detail\"></p>
                    </div>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"POST\"/>
                </div>
                <div class=\"form-actions pal\">
                    <div class=\"form-group mbn\">
                        <div class=\"col-md-offset-3 col-md-6\">
                            <a id=\"_ok\" data-target=\"form-";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "html", null, true);
        echo "-edit\" class=\"btn btn-primary\"><i
                                        class=\"fa fa-check\"></i></a>&nbsp;&nbsp;
                            <a id=\"_cancel\" class=\"btn btn-danger\" href=\"#\"><i class=\"fa fa-times\"></i></a>
                        </div>
                    </div>
                </div>
                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </form>
        </div>
    </div>

    ";
        // line 46
        $this->loadTemplate("AdminBundle:includes:admin_js.html.twig", "AdminBundle:includes:admin_cu.html.twig", 46)->display($context);
        // line 47
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c6e3dff509cbff2096f3abdd7b82eb17d778bae66ab5563223ebbfd664ae3250->leave($__internal_c6e3dff509cbff2096f3abdd7b82eb17d778bae66ab5563223ebbfd664ae3250_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:includes:admin_cu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 47,  117 => 46,  109 => 41,  100 => 35,  91 => 29,  87 => 28,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% spaceless %}*/
/*     {% set module = module | lower %}*/
/*     {% set title = title %}*/
/*     {% set name = name | lower %}*/
/*     {% if action == 'update' %}*/
/*         {% set action = path(name~'_'~module~'_update', { 'id': entity.id }) %}*/
/*         {% set type = 'Edit' %}*/
/*     {% else %}*/
/*         {% set action = path(name~'_'~module~'_create') %}*/
/*         {% set type = 'Create' %}*/
/*     {% endif %}*/
/* */
/*     {% form_theme edit_form 'AdminBundle:Default:formTemplate.html.twig' %}*/
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             {{ type ~' '~ title | lower }}*/
/*         </div>*/
/*         <div class="panel-body pan">*/
/*             <form class="form-horizontal form-bordered form-label-stripped" id="form-{{ module }}-edit"*/
/*                   action="{{ action }}"*/
/*                   method="post" {{ form_enctype(edit_form) }}>*/
/*                 <div class="form-body pal">*/
/*                     <div id="form-error" class="note note-danger">*/
/*                         <h4 class="box-heading">An error occurred</h4>*/
/* */
/*                         <p id="form-error-detail"></p>*/
/*                     </div>*/
/*                     {{ form_widget(edit_form) }}*/
/*                     {{ form_errors(edit_form) }}*/
/*                     <input type="hidden" name="_method" value="POST"/>*/
/*                 </div>*/
/*                 <div class="form-actions pal">*/
/*                     <div class="form-group mbn">*/
/*                         <div class="col-md-offset-3 col-md-6">*/
/*                             <a id="_ok" data-target="form-{{ module }}-edit" class="btn btn-primary"><i*/
/*                                         class="fa fa-check"></i></a>&nbsp;&nbsp;*/
/*                             <a id="_cancel" class="btn btn-danger" href="#"><i class="fa fa-times"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_end(edit_form) }}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include 'AdminBundle:includes:admin_js.html.twig' %}*/
/* */
/* {% endspaceless %}*/
