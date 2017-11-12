<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ef6cf16b1e5dbc5be152324ca244a6ab84875cb850976fdbc306fedf79aad5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa98dcd826d770e17286412d1ed7316935f4fe8b4130ecc6209e433ba916b714 = $this->env->getExtension("native_profiler");
        $__internal_aa98dcd826d770e17286412d1ed7316935f4fe8b4130ecc6209e433ba916b714->enter($__internal_aa98dcd826d770e17286412d1ed7316935f4fe8b4130ecc6209e433ba916b714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa98dcd826d770e17286412d1ed7316935f4fe8b4130ecc6209e433ba916b714->leave($__internal_aa98dcd826d770e17286412d1ed7316935f4fe8b4130ecc6209e433ba916b714_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d0befcb9918e45acefc4f2594bf3089a20d6629824fa7bf90deb5fa95f4cff5 = $this->env->getExtension("native_profiler");
        $__internal_0d0befcb9918e45acefc4f2594bf3089a20d6629824fa7bf90deb5fa95f4cff5->enter($__internal_0d0befcb9918e45acefc4f2594bf3089a20d6629824fa7bf90deb5fa95f4cff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0d0befcb9918e45acefc4f2594bf3089a20d6629824fa7bf90deb5fa95f4cff5->leave($__internal_0d0befcb9918e45acefc4f2594bf3089a20d6629824fa7bf90deb5fa95f4cff5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c636dfb8900ba03d6adcd9e513227d47dc128e9490daeb558fdad8d0b618f8d = $this->env->getExtension("native_profiler");
        $__internal_0c636dfb8900ba03d6adcd9e513227d47dc128e9490daeb558fdad8d0b618f8d->enter($__internal_0c636dfb8900ba03d6adcd9e513227d47dc128e9490daeb558fdad8d0b618f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c636dfb8900ba03d6adcd9e513227d47dc128e9490daeb558fdad8d0b618f8d->leave($__internal_0c636dfb8900ba03d6adcd9e513227d47dc128e9490daeb558fdad8d0b618f8d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb5a92e0bb2881f0efe026f229a09b4834c1a01fcfb7871c090f1daad41a83b = $this->env->getExtension("native_profiler");
        $__internal_fbb5a92e0bb2881f0efe026f229a09b4834c1a01fcfb7871c090f1daad41a83b->enter($__internal_fbb5a92e0bb2881f0efe026f229a09b4834c1a01fcfb7871c090f1daad41a83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fbb5a92e0bb2881f0efe026f229a09b4834c1a01fcfb7871c090f1daad41a83b->leave($__internal_fbb5a92e0bb2881f0efe026f229a09b4834c1a01fcfb7871c090f1daad41a83b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
