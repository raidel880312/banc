<?php

/* AdminBundle:Profile:index.html.twig */
class __TwigTemplate_f578e53e2d68140d0287c095bf11a714c9d7340af26593774f992d1544a1be1f extends Twig_Template
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
        $__internal_6cbe4b425e6cb100c66ba84bf25d1c4fcbf6764dfbc4e312e7645d21ca6bc0ca = $this->env->getExtension("native_profiler");
        $__internal_6cbe4b425e6cb100c66ba84bf25d1c4fcbf6764dfbc4e312e7645d21ca6bc0ca->enter($__internal_6cbe4b425e6cb100c66ba84bf25d1c4fcbf6764dfbc4e312e7645d21ca6bc0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Profile:index.html.twig"));

        // line 1
        $context["module"] = twig_lower_filter($this->env, "setting");
        // line 2
        $context["title"] = "Editar";
        // line 3
        $context["action"] = $this->env->getExtension('routing')->getPath((("admin_" . (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module"))) . "_update"), array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())));
        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                <div class=\"profile\">
                    <div class=\"row\" style=\"margin-bottom: 15px\">
                        <div class=\"col-xs-12 col-sm-6 col-md-8 col-lg-8 \">
                            <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</h2>
                            <p>
                                <strong>Role:</strong>
                                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 16
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                            </p>

                            <p>
                                <strong><i class=\"fa fa-envelope\"></i>&nbsp; E-mail:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
                            </p>

                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4  text-center\">
                            <figure>
                                <img class=\"img-responsive img-circle\" style=\"display: inline-block\" alt=\"avatar\"
                                     src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(((twig_test_empty($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath", array()))) ? ("bundles/admin/image/user.png") : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath", array())))), "html", null, true);
        echo "\">
                                <figcaption class=\"ratings\">
                                    <p>
                                        <a href=\"#\">
                                            <span class=\"fa fa-star\"></span>
                                        </a>
                                        <a href=\"#\">
                                            <span class=\"fa fa-star\"></span>
                                        </a>
                                        <a href=\"#\">
                                            <span class=\"fa fa-star\"></span>
                                        </a>
                                        <a href=\"#\">
                                            <span class=\"fa fa-star\"></span>
                                        </a>
                                        <a href=\"#\">
                                            <span class=\"fa fa-star\"></span>
                                        </a>
                                    </p>
                                </figcaption>
                                <i id=\"options\" class=\"fa fa-gear dropdown-toggle btn btn-warning \"
                                   data-toggle=\"dropdown\"></i>
                                <ul class=\"dropdown-menu pull-right text-left\" role=\"menu\">
                                    <li>
                                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_profile_editprofile", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"_edit\">
                                            <span class=\"fa fa-edit\"></span>
                                            &nbsp; Edit profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_profile_setpass", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"_set_pass\">
                                            <span class=\"fa fa-random\"></span>
                                            &nbsp; Change password
                                        </a>
                                    </li>
                                </ul>
                            </figure>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">
        <div id=\"viewer\">

        </div>
    </div>
</div>
";
        
        $__internal_6cbe4b425e6cb100c66ba84bf25d1c4fcbf6764dfbc4e312e7645d21ca6bc0ca->leave($__internal_6cbe4b425e6cb100c66ba84bf25d1c4fcbf6764dfbc4e312e7645d21ca6bc0ca_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  99 => 52,  72 => 28,  62 => 21,  57 => 18,  48 => 16,  44 => 15,  38 => 12,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set module = 'setting' | lower %}*/
/* {% set title = 'Editar' %}*/
/* {% set action = path('admin_'~module~'_update', { 'id': entity.id }) %}*/
/* */
/* <div class="row">*/
/*     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*         <div class="panel">*/
/*             <div class="panel-body">*/
/*                 <div class="profile">*/
/*                     <div class="row" style="margin-bottom: 15px">*/
/*                         <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">*/
/*                             <h2>{{ entity.name }}</h2>*/
/*                             <p>*/
/*                                 <strong>Role:</strong>*/
/*                                 {% for r in entity.roles %}*/
/*                                     {{ r.name }}*/
/*                                 {% endfor %}*/
/*                             </p>*/
/* */
/*                             <p>*/
/*                                 <strong><i class="fa fa-envelope"></i>&nbsp; E-mail:</strong> {{ entity.email }}*/
/*                             </p>*/
/* */
/*                         </div>*/
/*                         <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4  text-center">*/
/*                             <figure>*/
/*                                 <img class="img-responsive img-circle" style="display: inline-block" alt="avatar"*/
/*                                      src="{{ asset(entity.webPath is empty ? 'bundles/admin/image/user.png': entity.webPath) }}">*/
/*                                 <figcaption class="ratings">*/
/*                                     <p>*/
/*                                         <a href="#">*/
/*                                             <span class="fa fa-star"></span>*/
/*                                         </a>*/
/*                                         <a href="#">*/
/*                                             <span class="fa fa-star"></span>*/
/*                                         </a>*/
/*                                         <a href="#">*/
/*                                             <span class="fa fa-star"></span>*/
/*                                         </a>*/
/*                                         <a href="#">*/
/*                                             <span class="fa fa-star"></span>*/
/*                                         </a>*/
/*                                         <a href="#">*/
/*                                             <span class="fa fa-star"></span>*/
/*                                         </a>*/
/*                                     </p>*/
/*                                 </figcaption>*/
/*                                 <i id="options" class="fa fa-gear dropdown-toggle btn btn-warning "*/
/*                                    data-toggle="dropdown"></i>*/
/*                                 <ul class="dropdown-menu pull-right text-left" role="menu">*/
/*                                     <li>*/
/*                                         <a href="{{ path('admin_profile_editprofile',{'id': entity.id}) }}" class="_edit">*/
/*                                             <span class="fa fa-edit"></span>*/
/*                                             &nbsp; Edit profile*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('admin_profile_setpass', {'id': entity.id} ) }}" class="_set_pass">*/
/*                                             <span class="fa fa-random"></span>*/
/*                                             &nbsp; Change password*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </figure>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">*/
/*         <div id="viewer">*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
