<?php

/* AdminBundle:Default:formTemplate.html.twig */
class __TwigTemplate_896d3e6557dd4927211d8ede0622ac652a1b4899090e3151d9f626a614a557ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'email_widget' => array($this, 'block_email_widget'),
            'text_widget' => array($this, 'block_text_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'editor_widget' => array($this, 'block_editor_widget'),
            'datepicker_widget' => array($this, 'block_datepicker_widget'),
            'timepicker_widget' => array($this, 'block_timepicker_widget'),
            'rangepicker_widget' => array($this, 'block_rangepicker_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'select2_widget' => array($this, 'block_select2_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'file_widget' => array($this, 'block_file_widget'),
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8ad36b732aab911fd7274a2200420437d4e2336bebf5eed342fbbe78842c8eb = $this->env->getExtension("native_profiler");
        $__internal_c8ad36b732aab911fd7274a2200420437d4e2336bebf5eed342fbbe78842c8eb->enter($__internal_c8ad36b732aab911fd7274a2200420437d4e2336bebf5eed342fbbe78842c8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:formTemplate.html.twig"));

        // line 2
        $this->displayBlock('form_rows', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('email_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('text_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('password_widget', $context, $blocks);
        // line 97
        echo "


";
        // line 100
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('editor_widget', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('datepicker_widget', $context, $blocks);
        // line 162
        echo "    
";
        // line 163
        $this->displayBlock('timepicker_widget', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('rangepicker_widget', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 252
        echo "    
";
        // line 253
        $this->displayBlock('select2_widget', $context, $blocks);
        // line 274
        echo "
";
        // line 275
        $this->displayBlock('form_row', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('form_widget', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('file_widget', $context, $blocks);
        // line 326
        echo "
";
        // line 327
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        
        $__internal_c8ad36b732aab911fd7274a2200420437d4e2336bebf5eed342fbbe78842c8eb->leave($__internal_c8ad36b732aab911fd7274a2200420437d4e2336bebf5eed342fbbe78842c8eb_prof);

    }

    // line 2
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_6555d38d09f41648fd42bbecab8d74719ea628084471d48546dd3cb0093ca70c = $this->env->getExtension("native_profiler");
        $__internal_6555d38d09f41648fd42bbecab8d74719ea628084471d48546dd3cb0093ca70c->enter($__internal_6555d38d09f41648fd42bbecab8d74719ea628084471d48546dd3cb0093ca70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6555d38d09f41648fd42bbecab8d74719ea628084471d48546dd3cb0093ca70c->leave($__internal_6555d38d09f41648fd42bbecab8d74719ea628084471d48546dd3cb0093ca70c_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1c2a21a1fe385fb6cdd6f44d6ab1d20d3888a1ade45c85de2acddc6dcaf47343 = $this->env->getExtension("native_profiler");
        $__internal_1c2a21a1fe385fb6cdd6f44d6ab1d20d3888a1ade45c85de2acddc6dcaf47343->enter($__internal_1c2a21a1fe385fb6cdd6f44d6ab1d20d3888a1ade45c85de2acddc6dcaf47343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 14
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 15
                echo "        ";
            }
            // line 16
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 17
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 18
                echo "        ";
            }
            // line 19
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 20
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 21
                echo "        ";
            }
            // line 22
            echo "<label class=\"col-md-3 control-label\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c2a21a1fe385fb6cdd6f44d6ab1d20d3888a1ade45c85de2acddc6dcaf47343->leave($__internal_1c2a21a1fe385fb6cdd6f44d6ab1d20d3888a1ade45c85de2acddc6dcaf47343_prof);

    }

    // line 27
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b972445d4d063b4465160df0b10bc658a85d65ab02d68f452b3ca4f77a3ce5c5 = $this->env->getExtension("native_profiler");
        $__internal_b972445d4d063b4465160df0b10bc658a85d65ab02d68f452b3ca4f77a3ce5c5->enter($__internal_b972445d4d063b4465160df0b10bc658a85d65ab02d68f452b3ca4f77a3ce5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "

        ";
        // line 31
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password"))) {
            // line 32
            echo "            <div class=\"col-md-6\">
                ";
            // line 34
            echo "                ";
            // line 35
            echo "                ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
            // line 36
            echo "                <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
                ";
            // line 38
            echo "            </div>
        ";
        } else {
            // line 40
            echo "            ";
            if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file"))) {
                // line 41
                echo "
                ";
                // line 42
                $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
                // line 43
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
                // line 44
                echo "                <input type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " ";
                if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo "value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "\" ";
                }
                echo "/>
            ";
            } else {
                // line 46
                echo "                <div class=\"col-md-6\">
                    ";
                // line 47
                $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
                // line 48
                echo "                    ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
                // line 49
                echo "                    <input type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " ";
                if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo "value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "\" ";
                }
                echo "/>
                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b972445d4d063b4465160df0b10bc658a85d65ab02d68f452b3ca4f77a3ce5c5->leave($__internal_b972445d4d063b4465160df0b10bc658a85d65ab02d68f452b3ca4f77a3ce5c5_prof);

    }

    // line 56
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_39a263a1c84c1c1904c1abdc95df638f4bc26e290ac15a95cda853be5701cccb = $this->env->getExtension("native_profiler");
        $__internal_39a263a1c84c1c1904c1abdc95df638f4bc26e290ac15a95cda853be5701cccb->enter($__internal_39a263a1c84c1c1904c1abdc95df638f4bc26e290ac15a95cda853be5701cccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 57
        echo "    ";
        ob_start();
        // line 58
        echo "        <div class=\"col-md-6\">
            ";
        // line 60
        echo "            ";
        // line 61
        echo "            ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 62
        echo "            ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
        // line 63
        echo "            <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            ";
        // line 65
        echo "        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_39a263a1c84c1c1904c1abdc95df638f4bc26e290ac15a95cda853be5701cccb->leave($__internal_39a263a1c84c1c1904c1abdc95df638f4bc26e290ac15a95cda853be5701cccb_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_e1b8dfa40bb0e199039335061edf79fbea803b80135e1340182466708e1896ab = $this->env->getExtension("native_profiler");
        $__internal_e1b8dfa40bb0e199039335061edf79fbea803b80135e1340182466708e1896ab->enter($__internal_e1b8dfa40bb0e199039335061edf79fbea803b80135e1340182466708e1896ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 71
        echo "    ";
        ob_start();
        // line 72
        echo "        <div class=\"col-md-6\">
            ";
        // line 73
        $context["type"] = "text";
        // line 74
        echo "            ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
        // line 75
        echo "            <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            ";
        // line 76
        if (array_key_exists("required", $context)) {
            // line 77
            echo "                <span style=\"display:none\" class=\"error\">Required field</span>
            ";
        }
        // line 79
        echo "        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e1b8dfa40bb0e199039335061edf79fbea803b80135e1340182466708e1896ab->leave($__internal_e1b8dfa40bb0e199039335061edf79fbea803b80135e1340182466708e1896ab_prof);

    }

    // line 84
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_0b7dd7cf8e014c4970b768d5bbb35ceb7a5826c377ef23577e7b96605d6099b3 = $this->env->getExtension("native_profiler");
        $__internal_0b7dd7cf8e014c4970b768d5bbb35ceb7a5826c377ef23577e7b96605d6099b3->enter($__internal_0b7dd7cf8e014c4970b768d5bbb35ceb7a5826c377ef23577e7b96605d6099b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 85
        echo "    ";
        ob_start();
        // line 86
        echo "        <div class=\"col-md-6\">
            ";
        // line 87
        $context["type"] = "password";
        // line 88
        echo "            ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
        // line 89
        echo "            <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            ";
        // line 90
        if (array_key_exists("required", $context)) {
            // line 91
            echo "                <span style=\"display:none\" class=\"error\">Required field</span>
            ";
        }
        // line 93
        echo "        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0b7dd7cf8e014c4970b768d5bbb35ceb7a5826c377ef23577e7b96605d6099b3->leave($__internal_0b7dd7cf8e014c4970b768d5bbb35ceb7a5826c377ef23577e7b96605d6099b3_prof);

    }

    // line 100
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0b5535ecec06696b80cb717a575eda02386a92805070d1bfdae54ddc402bf9bf = $this->env->getExtension("native_profiler");
        $__internal_0b5535ecec06696b80cb717a575eda02386a92805070d1bfdae54ddc402bf9bf->enter($__internal_0b5535ecec06696b80cb717a575eda02386a92805070d1bfdae54ddc402bf9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 101
        echo "    ";
        ob_start();
        // line 102
        echo "        <div class=\"col-md-6\">
            <input type=\"checkbox\" ";
        // line 103
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0b5535ecec06696b80cb717a575eda02386a92805070d1bfdae54ddc402bf9bf->leave($__internal_0b5535ecec06696b80cb717a575eda02386a92805070d1bfdae54ddc402bf9bf_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_bedf56136394fd98d9d468aa242d4323ea0ff9136212025eba9433f086c96c42 = $this->env->getExtension("native_profiler");
        $__internal_bedf56136394fd98d9d468aa242d4323ea0ff9136212025eba9433f086c96c42->enter($__internal_bedf56136394fd98d9d468aa242d4323ea0ff9136212025eba9433f086c96c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 109
        echo "    ";
        ob_start();
        // line 110
        echo "        <div class=\"col-md-6\">
            <textarea ";
        // line 111
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bedf56136394fd98d9d468aa242d4323ea0ff9136212025eba9433f086c96c42->leave($__internal_bedf56136394fd98d9d468aa242d4323ea0ff9136212025eba9433f086c96c42_prof);

    }

    // line 116
    public function block_editor_widget($context, array $blocks = array())
    {
        $__internal_2c36b1ae2760b25cff5a14227ea71fe15b93a2cd9838d4c4397323d9b6849592 = $this->env->getExtension("native_profiler");
        $__internal_2c36b1ae2760b25cff5a14227ea71fe15b93a2cd9838d4c4397323d9b6849592->enter($__internal_2c36b1ae2760b25cff5a14227ea71fe15b93a2cd9838d4c4397323d9b6849592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "editor_widget"));

        // line 117
        echo "    ";
        ob_start();
        // line 118
        echo "        ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "title", array(), "any", true, true)) {
            // line 119
            echo "            <div class=\"col-md-12\" style=\"text-align: center\">
                <label>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "title", array()), "html", null, true);
            echo "</label>
            </div>
        ";
        }
        // line 123
        echo "        <div class=\"col-md-12\">

            <textarea ";
        // line 125
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
            <script type=\"text/javascript\">

            </script>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2c36b1ae2760b25cff5a14227ea71fe15b93a2cd9838d4c4397323d9b6849592->leave($__internal_2c36b1ae2760b25cff5a14227ea71fe15b93a2cd9838d4c4397323d9b6849592_prof);

    }

    // line 133
    public function block_datepicker_widget($context, array $blocks = array())
    {
        $__internal_99f06dadf8c447842dda94edeffe69b8798650eac8953c2432e1db2f6a8f5e72 = $this->env->getExtension("native_profiler");
        $__internal_99f06dadf8c447842dda94edeffe69b8798650eac8953c2432e1db2f6a8f5e72->enter($__internal_99f06dadf8c447842dda94edeffe69b8798650eac8953c2432e1db2f6a8f5e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datepicker_widget"));

        // line 134
        echo "    ";
        ob_start();
        // line 135
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datepicker/css/datepicker.css"), "html", null, true);
        echo "\"/>
        <style>
            .modal-open .datepicker {
                z-index: 10055 !important;
            }

        </style>
        <div class=\"col-md-6\">
            ";
        // line 143
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 144
        echo "            ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control input-sm"))));
        // line 145
        echo "            <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        </div>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function () {
                if (jQuery().datepicker) {
                    \$('.date-picker').datepicker({
                        format: 'yyyy-mm-dd',
                        autoclose: true
                    });
                    \$('body').removeClass(\"modal-open\"); // fix bug when inline picker is used in modal
                }
            });
        </script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_99f06dadf8c447842dda94edeffe69b8798650eac8953c2432e1db2f6a8f5e72->leave($__internal_99f06dadf8c447842dda94edeffe69b8798650eac8953c2432e1db2f6a8f5e72_prof);

    }

    // line 163
    public function block_timepicker_widget($context, array $blocks = array())
    {
        $__internal_41111fcae8a3f6eb998c362ce3ca67abc63f093861129bed7e89b9c9eb4705e7 = $this->env->getExtension("native_profiler");
        $__internal_41111fcae8a3f6eb998c362ce3ca67abc63f093861129bed7e89b9c9eb4705e7->enter($__internal_41111fcae8a3f6eb998c362ce3ca67abc63f093861129bed7e89b9c9eb4705e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "timepicker_widget"));

        // line 164
        echo "    ";
        ob_start();
        // line 165
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/clockface/css/clockface.css"), "html", null, true);
        echo "\"/>


        <style>
            .modal-open .clockface {
                z-index: 10055 !important;
            }
        </style>

        <div class=\"col-md-6\">
            ";
        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 176
        echo "            ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 177
        echo "            <input style=\"text-align: left\"
                   type=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        </div>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/clockface/js/clockface.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function () {
                if (jQuery().clockface) {
                    \$('.clockface').clockface();
                }
            });
        </script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_41111fcae8a3f6eb998c362ce3ca67abc63f093861129bed7e89b9c9eb4705e7->leave($__internal_41111fcae8a3f6eb998c362ce3ca67abc63f093861129bed7e89b9c9eb4705e7_prof);

    }

    // line 192
    public function block_rangepicker_widget($context, array $blocks = array())
    {
        $__internal_6b8bbafc3a12e2872cfc0096a3436a50e9415b21cb0bcbdd450e8cd161fcb17d = $this->env->getExtension("native_profiler");
        $__internal_6b8bbafc3a12e2872cfc0096a3436a50e9415b21cb0bcbdd450e8cd161fcb17d->enter($__internal_6b8bbafc3a12e2872cfc0096a3436a50e9415b21cb0bcbdd450e8cd161fcb17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rangepicker_widget"));

        // line 193
        echo "    ";
        ob_start();
        // line 194
        echo "        <link rel=\"stylesheet\" type=\"text/css\"
              href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap-daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\"/>
        <style>
            .modal-open .daterangepicker {
                z-index: 10055 !important;
            }

        </style>
        <div class=\"col-md-6\">
            ";
        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 204
        echo "            ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 205
        echo "            <input style=\"text-align: left\"
                   type=\"";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        </div>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap-daterangepicker/moment.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            jQuery(document).ready(function () {
                if (jQuery().daterangepicker) {
                    \$('.rangepicker').daterangepicker({
                                format: 'MM/DD/YYYY',
                                separator: ' to ',
                                startDate: moment().subtract('days', 29),
                                endDate: moment(),
                                minDate: '01/01/1900',
                                /*maxDate: '12/31/2014',*/
                            },
                            function (start, end) {
                            }
                    );
                    return;
                }
            });
        </script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6b8bbafc3a12e2872cfc0096a3436a50e9415b21cb0bcbdd450e8cd161fcb17d->leave($__internal_6b8bbafc3a12e2872cfc0096a3436a50e9415b21cb0bcbdd450e8cd161fcb17d_prof);

    }

    // line 232
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2d270b41cba3391d1465190fa0e5c467b9c35d4ee5a30f70c56d2ca264602d35 = $this->env->getExtension("native_profiler");
        $__internal_2d270b41cba3391d1465190fa0e5c467b9c35d4ee5a30f70c56d2ca264602d35->enter($__internal_2d270b41cba3391d1465190fa0e5c467b9c35d4ee5a30f70c56d2ca264602d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 233
        echo "    ";
        ob_start();
        // line 234
        echo "        <div class=\"col-md-6\">
            <select ";
        // line 235
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
                ";
        // line 236
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 237
            echo "                    <option ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            } else {
                echo " value=\"\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
                ";
        }
        // line 239
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 240
            echo "                    ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 241
            echo "                    ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                    ";
            // line 242
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 243
                echo "                        <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                    ";
            }
            // line 245
            echo "                ";
        }
        // line 246
        echo "                ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 247
        echo "                ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
            </select>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2d270b41cba3391d1465190fa0e5c467b9c35d4ee5a30f70c56d2ca264602d35->leave($__internal_2d270b41cba3391d1465190fa0e5c467b9c35d4ee5a30f70c56d2ca264602d35_prof);

    }

    // line 253
    public function block_select2_widget($context, array $blocks = array())
    {
        $__internal_40f9714ff39d5444ce50c69c283500d01fde329764ce2ec24dc15b473b3f7c4f = $this->env->getExtension("native_profiler");
        $__internal_40f9714ff39d5444ce50c69c283500d01fde329764ce2ec24dc15b473b3f7c4f->enter($__internal_40f9714ff39d5444ce50c69c283500d01fde329764ce2ec24dc15b473b3f7c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "select2_widget"));

        // line 254
        echo "    ";
        ob_start();
        // line 255
        echo "        <div class=\"col-md-6\">
            <select ";
        // line 256
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
                ";
        // line 257
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 258
            echo "                    <option ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            } else {
                echo " value=\"\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
                ";
        }
        // line 260
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 261
            echo "                    ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 262
            echo "                    ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                    ";
            // line 263
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 264
                echo "                        <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                    ";
            }
            // line 266
            echo "                ";
        }
        // line 267
        echo "                ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 268
        echo "                ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
            </select>
        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_40f9714ff39d5444ce50c69c283500d01fde329764ce2ec24dc15b473b3f7c4f->leave($__internal_40f9714ff39d5444ce50c69c283500d01fde329764ce2ec24dc15b473b3f7c4f_prof);

    }

    // line 275
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_367f7c80444af0b5ee44e76ce500adf327f88f6f2d414a15ae77ff095160883a = $this->env->getExtension("native_profiler");
        $__internal_367f7c80444af0b5ee44e76ce500adf327f88f6f2d414a15ae77ff095160883a->enter($__internal_367f7c80444af0b5ee44e76ce500adf327f88f6f2d414a15ae77ff095160883a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 276
        echo "    ";
        ob_start();
        // line 277
        echo "        <div class=\"form-group\">
            ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_367f7c80444af0b5ee44e76ce500adf327f88f6f2d414a15ae77ff095160883a->leave($__internal_367f7c80444af0b5ee44e76ce500adf327f88f6f2d414a15ae77ff095160883a_prof);

    }

    // line 285
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_ce0f13e618663f430ca6b60e205fbcb0572df78dc22ce3606eaf7aec54347eb8 = $this->env->getExtension("native_profiler");
        $__internal_ce0f13e618663f430ca6b60e205fbcb0572df78dc22ce3606eaf7aec54347eb8->enter($__internal_ce0f13e618663f430ca6b60e205fbcb0572df78dc22ce3606eaf7aec54347eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 286
        echo "    ";
        ob_start();
        // line 287
        echo "        ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 288
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 290
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 292
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ce0f13e618663f430ca6b60e205fbcb0572df78dc22ce3606eaf7aec54347eb8->leave($__internal_ce0f13e618663f430ca6b60e205fbcb0572df78dc22ce3606eaf7aec54347eb8_prof);

    }

    // line 295
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f443176dc7ab0eb4dad52490b7fe1ff2570ac34b69385d5c39d6338c4c36eb15 = $this->env->getExtension("native_profiler");
        $__internal_f443176dc7ab0eb4dad52490b7fe1ff2570ac34b69385d5c39d6338c4c36eb15->enter($__internal_f443176dc7ab0eb4dad52490b7fe1ff2570ac34b69385d5c39d6338c4c36eb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 296
        echo "    ";
        ob_start();
        // line 297
        echo "
        ";
        // line 298
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 299
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 301
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 302
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f443176dc7ab0eb4dad52490b7fe1ff2570ac34b69385d5c39d6338c4c36eb15->leave($__internal_f443176dc7ab0eb4dad52490b7fe1ff2570ac34b69385d5c39d6338c4c36eb15_prof);

    }

    // line 307
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_c3dae6390a9903c6f398a411140da57f1f6da9b27ff1a7de6720248c955970a8 = $this->env->getExtension("native_profiler");
        $__internal_c3dae6390a9903c6f398a411140da57f1f6da9b27ff1a7de6720248c955970a8->enter($__internal_c3dae6390a9903c6f398a411140da57f1f6da9b27ff1a7de6720248c955970a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 308
        echo "    ";
        ob_start();
        // line 309
        echo "        <div class=\"col-md-6\">
            <div class=\"fileupload fileupload-new\" data-provides=\"fileupload\">
            <span class=\"btn default btn-file\">
                <input type=\"file\" ";
        // line 312
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            </span>
            </div>
        </div>

        ";
        // line 317
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 318
            echo "            <div class=\"col-md-3\">
                <img class=\"img-thumbnail\" style=\"max-width: 120px;max-height: 120px\" src=\"";
            // line 319
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))), "html", null, true);
            echo "\"/>
            </div>
        ";
        }
        // line 322
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 324
        echo "
