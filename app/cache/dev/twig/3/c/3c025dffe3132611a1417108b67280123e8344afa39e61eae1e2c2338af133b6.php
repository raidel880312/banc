<?php

/* GenemuFormBundle:Form:stylesheet_layout.html.twig */
class __TwigTemplate_a6ef7659cae1930036b15fa15d049ac69f894936184ead7d14ed0f0a82145275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_stylesheet' => array($this, 'block_form_stylesheet'),
            'field_stylesheet' => array($this, 'block_field_stylesheet'),
            'button_stylesheet' => array($this, 'block_button_stylesheet'),
            'genemu_jquerycolor_stylesheet' => array($this, 'block_genemu_jquerycolor_stylesheet'),
            'genemu_jquerygeolocation_stylesheet' => array($this, 'block_genemu_jquerygeolocation_stylesheet'),
            'genemu_jqueryimage_stylesheet' => array($this, 'block_genemu_jqueryimage_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db96bcb1d9e259bddf54116fc195dbaa6edd96d0802b893e88e795e83fe9b9ea = $this->env->getExtension("native_profiler");
        $__internal_db96bcb1d9e259bddf54116fc195dbaa6edd96d0802b893e88e795e83fe9b9ea->enter($__internal_db96bcb1d9e259bddf54116fc195dbaa6edd96d0802b893e88e795e83fe9b9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GenemuFormBundle:Form:stylesheet_layout.html.twig"));

        // line 1
        $this->displayBlock('form_stylesheet', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_stylesheet', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_stylesheet', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_jquerycolor_stylesheet', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('genemu_jquerygeolocation_stylesheet', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryimage_stylesheet', $context, $blocks);
        
        $__internal_db96bcb1d9e259bddf54116fc195dbaa6edd96d0802b893e88e795e83fe9b9ea->leave($__internal_db96bcb1d9e259bddf54116fc195dbaa6edd96d0802b893e88e795e83fe9b9ea_prof);

    }

    // line 1
    public function block_form_stylesheet($context, array $blocks = array())
    {
        $__internal_7513ed535a2a82fa5fe7f9e3294397be74a66b7914a751310ad86b4bb31f6efb = $this->env->getExtension("native_profiler");
        $__internal_7513ed535a2a82fa5fe7f9e3294397be74a66b7914a751310ad86b4bb31f6efb->enter($__internal_7513ed535a2a82fa5fe7f9e3294397be74a66b7914a751310ad86b4bb31f6efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_stylesheet"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'stylesheet');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7513ed535a2a82fa5fe7f9e3294397be74a66b7914a751310ad86b4bb31f6efb->leave($__internal_7513ed535a2a82fa5fe7f9e3294397be74a66b7914a751310ad86b4bb31f6efb_prof);

    }

    // line 9
    public function block_field_stylesheet($context, array $blocks = array())
    {
        $__internal_6c5c0c8b07812332614c06585fa32db108d2131aec6e1e43baa67e7ba34be627 = $this->env->getExtension("native_profiler");
        $__internal_6c5c0c8b07812332614c06585fa32db108d2131aec6e1e43baa67e7ba34be627->enter($__internal_6c5c0c8b07812332614c06585fa32db108d2131aec6e1e43baa67e7ba34be627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_stylesheet"));

        echo "";
        
        $__internal_6c5c0c8b07812332614c06585fa32db108d2131aec6e1e43baa67e7ba34be627->leave($__internal_6c5c0c8b07812332614c06585fa32db108d2131aec6e1e43baa67e7ba34be627_prof);

    }

    // line 11
    public function block_button_stylesheet($context, array $blocks = array())
    {
        $__internal_90cc093a5ba532b4c246eb7c41336cb83c82f122280d68a2baa0c96a02c045a7 = $this->env->getExtension("native_profiler");
        $__internal_90cc093a5ba532b4c246eb7c41336cb83c82f122280d68a2baa0c96a02c045a7->enter($__internal_90cc093a5ba532b4c246eb7c41336cb83c82f122280d68a2baa0c96a02c045a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_stylesheet"));

        echo "";
        
        $__internal_90cc093a5ba532b4c246eb7c41336cb83c82f122280d68a2baa0c96a02c045a7->leave($__internal_90cc093a5ba532b4c246eb7c41336cb83c82f122280d68a2baa0c96a02c045a7_prof);

    }

    // line 13
    public function block_genemu_jquerycolor_stylesheet($context, array $blocks = array())
    {
        $__internal_cb87480f4e1332a3851cdc8e73a580f9c38b2c93d19de466329769699571913d = $this->env->getExtension("native_profiler");
        $__internal_cb87480f4e1332a3851cdc8e73a580f9c38b2c93d19de466329769699571913d->enter($__internal_cb87480f4e1332a3851cdc8e73a580f9c38b2c93d19de466329769699571913d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_stylesheet"));

        // line 14
        ob_start();
        // line 15
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 16
            echo "    <style type=\"text/css\" media=\"screen\">
        #";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color {
            background: url(";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ");
            width: 36px;
            height: 36px;
            position: relative;
            overflow: hidden;
        }

        #";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color div {
            background: url(";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ") center center;
            position: absolute;
            left: 3px;
            top: 3px;
            width: 30px;
            height: 30px;
        }
    </style>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cb87480f4e1332a3851cdc8e73a580f9c38b2c93d19de466329769699571913d->leave($__internal_cb87480f4e1332a3851cdc8e73a580f9c38b2c93d19de466329769699571913d_prof);

    }

    // line 38
    public function block_genemu_jquerygeolocation_stylesheet($context, array $blocks = array())
    {
        $__internal_3db71df1293a9e6f005eb591248ed2453890fdc978bed63f4d7c7c85d2ce831f = $this->env->getExtension("native_profiler");
        $__internal_3db71df1293a9e6f005eb591248ed2453890fdc978bed63f4d7c7c85d2ce831f->enter($__internal_3db71df1293a9e6f005eb591248ed2453890fdc978bed63f4d7c7c85d2ce831f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_stylesheet"));

        // line 39
        ob_start();
        // line 40
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_map {
            width: 300px;
            height: 300px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3db71df1293a9e6f005eb591248ed2453890fdc978bed63f4d7c7c85d2ce831f->leave($__internal_3db71df1293a9e6f005eb591248ed2453890fdc978bed63f4d7c7c85d2ce831f_prof);

    }

    // line 49
    public function block_genemu_jqueryimage_stylesheet($context, array $blocks = array())
    {
        $__internal_7e359ccaed1fe04b2c7a558b3a01e2928cb2b257166c86827a73b5fe96027e95 = $this->env->getExtension("native_profiler");
        $__internal_7e359ccaed1fe04b2c7a558b3a01e2928cb2b257166c86827a73b5fe96027e95->enter($__internal_7e359ccaed1fe04b2c7a558b3a01e2928cb2b257166c86827a73b5fe96027e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_stylesheet"));

        // line 50
        ob_start();
        // line 51
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container {
            overflow: hidden;
        }

        #";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview {
            overflow: hidden;
            position: relative;
        }

        #";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview object, #";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_overlay {
            position: absolute;
            top: 0;
            right: 0;
            text-decoration: none;
            display: block;
            z-index: 361;
            width: 19px;
            height: 19px;

            background: url(";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/edit.gif"), "html", null, true);
        echo ");
        }

        #";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview object {
            opacity: 0;
            z-index: 362;
        }

        #";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container .left {
            float: left;
            position: relative;
        }

        #";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options {
            padding: 0px;
            margin: 0px;
            list-style-type: none;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 361;
        }

        #";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options li {
            background: transparent url(";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/icons.png"), "html", null, true);
        echo ");

            display: inline;
            float: left;
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        #";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .rotate {
            background-position: 0 0;
        }

        #";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .bw {
            background-position: 0 -24px;
        }

        #";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .negative {
            background-position: -24px 0;
        }

        #";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .sepia {
            background-position: -24px -24px;
        }

        #";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .crop {
            background-position: -48px 0;
        }

        #";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .blur {
            background-position: -48px -24px;
        }
        #";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .loading {
            background: #FFF url(";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/ajax-loader.gif"), "html", null, true);
        echo ") no-repeat;
            padding: 6px 0;
            height: 11px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7e359ccaed1fe04b2c7a558b3a01e2928cb2b257166c86827a73b5fe96027e95->leave($__internal_7e359ccaed1fe04b2c7a558b3a01e2928cb2b257166c86827a73b5fe96027e95_prof);

    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:stylesheet_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 128,  319 => 127,  313 => 124,  306 => 120,  299 => 116,  292 => 112,  285 => 108,  278 => 104,  266 => 95,  262 => 94,  249 => 84,  241 => 79,  233 => 74,  227 => 71,  212 => 61,  204 => 56,  197 => 52,  194 => 51,  192 => 50,  186 => 49,  172 => 41,  169 => 40,  167 => 39,  161 => 38,  143 => 26,  139 => 25,  129 => 18,  125 => 17,  122 => 16,  120 => 15,  118 => 14,  112 => 13,  100 => 11,  88 => 9,  73 => 4,  68 => 3,  66 => 2,  60 => 1,  53 => 49,  50 => 48,  48 => 38,  45 => 37,  43 => 13,  40 => 12,  38 => 11,  35 => 10,  33 => 9,  30 => 8,  28 => 1,);
    }
}
/* {% block form_stylesheet %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_stylesheet(child) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_stylesheet %}*/
/* */
/* {% block field_stylesheet "" %}*/
/* */
/* {% block button_stylesheet "" %}*/
/* */
/* {% block genemu_jquerycolor_stylesheet %}*/
/* {% spaceless %}*/
/* {% if widget == "image" %}*/
/*     <style type="text/css" media="screen">*/
/*         #{{ id }}_color {*/
/*             background: url({{ asset('bundles/genemuform/images/select.png') }});*/
/*             width: 36px;*/
/*             height: 36px;*/
/*             position: relative;*/
/*             overflow: hidden;*/
/*         }*/
/* */
/*         #{{ id }}_color div {*/
/*             background: url({{ asset('bundles/genemuform/images/select.png') }}) center center;*/
/*             position: absolute;*/
/*             left: 3px;*/
/*             top: 3px;*/
/*             width: 30px;*/
/*             height: 30px;*/
/*         }*/
/*     </style>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerycolor_stylesheet %}*/
/* */
/* {% block genemu_jquerygeolocation_stylesheet %}*/
/* {% spaceless %}*/
/*     <style type="text/css" media="screen">*/
/*         #{{ id }}_map {*/
/*             width: 300px;*/
/*             height: 300px;*/
/*         }*/
/*     </style>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerygeolocation_stylesheet %}*/
/* */
/* {% block genemu_jqueryimage_stylesheet %}*/
/* {% spaceless %}*/
/*     <style type="text/css" media="screen">*/
/*         #{{ id }}_container {*/
/*             overflow: hidden;*/
/*         }*/
/* */
/*         #{{ id }}_preview {*/
/*             overflow: hidden;*/
/*             position: relative;*/
/*         }*/
/* */
/*         #{{ id }}_preview object, #{{ id }}_overlay {*/
/*             position: absolute;*/
/*             top: 0;*/
/*             right: 0;*/
/*             text-decoration: none;*/
/*             display: block;*/
/*             z-index: 361;*/
/*             width: 19px;*/
/*             height: 19px;*/
/* */
/*             background: url({{ asset('bundles/genemuform/images/edit.gif') }});*/
/*         }*/
/* */
/*         #{{ id }}_preview object {*/
/*             opacity: 0;*/
/*             z-index: 362;*/
/*         }*/
/* */
/*         #{{ id }}_container .left {*/
/*             float: left;*/
/*             position: relative;*/
/*         }*/
/* */
/*         #{{ id }}_options {*/
/*             padding: 0px;*/
/*             margin: 0px;*/
/*             list-style-type: none;*/
/*             position: absolute;*/
/*             bottom: 0;*/
/*             left: 0;*/
/*             z-index: 361;*/
/*         }*/
/* */
/*         #{{ id }}_options li {*/
/*             background: transparent url({{ asset('bundles/genemuform/images/icons.png') }});*/
/* */
/*             display: inline;*/
/*             float: left;*/
/*             width: 24px;*/
/*             height: 24px;*/
/*             cursor: pointer;*/
/*         }*/
/* */
/*         #{{ id }}_options .rotate {*/
/*             background-position: 0 0;*/
/*         }*/
/* */
/*         #{{ id }}_options .bw {*/
/*             background-position: 0 -24px;*/
/*         }*/
/* */
/*         #{{ id }}_options .negative {*/
/*             background-position: -24px 0;*/
/*         }*/
/* */
/*         #{{ id }}_options .sepia {*/
/*             background-position: -24px -24px;*/
/*         }*/
/* */
/*         #{{ id }}_options .crop {*/
/*             background-position: -48px 0;*/
/*         }*/
/* */
/*         #{{ id }}_options .blur {*/
/*             background-position: -48px -24px;*/
/*         }*/
/*         #{{ id }}_options .loading {*/
/*             background: #FFF url({{ asset('bundles/genemuform/images/ajax-loader.gif') }}) no-repeat;*/
/*             padding: 6px 0;*/
/*             height: 11px;*/
/*         }*/
/*     </style>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryimage_stylesheet %}*/
/* */
