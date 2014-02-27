<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_1c07c114e7b9057260968cea3470e7f3869d47093fcc1733a36f3cd4b33dda46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "multiple") == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if ((!twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) {
                        // line 24
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["val"]) ? $context["val"] : $this->getContext($context, "val")));
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 39
                echo "
        ";
            } elseif (twig_in_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices")))) {
                // line 41
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "choices"), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 180,  561 => 178,  549 => 174,  544 => 172,  521 => 162,  517 => 161,  511 => 160,  508 => 159,  499 => 156,  487 => 152,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  441 => 105,  426 => 102,  419 => 98,  410 => 96,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  357 => 125,  333 => 117,  226 => 67,  205 => 59,  370 => 100,  367 => 131,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 114,  287 => 72,  188 => 21,  12 => 34,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 169,  533 => 169,  530 => 165,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  451 => 141,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 107,  377 => 82,  371 => 113,  339 => 100,  329 => 95,  324 => 116,  311 => 89,  307 => 115,  297 => 84,  223 => 66,  306 => 141,  303 => 140,  300 => 113,  286 => 80,  263 => 71,  236 => 63,  216 => 25,  70 => 29,  344 => 97,  340 => 90,  295 => 88,  292 => 135,  282 => 80,  259 => 70,  249 => 70,  190 => 50,  178 => 45,  118 => 28,  318 => 145,  316 => 121,  288 => 108,  284 => 106,  279 => 104,  275 => 77,  250 => 67,  237 => 86,  222 => 81,  191 => 50,  153 => 72,  76 => 34,  58 => 25,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 136,  364 => 139,  359 => 138,  352 => 121,  349 => 103,  342 => 101,  336 => 99,  332 => 88,  328 => 124,  296 => 111,  290 => 106,  280 => 79,  274 => 77,  261 => 91,  256 => 121,  244 => 85,  234 => 80,  215 => 54,  200 => 55,  195 => 68,  184 => 47,  155 => 53,  146 => 34,  126 => 48,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 177,  550 => 326,  542 => 172,  538 => 170,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 158,  492 => 154,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 97,  396 => 234,  383 => 224,  366 => 140,  361 => 127,  346 => 92,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 79,  291 => 109,  272 => 76,  267 => 94,  242 => 113,  232 => 84,  152 => 63,  114 => 44,  104 => 42,  181 => 47,  161 => 38,  110 => 41,  194 => 88,  186 => 54,  170 => 79,  150 => 58,  124 => 43,  358 => 106,  351 => 135,  347 => 118,  343 => 91,  338 => 94,  327 => 86,  323 => 125,  319 => 90,  315 => 83,  301 => 111,  299 => 112,  293 => 75,  289 => 81,  281 => 105,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  251 => 101,  248 => 116,  239 => 83,  228 => 59,  225 => 77,  213 => 126,  211 => 81,  197 => 56,  174 => 53,  148 => 44,  134 => 45,  127 => 34,  53 => 24,  20 => 11,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 69,  192 => 55,  185 => 20,  180 => 104,  175 => 43,  172 => 52,  167 => 48,  165 => 77,  160 => 48,  137 => 47,  113 => 48,  100 => 43,  90 => 36,  81 => 33,  65 => 25,  129 => 49,  97 => 41,  84 => 34,  77 => 30,  34 => 17,  23 => 12,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 103,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 122,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 81,  283 => 70,  278 => 86,  268 => 127,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 61,  169 => 51,  140 => 41,  132 => 57,  128 => 47,  107 => 46,  61 => 26,  273 => 96,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 60,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 81,  119 => 31,  102 => 142,  71 => 32,  67 => 30,  63 => 20,  59 => 23,  28 => 14,  94 => 40,  89 => 34,  85 => 37,  75 => 31,  68 => 24,  56 => 25,  38 => 18,  24 => 13,  26 => 14,  201 => 57,  196 => 52,  183 => 82,  171 => 63,  166 => 50,  163 => 49,  158 => 75,  156 => 36,  151 => 45,  142 => 42,  138 => 61,  136 => 39,  121 => 52,  117 => 45,  105 => 41,  91 => 75,  62 => 24,  49 => 20,  87 => 35,  31 => 16,  25 => 12,  21 => 11,  19 => 11,  93 => 138,  88 => 37,  78 => 32,  46 => 19,  44 => 21,  27 => 14,  79 => 34,  72 => 30,  69 => 29,  47 => 25,  40 => 19,  37 => 18,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 40,  111 => 43,  108 => 42,  101 => 39,  98 => 140,  96 => 37,  83 => 64,  74 => 29,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 18,  41 => 23,  35 => 20,  32 => 15,  29 => 15,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 102,  173 => 42,  168 => 60,  164 => 54,  162 => 55,  154 => 46,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 30,  112 => 26,  109 => 45,  106 => 36,  103 => 44,  99 => 38,  95 => 19,  92 => 35,  86 => 65,  82 => 38,  80 => 31,  73 => 27,  64 => 27,  60 => 27,  57 => 23,  54 => 22,  51 => 21,  48 => 22,  45 => 21,  42 => 20,  39 => 20,  36 => 18,  33 => 17,  30 => 15,);
    }
}