";
        
        $__internal_c3dae6390a9903c6f398a411140da57f1f6da9b27ff1a7de6720248c955970a8->leave($__internal_c3dae6390a9903c6f398a411140da57f1f6da9b27ff1a7de6720248c955970a8_prof);

    }

    // line 327
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        $__internal_83f2b1a24aa35ff393e692817c6b016da1dfdffd2e9a68408c9bf0756027ba99 = $this->env->getExtension("native_profiler");
        $__internal_83f2b1a24aa35ff393e692817c6b016da1dfdffd2e9a68408c9bf0756027ba99->enter($__internal_83f2b1a24aa35ff393e692817c6b016da1dfdffd2e9a68408c9bf0756027ba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_captcha_widget"));

        // line 328
        echo "
    <img id=\"";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_image\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "\"/>
    ";
        // line 331
        echo "    <a id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_refresh\">Refresh</a>
    ";
        // line 332
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            ";
        // line 337
        echo "            \$('#";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_refresh').click(function () {
                \$('#";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_image').attr('src', '";
        echo $this->env->getExtension('routing')->getPath("genemu_captcha_refresh");
        echo "?' + Math.random());
            });
        });
    </script>


";
        
        $__internal_83f2b1a24aa35ff393e692817c6b016da1dfdffd2e9a68408c9bf0756027ba99->leave($__internal_83f2b1a24aa35ff393e692817c6b016da1dfdffd2e9a68408c9bf0756027ba99_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:formTemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1103 => 338,  1098 => 337,  1091 => 332,  1086 => 331,  1074 => 329,  1071 => 328,  1065 => 327,  1057 => 324,  1053 => 322,  1047 => 319,  1044 => 318,  1042 => 317,  1028 => 312,  1023 => 309,  1020 => 308,  1014 => 307,  1003 => 302,  998 => 301,  992 => 299,  990 => 298,  987 => 297,  984 => 296,  978 => 295,  970 => 292,  964 => 290,  958 => 288,  955 => 287,  952 => 286,  946 => 285,  935 => 280,  931 => 279,  927 => 278,  924 => 277,  921 => 276,  915 => 275,  901 => 268,  898 => 267,  895 => 266,  889 => 264,  887 => 263,  882 => 262,  879 => 261,  876 => 260,  861 => 258,  859 => 257,  852 => 256,  849 => 255,  846 => 254,  840 => 253,  827 => 247,  824 => 246,  821 => 245,  815 => 243,  813 => 242,  808 => 241,  805 => 240,  802 => 239,  787 => 237,  785 => 236,  778 => 235,  775 => 234,  772 => 233,  766 => 232,  737 => 209,  733 => 208,  720 => 206,  717 => 205,  714 => 204,  712 => 203,  701 => 195,  698 => 194,  695 => 193,  689 => 192,  671 => 180,  658 => 178,  655 => 177,  652 => 176,  650 => 175,  636 => 165,  633 => 164,  627 => 163,  605 => 147,  591 => 145,  588 => 144,  586 => 143,  574 => 135,  571 => 134,  565 => 133,  549 => 125,  545 => 123,  539 => 120,  536 => 119,  533 => 118,  530 => 117,  524 => 116,  511 => 111,  508 => 110,  505 => 109,  499 => 108,  480 => 103,  477 => 102,  474 => 101,  468 => 100,  458 => 93,  454 => 91,  452 => 90,  439 => 89,  436 => 88,  434 => 87,  431 => 86,  428 => 85,  422 => 84,  412 => 79,  408 => 77,  406 => 76,  393 => 75,  390 => 74,  388 => 73,  385 => 72,  382 => 71,  376 => 70,  366 => 65,  353 => 63,  350 => 62,  347 => 61,  345 => 60,  342 => 58,  339 => 57,  333 => 56,  325 => 53,  322 => 52,  307 => 49,  304 => 48,  302 => 47,  299 => 46,  285 => 44,  282 => 43,  280 => 42,  277 => 41,  274 => 40,  270 => 38,  257 => 36,  254 => 35,  252 => 34,  249 => 32,  247 => 31,  243 => 29,  240 => 28,  234 => 27,  209 => 22,  206 => 21,  203 => 20,  200 => 19,  197 => 18,  194 => 17,  191 => 16,  188 => 15,  185 => 14,  182 => 13,  179 => 12,  177 => 11,  171 => 10,  163 => 7,  154 => 5,  149 => 4,  146 => 3,  140 => 2,  133 => 327,  130 => 326,  128 => 307,  125 => 306,  123 => 295,  120 => 294,  118 => 285,  115 => 284,  113 => 275,  110 => 274,  108 => 253,  105 => 252,  103 => 232,  100 => 231,  98 => 192,  95 => 191,  93 => 163,  90 => 162,  88 => 133,  85 => 132,  83 => 116,  80 => 115,  78 => 108,  75 => 107,  73 => 100,  68 => 97,  66 => 84,  63 => 83,  61 => 70,  58 => 69,  56 => 56,  53 => 55,  51 => 27,  48 => 26,  46 => 10,  43 => 9,  41 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% block form_rows %}*/
