<?php

/* SNAsymfoniaBundle:Index:index.html.twig */
class __TwigTemplate_f07676a601223560e65a0da6f964919b50f715ad2c3ae6a3b3f23a5ab82594cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SNAsymfoniaBundle::layout.html.twig", "SNAsymfoniaBundle:Index:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SNAsymfoniaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\tHello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!<br>
\tvaleur : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["valeur"]) ? $context["valeur"] : $this->getContext($context, "valeur")), "html", null, true);
        echo "<br>
\tvaleur2 : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["valeur2"]) ? $context["valeur2"] : $this->getContext($context, "valeur2")), "html", null, true);
        echo "<br>


\t<form method=\"post\">
\t\tvaleur : <input type=\"text\" name=\"valeur\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["valeur"]) ? $context["valeur"] : $this->getContext($context, "valeur")), "html", null, true);
        echo "\" /><br>
\t\tvaleur : <input type=\"text\" name=\"valeur2\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["valeur2"]) ? $context["valeur2"] : $this->getContext($context, "valeur2")), "html", null, true);
        echo "\" /><br>
\t\t<input type=\"submit\" />
\t</form>
";
    }

    public function getTemplateName()
    {
        return "SNAsymfoniaBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 12,  48 => 8,  44 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
