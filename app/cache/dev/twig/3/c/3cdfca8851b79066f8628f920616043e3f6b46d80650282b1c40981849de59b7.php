<?php

/* TransferBundle:AccountType:index.html.twig */
class __TwigTemplate_e3da39cdff533af44367d890c0c1b1233b9cf1595945a1abcae5cff0df758502 extends Twig_Template
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
        $__internal_a30d5b0cc6811e08dbc0752e3da7f74634019c6263eb6a167f28f880c8ab03cc = $this->env->getExtension("native_profiler");
        $__internal_a30d5b0cc6811e08dbc0752e3da7f74634019c6263eb6a167f28f880c8ab03cc->enter($__internal_a30d5b0cc6811e08dbc0752e3da7f74634019c6263eb6a167f28f880c8ab03cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:AccountType:index.html.twig"));

        // line 1
        $this->loadTemplate("AdminBundle:includes:admin_list.html.twig", "TransferBundle:AccountType:index.html.twig", 1)->display(array_merge($context, array("module" => "accounttype", "title" => "account type", "name" => "Transfer")));
        // line 2
        echo "

";
        
        $__internal_a30d5b0cc6811e08dbc0752e3da7f74634019c6263eb6a167f28f880c8ab03cc->leave($__internal_a30d5b0cc6811e08dbc0752e3da7f74634019c6263eb6a167f28f880c8ab03cc_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:AccountType:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% include 'AdminBundle:includes:admin_list.html.twig' with {'module': 'accounttype', 'title':'account type', 'name':'Transfer'} %}*/
/* */
/* */
/* */
