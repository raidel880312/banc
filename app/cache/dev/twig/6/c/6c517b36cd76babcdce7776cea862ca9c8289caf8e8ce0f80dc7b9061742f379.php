<?php

/* TransferBundle:AccountType:new.html.twig */
class __TwigTemplate_541070b9189db9e46d5f596cfa4e4702f242c9b5659f94878e9c8ab4dba51aff extends Twig_Template
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
        $__internal_9cc8cec01629710c222b053af2b004f0bf5caba3c18f31129ace34077ff14143 = $this->env->getExtension("native_profiler");
        $__internal_9cc8cec01629710c222b053af2b004f0bf5caba3c18f31129ace34077ff14143->enter($__internal_9cc8cec01629710c222b053af2b004f0bf5caba3c18f31129ace34077ff14143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:AccountType:new.html.twig"));

        // line 1
        $this->loadTemplate("AdminBundle:includes:admin_cu.html.twig", "TransferBundle:AccountType:new.html.twig", 1)->display(array_merge($context, array("module" => "accounttype", "entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edit_form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "action" => "create", "title" => "Account type", "name" => "Transfer")));
        
        $__internal_9cc8cec01629710c222b053af2b004f0bf5caba3c18f31129ace34077ff14143->leave($__internal_9cc8cec01629710c222b053af2b004f0bf5caba3c18f31129ace34077ff14143_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:AccountType:new.html.twig";
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
/* {% include 'AdminBundle:includes:admin_cu.html.twig' with {'module': 'accounttype', 'entity': entity, 'edit_form': edit_form, 'action': 'create', 'title':  'Account type', 'name':'Transfer'} %}*/
