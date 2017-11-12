<?php

/* AdminBundle:Secured:login.html.twig */
class __TwigTemplate_804788e25e018ed0908f0d5895466e6b06d5d903362a45d78ae080073e68f346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Secured:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28506df010c2121e45fef01ff0806d790d70a5be0f0ccd3e355828b915a4dddd = $this->env->getExtension("native_profiler");
        $__internal_28506df010c2121e45fef01ff0806d790d70a5be0f0ccd3e355828b915a4dddd->enter($__internal_28506df010c2121e45fef01ff0806d790d70a5be0f0ccd3e355828b915a4dddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Secured:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28506df010c2121e45fef01ff0806d790d70a5be0f0ccd3e355828b915a4dddd->leave($__internal_28506df010c2121e45fef01ff0806d790d70a5be0f0ccd3e355828b915a4dddd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a377955d3bae5a85f645004ec3a030b9d4591080c68109af2d29a3a73529e3d4 = $this->env->getExtension("native_profiler");
        $__internal_a377955d3bae5a85f645004ec3a030b9d4591080c68109af2d29a3a73529e3d4->enter($__internal_a377955d3bae5a85f645004ec3a030b9d4591080c68109af2d29a3a73529e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_a377955d3bae5a85f645004ec3a030b9d4591080c68109af2d29a3a73529e3d4->leave($__internal_a377955d3bae5a85f645004ec3a030b9d4591080c68109af2d29a3a73529e3d4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23a422ead8a685d144c8b9757e48909aa817872a433fe0ae4f5d303568bd8c9f = $this->env->getExtension("native_profiler");
        $__internal_23a422ead8a685d144c8b9757e48909aa817872a433fe0ae4f5d303568bd8c9f->enter($__internal_23a422ead8a685d144c8b9757e48909aa817872a433fe0ae4f5d303568bd8c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link type=\"text/css\" rel=\"stylesheet\"
          href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/assets/css/animate.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/main.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_23a422ead8a685d144c8b9757e48909aa817872a433fe0ae4f5d303568bd8c9f->leave($__internal_23a422ead8a685d144c8b9757e48909aa817872a433fe0ae4f5d303568bd8c9f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_08c262641791f3d50c95fb1aa408578fdd885aad6f1d23ed50ce48dcd748dd5a = $this->env->getExtension("native_profiler");
        $__internal_08c262641791f3d50c95fb1aa408578fdd885aad6f1d23ed50ce48dcd748dd5a->enter($__internal_08c262641791f3d50c95fb1aa408578fdd885aad6f1d23ed50ce48dcd748dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"login\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                Login
            </div>
            <div class=\"panel-body pan\">
                <form class=\"form-horizontal\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\">

                    <div class=\"form-body pal row\">
                        ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 26
            echo "                            <div class=\"note note-danger\">
                                <h4 class=\"box-heading\">An error occurred</h4>

                                <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</p>
                            </div>
                        ";
        }
        // line 32
        echo "
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"inputName\">
                                    Username:
                                </label>

                                <div class=\"input-icon right\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"\" id=\"inputName\"
                                           name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"inputName\">
                                    Password:
                                </label>

                                <div class=\"input-icon right\">
                                    <i class=\"fa fa-lock\"></i>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"\"
                                           id=\"inputPassword\"
                                           name=\"_password\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-actions pal\">
                        <div class=\"form-group mbn\">
                            <div class=\"col-md-offset-3 col-md-9 \">
                                <button class=\"btn btn-primary pull-right\" type=\"submit\">
                                    Login
                                </button>
                            </div>
                        </div>

                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                </form>
            </div>
        </div>

    </div>
";
        
        $__internal_08c262641791f3d50c95fb1aa408578fdd885aad6f1d23ed50ce48dcd748dd5a->leave($__internal_08c262641791f3d50c95fb1aa408578fdd885aad6f1d23ed50ce48dcd748dd5a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 71,  127 => 42,  115 => 32,  109 => 29,  104 => 26,  102 => 25,  96 => 22,  88 => 16,  82 => 15,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Login{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link type="text/css" rel="stylesheet"*/
/*           href="{{ asset('vendors/assets/css/font-awesome.min.css') }}">*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('vendors/assets/css/animate.css') }}">*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('vendors/kadmin-dark-template/styles/main.css') }}">*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('bundles/admin/login.css') }}">*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <div class="login">*/
/*         <div class="panel panel-yellow">*/
/*             <div class="panel-heading">*/
/*                 Login*/
/*             </div>*/
/*             <div class="panel-body pan">*/
/*                 <form class="form-horizontal" action="{{ path('_security_check') }}" method="post">*/
/* */
/*                     <div class="form-body pal row">*/
/*                         {% if error %}*/
/*                             <div class="note note-danger">*/
/*                                 <h4 class="box-heading">An error occurred</h4>*/
/* */
/*                                 <p>{{ error.message }}</p>*/
/*                             </div>*/
/*                         {% endif %}*/
/* */
/*                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="inputName">*/
/*                                     Username:*/
/*                                 </label>*/
/* */
/*                                 <div class="input-icon right">*/
/*                                     <i class="fa fa-user"></i>*/
/*                                     <input type="text" class="form-control" placeholder="" id="inputName"*/
/*                                            name="_username" value="{{ last_username }}">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label" for="inputName">*/
/*                                     Password:*/
/*                                 </label>*/
/* */
/*                                 <div class="input-icon right">*/
/*                                     <i class="fa fa-lock"></i>*/
/*                                     <input type="password" class="form-control" placeholder=""*/
/*                                            id="inputPassword"*/
/*                                            name="_password">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-actions pal">*/
/*                         <div class="form-group mbn">*/
/*                             <div class="col-md-offset-3 col-md-9 ">*/
/*                                 <button class="btn btn-primary pull-right" type="submit">*/
/*                                     Login*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
