<?php

/* FrontendBundle:Default:about.html.twig */
class __TwigTemplate_1e84b2907346242de3b4b0ef78ac88da31ec150317a14a411f211672e50973b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\">
<style type=\"text/css\">
.bx-wrapper .bx-viewport{
  background: none;
  border: none;
  box-shadow: none;
  -webkit-box-shadow: none;
}

</style>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<section id=\"contenido\">
   <article class=\"publicaciones-about\">
         <figure id=\"foto-la-nina\">
               <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nina-vintage-960x460.jpg"), "html", null, true);
        echo "\" alt=\"foto la niña\">
         </figure>
         ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 25
            echo "           ";
            if (($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "slug") == "about-la-nia")) {
                // line 26
                echo "            <h2 class=\"titulo-article\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("about la niña", array(), "messages");
                echo "</h2>
            ";
                // line 27
                echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale")), "method");
                echo "
            ";
            }
            // line 29
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "   </article>
   <article class=\"publicaciones-about\">
         ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 33
            echo "           ";
            if (($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "slug") == "the-story-1")) {
                // line 34
                echo "            <h2 class=\"titulo-article\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("the story", array(), "messages");
                echo "</h2>
            ";
                // line 35
                echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale")), "method");
                echo "
            ";
            }
            // line 37
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "         
         <div id=\"galeria-about\" class=\"galeria\">
               <div class=\"contenedor-galeria about\">
                  <ul class=\"slider1\">
                     ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")));
        foreach ($context['_seq'] as $context["_key"] => $context["galeria"]) {
            echo " 
                     <li class=\"item-regular\">
                         <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "webPath"), "html", null, true);
            echo "\" rel=\"prettyPhoto\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "descripcion"), "html", null, true);
            echo "\">
                             <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "thumbnailWebPath"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "titulo"), "html", null, true);
            echo "\">
                         </a>
                     </li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galeria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  </ul>
               </div>
               <figure class=\"control-galeria-izquierda\">
                  
               </figure>
               <figure class=\"control-galeria-derecha\">

               </figure>
         </div>
         ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 59
            echo "           ";
            if (($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "slug") == "the-story-2")) {
                // line 60
                echo "            ";
                echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale")), "method");
                echo "
            ";
            }
            // line 62
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "   </article>
   <article class=\"publicaciones-about\">
         ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 66
            echo "           ";
            if (($this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "slug") == "mision-vision-and-values")) {
                // line 67
                echo "            <h2 class=\"titulo-article\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("mision, vision and values", array(), "messages");
                echo "</h2>
            ";
                // line 68
                echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale")), "method");
                echo "
            ";
            }
            // line 70
            echo "         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "   </article>
   <div id=\"redes-sociales-pagina\">
          <figure id=\"red-social-pagina-facebook\">
            <a target=\"_blank\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("about_la_nina", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "&t=";
        echo twig_escape_filter($this->env, twig_urlencode_filter("sitio interesante para brindar por ello", true), "html", null, true);
        echo "\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook_share.png"), "html", null, true);
        echo "\" alt=\"compartir en facebook\">     
            </a>
         </figure>
         <figure id=\"red-social-pagina-twitter\">
              <a href=\"http://twitter.com/home?status=";
        // line 79
        echo twig_escape_filter($this->env, twig_urlencode_filter("Estoy leyendo ", true), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("about_la_nina", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter("en el sitio www.laninadelmezcal.com", true), "html", null, true);
        echo ".\" target=\"_blank\">
                  <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter_share.png"), "html", null, true);
        echo "\" alt=\"compartir en twitter\">
              </a>
         </figure>
   </div>
</section>

";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>  
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sfrichpolis.js"), "html", null, true);
        echo "\"></script> 
<script>
   \$(document).ready(function(){
     \$.configPrettyPhoto();
     
     \$('.slider1').bxSlider({
       slideWidth: 290,
       minSlides: 1,
       maxSlides: 3,
       slideMargin: 5,
       nextSelector: '.control-galeria-izquierda',
       prevSelector: '.control-galeria-derecha',
       nextText: '&nbsp;',
       prevText: '&nbsp;',
       pager:false
     });
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 90,  245 => 88,  228 => 79,  187 => 65,  388 => 162,  384 => 161,  380 => 160,  376 => 159,  340 => 140,  336 => 139,  332 => 137,  319 => 134,  313 => 130,  290 => 117,  267 => 109,  251 => 102,  235 => 93,  216 => 87,  208 => 85,  201 => 83,  132 => 50,  155 => 66,  303 => 111,  299 => 119,  295 => 109,  285 => 105,  273 => 98,  259 => 107,  247 => 94,  205 => 84,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 113,  256 => 91,  255 => 96,  234 => 80,  231 => 82,  215 => 74,  168 => 59,  151 => 49,  113 => 40,  116 => 37,  236 => 100,  226 => 93,  204 => 70,  188 => 71,  153 => 49,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 145,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 146,  351 => 264,  297 => 13,  293 => 118,  232 => 92,  210 => 71,  194 => 67,  177 => 62,  164 => 58,  137 => 53,  130 => 51,  103 => 33,  121 => 42,  87 => 31,  80 => 24,  61 => 20,  84 => 27,  68 => 23,  93 => 40,  79 => 26,  56 => 16,  140 => 55,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 103,  239 => 77,  218 => 85,  213 => 86,  198 => 21,  193 => 78,  183 => 63,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 144,  335 => 110,  327 => 136,  325 => 135,  322 => 106,  318 => 104,  311 => 129,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 108,  260 => 92,  254 => 86,  248 => 89,  242 => 103,  237 => 80,  221 => 75,  195 => 75,  191 => 66,  180 => 67,  172 => 60,  143 => 57,  135 => 44,  131 => 59,  110 => 31,  64 => 21,  41 => 5,  276 => 112,  272 => 110,  257 => 92,  246 => 132,  243 => 89,  241 => 94,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 56,  138 => 79,  122 => 38,  105 => 36,  74 => 25,  70 => 19,  66 => 25,  62 => 19,  199 => 68,  186 => 70,  174 => 66,  169 => 71,  166 => 11,  161 => 61,  159 => 58,  154 => 54,  145 => 46,  141 => 45,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 34,  65 => 12,  52 => 10,  97 => 35,  92 => 30,  88 => 38,  78 => 27,  71 => 26,  59 => 18,  90 => 32,  29 => 5,  96 => 41,  91 => 56,  81 => 21,  49 => 7,  30 => 4,  31 => 9,  27 => 3,  47 => 6,  34 => 5,  28 => 5,  24 => 2,  22 => 1,  82 => 29,  75 => 21,  72 => 24,  50 => 13,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 57,  142 => 51,  134 => 51,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 35,  104 => 41,  101 => 36,  99 => 32,  86 => 32,  77 => 19,  69 => 18,  58 => 11,  55 => 10,  53 => 11,  46 => 12,  44 => 6,  38 => 4,  35 => 3,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 72,  157 => 60,  152 => 57,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 42,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 39,  106 => 34,  102 => 33,  98 => 30,  95 => 30,  89 => 29,  85 => 54,  83 => 35,  76 => 25,  67 => 22,  63 => 20,  60 => 14,  57 => 14,  54 => 19,  51 => 18,  48 => 29,  45 => 6,  42 => 5,  39 => 8,  36 => 4,  33 => 3,);
    }
}