/*     {% spaceless %}*/
/*         {% for child in form %}*/
/*             {{ form_row(child) }}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock form_rows %}*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not sameas(false) %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/* <label class="col-md-3 control-label" {% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% spaceless %}*/
/* */
/* */
/*         {% if type is defined and type=='password' %}*/
/*             <div class="col-md-6">*/
/*                 {#<div class="input-icon">#}*/
/*                 {#<span class="input-icon"><i class="icon-user"></i></span>#}*/
/*                 {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*                 <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*                 {#</div>#}*/
/*             </div>*/
/*         {% else %}*/
/*             {% if type is defined and type=='file' %}*/
/* */
/*                 {% set type = type|default('text') %}*/
/*                 {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*                 <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*             {% else %}*/
/*                 <div class="col-md-6">*/
/*                     {% set type = type|default('text') %}*/
/*                     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*                     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block email_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             {#<div class="input-icon">#}*/
/*             {#<span class="input-icon"><i class="icon-envelope"></i></span>#}*/
/*             {% set type = type|default('text') %}*/
/*             {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*             <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*             {#</div>#}*/
/*         </div>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock email_widget %}*/
/* */
/* {% block text_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             {% set type = 'text' %}*/
/*             {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*             <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*             {% if required is defined %}*/
/*                 <span style="display:none" class="error">Required field</span>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock text_widget %}*/
/* */
/* {% block password_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             {% set type = 'password' %}*/
/*             {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*             <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*             {% if required is defined %}*/
/*                 <span style="display:none" class="error">Required field</span>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock password_widget %}*/
/* */
/* */
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block editor_widget %}*/
/*     {% spaceless %}*/
/*         {% if attr.title is defined %}*/
/*             <div class="col-md-12" style="text-align: center">*/
/*                 <label>{{ attr.title }}</label>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="col-md-12">*/
/* */
/*             <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/*             <script type="text/javascript">*/
/* */
/*             </script>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock editor_widget %}*/
/* */
/* {% block datepicker_widget %}*/
/*     {% spaceless %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datepicker/css/datepicker.css') }}"/>*/
/*         <style>*/
/*             .modal-open .datepicker {*/
/*                 z-index: 10055 !important;*/
/*             }*/
/* */
/*         </style>*/
/*         <div class="col-md-6">*/
/*             {% set type = type|default('text') %}*/
/*             {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control input-sm')|trim}) %}*/
/*             <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         </div>*/
/*         <script src="{{ asset('vendors/datepicker/js/bootstrap-datepicker.js') }}"></script>*/
/*         <script type="text/javascript">*/
/*             jQuery(document).ready(function () {*/
/*                 if (jQuery().datepicker) {*/
/*                     $('.date-picker').datepicker({*/
/*                         format: 'yyyy-mm-dd',*/
/*                         autoclose: true*/
/*                     });*/
/*                     $('body').removeClass("modal-open"); // fix bug when inline picker is used in modal*/
/*                 }*/
/*             });*/
/*         </script>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock datepicker_widget %}*/
/*     */
/* {% block timepicker_widget %}*/
/*     {% spaceless %}*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('vendor/clockface/css/clockface.css') }}"/>*/
/* */
/* */
/*         <style>*/
/*             .modal-open .clockface {*/
/*                 z-index: 10055 !important;*/
/*             }*/
/*         </style>*/
/* */
/*         <div class="col-md-6">*/
/*             {% set type = type|default('text') %}*/
/*             {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*             <input style="text-align: left"*/
/*                    type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         </div>*/
/*         <script src="{{ asset('vendor/clockface/js/clockface.js') }}"></script>*/
/*         <script type="text/javascript">*/
/*             jQuery(document).ready(function () {*/
/*                 if (jQuery().clockface) {*/
/*                     $('.clockface').clockface();*/
/*                 }*/
/*             });*/
/*         </script>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock timepicker_widget %}*/
/* */
/* {% block rangepicker_widget %}*/
/*     {% spaceless %}*/
/*         <link rel="stylesheet" type="text/css"*/
/*               href="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker-bs3.css') }}"/>*/
/*         <style>*/
/*             .modal-open .daterangepicker {*/
/*                 z-index: 10055 !important;*/
/*             }*/
/* */
/*         </style>*/
/*         <div class="col-md-6">*/
/*             {% set type = type|default('text') %}*/
/*             {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*             <input style="text-align: left"*/
/*                    type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         </div>*/
/*         <script src="{{ asset('vendor/bootstrap-daterangepicker/moment.js') }}"></script>*/
/*         <script src="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>*/
/*         <script type="text/javascript">*/
/*             jQuery(document).ready(function () {*/
/*                 if (jQuery().daterangepicker) {*/
/*                     $('.rangepicker').daterangepicker({*/
/*                                 format: 'MM/DD/YYYY',*/
/*                                 separator: ' to ',*/
/*                                 startDate: moment().subtract('days', 29),*/
/*                                 endDate: moment(),*/
/*                                 minDate: '01/01/1900',*/
/*                                 /*maxDate: '12/31/2014',*//* */
/*                             },*/
/*                             function (start, end) {*/
/*                             }*/
/*                     );*/
/*                     return;*/
/*                 }*/
/*             });*/
/*         </script>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock rangepicker_widget %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*                 {% if empty_value is not none %}*/
/*                     <option {% if required %} disabled="disabled"{% if value is empty %} selected="selected"{% endif %}{% else %} value=""{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>*/
/*                 {% endif %}*/
/*                 {% if preferred_choices|length > 0 %}*/
/*                     {% set options = preferred_choices %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                     {% if choices|length > 0 and separator is not none %}*/
/*                         <option disabled="disabled">{{ separator }}</option>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 {% set options = choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*             </select>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/*     */
/* {% block select2_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*                 {% if empty_value is not none %}*/
/*                     <option {% if required %} disabled="disabled"{% if value is empty %} selected="selected"{% endif %}{% else %} value=""{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>*/
/*                 {% endif %}*/
/*                 {% if preferred_choices|length > 0 %}*/
/*                     {% set options = preferred_choices %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                     {% if choices|length > 0 and separator is not none %}*/
/*                         <option disabled="disabled">{{ separator }}</option>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 {% set options = choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*             </select>*/
/*         </div>*/
/* */
/*     {% endspaceless %}*/
/* {% endblock select2_widget %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group">*/
/*             {{ form_label(form) }}*/
/*             {{ form_errors(form) }}*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_widget %}*/
/*     {% spaceless %}*/
/*         {% if compound %}*/
/*             {{ block('form_widget_compound') }}*/
/*         {% else %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_compound %}*/
/*     {% spaceless %}*/
/* */
/*         {% if form.parent is empty %}*/
/*             {{ form_errors(form) }}*/
/*         {% endif %}*/
/*         {{ block('form_rows') }}*/
/*         {{ form_rest(form) }}*/
/* */
/*     {% endspaceless %}*/
/* {% endblock form_widget_compound %}*/
/* */
/* {% block file_widget %}*/
/*     {% spaceless %}*/
/*         <div class="col-md-6">*/
/*             <div class="fileupload fileupload-new" data-provides="fileupload">*/
/*             <span class="btn default btn-file">*/
/*                 <input type="file" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*             </span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if image_url is not null %}*/
/*             <div class="col-md-3">*/
/*                 <img class="img-thumbnail" style="max-width: 120px;max-height: 120px" src="{{ asset(image_url) }}"/>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     {% endspaceless %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block genemu_captcha_widget %}*/
/* */
/*     <img id="{{ id }}_image" src="{{ src }}" width="{{ width }}" height="{{ height }}" title="{{ name|trans }}"/>*/
/*     {# We're putting a link there #}*/
/*     <a id="{{ id }}_refresh">Refresh</a>*/
/*     {{ block("form_widget_simple") }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*             {# Image will be refreshed when the link is clicked #}*/
/*             $('#{{ id }}_refresh').click(function () {*/
/*                 $('#{{ id }}_image').attr('src', '{{ path('genemu_captcha_refresh') }}?' + Math.random());*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
