<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_62e8f2864009082ae834b378433ea13dd09ab8f5f8a3876048ade81e96ff67be extends Twig_Template
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
        $__internal_bb8d1d7e838d2ac137791b948ccd95832b1ee66efdf33ef1add21c42227eaf59 = $this->env->getExtension("native_profiler");
        $__internal_bb8d1d7e838d2ac137791b948ccd95832b1ee66efdf33ef1add21c42227eaf59->enter($__internal_bb8d1d7e838d2ac137791b948ccd95832b1ee66efdf33ef1add21c42227eaf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bb8d1d7e838d2ac137791b948ccd95832b1ee66efdf33ef1add21c42227eaf59->leave($__internal_bb8d1d7e838d2ac137791b948ccd95832b1ee66efdf33ef1add21c42227eaf59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
