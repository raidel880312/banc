<?php

/* TransferBundle:Account:index.html.twig */
class __TwigTemplate_5334089b4e26a4d688cf39e2346787a8e32f41d985bc7d9a99c8482de4c63083 extends Twig_Template
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
        $__internal_8b84b943fefa7c877bceb3946095cdd9f3cb82e0b1526dcaeaf54f846c20aac8 = $this->env->getExtension("native_profiler");
        $__internal_8b84b943fefa7c877bceb3946095cdd9f3cb82e0b1526dcaeaf54f846c20aac8->enter($__internal_8b84b943fefa7c877bceb3946095cdd9f3cb82e0b1526dcaeaf54f846c20aac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:Account:index.html.twig"));

        // line 1
        $this->loadTemplate("AdminBundle:includes:admin_list.html.twig", "TransferBundle:Account:index.html.twig", 1)->display(array_merge($context, array("module" => "account", "title" => "account", "name" => "transfer")));
        // line 2
        echo "

";
        
        $__internal_8b84b943fefa7c877bceb3946095cdd9f3cb82e0b1526dcaeaf54f846c20aac8->leave($__internal_8b84b943fefa7c877bceb3946095cdd9f3cb82e0b1526dcaeaf54f846c20aac8_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:Account:index.html.twig";
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
/* {% include 'AdminBundle:includes:admin_list.html.twig' with {'module': 'account', 'title':'account', 'name':'transfer'} %}*/
/* */
/* */
/* */
