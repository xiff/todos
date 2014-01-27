<?php

/* davidtodosBundle:Default:index.html.twig */
class __TwigTemplate_90a454ecf3840e0f11c3cfb5cd26ba071322a914e29df925581188de27dc19e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("davidtodosBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "davidtodosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<p>This is my new custom homepage</p>
\t<p><a href=\"todo\">VIEW TODOS</a></p>
";
    }

    public function getTemplateName()
    {
        return "davidtodosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
