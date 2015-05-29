<?php

/* SNAsymfoniaBundle::layout.html.twig */
class __TwigTemplate_2b571959d26fad8a0e70dd4701d10376da976065203361f8e1c98c97b21c806c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
    ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Asymfonia";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SNAsymfoniaBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  40 => 5,  35 => 10,  33 => 8,  27 => 5,  21 => 1,);
    }
}
