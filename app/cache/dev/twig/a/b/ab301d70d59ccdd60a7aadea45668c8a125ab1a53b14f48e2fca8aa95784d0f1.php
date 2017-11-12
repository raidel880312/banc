<?php

/* AdminBundle:includes:admin_js.html.twig */
class __TwigTemplate_5e3bc6b3da3438508b5e3230d1151bec3e731f2623eb7da4dabf19afe4628fd7 extends Twig_Template
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
        $__internal_756e0372aa02bb20d4719340323ad82a8dd392809b713be4ddd556fd84aa5199 = $this->env->getExtension("native_profiler");
        $__internal_756e0372aa02bb20d4719340323ad82a8dd392809b713be4ddd556fd84aa5199->enter($__internal_756e0372aa02bb20d4719340323ad82a8dd392809b713be4ddd556fd84aa5199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:includes:admin_js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {

        \$('select.select2').select2();

        \$('textarea.editor').each(function (e) {
            \$(this).ckeditor();
            CKEDITOR.editorConfig = function (config) {
                config.toolbarGroups = [
                    {name: 'clipboard', groups: ['clipboard', 'undo']},
                    {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                    {name: 'links', groups: ['links']},
                    {name: 'insert', groups: ['insert']},
                    {name: 'forms', groups: ['forms']},
                    {name: 'tools', groups: ['tools']},
                    {name: 'document', groups: ['mode', 'document', 'doctools']},
                    {name: 'others', groups: ['others']},
                    '/',
                    {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                    {name: 'styles', groups: ['styles']},
                    {name: 'colors', groups: ['colors']},
                    {name: 'about', groups: ['about']}
                ];

                config.removeButtons = 'Underline,Scayt';
            };
        });

        \$('#_ok').on('click', function () {
            App.loader(55);
            \$('#form-";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "html", null, true);
        echo "-edit').submit();
        });

        \$('#form-";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "html", null, true);
        echo "-edit').ajaxForm({
            dataType: 'json',
//            beforeSubmit: validate,
            success: function (r) {
                if (r.success) {
                    \$('#viewer').empty();
                    App.alert(r.message);
                    \$('.page-content').html(r.view);
                    \$('#grid-view').dataTable();
                } else {
                    \$('#form-error').toggle();
                    \$('#form-error-detail').html(r.error.message);
                }
            }
        });

        function validate(formData) {
            for (var i = 0; i < formData.length; i++) {
                if (formData[i].required == true && formData[i].value == '') {
                    var name = formData[i].name;
                    var parent = \$('input[name*=\"' + name + '\"]').parent();
                    \$(parent).addClass('state-error');
                    \$(parent).find('span.error').toggle();
                    return false;
                }
            }
        }

        \$('#grid-view').dataTable();
    });
</script>";
        
        $__internal_756e0372aa02bb20d4719340323ad82a8dd392809b713be4ddd556fd84aa5199->leave($__internal_756e0372aa02bb20d4719340323ad82a8dd392809b713be4ddd556fd84aa5199_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:includes:admin_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 35,  55 => 32,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/* */
/*         $('select.select2').select2();*/
/* */
/*         $('textarea.editor').each(function (e) {*/
/*             $(this).ckeditor();*/
/*             CKEDITOR.editorConfig = function (config) {*/
/*                 config.toolbarGroups = [*/
/*                     {name: 'clipboard', groups: ['clipboard', 'undo']},*/
/*                     {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},*/
/*                     {name: 'links', groups: ['links']},*/
/*                     {name: 'insert', groups: ['insert']},*/
/*                     {name: 'forms', groups: ['forms']},*/
/*                     {name: 'tools', groups: ['tools']},*/
/*                     {name: 'document', groups: ['mode', 'document', 'doctools']},*/
/*                     {name: 'others', groups: ['others']},*/
/*                     '/',*/
/*                     {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},*/
/*                     {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},*/
/*                     {name: 'styles', groups: ['styles']},*/
/*                     {name: 'colors', groups: ['colors']},*/
/*                     {name: 'about', groups: ['about']}*/
/*                 ];*/
/* */
/*                 config.removeButtons = 'Underline,Scayt';*/
/*             };*/
/*         });*/
/* */
/*         $('#_ok').on('click', function () {*/
/*             App.loader(55);*/
/*             $('#form-{{ module }}-edit').submit();*/
/*         });*/
/* */
/*         $('#form-{{ module }}-edit').ajaxForm({*/
/*             dataType: 'json',*/
/* //            beforeSubmit: validate,*/
/*             success: function (r) {*/
/*                 if (r.success) {*/
/*                     $('#viewer').empty();*/
/*                     App.alert(r.message);*/
/*                     $('.page-content').html(r.view);*/
/*                     $('#grid-view').dataTable();*/
/*                 } else {*/
/*                     $('#form-error').toggle();*/
/*                     $('#form-error-detail').html(r.error.message);*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         function validate(formData) {*/
/*             for (var i = 0; i < formData.length; i++) {*/
/*                 if (formData[i].required == true && formData[i].value == '') {*/
/*                     var name = formData[i].name;*/
/*                     var parent = $('input[name*="' + name + '"]').parent();*/
/*                     $(parent).addClass('state-error');*/
/*                     $(parent).find('span.error').toggle();*/
/*                     return false;*/
/*                 }*/
/*             }*/
/*         }*/
/* */
/*         $('#grid-view').dataTable();*/
/*     });*/
/* </script>*/
