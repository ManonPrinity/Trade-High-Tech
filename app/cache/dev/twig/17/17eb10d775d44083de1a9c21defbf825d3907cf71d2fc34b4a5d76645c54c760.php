<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_7490b648c5f0d59281785d45cb2d70b6f2382d26368c4a2f0088c39018982eb3 extends Twig_Template
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
        $__internal_20a22210c8bcfbb94374abf7e941985ef2ff3750f3a8b2bd6bbbe8fb42fa4ea4 = $this->env->getExtension("native_profiler");
        $__internal_20a22210c8bcfbb94374abf7e941985ef2ff3750f3a8b2bd6bbbe8fb42fa4ea4->enter($__internal_20a22210c8bcfbb94374abf7e941985ef2ff3750f3a8b2bd6bbbe8fb42fa4ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_20a22210c8bcfbb94374abf7e941985ef2ff3750f3a8b2bd6bbbe8fb42fa4ea4->leave($__internal_20a22210c8bcfbb94374abf7e941985ef2ff3750f3a8b2bd6bbbe8fb42fa4ea4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */