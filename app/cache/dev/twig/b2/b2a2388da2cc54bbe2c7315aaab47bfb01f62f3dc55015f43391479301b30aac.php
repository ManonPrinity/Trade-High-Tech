<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_35cf64044585f97c3ce9d13bffdb30c466948c9cd3c0192f4524b4ba3da69c96 extends Twig_Template
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
        $__internal_a50c23b7a738d2c58199389a956298e5c127d2d1d835146c21f947328b75d957 = $this->env->getExtension("native_profiler");
        $__internal_a50c23b7a738d2c58199389a956298e5c127d2d1d835146c21f947328b75d957->enter($__internal_a50c23b7a738d2c58199389a956298e5c127d2d1d835146c21f947328b75d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a50c23b7a738d2c58199389a956298e5c127d2d1d835146c21f947328b75d957->leave($__internal_a50c23b7a738d2c58199389a956298e5c127d2d1d835146c21f947328b75d957_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
