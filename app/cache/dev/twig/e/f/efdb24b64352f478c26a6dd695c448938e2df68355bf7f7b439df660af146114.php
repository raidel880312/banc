<?php

/* ::base.html.twig */
class __TwigTemplate_4c63f235db8a5d422be46e2615268faa8e6f6a3902c06b6dd486719acb83b457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6be647c550934823f125f7510181b93638636f1c4a22a19e23d3022b13464900 = $this->env->getExtension("native_profiler");
        $__internal_6be647c550934823f125f7510181b93638636f1c4a22a19e23d3022b13464900->enter($__internal_6be647c550934823f125f7510181b93638636f1c4a22a19e23d3022b13464900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    </head>
    <body>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
    </html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6be647c550934823f125f7510181b93638636f1c4a22a19e23d3022b13464900->leave($__internal_6be647c550934823f125f7510181b93638636f1c4a22a19e23d3022b13464900_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b645281be1b3bdae7d02ccd72ac426e37dc7276075e24d0361d89f80e45cc9c = $this->env->getExtension("native_profiler");
        $__internal_9b645281be1b3bdae7d02ccd72ac426e37dc7276075e24d0361d89f80e45cc9c->enter($__internal_9b645281be1b3bdae7d02ccd72ac426e37dc7276075e24d0361d89f80e45cc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b645281be1b3bdae7d02ccd72ac426e37dc7276075e24d0361d89f80e45cc9c->leave($__internal_9b645281be1b3bdae7d02ccd72ac426e37dc7276075e24d0361d89f80e45cc9c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dfe8725bb493bcfa012914a4e8bf92011504e3b840b96641de03b2f3fbad661d = $this->env->getExtension("native_profiler");
        $__internal_dfe8725bb493bcfa012914a4e8bf92011504e3b840b96641de03b2f3fbad661d->enter($__internal_dfe8725bb493bcfa012914a4e8bf92011504e3b840b96641de03b2f3fbad661d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dfe8725bb493bcfa012914a4e8bf92011504e3b840b96641de03b2f3fbad661d->leave($__internal_dfe8725bb493bcfa012914a4e8bf92011504e3b840b96641de03b2f3fbad661d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_16c3fcfd0f1f60faba906607aa54e1628a9f5ebf9a459c32e461a5cd04799db4 = $this->env->getExtension("native_profiler");
        $__internal_16c3fcfd0f1f60faba906607aa54e1628a9f5ebf9a459c32e461a5cd04799db4->enter($__internal_16c3fcfd0f1f60faba906607aa54e1628a9f5ebf9a459c32e461a5cd04799db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16c3fcfd0f1f60faba906607aa54e1628a9f5ebf9a459c32e461a5cd04799db4->leave($__internal_16c3fcfd0f1f60faba906607aa54e1628a9f5ebf9a459c32e461a5cd04799db4_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07f29964a70a4ad43eee8384a464cde4959710f3b93dd93ecc1671f11264e09c = $this->env->getExtension("native_profiler");
        $__internal_07f29964a70a4ad43eee8384a464cde4959710f3b93dd93ecc1671f11264e09c->enter($__internal_07f29964a70a4ad43eee8384a464cde4959710f3b93dd93ecc1671f11264e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_07f29964a70a4ad43eee8384a464cde4959710f3b93dd93ecc1671f11264e09c->leave($__internal_07f29964a70a4ad43eee8384a464cde4959710f3b93dd93ecc1671f11264e09c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  87 => 13,  76 => 9,  64 => 8,  54 => 15,  51 => 14,  49 => 13,  42 => 10,  40 => 9,  36 => 8,  28 => 2,  26 => 1,);
    }
}
/* {% spaceless %}*/
/*     <!DOCTYPE html>*/
/*     <html>*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     </head>*/
/*     <body>*/
/*     {% block body %}{% endblock %}*/
/*     {% block javascripts %}{% endblock %}*/
/*     </body>*/
/*     </html>*/
/* {% endspaceless %}*/
