<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c31785ae6c74ed001f58497cd081cbdf54d21ef1fec29c8fa1ac11537494d2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,  82 => 21,  75 => 13,  72 => 12,  50 => 18,  43 => 11,  40 => 10,  25 => 1,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 41,  123 => 40,  118 => 39,  114 => 38,  111 => 37,  104 => 33,  101 => 32,  99 => 31,  86 => 25,  77 => 14,  69 => 11,  58 => 16,  55 => 21,  53 => 14,  46 => 9,  44 => 8,  38 => 9,  35 => 4,  32 => 6,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 29,  89 => 24,  85 => 22,  83 => 24,  76 => 19,  67 => 19,  63 => 6,  60 => 12,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 16,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
