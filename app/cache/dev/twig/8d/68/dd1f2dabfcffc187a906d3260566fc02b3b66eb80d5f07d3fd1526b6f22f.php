<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8d68dd1f2dabfcffc187a906d3260566fc02b3b66eb80d5f07d3fd1526b6f22f extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  367 => 123,  363 => 121,  361 => 120,  334 => 113,  316 => 107,  268 => 94,  184 => 65,  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 513,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 465,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 449,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 430,  1008 => 429,  1005 => 428,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 423,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 400,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 392,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 364,  876 => 362,  870 => 361,  867 => 360,  862 => 359,  859 => 358,  851 => 353,  848 => 352,  846 => 351,  838 => 345,  833 => 342,  821 => 332,  819 => 331,  810 => 325,  806 => 324,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 312,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 298,  737 => 296,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 284,  697 => 282,  690 => 278,  685 => 276,  681 => 275,  676 => 273,  672 => 272,  667 => 270,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 256,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 235,  582 => 233,  573 => 230,  569 => 229,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 186,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 135,  385 => 134,  348 => 111,  329 => 105,  326 => 104,  323 => 103,  321 => 102,  315 => 100,  310 => 105,  287 => 92,  200 => 76,  523 => 213,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 123,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 116,  333 => 107,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 97,  270 => 82,  262 => 71,  275 => 96,  244 => 110,  214 => 92,  156 => 54,  127 => 39,  170 => 76,  252 => 90,  245 => 85,  228 => 79,  187 => 31,  388 => 119,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 137,  319 => 108,  313 => 106,  290 => 117,  267 => 109,  251 => 69,  235 => 58,  216 => 49,  208 => 85,  201 => 82,  132 => 41,  155 => 52,  303 => 111,  299 => 119,  295 => 94,  285 => 105,  273 => 95,  259 => 70,  247 => 94,  205 => 84,  178 => 32,  360 => 156,  355 => 113,  352 => 106,  347 => 105,  341 => 109,  337 => 114,  331 => 112,  328 => 111,  320 => 25,  314 => 22,  305 => 16,  301 => 102,  294 => 12,  288 => 98,  282 => 89,  280 => 88,  256 => 91,  255 => 96,  234 => 81,  231 => 82,  215 => 74,  168 => 75,  151 => 69,  113 => 22,  116 => 55,  236 => 100,  226 => 53,  204 => 44,  188 => 71,  153 => 51,  149 => 49,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 216,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 150,  403 => 281,  391 => 277,  386 => 118,  374 => 114,  369 => 271,  365 => 109,  358 => 267,  353 => 145,  292 => 211,  209 => 45,  73 => 89,  229 => 54,  219 => 50,  197 => 75,  189 => 36,  181 => 80,  173 => 77,  158 => 75,  129 => 40,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 214,  519 => 342,  514 => 340,  507 => 336,  502 => 201,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 126,  404 => 125,  398 => 281,  379 => 131,  370 => 122,  366 => 271,  359 => 114,  351 => 118,  297 => 125,  293 => 100,  232 => 57,  210 => 71,  194 => 67,  177 => 62,  164 => 13,  137 => 52,  130 => 28,  103 => 33,  121 => 729,  87 => 29,  80 => 10,  61 => 17,  84 => 47,  68 => 14,  93 => 32,  79 => 17,  56 => 10,  140 => 65,  117 => 59,  100 => 41,  26 => 1,  264 => 72,  258 => 118,  253 => 92,  239 => 77,  218 => 93,  213 => 86,  198 => 21,  193 => 77,  183 => 34,  175 => 13,  163 => 10,  107 => 51,  37 => 3,  493 => 327,  487 => 321,  482 => 167,  474 => 188,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 139,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 132,  378 => 273,  375 => 273,  373 => 126,  368 => 115,  354 => 119,  350 => 112,  335 => 110,  327 => 95,  325 => 110,  322 => 109,  318 => 101,  311 => 129,  307 => 104,  298 => 101,  296 => 85,  291 => 83,  281 => 80,  277 => 87,  271 => 125,  265 => 93,  260 => 92,  254 => 70,  248 => 62,  242 => 103,  237 => 106,  221 => 51,  195 => 74,  191 => 88,  180 => 33,  172 => 29,  143 => 66,  135 => 42,  131 => 60,  110 => 52,  64 => 12,  41 => 6,  276 => 112,  272 => 75,  257 => 92,  246 => 66,  243 => 60,  241 => 83,  238 => 62,  233 => 92,  230 => 102,  227 => 53,  224 => 52,  222 => 78,  220 => 88,  211 => 81,  207 => 72,  182 => 84,  162 => 12,  146 => 48,  138 => 62,  122 => 36,  105 => 17,  74 => 130,  70 => 19,  66 => 19,  62 => 12,  199 => 42,  186 => 35,  174 => 81,  169 => 79,  166 => 62,  161 => 79,  159 => 11,  154 => 70,  145 => 54,  141 => 45,  139 => 12,  124 => 61,  120 => 19,  108 => 30,  94 => 50,  65 => 13,  52 => 10,  97 => 34,  92 => 28,  88 => 32,  78 => 43,  71 => 15,  59 => 11,  90 => 49,  29 => 9,  96 => 47,  91 => 31,  81 => 26,  49 => 8,  30 => 4,  31 => 3,  27 => 3,  47 => 9,  34 => 3,  28 => 35,  24 => 2,  22 => 1,  82 => 18,  75 => 9,  72 => 40,  50 => 8,  43 => 6,  40 => 5,  25 => 2,  249 => 68,  160 => 58,  148 => 57,  142 => 63,  134 => 61,  126 => 59,  123 => 20,  118 => 45,  114 => 32,  111 => 31,  104 => 43,  101 => 420,  99 => 48,  86 => 44,  77 => 27,  69 => 39,  58 => 14,  55 => 10,  53 => 29,  46 => 7,  44 => 10,  38 => 5,  35 => 6,  32 => 3,  212 => 77,  206 => 23,  202 => 43,  196 => 85,  192 => 33,  190 => 84,  185 => 85,  179 => 69,  176 => 65,  171 => 63,  167 => 61,  165 => 74,  157 => 71,  152 => 73,  150 => 20,  147 => 50,  144 => 70,  136 => 3,  133 => 10,  128 => 59,  125 => 37,  119 => 35,  115 => 43,  112 => 63,  109 => 45,  106 => 34,  102 => 27,  98 => 25,  95 => 24,  89 => 21,  85 => 19,  83 => 30,  76 => 16,  67 => 13,  63 => 69,  60 => 12,  57 => 34,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 5,  36 => 4,  33 => 3,);
    }
}
