<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_231a4ac71311c7f06c7508cb04b1b5c09437c3a74e7b031e80a953001e04d68d extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\"/>
        </a>
    </div>
    <style type=\"text/css\">
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 321,  346 => 320,  302 => 278,  300 => 277,  377 => 157,  362 => 153,  357 => 151,  339 => 145,  306 => 128,  289 => 119,  240 => 93,  396 => 178,  372 => 165,  344 => 147,  330 => 140,  308 => 129,  279 => 113,  274 => 111,  817 => 473,  814 => 472,  803 => 470,  799 => 469,  795 => 467,  756 => 461,  753 => 460,  734 => 458,  717 => 457,  713 => 455,  709 => 454,  705 => 453,  701 => 452,  693 => 450,  689 => 449,  686 => 448,  684 => 447,  656 => 445,  641 => 440,  636 => 438,  632 => 437,  629 => 436,  627 => 435,  613 => 434,  576 => 399,  558 => 396,  541 => 395,  536 => 393,  225 => 93,  367 => 123,  363 => 332,  361 => 120,  334 => 113,  316 => 107,  268 => 107,  184 => 65,  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 513,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 465,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 449,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 430,  1008 => 429,  1005 => 428,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 423,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 400,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 392,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 364,  876 => 362,  870 => 361,  867 => 360,  862 => 359,  859 => 358,  851 => 353,  848 => 352,  846 => 351,  838 => 345,  833 => 342,  821 => 332,  819 => 331,  810 => 325,  806 => 324,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 466,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 298,  737 => 296,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 284,  697 => 451,  690 => 278,  685 => 276,  681 => 275,  676 => 273,  672 => 272,  667 => 446,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 256,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 235,  582 => 233,  573 => 230,  569 => 229,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 186,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 176,  385 => 159,  348 => 111,  329 => 105,  326 => 104,  323 => 103,  321 => 102,  315 => 129,  310 => 105,  287 => 118,  200 => 67,  523 => 213,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 179,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 146,  333 => 141,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 97,  270 => 136,  262 => 103,  275 => 111,  244 => 110,  214 => 90,  156 => 56,  127 => 49,  170 => 63,  252 => 100,  245 => 96,  228 => 87,  187 => 66,  388 => 160,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 137,  319 => 108,  313 => 106,  290 => 117,  267 => 109,  251 => 96,  235 => 58,  216 => 49,  208 => 87,  201 => 82,  132 => 51,  155 => 52,  303 => 111,  299 => 119,  295 => 121,  285 => 105,  273 => 110,  259 => 70,  247 => 97,  205 => 75,  178 => 32,  360 => 152,  355 => 113,  352 => 149,  347 => 105,  341 => 109,  337 => 145,  331 => 112,  328 => 111,  320 => 135,  314 => 131,  305 => 16,  301 => 125,  294 => 12,  288 => 115,  282 => 115,  280 => 114,  256 => 91,  255 => 96,  234 => 89,  231 => 88,  215 => 79,  168 => 60,  151 => 46,  113 => 41,  116 => 38,  236 => 100,  226 => 86,  204 => 44,  188 => 66,  153 => 55,  149 => 58,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 216,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 150,  403 => 180,  391 => 177,  386 => 118,  374 => 114,  369 => 271,  365 => 161,  358 => 157,  353 => 145,  292 => 120,  209 => 77,  73 => 24,  229 => 54,  219 => 50,  197 => 75,  189 => 82,  181 => 64,  173 => 75,  158 => 75,  129 => 40,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 394,  531 => 391,  526 => 389,  519 => 342,  514 => 340,  507 => 336,  502 => 201,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 183,  407 => 126,  404 => 125,  398 => 281,  379 => 158,  370 => 156,  366 => 155,  359 => 114,  351 => 322,  297 => 125,  293 => 100,  232 => 87,  210 => 71,  194 => 69,  177 => 59,  164 => 13,  137 => 47,  130 => 50,  103 => 24,  121 => 729,  87 => 24,  80 => 10,  61 => 18,  84 => 23,  68 => 14,  93 => 37,  79 => 28,  56 => 15,  140 => 65,  117 => 59,  100 => 23,  26 => 1,  264 => 105,  258 => 103,  253 => 92,  239 => 77,  218 => 93,  213 => 86,  198 => 71,  193 => 68,  183 => 63,  175 => 62,  163 => 60,  107 => 51,  37 => 5,  493 => 327,  487 => 321,  482 => 167,  474 => 188,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 139,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 170,  378 => 273,  375 => 273,  373 => 126,  368 => 115,  354 => 150,  350 => 112,  335 => 110,  327 => 139,  325 => 138,  322 => 109,  318 => 101,  311 => 130,  307 => 104,  298 => 101,  296 => 118,  291 => 116,  281 => 80,  277 => 87,  271 => 125,  265 => 104,  260 => 92,  254 => 101,  248 => 62,  242 => 103,  237 => 106,  221 => 83,  195 => 74,  191 => 68,  180 => 64,  172 => 29,  143 => 42,  135 => 52,  131 => 60,  110 => 27,  64 => 23,  41 => 12,  276 => 112,  272 => 75,  257 => 92,  246 => 93,  243 => 92,  241 => 83,  238 => 89,  233 => 92,  230 => 102,  227 => 53,  224 => 85,  222 => 84,  220 => 88,  211 => 81,  207 => 76,  182 => 84,  162 => 53,  146 => 43,  138 => 62,  122 => 48,  105 => 37,  74 => 130,  70 => 20,  66 => 18,  62 => 22,  199 => 85,  186 => 35,  174 => 58,  169 => 56,  166 => 62,  161 => 79,  159 => 58,  154 => 47,  145 => 54,  141 => 45,  139 => 12,  124 => 45,  120 => 47,  108 => 34,  94 => 33,  65 => 13,  52 => 14,  97 => 34,  92 => 33,  88 => 27,  78 => 43,  71 => 15,  59 => 11,  90 => 32,  29 => 6,  96 => 38,  91 => 32,  81 => 24,  49 => 12,  30 => 4,  31 => 3,  27 => 3,  47 => 10,  34 => 8,  28 => 35,  24 => 2,  22 => 1,  82 => 18,  75 => 27,  72 => 26,  50 => 8,  43 => 6,  40 => 5,  25 => 2,  249 => 68,  160 => 59,  148 => 57,  142 => 57,  134 => 51,  126 => 35,  123 => 20,  118 => 43,  114 => 32,  111 => 47,  104 => 43,  101 => 34,  99 => 30,  86 => 35,  77 => 27,  69 => 39,  58 => 13,  55 => 12,  53 => 29,  46 => 9,  44 => 6,  38 => 6,  35 => 7,  32 => 3,  212 => 78,  206 => 23,  202 => 73,  196 => 69,  192 => 33,  190 => 67,  185 => 85,  179 => 77,  176 => 65,  171 => 57,  167 => 62,  165 => 54,  157 => 71,  152 => 73,  150 => 54,  147 => 50,  144 => 51,  136 => 3,  133 => 39,  128 => 59,  125 => 37,  119 => 31,  115 => 43,  112 => 63,  109 => 39,  106 => 25,  102 => 31,  98 => 39,  95 => 21,  89 => 32,  85 => 28,  83 => 29,  76 => 24,  67 => 24,  63 => 69,  60 => 16,  57 => 34,  54 => 13,  51 => 8,  48 => 9,  45 => 11,  42 => 6,  39 => 8,  36 => 4,  33 => 3,);
    }
}
