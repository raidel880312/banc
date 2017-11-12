<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_aceb3fab97cee7702db4d19d66cd575473a5564948b566a8490cdc9833cac0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce218aabeeb0233c72ae5bee25cea03de4c3ab9d0e78f698d9f505a8a1437a4a = $this->env->getExtension("native_profiler");
        $__internal_ce218aabeeb0233c72ae5bee25cea03de4c3ab9d0e78f698d9f505a8a1437a4a->enter($__internal_ce218aabeeb0233c72ae5bee25cea03de4c3ab9d0e78f698d9f505a8a1437a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce218aabeeb0233c72ae5bee25cea03de4c3ab9d0e78f698d9f505a8a1437a4a->leave($__internal_ce218aabeeb0233c72ae5bee25cea03de4c3ab9d0e78f698d9f505a8a1437a4a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e5fb6d74d64938181526f781385f31eca751e583c300f1e1534314e29fe0fa1 = $this->env->getExtension("native_profiler");
        $__internal_6e5fb6d74d64938181526f781385f31eca751e583c300f1e1534314e29fe0fa1->enter($__internal_6e5fb6d74d64938181526f781385f31eca751e583c300f1e1534314e29fe0fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link type=\"text/css\" rel=\"stylesheet\"
              href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/ui/theme/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/assets/css/animate.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/all.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/main.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\"
              href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/style-responsive.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\"
              href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/zabuto_calendar.min.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/pace.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\"
              href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/styles/jquery.news-ticker.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/data-tables/DT_bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/select2.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/select2-bootstrap.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/dropzone/css/dropzone.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6e5fb6d74d64938181526f781385f31eca751e583c300f1e1534314e29fe0fa1->leave($__internal_6e5fb6d74d64938181526f781385f31eca751e583c300f1e1534314e29fe0fa1_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ca76efe937569b355c05f9bea12025c7017a2ff8084e8f43568a2212fc312ba = $this->env->getExtension("native_profiler");
        $__internal_3ca76efe937569b355c05f9bea12025c7017a2ff8084e8f43568a2212fc312ba->enter($__internal_3ca76efe937569b355c05f9bea12025c7017a2ff8084e8f43568a2212fc312ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "        <div class=\"pace pace-inactive\">
            <div id=\"loader\" class=\"pace-progress\" style=\"width: 0%;\" data-progress-text=\"100%\" data-progress=\"99\">
                <div class=\"pace-progress-inner\"></div>
            </div>
            <div class=\"pace-activity\"></div>
        </div>
        <div class=\"modal fade\" id=\"myModal\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div style=\"width: 100px; margin: 20% auto\">
                <img class=\"img-responsive\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div><!-- /.modal -->

        <div>
            <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>

            <div id=\"alert\" class=\"alert alert-info alert-dismissable animated\"></div>
            <!--BEGIN TOPBAR-->
            <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
                <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\"
                     class=\"navbar navbar-default navbar-static-top\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\"
                                class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span
                                    class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                        </button>
                        <a id=\"logo\"
                           href=\"\"
                           class=\"navbar-brand\" target=\"_blank\">
                            <span class=\"fa fa-rocket\"></span>
                            <span class=\"logo-text\">BANC</span>
                        </a>
                    </div>
                    <div class=\"topbar-main\">
                        <a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\">
                            <i class=\"fa fa-bars\"></i>
                        </a>

                        <ul class=\"nav navbar navbar-top-links navbar-right mbn pull-right\">

                            <li class=\"dropdown topbar-user\">
                                <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                                    ";
        // line 68
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array())) {
            // line 69
            echo "                                        ";
            $context["img"] = $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "webPath", array()));
            // line 70
            echo "                                    ";
        } else {
            // line 71
            echo "                                        ";
            $context["img"] = $this->env->getExtension('asset')->getAssetUrl("bundles/admin/image/user.png");
            // line 72
            echo "                                    ";
        }
        // line 73
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "\" class=\"img-responsive img-circle\"
                                         width=\"60px\" height=\"60px\"/>&nbsp;
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-user pull-right\">
                                    <li>
                                        <a class=\"toplink\"
                                           href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_profile_index", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-user\"></i>
                                            My profile
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>

                                    ";
        // line 87
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 88
            echo "                                        <li>
                                            <a class=\"toplink\" href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("admin_user_index");
            echo "\">
                                                <i class=\"fa fa-users\"></i>
                                                Users
                                            </a>
                                        </li>

                                        <li class=\"divider\"></li>

                                    ";
        }
        // line 98
        echo "

                                    <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
            <!--END TOPBAR-->
            <div id=\"wrapper\">
                <!--BEGIN SIDEBAR MENU-->
                <nav id=\"sidebar\" role=\"navigation\" data-step=\"2\"
                     data-intro=\"Template has &lt;b&gt;many navigation styles&lt;/b&gt;\"
                     data-position=\"right\" class=\"navbar-default navbar-static-side\">
                    <div class=\"sidebar-collapse menu-scroll\">
                        <ul id=\"side-menu\" class=\"nav\">

                            <li class=\"active\">
                                <a class=\"link start\" href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\"><i
                                            class=\"fa fa-money fa-fw\">
                                        <div class=\"icon-bg bg-orange\"></div>
                                    </i><span class=\"menu-title\">Accounts</span></a>
                            </li>
                            ";
        // line 123
        $this->loadTemplate("AdminBundle:includes:custom_links.html.twig", "AdminBundle:Default:index.html.twig", 123)->display($context);
        // line 124
        echo "                        </ul>
                    </div>
                </nav>
                <!--END SIDEBAR MENU-->

                <!--BEGIN PAGE WRAPPER-->
                <div id=\"page-wrapper\">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                        <div class=\"page-header pull-left\">
                            <div class=\"page-title\">
                                Dashboard
                            </div>
                        </div>
                        <div class=\"clearfix\">
                        </div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <!--BEGIN CONTENT-->

                    <div class=\"page-content\">
                        ";
        // line 145
        $this->displayBlock('page_content', $context, $blocks);
        // line 147
        echo "                    </div>
                    <!--END CONTENT-->
                    <!--BEGIN FOOTER-->
                    <div id=\"footer\">
                        <div class=\"copyright\">
                            <a href=\"http://www.banc.com\">";
        // line 152
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " © BANC</a></div>
                    </div>
                    <!--END FOOTER-->
                </div>
                <!--END PAGE WRAPPER-->
            </div>
        </div>
    ";
        
        $__internal_3ca76efe937569b355c05f9bea12025c7017a2ff8084e8f43568a2212fc312ba->leave($__internal_3ca76efe937569b355c05f9bea12025c7017a2ff8084e8f43568a2212fc312ba_prof);

    }

    // line 145
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c161ba4774f22d65a48e62ae75f93a60d6645260f65122e77b91c3c97fd3ce1b = $this->env->getExtension("native_profiler");
        $__internal_c161ba4774f22d65a48e62ae75f93a60d6645260f65122e77b91c3c97fd3ce1b->enter($__internal_c161ba4774f22d65a48e62ae75f93a60d6645260f65122e77b91c3c97fd3ce1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 146
        echo "                        ";
        
        $__internal_c161ba4774f22d65a48e62ae75f93a60d6645260f65122e77b91c3c97fd3ce1b->leave($__internal_c161ba4774f22d65a48e62ae75f93a60d6645260f65122e77b91c3c97fd3ce1b_prof);

    }

    // line 161
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_691916674c262a8d6535f3e1e7cac3bb7079334cf67864157d253979fffc9dd5 = $this->env->getExtension("native_profiler");
        $__internal_691916674c262a8d6535f3e1e7cac3bb7079334cf67864157d253979fffc9dd5->enter($__internal_691916674c262a8d6535f3e1e7cac3bb7079334cf67864157d253979fffc9dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/kadmin-dark-template/script/main.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/select2.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\"
                src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/a2lixtranslationform/js/a2lix_translation_bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/data-tables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/data-tables/jquery.datatable.inc.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/data-tables/DT_bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/ckeditor/adapters/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/dropzone/dropzone.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/paginate/paginate.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/app.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                App.init();
                App.alert('Welcome ' + \"<strong>\" + '";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "' + \"</strong>\");
                \$('#side-menu li > a.start').click();
            });
        </script>
    ";
        
        $__internal_691916674c262a8d6535f3e1e7cac3bb7079334cf67864157d253979fffc9dd5->leave($__internal_691916674c262a8d6535f3e1e7cac3bb7079334cf67864157d253979fffc9dd5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 196,  416 => 192,  412 => 191,  408 => 190,  404 => 189,  400 => 188,  396 => 187,  392 => 186,  388 => 185,  384 => 184,  380 => 183,  376 => 182,  371 => 180,  367 => 179,  363 => 178,  358 => 176,  353 => 174,  349 => 173,  345 => 172,  340 => 170,  335 => 168,  330 => 166,  325 => 164,  321 => 163,  318 => 162,  312 => 161,  305 => 146,  299 => 145,  284 => 152,  277 => 147,  275 => 145,  252 => 124,  250 => 123,  242 => 118,  221 => 100,  217 => 98,  205 => 89,  202 => 88,  200 => 87,  190 => 80,  177 => 73,  174 => 72,  171 => 71,  168 => 70,  165 => 69,  163 => 68,  127 => 35,  116 => 26,  110 => 25,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  80 => 15,  76 => 14,  71 => 12,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/*     {% block stylesheets %}*/
/*         <link type="text/css" rel="stylesheet"*/
/*               href="{{ asset('vendors/jquery/ui/theme/jquery-ui.min.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/assets/css/font-awesome.min.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/assets/css/animate.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/kadmin-dark-template/styles/all.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/kadmin-dark-template/styles/main.css') }}">*/
/*         <link type="text/css" rel="stylesheet"*/
/*               href="{{ asset('vendors/kadmin-dark-template/styles/style-responsive.css') }}">*/
/*         <link type="text/css" rel="stylesheet"*/
/*               href="{{ asset('vendors/kadmin-dark-template/styles/zabuto_calendar.min.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/kadmin-dark-template/styles/pace.css') }}">*/
/*         <link type="text/css" rel="stylesheet"*/
/*               href="{{ asset('vendors/kadmin-dark-template/styles/jquery.news-ticker.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/data-tables/DT_bootstrap.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/select2/select2.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/select2/select2-bootstrap.css') }}">*/
/*         <link type="text/css" rel="stylesheet" href="{{ asset('vendors/dropzone/css/dropzone.css') }}">*/
/*     {% endblock %}*/
/* */
/* */
/*     {% block body %}*/
/*         <div class="pace pace-inactive">*/
/*             <div id="loader" class="pace-progress" style="width: 0%;" data-progress-text="100%" data-progress="99">*/
/*                 <div class="pace-progress-inner"></div>*/
/*             </div>*/
/*             <div class="pace-activity"></div>*/
/*         </div>*/
/*         <div class="modal fade" id="myModal" data-backdrop="static" tabindex="-1" role="dialog"*/
/*              aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div style="width: 100px; margin: 20% auto">*/
/*                 <img class="img-responsive" src="{{ asset('favicon.ico') }}" alt="">*/
/*             </div>*/
/*         </div><!-- /.modal -->*/
/* */
/*         <div>*/
/*             <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>*/
/* */
/*             <div id="alert" class="alert alert-info alert-dismissable animated"></div>*/
/*             <!--BEGIN TOPBAR-->*/
/*             <div id="header-topbar-option-demo" class="page-header-topbar">*/
/*                 <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3"*/
/*                      class="navbar navbar-default navbar-static-top">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" data-toggle="collapse" data-target=".sidebar-collapse"*/
/*                                 class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span*/
/*                                     class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a id="logo"*/
/*                            href=""*/
/*                            class="navbar-brand" target="_blank">*/
/*                             <span class="fa fa-rocket"></span>*/
/*                             <span class="logo-text">BANC</span>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="topbar-main">*/
/*                         <a id="menu-toggle" href="#" class="hidden-xs">*/
/*                             <i class="fa fa-bars"></i>*/
/*                         </a>*/
/* */
/*                         <ul class="nav navbar navbar-top-links navbar-right mbn pull-right">*/
/* */
/*                             <li class="dropdown topbar-user">*/
/*                                 <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/*                                     {% if app.user.path %}*/
/*                                         {% set img = asset(app.user.webPath) %}*/
/*                                     {% else %}*/
/*                                         {% set img = asset('bundles/admin/image/user.png') %}*/
/*                                     {% endif %}*/
/*                                     <img src="{{ img }}" alt="{{ app.user.name }}" class="img-responsive img-circle"*/
/*                                          width="60px" height="60px"/>&nbsp;*/
/*                                     <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu dropdown-user pull-right">*/
/*                                     <li>*/
/*                                         <a class="toplink"*/
/*                                            href="{{ path('admin_profile_index', {'id': app.user.id}) }}">*/
/*                                             <i class="fa fa-user"></i>*/
/*                                             My profile*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="divider"></li>*/
/* */
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a class="toplink" href="{{ path('admin_user_index') }}">*/
/*                                                 <i class="fa fa-users"></i>*/
/*                                                 Users*/
/*                                             </a>*/
/*                                         </li>*/
/* */
/*                                         <li class="divider"></li>*/
/* */
/*                                     {% endif %}*/
/* */
/* */
/*                                     <li><a href="{{ path('_logout') }}"><i class="fa fa-key"></i>Log Out</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <!--END TOPBAR-->*/
/*             <div id="wrapper">*/
/*                 <!--BEGIN SIDEBAR MENU-->*/
/*                 <nav id="sidebar" role="navigation" data-step="2"*/
/*                      data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"*/
/*                      data-position="right" class="navbar-default navbar-static-side">*/
/*                     <div class="sidebar-collapse menu-scroll">*/
/*                         <ul id="side-menu" class="nav">*/
/* */
/*                             <li class="active">*/
/*                                 <a class="link start" href="{{ path('admin_default_dashboard') }}"><i*/
/*                                             class="fa fa-money fa-fw">*/
/*                                         <div class="icon-bg bg-orange"></div>*/
/*                                     </i><span class="menu-title">Accounts</span></a>*/
/*                             </li>*/
/*                             {% include 'AdminBundle:includes:custom_links.html.twig' %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*                 <!--END SIDEBAR MENU-->*/
/* */
/*                 <!--BEGIN PAGE WRAPPER-->*/
/*                 <div id="page-wrapper">*/
/*                     <!--BEGIN TITLE & BREADCRUMB PAGE-->*/
/*                     <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">*/
/*                         <div class="page-header pull-left">*/
/*                             <div class="page-title">*/
/*                                 Dashboard*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clearfix">*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--END TITLE & BREADCRUMB PAGE-->*/
/*                     <!--BEGIN CONTENT-->*/
/* */
/*                     <div class="page-content">*/
/*                         {% block page_content %}*/
/*                         {% endblock page_content %}*/
/*                     </div>*/
/*                     <!--END CONTENT-->*/
/*                     <!--BEGIN FOOTER-->*/
/*                     <div id="footer">*/
/*                         <div class="copyright">*/
/*                             <a href="http://www.banc.com">{{ 'now' | date('Y') }} © BANC</a></div>*/
/*                     </div>*/
/*                     <!--END FOOTER-->*/
/*                 </div>*/
/*                 <!--END PAGE WRAPPER-->*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/* */
/*         <script type="text/javascript" src="{{ asset('vendors/jquery/js/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('vendors/kadmin-dark-template/script/jquery-migrate-1.2.1.min.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('vendors/kadmin-dark-template/script/jquery.metisMenu.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('vendors/kadmin-dark-template/script/jquery.cookie.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('vendors/kadmin-dark-template/script/jquery.news-ticker.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/bootstrap/js/bootstrap-hover-dropdown.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/kadmin-dark-template/script/icheck.min.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('vendors/kadmin-dark-template/script/responsive-tabs.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('vendors/kadmin-dark-template/script/zabuto_calendar.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/kadmin-dark-template/script/main.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/select2/select2.js') }}"></script>*/
/*         <script type="text/javascript"*/
/*                 src="{{ asset('bundles/a2lixtranslationform/js/a2lix_translation_bootstrap.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/jquery/js/jquery.form.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/data-tables/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/data-tables/jquery.datatable.inc.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/data-tables/DT_bootstrap.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/ckeditor/adapters/jquery.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/dropzone/dropzone.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/paginate/paginate.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendors/app.js') }}"></script>*/
/*         <script type="text/javascript">*/
/*             $(document).ready(function () {*/
/*                 App.init();*/
/*                 App.alert('Welcome ' + "<strong>" + '{{ app.user.name }}' + "</strong>");*/
/*                 $('#side-menu li > a.start').click();*/
/*             });*/
/*         </script>*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
