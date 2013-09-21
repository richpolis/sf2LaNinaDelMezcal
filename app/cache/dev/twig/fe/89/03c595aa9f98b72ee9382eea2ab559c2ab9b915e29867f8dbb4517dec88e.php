<?php

/* BackendBundle:Default:siderbar.html.twig */
class __TwigTemplate_fe8903c595aa9f98b72ee9382eea2ab559c2ab9b915e29867f8dbb4517dec88e extends Twig_Template
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
        echo "<ul class=\"nav nav-list\">
    <li class=\"nav-header\">Galerias</li>
    <li ";
        // line 3
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "galerias-principal")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_galerias_principal"), "html", null, true);
        echo "\">Principal</a>
    </li>
    <li ";
        // line 6
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "galerias-about")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_galerias_about"), "html", null, true);
        echo "\">About</a>
    </li>
    <li ";
        // line 9
        if ((((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "galerias-distribuidores-nacionales") || ((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "galerias-distribuidores-usa"))) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_galerias_distribuidores"), "html", null, true);
        echo "\">Distribuidores</a>
    </li>
    <li ";
        // line 12
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "galerias-how-to-mix")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_galerias_howtomix"), "html", null, true);
        echo "\">How To Mix</a>
    </li>
    
    <li class=\"nav-header\">Publicaciones</li>
    <li ";
        // line 17
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "publicaciones-about")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_about"), "html", null, true);
        echo "\">About</a>
    </li>
    <li ";
        // line 20
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "where-to-find-mexico")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_wheretofindmexico"), "html", null, true);
        echo "\">Tiendas México</a>
    </li>
    <li ";
        // line 23
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "where-to-find-usa")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_wheretofindusa"), "html", null, true);
        echo "\">Tiendas USA</a>
    </li>
    <li ";
        // line 26
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "where-to-find-distribuidores")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_wheretofinddistribuidores"), "html", null, true);
        echo "\">Distribuidores</a>
    </li>
    <li class=\"nav-header\">Botellas</li>
    <li ";
        // line 30
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "botellas")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botellas"), "html", null, true);
        echo "\">Botellas</a>
    </li>
    <li ";
        // line 33
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "mensajes")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mensajes"), "html", null, true);
        echo "\">Mensajes</a>
    </li>
    <li class=\"nav-header\">Configuraciones</li>
    <li ";
        // line 37
        if (((isset($context["pagina"]) ? $context["pagina"] : $this->getContext($context, "pagina")) == "configuraciones")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_configuraciones"), "html", null, true);
        echo "\">Configuraciones</a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:siderbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  117 => 30,  100 => 24,  26 => 3,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 68,  37 => 6,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 96,  110 => 36,  64 => 15,  41 => 8,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 38,  138 => 53,  122 => 42,  105 => 26,  74 => 20,  70 => 15,  66 => 24,  62 => 14,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 11,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 144,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 23,  65 => 13,  52 => 10,  97 => 28,  92 => 20,  88 => 25,  78 => 18,  71 => 14,  59 => 12,  90 => 25,  29 => 6,  96 => 28,  91 => 6,  81 => 21,  49 => 7,  30 => 4,  31 => 3,  27 => 3,  47 => 12,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 17,  50 => 14,  43 => 7,  40 => 10,  25 => 2,  249 => 80,  160 => 56,  148 => 46,  142 => 45,  134 => 34,  126 => 47,  123 => 31,  118 => 43,  114 => 37,  111 => 27,  104 => 32,  101 => 31,  99 => 31,  86 => 33,  77 => 32,  69 => 24,  58 => 19,  55 => 26,  53 => 19,  46 => 8,  44 => 9,  38 => 5,  35 => 4,  32 => 4,  212 => 76,  206 => 23,  202 => 22,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 12,  167 => 59,  165 => 57,  157 => 5,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 138,  128 => 33,  125 => 92,  119 => 41,  115 => 42,  112 => 81,  109 => 78,  106 => 32,  102 => 66,  98 => 28,  95 => 21,  89 => 21,  85 => 22,  83 => 20,  76 => 19,  67 => 16,  63 => 6,  60 => 13,  57 => 10,  54 => 10,  51 => 8,  48 => 9,  45 => 7,  42 => 9,  39 => 5,  36 => 5,  33 => 3,);
    }
}
