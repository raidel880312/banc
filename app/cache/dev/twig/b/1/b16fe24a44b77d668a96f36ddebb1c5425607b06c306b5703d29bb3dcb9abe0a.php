<?php

/* TransferBundle:Transfer:index.html.twig */
class __TwigTemplate_742ba9376c1c8f15c639f5d5fe5d7ec5f417f48abed03d26e60b77649d573387 extends Twig_Template
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
        $__internal_59ab539790ac2cc98cded1736ac94a3a7357a2e819ac46cae8c6bcfcbaf71c1f = $this->env->getExtension("native_profiler");
        $__internal_59ab539790ac2cc98cded1736ac94a3a7357a2e819ac46cae8c6bcfcbaf71c1f->enter($__internal_59ab539790ac2cc98cded1736ac94a3a7357a2e819ac46cae8c6bcfcbaf71c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:Transfer:index.html.twig"));

        // line 1
        $this->loadTemplate("AdminBundle:includes:admin_list.html.twig", "TransferBundle:Transfer:index.html.twig", 1)->display(array_merge($context, array("module" => "transfer", "title" => "transfer", "name" => "Transfer")));
        // line 2
        echo "

";
        
        $__internal_59ab539790ac2cc98cded1736ac94a3a7357a2e819ac46cae8c6bcfcbaf71c1f->leave($__internal_59ab539790ac2cc98cded1736ac94a3a7357a2e819ac46cae8c6bcfcbaf71c1f_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:Transfer:index.html.twig";
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
/* {% include 'AdminBundle:includes:admin_list.html.twig' with {'module': 'transfer', 'title':'transfer', 'name':'Transfer'} %}*/
/* */
/* */
/* */
