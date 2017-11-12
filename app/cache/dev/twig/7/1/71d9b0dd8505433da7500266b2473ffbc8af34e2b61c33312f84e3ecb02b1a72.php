<?php

/* TransferBundle:Transfer:show.html.twig */
class __TwigTemplate_14dbd51a3b3ab2055e494ef336f5d3db7998c80dd3327f31265a2584cbf72c7c extends Twig_Template
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
        $__internal_c0cc09f7bd03d3e41dc79d4b0126cf60d2ada8445cb3efc529ad60cdfe09a17c = $this->env->getExtension("native_profiler");
        $__internal_c0cc09f7bd03d3e41dc79d4b0126cf60d2ada8445cb3efc529ad60cdfe09a17c->enter($__internal_c0cc09f7bd03d3e41dc79d4b0126cf60d2ada8445cb3efc529ad60cdfe09a17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TransferBundle:Transfer:show.html.twig"));

        // line 1
        echo "<table class=\"table table-hover table-bordered bg-white\">
    <thead>
    <tr>
        <th colspan=\"2\">Transfer</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td> Origin account</td>
        <td> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getOriginAccount", array(), "method"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
        <td> Destiny account</td>
        <td> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getDestinyAccount", array(), "method"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
        <td> Amount</td>
        <td> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "amount", array()), "html", null, true);
        echo "</td>
    </tr>

    <tr>
        <td> Description</td>
        <td> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <td> Date</td>
        <td> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "html", null, true);
        echo "</td>
    </tr>

    </tbody>
</table>
";
        
        $__internal_c0cc09f7bd03d3e41dc79d4b0126cf60d2ada8445cb3efc529ad60cdfe09a17c->leave($__internal_c0cc09f7bd03d3e41dc79d4b0126cf60d2ada8445cb3efc529ad60cdfe09a17c_prof);

    }

    public function getTemplateName()
    {
        return "TransferBundle:Transfer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  58 => 26,  50 => 21,  42 => 16,  34 => 11,  22 => 1,);
    }
}
/* <table class="table table-hover table-bordered bg-white">*/
/*     <thead>*/
/*     <tr>*/
/*         <th colspan="2">Transfer</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*     <tr>*/
/*         <td> Origin account</td>*/
/*         <td> {{ entity.getOriginAccount() }}</td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td> Destiny account</td>*/
/*         <td> {{ entity.getDestinyAccount() }}</td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td> Amount</td>*/
/*         <td> {{ entity.amount }}</td>*/
/*     </tr>*/
/* */
/*     <tr>*/
/*         <td> Description</td>*/
/*         <td> {{ entity.description }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td> Date</td>*/
/*         <td> {{ entity.date }}</td>*/
/*     </tr>*/
/* */
/*     </tbody>*/
/* </table>*/
/* */
