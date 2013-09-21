<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_527a4fb4879da2bba326fde81b78f50ad4d314e7645e93c80006ef37bb6ed6bf extends Twig_Template
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
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/init.jquery.js"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/ready.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => (isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")), 1 => "bundles/stfalcontinymce/js/init.standard.js"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 81,  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 513,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 465,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 449,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 430,  1008 => 429,  1005 => 428,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 423,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 400,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 392,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 364,  876 => 362,  870 => 361,  867 => 360,  862 => 359,  859 => 358,  851 => 353,  848 => 352,  846 => 351,  838 => 345,  833 => 342,  821 => 332,  819 => 331,  810 => 325,  806 => 324,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 312,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 298,  737 => 296,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 284,  697 => 282,  690 => 278,  685 => 276,  681 => 275,  676 => 273,  672 => 272,  667 => 270,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 256,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 235,  582 => 233,  573 => 230,  569 => 229,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 186,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 135,  385 => 134,  348 => 111,  329 => 105,  326 => 104,  323 => 103,  321 => 102,  315 => 100,  310 => 96,  287 => 92,  200 => 37,  523 => 213,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 123,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 103,  333 => 107,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 81,  270 => 82,  262 => 71,  275 => 126,  244 => 110,  214 => 92,  156 => 54,  127 => 62,  170 => 76,  252 => 90,  245 => 88,  228 => 79,  187 => 31,  388 => 119,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 137,  319 => 94,  313 => 130,  290 => 117,  267 => 109,  251 => 69,  235 => 58,  216 => 49,  208 => 85,  201 => 82,  132 => 64,  155 => 74,  303 => 111,  299 => 119,  295 => 94,  285 => 105,  273 => 98,  259 => 70,  247 => 94,  205 => 84,  178 => 32,  360 => 156,  355 => 113,  352 => 106,  347 => 105,  341 => 109,  337 => 108,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 89,  280 => 88,  256 => 91,  255 => 96,  234 => 80,  231 => 82,  215 => 74,  168 => 75,  151 => 69,  113 => 46,  116 => 55,  236 => 100,  226 => 53,  204 => 44,  188 => 71,  153 => 9,  149 => 50,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 216,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 150,  403 => 281,  391 => 277,  386 => 118,  374 => 114,  369 => 271,  365 => 109,  358 => 267,  353 => 145,  292 => 211,  209 => 45,  73 => 89,  229 => 54,  219 => 50,  197 => 67,  189 => 36,  181 => 80,  173 => 77,  158 => 75,  129 => 63,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 214,  519 => 342,  514 => 340,  507 => 336,  502 => 201,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 126,  404 => 125,  398 => 281,  379 => 131,  370 => 122,  366 => 271,  359 => 114,  351 => 264,  297 => 125,  293 => 118,  232 => 57,  210 => 71,  194 => 67,  177 => 62,  164 => 13,  137 => 52,  130 => 39,  103 => 33,  121 => 729,  87 => 48,  80 => 10,  61 => 32,  84 => 47,  68 => 35,  93 => 46,  79 => 148,  56 => 30,  140 => 65,  117 => 59,  100 => 52,  26 => 1,  264 => 72,  258 => 118,  253 => 103,  239 => 77,  218 => 93,  213 => 86,  198 => 21,  193 => 77,  183 => 34,  175 => 13,  163 => 10,  107 => 51,  37 => 26,  493 => 327,  487 => 321,  482 => 167,  474 => 188,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 139,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 132,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 112,  335 => 110,  327 => 95,  325 => 135,  322 => 106,  318 => 101,  311 => 129,  307 => 95,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 87,  271 => 125,  265 => 78,  260 => 92,  254 => 70,  248 => 62,  242 => 103,  237 => 106,  221 => 51,  195 => 75,  191 => 88,  180 => 33,  172 => 29,  143 => 66,  135 => 65,  131 => 60,  110 => 52,  64 => 51,  41 => 10,  276 => 112,  272 => 75,  257 => 92,  246 => 66,  243 => 60,  241 => 63,  238 => 62,  233 => 92,  230 => 102,  227 => 53,  224 => 52,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 84,  162 => 12,  146 => 49,  138 => 79,  122 => 36,  105 => 1,  74 => 130,  70 => 19,  66 => 34,  62 => 36,  199 => 42,  186 => 35,  174 => 81,  169 => 79,  166 => 78,  161 => 74,  159 => 11,  154 => 70,  145 => 54,  141 => 69,  139 => 12,  124 => 61,  120 => 50,  108 => 55,  94 => 50,  65 => 19,  52 => 13,  97 => 51,  92 => 28,  88 => 150,  78 => 43,  71 => 36,  59 => 35,  90 => 49,  29 => 8,  96 => 47,  91 => 319,  81 => 185,  49 => 10,  30 => 5,  31 => 20,  27 => 21,  47 => 26,  34 => 25,  28 => 4,  24 => 2,  22 => 1,  82 => 25,  75 => 9,  72 => 40,  50 => 11,  43 => 19,  40 => 8,  25 => 20,  249 => 68,  160 => 58,  148 => 57,  142 => 51,  134 => 61,  126 => 58,  123 => 57,  118 => 45,  114 => 484,  111 => 56,  104 => 421,  101 => 420,  99 => 48,  86 => 44,  77 => 39,  69 => 39,  58 => 14,  55 => 16,  53 => 29,  46 => 12,  44 => 25,  38 => 7,  35 => 6,  32 => 24,  212 => 76,  206 => 23,  202 => 43,  196 => 85,  192 => 33,  190 => 84,  185 => 85,  179 => 69,  176 => 65,  171 => 80,  167 => 61,  165 => 74,  157 => 71,  152 => 73,  150 => 20,  147 => 50,  144 => 70,  136 => 3,  133 => 10,  128 => 59,  125 => 37,  119 => 562,  115 => 43,  112 => 63,  109 => 439,  106 => 34,  102 => 33,  98 => 167,  95 => 38,  89 => 45,  85 => 30,  83 => 43,  76 => 23,  67 => 38,  63 => 69,  60 => 24,  57 => 34,  54 => 12,  51 => 7,  48 => 30,  45 => 9,  42 => 36,  39 => 35,  36 => 22,  33 => 21,);
    }
}
