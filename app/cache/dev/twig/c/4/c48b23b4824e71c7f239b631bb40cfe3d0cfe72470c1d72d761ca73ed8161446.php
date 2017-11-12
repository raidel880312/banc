<?php

/* A2lixTranslationFormBundle::default.html.twig */
class __TwigTemplate_f5b8ac00c29e90b9f8243a6a414df15eb92dfa480f4bb64a61418c13966d93a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translations_gedmo_widget' => array($this, 'block_a2lix_translations_gedmo_widget'),
            'a2lix_translationsForms_widget' => array($this, 'block_a2lix_translationsForms_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f2530300ab4c02264474179949842023522cfce3906896806bf5694ec15f8c7 = $this->env->getExtension("native_profiler");
        $__internal_2f2530300ab4c02264474179949842023522cfce3906896806bf5694ec15f8c7->enter($__internal_2f2530300ab4c02264474179949842023522cfce3906896806bf5694ec15f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "A2lixTranslationFormBundle::default.html.twig"));

        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 26
        echo "


";
        // line 29
        $this->displayBlock('a2lix_translations_gedmo_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
        
        $__internal_2f2530300ab4c02264474179949842023522cfce3906896806bf5694ec15f8c7->leave($__internal_2f2530300ab4c02264474179949842023522cfce3906896806bf5694ec15f8c7_prof);

    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        $__internal_182391e7b6849635660e13ca83cf1ea9ba97dc46720beb7e75bfe52f365aa96a = $this->env->getExtension("native_profiler");
        $__internal_182391e7b6849635660e13ca83cf1ea9ba97dc46720beb7e75bfe52f365aa96a->enter($__internal_182391e7b6849635660e13ca83cf1ea9ba97dc46720beb7e75bfe52f365aa96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        // line 2
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 6
            echo "
            <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 18
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
        
        $__internal_182391e7b6849635660e13ca83cf1ea9ba97dc46720beb7e75bfe52f365aa96a->leave($__internal_182391e7b6849635660e13ca83cf1ea9ba97dc46720beb7e75bfe52f365aa96a_prof);

    }

    // line 29
    public function block_a2lix_translations_gedmo_widget($context, array $blocks = array())
    {
        $__internal_6a0fee1ee5cf74ad650cf0903b27188397f07c72be70ecc07d98f2c9eb892a89 = $this->env->getExtension("native_profiler");
        $__internal_6a0fee1ee5cf74ad650cf0903b27188397f07c72be70ecc07d98f2c9eb892a89->enter($__internal_6a0fee1ee5cf74ad650cf0903b27188397f07c72be70ecc07d98f2c9eb892a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_gedmo_widget"));

        // line 30
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "simple_way", array())) {
            // line 31
            echo "        ";
            $this->displayBlock("a2lix_translations_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "        <div class=\"a2lix_translations tabbable\">
            <ul class=\"a2lix_translationsLocales nav nav-tabs\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 36
                echo "                ";
                $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
                // line 37
                echo "
                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 39
                    echo "                    ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 40
                    echo "
                    <li ";
                    // line 41
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                        <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                    // line 42
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo "\">
                            ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                    echo " ";
                    if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                        echo "[Default]";
                    }
                    // line 44
                    echo "                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>

            <div class=\"a2lix_translationsFields tab-content\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 53
                    echo "                    ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 54
                    echo "
                    <div class=\"a2lix_translationsFields-";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo " tab-pane ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "active";
                    }
                    echo "\">
                        ";
                    // line 56
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_6a0fee1ee5cf74ad650cf0903b27188397f07c72be70ecc07d98f2c9eb892a89->leave($__internal_6a0fee1ee5cf74ad650cf0903b27188397f07c72be70ecc07d98f2c9eb892a89_prof);

    }

    // line 65
    public function block_a2lix_translationsForms_widget($context, array $blocks = array())
    {
        $__internal_f37a9b2cbf1f5e7f696a55bbca5d0493d2689c5a0712f62e83ba5cc7e3fb24e1 = $this->env->getExtension("native_profiler");
        $__internal_f37a9b2cbf1f5e7f696a55bbca5d0493d2689c5a0712f62e83ba5cc7e3fb24e1->enter($__internal_f37a9b2cbf1f5e7f696a55bbca5d0493d2689c5a0712f62e83ba5cc7e3fb24e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translationsForms_widget"));

        // line 66
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
        
        $__internal_f37a9b2cbf1f5e7f696a55bbca5d0493d2689c5a0712f62e83ba5cc7e3fb24e1->leave($__internal_f37a9b2cbf1f5e7f696a55bbca5d0493d2689c5a0712f62e83ba5cc7e3fb24e1_prof);

    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 66,  247 => 65,  237 => 60,  231 => 59,  222 => 56,  214 => 55,  211 => 54,  208 => 53,  203 => 52,  199 => 51,  194 => 48,  188 => 47,  180 => 44,  174 => 43,  170 => 42,  164 => 41,  161 => 40,  158 => 39,  154 => 38,  151 => 37,  148 => 36,  144 => 35,  140 => 33,  134 => 31,  131 => 30,  125 => 29,  116 => 23,  107 => 20,  99 => 19,  96 => 18,  93 => 17,  89 => 16,  84 => 13,  74 => 9,  70 => 8,  64 => 7,  61 => 6,  58 => 5,  54 => 4,  50 => 2,  44 => 1,  37 => 65,  34 => 64,  32 => 29,  27 => 26,  25 => 1,);
    }
}
/* {% block a2lix_translations_widget %}*/
/*     <div class="a2lix_translations tabbable">*/
/*         <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*         {% for translationsFields in form %}*/
/*             {% set locale = translationsFields.vars.name %}*/
/* */
/*             <li {% if app.request.locale == locale %}class="active"{% endif %}>*/
/*                 <a href="javascript:void(0)" data-toggle="tab" data-target=".a2lix_translationsFields-{{ locale }}">*/
/*                    {{ locale|capitalize }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*         <div class="a2lix_translationsFields tab-content">*/
/*         {% for translationsFields in form %}*/
/*             {% set locale = translationsFields.vars.name %}*/
/* */
/*             <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}">*/
/*                 {{ form_widget(translationsFields) }}*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block a2lix_translations_gedmo_widget %}*/
/*     {% if form.vars.simple_way %}*/
/*         {{ block('a2lix_translations_widget') }}*/
/*     {% else %}*/
/*         <div class="a2lix_translations tabbable">*/
/*             <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*             {% for translationsLocales in form %}*/
/*                 {% set isDefaultLocale = 'defaultLocale' == translationsLocales.vars.name %}*/
/* */
/*                 {% for translationsFields in translationsLocales %}*/
/*                     {% set locale = translationsFields.vars.name %}*/
/* */
/*                     <li {% if app.request.locale == locale %}class="active"{% endif %}>*/
/*                         <a href="javascript:void(0)" data-toggle="tab" data-target=".a2lix_translationsFields-{{ locale }}">*/
/*                             {{ locale|capitalize }} {% if isDefaultLocale %}[Default]{% endif %}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*             </ul>*/
/* */
/*             <div class="a2lix_translationsFields tab-content">*/
/*             {% for translationsLocales in form %}*/
/*                 {% for translationsFields in translationsLocales %}*/
/*                     {% set locale = translationsFields.vars.name %}*/
/* */
/*                     <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}">*/
/*                         {{ form_widget(translationsFields) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block a2lix_translationsForms_widget %}*/
/*     {{ block('a2lix_translations_widget') }}*/
/* {% endblock %}*/
/* */
