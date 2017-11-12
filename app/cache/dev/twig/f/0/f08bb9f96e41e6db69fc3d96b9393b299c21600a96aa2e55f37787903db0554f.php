<?php

/* TransferBundle:Transfer:new.html.twig */
class __TwigTemplate_43661aacc64a25e369e9d999114a22e47008b5184bcbcd839266e201bf388770 extends Twig_Template
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
        $__internal_584d797918c8d7c0a0a7103a461a6b7874bec8d58b7c11169c154edea4b58a3f = $this->env->getExtension("native_profiler");
        $__internal_584d797918c8d7c0a0a7103a461a6b7874bec8d58b7c11169c154edea4b58a3f->enter($__internal_584d797918c8d7c0a0a7103a461a6b7874bec8d58b7c11169c154edea4b58a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:Transfer:new.html.twig"));

        // line 1
        $this->loadTemplate("AdminBundle:includes:admin_cu.html.twig", "TransferBundle:Transfer:new.html.twig", 1)->display(array_merge($context, array("module" => "transfer", "entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edit_form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "action" => "create", "title" => "transfer", "name" => "Transfer")));
        
        $__internal_584d797918c8d7c0a0a7103a461a6b7874bec8d58b7c11169c154edea4b58a3f->leave($__internal_584d797918c8d7c0a0a7103a461a6b7874bec8d58b7c11169c154edea4b58a3f_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:Transfer:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'AdminBundle:includes:admin_cu.html.twig' with {'module': 'transfer', 'entity': entity, 'edit_form': edit_form, 'action': 'create', 'title':  'transfer', 'name':'Transfer'} %}*/
