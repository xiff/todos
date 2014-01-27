<?php

/* davidtodosBundle:Todo:index.html.twig */
class __TwigTemplate_2071c6f3cfe1b0c16b1e2903e167ab2beac22078eefabccaf51e57db6ed6c1a9 extends Twig_Template
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
            echo "\t\t<li>
\t\t";
            // line 6
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("todos_todo_add"), "method" => "POST"));
            echo "
\t\t\t";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label', array("label" => "Add your todo : "));
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
        echo "
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "todos"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 16
            echo "\t\t<li class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($this->getContext($context, "loop"), "index")), "html", null, true);
            echo "\">
\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todos_todo_edit", array("id" => $this->getAttribute($this->getContext($context, "todo"), "id"))), "html", null, true);
            echo "\" class=\"todo\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "todo"), "name"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todos_todo_edit", array("id" => $this->getAttribute($this->getContext($context, "todo"), "id"))), "html", null, true);
            echo "\" class=\"edit\">edit</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("todos_todo_delete", array("id" => $this->getAttribute($this->getContext($context, "todo"), "id"))), "html", null, true);
            echo "\" class=\"delete\">delete</a>
        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "davidtodosBundle:Todo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  87 => 17,  82 => 16,  65 => 15,  62 => 14,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
