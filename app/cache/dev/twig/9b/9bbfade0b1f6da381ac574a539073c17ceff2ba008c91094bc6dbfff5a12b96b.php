<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_945016917391c385917399c4eb7a8b2eaa51b4a92556968f530745d9c0b09fe1 extends Twig_Template
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
        $__internal_d28462d738824b8698a1ee7f4e70d3ddb51feca0e1fed942101305229b71d6ff = $this->env->getExtension("native_profiler");
        $__internal_d28462d738824b8698a1ee7f4e70d3ddb51feca0e1fed942101305229b71d6ff->enter($__internal_d28462d738824b8698a1ee7f4e70d3ddb51feca0e1fed942101305229b71d6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d28462d738824b8698a1ee7f4e70d3ddb51feca0e1fed942101305229b71d6ff->leave($__internal_d28462d738824b8698a1ee7f4e70d3ddb51feca0e1fed942101305229b71d6ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
