<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bbdf924a271f5b34b5e0ec6dba9aa8d9b4b27ba4c7423e98e9af25562264f859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  746 => 478,  710 => 475,  698 => 471,  682 => 467,  679 => 466,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  532 => 410,  529 => 409,  389 => 160,  334 => 141,  276 => 111,  255 => 101,  431 => 189,  348 => 140,  207 => 75,  660 => 464,  651 => 337,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  606 => 449,  593 => 310,  591 => 309,  588 => 308,  563 => 298,  559 => 296,  552 => 293,  545 => 291,  541 => 290,  527 => 408,  522 => 406,  519 => 278,  515 => 276,  497 => 267,  489 => 262,  479 => 256,  471 => 253,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  418 => 224,  412 => 222,  397 => 213,  353 => 149,  836 => 271,  833 => 270,  828 => 265,  821 => 261,  815 => 258,  811 => 256,  809 => 255,  806 => 254,  800 => 252,  798 => 251,  795 => 250,  789 => 248,  787 => 247,  784 => 246,  778 => 244,  776 => 243,  773 => 242,  767 => 240,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 479,  740 => 188,  735 => 187,  730 => 186,  727 => 476,  722 => 184,  719 => 183,  715 => 277,  708 => 267,  706 => 473,  699 => 235,  693 => 232,  690 => 469,  688 => 230,  683 => 227,  677 => 465,  674 => 223,  672 => 345,  664 => 342,  638 => 213,  632 => 211,  621 => 206,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 195,  569 => 300,  566 => 182,  548 => 292,  523 => 156,  506 => 151,  495 => 148,  491 => 147,  478 => 142,  475 => 141,  468 => 140,  459 => 246,  450 => 135,  447 => 134,  434 => 130,  417 => 126,  408 => 176,  376 => 205,  363 => 153,  345 => 147,  325 => 129,  317 => 185,  231 => 83,  572 => 193,  561 => 174,  549 => 411,  544 => 172,  521 => 162,  517 => 404,  511 => 160,  508 => 159,  499 => 268,  487 => 152,  477 => 150,  470 => 135,  463 => 248,  460 => 132,  449 => 198,  441 => 196,  426 => 102,  419 => 98,  410 => 221,  395 => 84,  392 => 83,  386 => 159,  382 => 93,  380 => 158,  357 => 123,  333 => 117,  226 => 84,  205 => 108,  370 => 100,  367 => 155,  330 => 87,  320 => 127,  313 => 183,  310 => 81,  302 => 125,  287 => 72,  188 => 90,  12 => 34,  713 => 270,  707 => 211,  704 => 210,  702 => 472,  696 => 206,  686 => 468,  681 => 203,  669 => 221,  666 => 200,  655 => 215,  652 => 214,  635 => 191,  618 => 190,  613 => 320,  608 => 202,  605 => 201,  602 => 317,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 162,  536 => 161,  533 => 284,  530 => 158,  528 => 167,  525 => 280,  516 => 161,  512 => 152,  510 => 158,  507 => 157,  505 => 270,  502 => 155,  498 => 149,  483 => 258,  473 => 254,  467 => 134,  465 => 249,  462 => 202,  451 => 141,  446 => 197,  428 => 230,  425 => 128,  414 => 125,  400 => 214,  388 => 124,  377 => 82,  371 => 156,  339 => 100,  329 => 131,  324 => 113,  311 => 89,  307 => 128,  297 => 104,  223 => 66,  306 => 107,  303 => 106,  300 => 105,  286 => 112,  263 => 95,  236 => 35,  216 => 79,  70 => 24,  344 => 119,  340 => 145,  295 => 178,  292 => 135,  282 => 80,  259 => 103,  249 => 70,  190 => 76,  178 => 59,  118 => 49,  318 => 111,  316 => 121,  288 => 118,  284 => 106,  279 => 104,  275 => 105,  250 => 67,  237 => 86,  222 => 83,  191 => 67,  153 => 77,  76 => 27,  58 => 18,  406 => 158,  403 => 121,  401 => 172,  394 => 168,  390 => 125,  378 => 157,  373 => 156,  369 => 115,  364 => 139,  359 => 138,  352 => 121,  349 => 103,  342 => 137,  336 => 99,  332 => 116,  328 => 139,  296 => 121,  290 => 119,  280 => 79,  274 => 110,  261 => 50,  256 => 96,  244 => 85,  234 => 80,  215 => 54,  200 => 72,  195 => 68,  184 => 63,  155 => 47,  146 => 34,  126 => 45,  694 => 470,  685 => 406,  680 => 403,  678 => 398,  668 => 344,  663 => 199,  658 => 216,  654 => 389,  647 => 336,  643 => 381,  637 => 378,  633 => 377,  627 => 208,  617 => 367,  609 => 319,  599 => 355,  592 => 179,  585 => 307,  581 => 305,  579 => 342,  577 => 303,  571 => 338,  567 => 414,  557 => 295,  550 => 326,  542 => 163,  538 => 170,  531 => 283,  526 => 157,  518 => 307,  514 => 306,  509 => 272,  504 => 158,  492 => 154,  486 => 145,  481 => 143,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 184,  420 => 127,  415 => 180,  396 => 159,  383 => 207,  366 => 140,  361 => 152,  346 => 92,  335 => 134,  331 => 140,  326 => 138,  321 => 135,  304 => 181,  291 => 102,  272 => 76,  267 => 101,  242 => 113,  232 => 88,  152 => 46,  114 => 88,  104 => 32,  181 => 65,  161 => 63,  110 => 22,  194 => 68,  186 => 54,  170 => 84,  150 => 55,  124 => 52,  358 => 151,  351 => 120,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 71,  315 => 131,  301 => 111,  299 => 64,  293 => 120,  289 => 113,  281 => 114,  277 => 68,  271 => 55,  265 => 105,  262 => 98,  260 => 62,  257 => 49,  251 => 101,  248 => 97,  239 => 83,  228 => 59,  225 => 77,  213 => 78,  211 => 81,  197 => 69,  174 => 65,  148 => 97,  134 => 39,  127 => 35,  53 => 15,  20 => 1,  270 => 102,  253 => 100,  233 => 87,  212 => 78,  210 => 77,  206 => 71,  202 => 94,  198 => 69,  192 => 55,  185 => 74,  180 => 120,  175 => 58,  172 => 57,  167 => 48,  165 => 83,  160 => 48,  137 => 47,  113 => 48,  100 => 39,  90 => 42,  81 => 23,  65 => 11,  129 => 42,  97 => 41,  84 => 27,  77 => 20,  34 => 5,  23 => 13,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 131,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 215,  398 => 119,  393 => 211,  387 => 164,  384 => 122,  381 => 121,  379 => 119,  374 => 81,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 54,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 61,  177 => 61,  169 => 69,  140 => 58,  132 => 47,  128 => 47,  107 => 44,  61 => 12,  273 => 174,  269 => 107,  254 => 60,  243 => 92,  240 => 86,  238 => 36,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 75,  219 => 29,  217 => 79,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 14,  28 => 3,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  38 => 6,  24 => 11,  26 => 6,  201 => 106,  196 => 92,  183 => 121,  171 => 63,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 58,  138 => 93,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  87 => 32,  31 => 8,  25 => 35,  21 => 11,  19 => 1,  93 => 27,  88 => 25,  78 => 18,  46 => 34,  44 => 11,  27 => 3,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 6,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 45,  111 => 47,  108 => 19,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 23,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 24,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 109,  162 => 59,  154 => 60,  149 => 62,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 38,  99 => 23,  95 => 34,  92 => 28,  86 => 17,  82 => 19,  80 => 32,  73 => 33,  64 => 21,  60 => 24,  57 => 39,  54 => 19,  51 => 37,  48 => 9,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
