<?php

/* davidtodosBundle::layout.html.twig */
class __TwigTemplate_7c1a633207ba8225f759edf41e04a5618a70646205ec2965e4e0e096bc040fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "  </head>
  <body>
    <div id=\"container\"> 
      <div id=\"content\">
        <div class=\"inner\">
\t\t\t<h1>Todos</h1>
            ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "        </div>
      </div>
    </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Todos list
      ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/davidtodos/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "            ";
    }

    public function getTemplateName()
    {
        return "davidtodosBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  83 => 21,  79 => 14,  76 => 13,  69 => 11,  66 => 10,  61 => 6,  58 => 5,  50 => 23,  48 => 21,  40 => 15,  37 => 13,  35 => 10,  29 => 5,  23 => 1,  110 => 20,  87 => 17,  82 => 16,  65 => 15,  62 => 14,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 8,  28 => 2,);
    }
}
