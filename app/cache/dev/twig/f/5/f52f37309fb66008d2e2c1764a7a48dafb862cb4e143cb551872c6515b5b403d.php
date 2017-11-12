<?php

/* AdminBundle:includes:admin_list.html.twig */
class __TwigTemplate_a894532f6ecbe10b0e14b87c4219b77e396ff7edd19961f24d99abcb9c6d7e16 extends Twig_Template
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
        $__internal_82c51305de25481e8cbea52957d79875b61eba35a616277ae44d1b577c56382c = $this->env->getExtension("native_profiler");
        $__internal_82c51305de25481e8cbea52957d79875b61eba35a616277ae44d1b577c56382c->enter($__internal_82c51305de25481e8cbea52957d79875b61eba35a616277ae44d1b577c56382c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:includes:admin_list.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        $context["module"] = twig_lower_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")));
        // line 3
        echo "    ";
        $context["title"] = twig_lower_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
        // line 4
        echo "    ";
        $context["name"] = twig_lower_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading\">
                    List of ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
                    ";
        // line 10
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_CLIENT"))) {
            // line 11
            echo "                        <i data-href=\"";
            echo $this->env->getExtension('routing')->getPath(((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_") . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_new"));
            echo "\"
                           class=\"fa fa-plus btn btn-warning pull-right _new\"></i>
                    ";
        }
        // line 14
        echo "                </div>
                <div class=\"panel-body  bg-white\">
                    ";
        // line 16
        if ( !twig_test_empty((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")))) {
            // line 17
            echo "                        <table id=\"grid-view\" class=\"display table table-bordered table-hover bg-white\">
                            <thead>
                            <tr>
                                <th>";
            // line 20
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "</th>
                            </tr>
                            </thead>
                            <tbody>

                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 26
                echo "                                <tr>
                                    <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "title", array()), "html", null, true);
                echo "<br>

                                        <div class=\"row-actions\">
                                        <span>
                                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_") . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_show"), array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
                echo "\"
                                               class=\"text-primary _show\"
                                               title=\"Show this element\">Show</a>
                                            |
                                        </span>
                                        ";
                // line 36
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_CLIENT"))) {
                    // line 37
                    echo "                                            <span>
                                                <a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_") . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_edit"), array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
                    echo "\"
                                                   class=\"text-warning _edit\"
                                                   title=\"Edit this element\">Edit</a>
                                                |
                                            </span>
                                            <span>
                                                <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(((((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_") . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_delete"), array("id" => $this->getAttribute($context["l"], "id", array()))), "html", null, true);
                    echo "\"
                                                   class=\"text-danger _trash\"
                                                   title=\"Delete this element\">Delete</a>
                                                |
                                             </span>
                                        ";
                }
                // line 50
                echo "                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
                            </tbody>
                        </table>
                    ";
        } else {
            // line 58
            echo "                        <div class=\"note note-danger\">
                            <h4>No data to show</h4>
                        </div>
                    ";
        }
        // line 62
        echo "                </div>
            </div>
        </div>
        <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
            <div id=\"viewer\">

            </div>
        </div>
    </div>
    ";
        // line 71
        $this->loadTemplate("AdminBundle:includes:admin_js.html.twig", "AdminBundle:includes:admin_list.html.twig", 71)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 73
        echo "
";
        
        $__internal_82c51305de25481e8cbea52957d79875b61eba35a616277ae44d1b577c56382c->leave($__internal_82c51305de25481e8cbea52957d79875b61eba35a616277ae44d1b577c56382c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:includes:admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 73,  148 => 71,  137 => 62,  131 => 58,  125 => 54,  116 => 50,  107 => 44,  98 => 38,  95 => 37,  93 => 36,  85 => 31,  78 => 27,  75 => 26,  71 => 25,  63 => 20,  58 => 17,  56 => 16,  52 => 14,  45 => 11,  43 => 10,  39 => 9,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% spaceless %}*/
/*     {% set module = module | lower %}*/
/*     {% set title = title | lower %}*/
/*     {% set name = name | lower %}*/
/*     <div class="row">*/
/*         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*             <div class="panel panel-blue">*/
/*                 <div class="panel-heading">*/
/*                     List of {{ title }}*/
/*                     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CLIENT') %}*/
/*                         <i data-href="{{ path(name~'_'~module~'_new') }}"*/
/*                            class="fa fa-plus btn btn-warning pull-right _new"></i>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="panel-body  bg-white">*/
/*                     {% if list is not empty %}*/
/*                         <table id="grid-view" class="display table table-bordered table-hover bg-white">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>{{ title | upper }}</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/* */
/*                             {% for l in list %}*/
/*                                 <tr>*/
/*                                     <td>{{ l.title }}<br>*/
/* */
/*                                         <div class="row-actions">*/
/*                                         <span>*/
/*                                             <a href="{{ path(name~'_'~module~'_show', {'id': l.id} ) }}"*/
/*                                                class="text-primary _show"*/
/*                                                title="Show this element">Show</a>*/
/*                                             |*/
/*                                         </span>*/
/*                                         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CLIENT') %}*/
/*                                             <span>*/
/*                                                 <a href="{{ path(name~'_'~module~'_edit', {'id': l.id} ) }}"*/
/*                                                    class="text-warning _edit"*/
/*                                                    title="Edit this element">Edit</a>*/
/*                                                 |*/
/*                                             </span>*/
/*                                             <span>*/
/*                                                 <a href="{{ path(name~'_'~module~'_delete', {'id': l.id} ) }}"*/
/*                                                    class="text-danger _trash"*/
/*                                                    title="Delete this element">Delete</a>*/
/*                                                 |*/
/*                                              </span>*/
/*                                         {% endif %}*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/* */
/*                             </tbody>*/
/*                         </table>*/
/*                     {% else %}*/
/*                         <div class="note note-danger">*/
/*                             <h4>No data to show</h4>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">*/
/*             <div id="viewer">*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% include 'AdminBundle:includes:admin_js.html.twig' %}*/
/* {% endspaceless %}*/
/* */
/* */
