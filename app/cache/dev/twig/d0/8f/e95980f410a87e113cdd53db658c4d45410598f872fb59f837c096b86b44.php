<?php

/* FrontendBundle:Botellas:show.html.twig */
class __TwigTemplate_d08fe95980f410a87e113cdd53db658c4d45410598f872fb59f837c096b86b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
            'menu_horizontal' => array($this, 'block_menu_horizontal'),
            'siderbar' => array($this, 'block_siderbar'),
            'body' => array($this, 'block_body'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendBundle::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_horizontal($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("BackendBundle:Default:menu_horizontal.html.twig")->display(array_merge($context, array("pagina" => "botellas")));
    }

    // line 7
    public function block_siderbar($context, array $blocks = array())
    {
        echo "  
    ";
        // line 8
        $this->env->loadTemplate("BackendBundle:Default:siderbar.html.twig")->display(array_merge($context, array("pagina" => "botellas")));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<h1>Botella \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "botella"), "html", null, true);
        echo "\"</h1>
    <table class=\"record_properties table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Botella</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "botella"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ingles</th>
                <td>";
        // line 26
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionEn");
        echo "</td>
            </tr>
            <tr>
                <th>Español</th>
                <td>";
        // line 30
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionEs");
        echo "</td>
            </tr>
            <tr>
                <th>Clase</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "clase"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Style</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "style"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagen</th>
                <td><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "botella"), "html", null, true);
        echo "\" style=\"max-width: 300px;\"/></td>
            </tr>
            <tr>
                <th>Shop México</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "linkShopMexico"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Shop USA</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "linkShopUsa"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Activa?</th>
                <td>";
        // line 54
        echo $this->env->getExtension('is_active_extension')->isActiveFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isActive"));
        echo "</td>
            </tr>
            <tr>
                <th>Creado</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actualizado</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt"), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <ul class=\"record_actions nav nav-pills\">
        <li>
            <button class=\"btn\" onclick=\"location.href='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botellas"), "html", null, true);
        echo "'\">
                Regresar
            </button>
        </li>
        <li>&nbsp;</li>
        <li>
            <button class=\"btn btn-success\" onclick=\"location.href='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botellas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "'\">
                Editar
            </button>
        </li>
        <li>&nbsp;</li>
        <li>
            <form action=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botellas_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                    <button class=\"btn btn-danger\" type=\"submit\">Eliminar</button>
            </form>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Botellas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 80,  252 => 90,  245 => 88,  228 => 79,  187 => 65,  388 => 162,  384 => 161,  380 => 160,  376 => 159,  340 => 140,  336 => 139,  332 => 137,  319 => 134,  313 => 130,  290 => 117,  267 => 109,  251 => 102,  235 => 93,  216 => 87,  208 => 85,  201 => 83,  132 => 50,  155 => 66,  303 => 111,  299 => 119,  295 => 109,  285 => 105,  273 => 98,  259 => 107,  247 => 94,  205 => 84,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 113,  256 => 91,  255 => 96,  234 => 80,  231 => 82,  215 => 74,  168 => 59,  151 => 49,  113 => 40,  116 => 37,  236 => 100,  226 => 93,  204 => 70,  188 => 71,  153 => 49,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 145,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 54,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 146,  351 => 264,  297 => 13,  293 => 118,  232 => 92,  210 => 71,  194 => 67,  177 => 62,  164 => 58,  137 => 53,  130 => 51,  103 => 33,  121 => 42,  87 => 32,  80 => 10,  61 => 19,  84 => 27,  68 => 23,  93 => 40,  79 => 26,  56 => 13,  140 => 55,  117 => 36,  100 => 21,  26 => 1,  264 => 144,  258 => 91,  253 => 103,  239 => 77,  218 => 85,  213 => 86,  198 => 21,  193 => 78,  183 => 63,  175 => 13,  163 => 10,  107 => 36,  37 => 6,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 144,  335 => 110,  327 => 136,  325 => 135,  322 => 106,  318 => 104,  311 => 129,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 108,  260 => 92,  254 => 86,  248 => 89,  242 => 103,  237 => 80,  221 => 75,  195 => 75,  191 => 66,  180 => 67,  172 => 60,  143 => 62,  135 => 44,  131 => 59,  110 => 31,  64 => 18,  41 => 7,  276 => 112,  272 => 110,  257 => 92,  246 => 132,  243 => 89,  241 => 94,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 56,  138 => 79,  122 => 50,  105 => 22,  74 => 25,  70 => 19,  66 => 5,  62 => 19,  199 => 68,  186 => 70,  174 => 81,  169 => 71,  166 => 11,  161 => 74,  159 => 58,  154 => 54,  145 => 46,  141 => 45,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 34,  65 => 20,  52 => 18,  97 => 20,  92 => 34,  88 => 38,  78 => 26,  71 => 22,  59 => 18,  90 => 33,  29 => 3,  96 => 41,  91 => 19,  81 => 21,  49 => 7,  30 => 4,  31 => 9,  27 => 1,  47 => 6,  34 => 5,  28 => 5,  24 => 2,  22 => 1,  82 => 29,  75 => 9,  72 => 8,  50 => 11,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 57,  142 => 51,  134 => 51,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 35,  104 => 41,  101 => 36,  99 => 38,  86 => 18,  77 => 19,  69 => 18,  58 => 11,  55 => 10,  53 => 12,  46 => 8,  44 => 12,  38 => 7,  35 => 3,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 72,  157 => 60,  152 => 68,  150 => 53,  147 => 50,  144 => 48,  136 => 58,  133 => 49,  128 => 42,  125 => 43,  119 => 48,  115 => 46,  112 => 63,  109 => 39,  106 => 42,  102 => 33,  98 => 39,  95 => 30,  89 => 29,  85 => 30,  83 => 35,  76 => 25,  67 => 22,  63 => 20,  60 => 24,  57 => 20,  54 => 19,  51 => 18,  48 => 12,  45 => 6,  42 => 8,  39 => 8,  36 => 4,  33 => 3,);
    }
}
