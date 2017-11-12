<?php

/* AdminBundle:includes:custom_links.html.twig */
class __TwigTemplate_7054bd9356685b48deade482a4c6dc7af575315e72384d8453a31a32a7f9b86f extends Twig_Template
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
        $__internal_7e4d68eb30c8a95b6409c425a5fff7ebb3b2d65b956785c9ff912734a9875659 = $this->env->getExtension("native_profiler");
        $__internal_7e4d68eb30c8a95b6409c425a5fff7ebb3b2d65b956785c9ff912734a9875659->enter($__internal_7e4d68eb30c8a95b6409c425a5fff7ebb3b2d65b956785c9ff912734a9875659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:includes:custom_links.html.twig"));

        // line 2
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 3
            echo "
    <li>
        <a class=\"link\" href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("transfer_account_index");
            echo "\">
            <i class=\"fa fa-money fa-fw\">
            </i>
            <span class=\"menu-title\">Account</span>
        </a>
    </li>

    <li>
        <a class=\"link\" href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("transfer_accounttype_index");
            echo "\">
            <i class=\"fa fa-list-ol fa-fw\">
            </i>
            <span class=\"menu-title\">Account type</span>
        </a>
    </li>
";
        }
        // line 20
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_CLIENT")) {
            // line 21
            echo "        <li>
            <a class=\"link\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("transfer_transfer_index");
            echo "\">
                <i class=\"fa fa-exchange fa-fw\">
                </i>
                <span class=\"menu-title\">Transfer</span>
            </a>
        </li>
    ";
        }
        // line 29
        echo "
";
        
        $__internal_7e4d68eb30c8a95b6409c425a5fff7ebb3b2d65b956785c9ff912734a9875659->leave($__internal_7e4d68eb30c8a95b6409c425a5fff7ebb3b2d65b956785c9ff912734a9875659_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:includes:custom_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  55 => 22,  52 => 21,  49 => 20,  39 => 13,  28 => 5,  24 => 3,  22 => 2,);
    }
}
/* {#Menu links#}*/
/* {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*     <li>*/
/*         <a class="link" href="{{ path('transfer_account_index') }}">*/
/*             <i class="fa fa-money fa-fw">*/
/*             </i>*/
/*             <span class="menu-title">Account</span>*/
/*         </a>*/
/*     </li>*/
/* */
/*     <li>*/
/*         <a class="link" href="{{ path('transfer_accounttype_index') }}">*/
/*             <i class="fa fa-list-ol fa-fw">*/
/*             </i>*/
/*             <span class="menu-title">Account type</span>*/
/*         </a>*/
/*     </li>*/
/* {% endif %}*/
/*     {% if is_granted('ROLE_CLIENT') %}*/
/*         <li>*/
/*             <a class="link" href="{{ path('transfer_transfer_index') }}">*/
/*                 <i class="fa fa-exchange fa-fw">*/
/*                 </i>*/
/*                 <span class="menu-title">Transfer</span>*/
/*             </a>*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* */
