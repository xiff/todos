<?php

/* davidtodosBundle:Todo:edit.html.twig */
class __TwigTemplate_494bcb5a8ca95a11e94b0d88af46a559e02cd1e4a51c484e5593360bc77a4608 extends Twig_Template
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
        echo "\t<ul>
\t";
        // line 4
        if (array_key_exists("form", $context)) {
            // line 5
            echo "\t\t<li class=\"edit_form\">
\t\t";
            // line 6
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
            echo "
\t\t\t";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label" => "Modify your todo : "));
            echo "
\t\t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
            echo "
\t\t\t";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
            echo "
\t\t\t<input type=\"submit\" />
\t\t";
            // line 11
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
            echo "
\t\t</li>
\t";
        }
        // line 14
        echo "\t</ul>
\t<p><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("todos_todo");
        echo "\">Click here</a> to back to the todos list</p>
";
    }

    public function getTemplateName()
    {
        return "davidtodosBundle:Todo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  62 => 14,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
