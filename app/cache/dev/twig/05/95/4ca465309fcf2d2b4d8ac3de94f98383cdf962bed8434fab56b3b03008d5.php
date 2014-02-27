<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_05954ca465309fcf2d2b4d8ac3de94f98383cdf962bed8434fab56b3b03008d5 extends Twig_Template
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
        if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "editable")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 17
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 0, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <span class=\"label label-success\">";
                // line 19
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "</span>
        </a>
    ";
            } else {
                // line 22
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "value" => 1, "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <span class=\"label label-important\">";
                // line 23
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "</span>
        </a>
    ";
            }
        } else {
            // line 27
            echo "    ";
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                // line 28
                echo "        <span class=\"label label-success\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                echo "</span>
    ";
            } else {
                // line 30
                echo "        <span class=\"label label-important\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                echo "</span>
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  367 => 99,  330 => 87,  320 => 84,  313 => 82,  310 => 81,  302 => 78,  287 => 72,  188 => 21,  12 => 34,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  339 => 100,  329 => 95,  324 => 92,  311 => 89,  307 => 87,  297 => 84,  223 => 27,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  263 => 71,  236 => 63,  216 => 25,  70 => 29,  344 => 97,  340 => 90,  295 => 88,  292 => 135,  282 => 79,  259 => 70,  249 => 55,  190 => 50,  178 => 45,  118 => 28,  318 => 145,  316 => 121,  288 => 85,  284 => 106,  279 => 104,  275 => 103,  250 => 67,  237 => 86,  222 => 81,  191 => 50,  153 => 72,  76 => 35,  58 => 23,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 94,  349 => 103,  342 => 101,  336 => 99,  332 => 88,  328 => 124,  296 => 76,  290 => 106,  280 => 69,  274 => 77,  261 => 91,  256 => 121,  244 => 85,  234 => 80,  215 => 54,  200 => 55,  195 => 68,  184 => 47,  155 => 53,  146 => 34,  126 => 55,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 97,  346 => 92,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 79,  291 => 82,  272 => 76,  267 => 94,  242 => 113,  232 => 84,  152 => 63,  114 => 50,  104 => 42,  181 => 47,  161 => 38,  110 => 25,  194 => 88,  186 => 111,  170 => 79,  150 => 58,  124 => 43,  358 => 106,  351 => 135,  347 => 102,  343 => 91,  338 => 94,  327 => 86,  323 => 125,  319 => 90,  315 => 83,  301 => 111,  299 => 112,  293 => 75,  289 => 81,  281 => 105,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  251 => 101,  248 => 116,  239 => 83,  228 => 59,  225 => 77,  213 => 126,  211 => 81,  197 => 54,  174 => 60,  148 => 64,  134 => 45,  127 => 76,  53 => 24,  20 => 11,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 69,  192 => 23,  185 => 20,  180 => 104,  175 => 43,  172 => 51,  167 => 48,  165 => 77,  160 => 52,  137 => 47,  113 => 39,  100 => 36,  90 => 18,  81 => 34,  65 => 15,  129 => 56,  97 => 41,  84 => 16,  77 => 34,  34 => 17,  23 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 95,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 84,  283 => 70,  278 => 86,  268 => 127,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 56,  214 => 99,  177 => 61,  169 => 58,  140 => 53,  132 => 57,  128 => 44,  107 => 48,  61 => 25,  273 => 96,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 57,  204 => 73,  179 => 66,  159 => 70,  143 => 48,  135 => 81,  119 => 43,  102 => 39,  71 => 32,  67 => 31,  63 => 31,  59 => 27,  28 => 14,  94 => 40,  89 => 42,  85 => 37,  75 => 31,  68 => 30,  56 => 27,  38 => 18,  24 => 2,  26 => 14,  201 => 72,  196 => 52,  183 => 82,  171 => 63,  166 => 57,  163 => 60,  158 => 75,  156 => 36,  151 => 63,  142 => 61,  138 => 61,  136 => 60,  121 => 52,  117 => 51,  105 => 44,  91 => 39,  62 => 28,  49 => 23,  87 => 38,  31 => 16,  25 => 12,  21 => 12,  19 => 11,  93 => 68,  88 => 38,  78 => 36,  46 => 22,  44 => 20,  27 => 14,  79 => 33,  72 => 19,  69 => 33,  47 => 22,  40 => 24,  37 => 17,  22 => 11,  246 => 54,  157 => 58,  145 => 56,  139 => 31,  131 => 45,  123 => 30,  120 => 48,  115 => 40,  111 => 41,  108 => 45,  101 => 46,  98 => 38,  96 => 44,  83 => 36,  74 => 33,  66 => 32,  55 => 21,  52 => 23,  50 => 23,  43 => 21,  41 => 19,  35 => 17,  32 => 14,  29 => 15,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 102,  173 => 42,  168 => 60,  164 => 54,  162 => 55,  154 => 67,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 51,  130 => 57,  125 => 45,  122 => 44,  116 => 47,  112 => 26,  109 => 45,  106 => 36,  103 => 46,  99 => 45,  95 => 37,  92 => 43,  86 => 37,  82 => 38,  80 => 35,  73 => 34,  64 => 184,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 67,  45 => 21,  42 => 20,  39 => 17,  36 => 18,  33 => 17,  30 => 15,);
    }
}
