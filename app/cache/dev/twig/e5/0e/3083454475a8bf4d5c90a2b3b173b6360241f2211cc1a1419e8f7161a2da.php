<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_e50e3083454475a8bf4d5c90a2b3b173b6360241f2211cc1a1419e8f7161a2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1191 => 330,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1067 => 308,  1065 => 307,  1062 => 306,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  879 => 229,  873 => 227,  865 => 224,  854 => 217,  849 => 215,  835 => 209,  830 => 207,  822 => 203,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  745 => 169,  740 => 167,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  694 => 150,  688 => 148,  683 => 146,  680 => 145,  670 => 138,  669 => 137,  668 => 136,  662 => 134,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  631 => 121,  622 => 119,  616 => 117,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  566 => 102,  530 => 93,  528 => 92,  500 => 88,  488 => 82,  476 => 78,  451 => 71,  441 => 69,  424 => 62,  408 => 58,  405 => 57,  390 => 50,  324 => 23,  317 => 21,  263 => 330,  261 => 329,  223 => 295,  203 => 262,  23 => 1,  349 => 321,  346 => 320,  302 => 278,  300 => 277,  377 => 157,  362 => 153,  357 => 151,  339 => 145,  306 => 128,  289 => 119,  240 => 93,  396 => 52,  372 => 43,  344 => 147,  330 => 140,  308 => 129,  279 => 113,  274 => 111,  817 => 201,  814 => 200,  803 => 195,  799 => 469,  795 => 467,  756 => 174,  753 => 173,  734 => 458,  717 => 457,  713 => 455,  709 => 454,  705 => 453,  701 => 452,  693 => 450,  689 => 449,  686 => 448,  684 => 447,  656 => 132,  641 => 440,  636 => 438,  632 => 437,  629 => 436,  627 => 120,  613 => 116,  576 => 399,  558 => 396,  541 => 395,  536 => 393,  225 => 93,  367 => 41,  363 => 332,  361 => 120,  334 => 113,  316 => 107,  268 => 107,  184 => 65,  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 329,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 309,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 301,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 286,  1008 => 429,  1005 => 281,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 275,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 255,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 243,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 230,  876 => 228,  870 => 226,  867 => 225,  862 => 223,  859 => 358,  851 => 216,  848 => 352,  846 => 214,  838 => 210,  833 => 208,  821 => 332,  819 => 202,  810 => 325,  806 => 196,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 186,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 168,  737 => 166,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 152,  697 => 151,  690 => 278,  685 => 147,  681 => 275,  676 => 273,  672 => 139,  667 => 135,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 122,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 108,  582 => 233,  573 => 230,  569 => 103,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 76,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 176,  385 => 48,  348 => 33,  329 => 105,  326 => 24,  323 => 103,  321 => 102,  315 => 129,  310 => 105,  287 => 118,  200 => 261,  523 => 91,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 81,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 61,  413 => 128,  410 => 59,  401 => 124,  399 => 179,  382 => 47,  371 => 113,  356 => 36,  345 => 32,  342 => 146,  333 => 141,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 97,  270 => 4,  262 => 103,  275 => 6,  244 => 321,  214 => 90,  156 => 56,  127 => 129,  170 => 63,  252 => 100,  245 => 96,  228 => 87,  187 => 239,  388 => 160,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 26,  319 => 22,  313 => 106,  290 => 13,  267 => 3,  251 => 324,  235 => 58,  216 => 274,  208 => 267,  201 => 82,  132 => 145,  155 => 52,  303 => 111,  299 => 119,  295 => 15,  285 => 105,  273 => 110,  259 => 328,  247 => 322,  205 => 265,  178 => 32,  360 => 152,  355 => 113,  352 => 149,  347 => 105,  341 => 109,  337 => 27,  331 => 112,  328 => 111,  320 => 135,  314 => 20,  305 => 16,  301 => 125,  294 => 12,  288 => 115,  282 => 115,  280 => 114,  256 => 91,  255 => 326,  234 => 306,  231 => 305,  215 => 79,  168 => 60,  151 => 46,  113 => 41,  116 => 40,  236 => 312,  226 => 297,  204 => 44,  188 => 66,  153 => 55,  149 => 178,  584 => 379,  580 => 378,  571 => 104,  562 => 366,  549 => 98,  544 => 354,  537 => 96,  532 => 216,  525 => 344,  520 => 90,  513 => 338,  508 => 336,  497 => 87,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 68,  431 => 134,  421 => 286,  416 => 150,  403 => 180,  391 => 177,  386 => 118,  374 => 114,  369 => 271,  365 => 161,  358 => 157,  353 => 35,  292 => 120,  209 => 77,  73 => 26,  229 => 298,  219 => 50,  197 => 75,  189 => 82,  181 => 64,  173 => 75,  158 => 75,  129 => 144,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 394,  531 => 391,  526 => 389,  519 => 342,  514 => 340,  507 => 336,  502 => 89,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 74,  461 => 306,  445 => 137,  439 => 292,  432 => 64,  417 => 286,  412 => 183,  407 => 126,  404 => 125,  398 => 281,  379 => 158,  370 => 42,  366 => 155,  359 => 37,  351 => 322,  297 => 125,  293 => 14,  232 => 87,  210 => 71,  194 => 69,  177 => 214,  164 => 199,  137 => 158,  130 => 50,  103 => 36,  121 => 729,  87 => 41,  80 => 25,  61 => 18,  84 => 30,  68 => 22,  93 => 27,  79 => 31,  56 => 17,  140 => 65,  117 => 108,  100 => 23,  26 => 1,  264 => 105,  258 => 103,  253 => 325,  239 => 313,  218 => 285,  213 => 273,  198 => 252,  193 => 242,  183 => 63,  175 => 62,  163 => 60,  107 => 87,  37 => 5,  493 => 327,  487 => 321,  482 => 80,  474 => 77,  470 => 144,  466 => 75,  457 => 158,  453 => 72,  450 => 297,  448 => 297,  443 => 70,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 60,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 49,  381 => 170,  378 => 273,  375 => 273,  373 => 126,  368 => 115,  354 => 150,  350 => 34,  335 => 110,  327 => 139,  325 => 138,  322 => 109,  318 => 101,  311 => 130,  307 => 104,  298 => 16,  296 => 118,  291 => 116,  281 => 8,  277 => 87,  271 => 125,  265 => 104,  260 => 92,  254 => 101,  248 => 62,  242 => 103,  237 => 106,  221 => 286,  195 => 251,  191 => 68,  180 => 64,  172 => 207,  143 => 42,  135 => 52,  131 => 60,  110 => 27,  64 => 2,  41 => 6,  276 => 112,  272 => 5,  257 => 327,  246 => 93,  243 => 92,  241 => 319,  238 => 89,  233 => 92,  230 => 102,  227 => 53,  224 => 85,  222 => 84,  220 => 88,  211 => 268,  207 => 76,  182 => 222,  162 => 193,  146 => 43,  138 => 62,  122 => 114,  105 => 30,  74 => 19,  70 => 16,  66 => 21,  62 => 17,  199 => 85,  186 => 35,  174 => 213,  169 => 206,  166 => 62,  161 => 79,  159 => 192,  154 => 185,  145 => 54,  141 => 45,  139 => 165,  124 => 128,  120 => 47,  108 => 34,  94 => 56,  65 => 14,  52 => 14,  97 => 57,  92 => 35,  88 => 23,  78 => 24,  71 => 12,  59 => 12,  90 => 26,  29 => 3,  96 => 28,  91 => 32,  81 => 18,  49 => 13,  30 => 7,  31 => 6,  27 => 3,  47 => 11,  34 => 4,  28 => 35,  24 => 2,  22 => 1,  82 => 32,  75 => 18,  72 => 21,  50 => 10,  43 => 11,  40 => 7,  25 => 2,  249 => 323,  160 => 59,  148 => 57,  142 => 166,  134 => 157,  126 => 35,  123 => 20,  118 => 43,  114 => 107,  111 => 33,  104 => 86,  101 => 29,  99 => 67,  86 => 30,  77 => 20,  69 => 12,  58 => 38,  55 => 12,  53 => 16,  46 => 9,  44 => 7,  38 => 5,  35 => 4,  32 => 3,  212 => 78,  206 => 23,  202 => 73,  196 => 69,  192 => 33,  190 => 241,  185 => 223,  179 => 220,  176 => 65,  171 => 57,  167 => 200,  165 => 54,  157 => 186,  152 => 179,  150 => 54,  147 => 173,  144 => 172,  136 => 3,  133 => 39,  128 => 59,  125 => 37,  119 => 113,  115 => 43,  112 => 102,  109 => 101,  106 => 25,  102 => 68,  98 => 34,  95 => 28,  89 => 46,  85 => 28,  83 => 29,  76 => 23,  67 => 19,  63 => 20,  60 => 19,  57 => 15,  54 => 37,  51 => 16,  48 => 9,  45 => 8,  42 => 10,  39 => 5,  36 => 4,  33 => 3,);
    }
}
