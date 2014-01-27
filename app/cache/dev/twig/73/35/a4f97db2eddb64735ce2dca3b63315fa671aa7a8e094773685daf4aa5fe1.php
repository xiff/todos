<?php

/* davidtodosBundle:Todo:add.html.twig */
class __TwigTemplate_7335a4f97db2eddb64735ce2dca3b63315fa671aa7a8e094773685daf4aa5fe1 extends Twig_Template
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
        echo "    <h2>Create a new todo</h2>
\t";
        // line 4
        if (array_key_exists("form", $context)) {
            // line 5
            echo "\t<form action=\"";
            echo $this->env->getExtension('routing')->getPath("todos_todo_add");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo ">
\t\t";
            // line 6
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label" => "Your new todo : "));
            echo "
        ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
            echo "
\t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
            echo "
\t\t<input type=\"submit\" />
\t</form>
\t";
        }
        // line 12
        echo "\t<p><a href=\"../todo\">Click here</a> to back to the todos list</p>
";
    }

    public function getTemplateName()
    {
        return "davidtodosBundle:Todo:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  51 => 8,  47 => 7,  43 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
