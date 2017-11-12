<?php

/* TransferBundle:Account:new.html.twig */
class __TwigTemplate_de1ae1703edada6642463f31a9b88ed938c93c6aad0d459dd9c339fd73e6b293 extends Twig_Template
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
        $__internal_221f87d819a1f3ced4d83acfaaceef5a9650a5bf381108e67bda06a58deb686c = $this->env->getExtension("native_profiler");
        $__internal_221f87d819a1f3ced4d83acfaaceef5a9650a5bf381108e67bda06a58deb686c->enter($__internal_221f87d819a1f3ced4d83acfaaceef5a9650a5bf381108e67bda06a58deb686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:Account:new.html.twig"));

        // line 1
        $this->loadTemplate("AdminBundle:includes:admin_cu.html.twig", "TransferBundle:Account:new.html.twig", 1)->display(array_merge($context, array("module" => "account", "entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edit_form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "action" => "create", "title" => "account", "name" => "transfer")));
        
        $__internal_221f87d819a1f3ced4d83acfaaceef5a9650a5bf381108e67bda06a58deb686c->leave($__internal_221f87d819a1f3ced4d83acfaaceef5a9650a5bf381108e67bda06a58deb686c_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:Account:new.html.twig";
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
/* {% include 'AdminBundle:includes:admin_cu.html.twig' with {'module': 'account', 'entity': entity, 'edit_form': edit_form, 'action': 'create', 'title':  'account', 'name':'transfer'} %}*/
