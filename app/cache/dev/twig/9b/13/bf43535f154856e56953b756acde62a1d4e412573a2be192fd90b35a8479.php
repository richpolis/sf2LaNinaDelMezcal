<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9b13bf43535f154856e56953b756acde62a1d4e412573a2be192fd90b35a8479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style type=\"text/css\">
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 157,  362 => 153,  357 => 151,  339 => 145,  306 => 128,  289 => 119,  240 => 93,  396 => 178,  372 => 165,  344 => 147,  330 => 140,  308 => 129,  279 => 113,  274 => 111,  817 => 473,  814 => 472,  803 => 470,  799 => 469,  795 => 467,  756 => 461,  753 => 460,  734 => 458,  717 => 457,  713 => 455,  709 => 454,  705 => 453,  701 => 452,  693 => 450,  689 => 449,  686 => 448,  684 => 447,  656 => 445,  641 => 440,  636 => 438,  632 => 437,  629 => 436,  627 => 435,  613 => 434,  576 => 399,  558 => 396,  541 => 395,  536 => 393,  225 => 93,  367 => 123,  363 => 121,  361 => 120,  334 => 113,  316 => 107,  268 => 107,  184 => 65,  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 513,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 465,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 449,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 430,  1008 => 429,  1005 => 428,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 423,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 400,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 392,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 364,  876 => 362,  870 => 361,  867 => 360,  862 => 359,  859 => 358,  851 => 353,  848 => 352,  846 => 351,  838 => 345,  833 => 342,  821 => 332,  819 => 331,  810 => 325,  806 => 324,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 466,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 298,  737 => 296,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 284,  697 => 451,  690 => 278,  685 => 276,  681 => 275,  676 => 273,  672 => 272,  667 => 446,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 256,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 235,  582 => 233,  573 => 230,  569 => 229,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 186,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 176,  385 => 159,  348 => 111,  329 => 105,  326 => 104,  323 => 103,  321 => 102,  315 => 129,  310 => 105,  287 => 118,  200 => 67,  523 => 213,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 179,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 146,  333 => 141,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 97,  270 => 136,  262 => 103,  275 => 111,  244 => 110,  214 => 90,  156 => 56,  127 => 49,  170 => 63,  252 => 100,  245 => 96,  228 => 87,  187 => 66,  388 => 160,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 137,  319 => 108,  313 => 106,  290 => 117,  267 => 109,  251 => 96,  235 => 58,  216 => 49,  208 => 87,  201 => 82,  132 => 51,  155 => 52,  303 => 111,  299 => 119,  295 => 121,  285 => 105,  273 => 110,  259 => 70,  247 => 97,  205 => 75,  178 => 32,  360 => 152,  355 => 113,  352 => 149,  347 => 105,  341 => 109,  337 => 145,  331 => 112,  328 => 111,  320 => 135,  314 => 131,  305 => 16,  301 => 125,  294 => 12,  288 => 115,  282 => 115,  280 => 114,  256 => 91,  255 => 96,  234 => 89,  231 => 88,  215 => 79,  168 => 60,  151 => 46,  113 => 41,  116 => 38,  236 => 100,  226 => 86,  204 => 44,  188 => 66,  153 => 55,  149 => 58,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 216,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 150,  403 => 180,  391 => 177,  386 => 118,  374 => 114,  369 => 271,  365 => 161,  358 => 157,  353 => 145,  292 => 120,  209 => 77,  73 => 15,  229 => 54,  219 => 50,  197 => 75,  189 => 82,  181 => 64,  173 => 75,  158 => 75,  129 => 40,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 394,  531 => 391,  526 => 389,  519 => 342,  514 => 340,  507 => 336,  502 => 201,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 183,  407 => 126,  404 => 125,  398 => 281,  379 => 158,  370 => 156,  366 => 155,  359 => 114,  351 => 153,  297 => 125,  293 => 100,  232 => 87,  210 => 71,  194 => 69,  177 => 59,  164 => 13,  137 => 47,  130 => 50,  103 => 24,  121 => 729,  87 => 24,  80 => 10,  61 => 17,  84 => 23,  68 => 14,  93 => 27,  79 => 25,  56 => 12,  140 => 65,  117 => 59,  100 => 23,  26 => 1,  264 => 105,  258 => 103,  253 => 92,  239 => 77,  218 => 93,  213 => 86,  198 => 71,  193 => 68,  183 => 63,  175 => 62,  163 => 60,  107 => 51,  37 => 5,  493 => 327,  487 => 321,  482 => 167,  474 => 188,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 139,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 170,  378 => 273,  375 => 273,  373 => 126,  368 => 115,  354 => 150,  350 => 112,  335 => 110,  327 => 139,  325 => 138,  322 => 109,  318 => 101,  311 => 130,  307 => 104,  298 => 101,  296 => 118,  291 => 116,  281 => 80,  277 => 87,  271 => 125,  265 => 104,  260 => 92,  254 => 101,  248 => 62,  242 => 103,  237 => 106,  221 => 83,  195 => 74,  191 => 68,  180 => 64,  172 => 29,  143 => 42,  135 => 52,  131 => 60,  110 => 27,  64 => 17,  41 => 5,  276 => 112,  272 => 75,  257 => 92,  246 => 93,  243 => 92,  241 => 83,  238 => 89,  233 => 92,  230 => 102,  227 => 53,  224 => 85,  222 => 84,  220 => 88,  211 => 81,  207 => 76,  182 => 84,  162 => 53,  146 => 43,  138 => 62,  122 => 48,  105 => 37,  74 => 130,  70 => 20,  66 => 18,  62 => 14,  199 => 85,  186 => 35,  174 => 58,  169 => 56,  166 => 62,  161 => 79,  159 => 58,  154 => 47,  145 => 54,  141 => 45,  139 => 12,  124 => 45,  120 => 47,  108 => 34,  94 => 33,  65 => 13,  52 => 12,  97 => 34,  92 => 33,  88 => 27,  78 => 43,  71 => 15,  59 => 11,  90 => 49,  29 => 9,  96 => 34,  91 => 32,  81 => 24,  49 => 8,  30 => 4,  31 => 3,  27 => 3,  47 => 10,  34 => 4,  28 => 35,  24 => 2,  22 => 1,  82 => 18,  75 => 9,  72 => 40,  50 => 8,  43 => 6,  40 => 5,  25 => 2,  249 => 68,  160 => 59,  148 => 57,  142 => 57,  134 => 51,  126 => 35,  123 => 20,  118 => 43,  114 => 32,  111 => 40,  104 => 43,  101 => 420,  99 => 30,  86 => 44,  77 => 27,  69 => 39,  58 => 13,  55 => 12,  53 => 29,  46 => 9,  44 => 6,  38 => 5,  35 => 6,  32 => 3,  212 => 78,  206 => 23,  202 => 73,  196 => 69,  192 => 33,  190 => 67,  185 => 85,  179 => 77,  176 => 65,  171 => 57,  167 => 62,  165 => 54,  157 => 71,  152 => 73,  150 => 54,  147 => 50,  144 => 51,  136 => 3,  133 => 39,  128 => 59,  125 => 37,  119 => 31,  115 => 43,  112 => 63,  109 => 39,  106 => 25,  102 => 31,  98 => 25,  95 => 21,  89 => 32,  85 => 28,  83 => 27,  76 => 24,  67 => 17,  63 => 69,  60 => 16,  57 => 34,  54 => 13,  51 => 8,  48 => 9,  45 => 7,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
