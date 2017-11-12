<?php

/* AdminBundle:Default:dashboard.html.twig */
class __TwigTemplate_6a5ef8c2031d0c30ed8925277dadb9713c0930f3d59f467450788e94d0d2a339 extends Twig_Template
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
        $__internal_4281fa6777e8b533b61d8a9560c2e1b0506c87fea35fb752fbdf80e06e7183fc = $this->env->getExtension("native_profiler");
        $__internal_4281fa6777e8b533b61d8a9560c2e1b0506c87fea35fb752fbdf80e06e7183fc->enter($__internal_4281fa6777e8b533b61d8a9560c2e1b0506c87fea35fb752fbdf80e06e7183fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:dashboard.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <div id=\"tab-general\">
        <div id=\"sum_box\" class=\"row mbl\">
            ";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["accounts"]) ? $context["accounts"] : $this->getContext($context, "accounts"))) > 0)) {
            // line 5
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) ? $context["accounts"] : $this->getContext($context, "accounts")));
            foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
                // line 6
                echo "                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"panel income db mbm shadow\">
                            <div class=\"panel-body\">
                                <p><strong>Owner: </strong> ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "user", array()), "html", null, true);
                echo "</p>
                                <p><strong>Account number: </strong> ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "id", array()), "html", null, true);
                echo "</p>
                                <p><strong>Current balance: </strong> ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "balance", array()), "html", null, true);
                echo "</p>

                                <p class=\"icon\">
                                    <i class=\"icon fa fa-money\"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                <h1>
                    There are not accounts created yet.
                </h1>
            ";
        }
        // line 25
        echo "
        </div>

        <div class=\"row mbl\">
            <div class=\"col-lg-8\">

            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.slimscroll').slimscroll({
                color: '#428bca',
            });
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4281fa6777e8b533b61d8a9560c2e1b0506c87fea35fb752fbdf80e06e7183fc->leave($__internal_4281fa6777e8b533b61d8a9560c2e1b0506c87fea35fb752fbdf80e06e7183fc_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  66 => 21,  63 => 20,  48 => 11,  44 => 10,  40 => 9,  35 => 6,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% spaceless %}*/
/*     <div id="tab-general">*/
/*         <div id="sum_box" class="row mbl">*/
/*             {% if accounts|length > 0 %}*/
/*                 {% for account in accounts %}*/
/*                     <div class="col-sm-6 col-md-3">*/
/*                         <div class="panel income db mbm shadow">*/
/*                             <div class="panel-body">*/
/*                                 <p><strong>Owner: </strong> {{ account.user }}</p>*/
/*                                 <p><strong>Account number: </strong> {{ account.id }}</p>*/
/*                                 <p><strong>Current balance: </strong> {{ account.balance }}</p>*/
/* */
/*                                 <p class="icon">*/
/*                                     <i class="icon fa fa-money"></i>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 <h1>*/
/*                     There are not accounts created yet.*/
/*                 </h1>*/
/*             {% endif %}*/
/* */
/*         </div>*/
/* */
/*         <div class="row mbl">*/
/*             <div class="col-lg-8">*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $('.slimscroll').slimscroll({*/
/*                 color: '#428bca',*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
