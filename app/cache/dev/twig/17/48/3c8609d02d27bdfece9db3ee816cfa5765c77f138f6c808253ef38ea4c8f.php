<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_17483c8609d02d27bdfece9db3ee816cfa5765c77f138f6c808253ef38ea4c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_group"]) ? $context["view_group"] : $this->getContext($context, "view_group")), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  590 => 178,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  400 => 120,  388 => 117,  377 => 115,  371 => 113,  339 => 100,  329 => 95,  324 => 92,  311 => 89,  307 => 87,  297 => 84,  223 => 58,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  263 => 71,  236 => 63,  216 => 100,  70 => 33,  344 => 97,  340 => 95,  295 => 88,  292 => 135,  282 => 79,  259 => 70,  249 => 67,  190 => 50,  178 => 45,  118 => 28,  318 => 145,  316 => 121,  288 => 85,  284 => 106,  279 => 104,  275 => 103,  250 => 67,  237 => 86,  222 => 81,  191 => 50,  153 => 72,  76 => 13,  58 => 23,  406 => 158,  403 => 121,  401 => 156,  394 => 118,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 135,  349 => 103,  342 => 101,  336 => 99,  332 => 97,  328 => 124,  296 => 109,  290 => 106,  280 => 131,  274 => 77,  261 => 91,  256 => 121,  244 => 85,  234 => 80,  215 => 54,  200 => 55,  195 => 68,  184 => 47,  155 => 53,  146 => 34,  126 => 42,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 179,  585 => 177,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 107,  346 => 196,  335 => 93,  331 => 187,  326 => 93,  321 => 91,  304 => 174,  291 => 82,  272 => 76,  267 => 94,  242 => 113,  232 => 84,  152 => 38,  114 => 46,  104 => 23,  181 => 47,  161 => 38,  110 => 25,  194 => 88,  186 => 111,  170 => 79,  150 => 55,  124 => 23,  358 => 106,  351 => 135,  347 => 102,  343 => 132,  338 => 94,  327 => 126,  323 => 125,  319 => 90,  315 => 90,  301 => 111,  299 => 112,  293 => 109,  289 => 81,  281 => 105,  277 => 78,  271 => 108,  265 => 126,  262 => 105,  260 => 124,  257 => 149,  251 => 101,  248 => 116,  239 => 83,  228 => 59,  225 => 77,  213 => 126,  211 => 81,  197 => 54,  174 => 64,  148 => 64,  134 => 45,  127 => 76,  53 => 80,  20 => 11,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 69,  192 => 88,  185 => 86,  180 => 62,  175 => 43,  172 => 51,  167 => 48,  165 => 77,  160 => 76,  137 => 27,  113 => 41,  100 => 42,  90 => 18,  81 => 15,  65 => 5,  129 => 24,  97 => 63,  84 => 16,  77 => 8,  34 => 16,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 115,  298 => 173,  294 => 90,  285 => 84,  283 => 102,  278 => 86,  268 => 127,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 84,  229 => 73,  220 => 56,  214 => 99,  177 => 61,  169 => 57,  140 => 28,  132 => 59,  128 => 58,  107 => 44,  61 => 25,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 106,  227 => 60,  224 => 103,  221 => 75,  219 => 101,  217 => 79,  208 => 57,  204 => 73,  179 => 66,  159 => 70,  143 => 29,  135 => 81,  119 => 43,  102 => 17,  71 => 30,  67 => 185,  63 => 4,  59 => 26,  28 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 32,  68 => 6,  56 => 25,  38 => 17,  24 => 2,  26 => 13,  201 => 72,  196 => 52,  183 => 82,  171 => 63,  166 => 100,  163 => 45,  158 => 75,  156 => 36,  151 => 63,  142 => 61,  138 => 61,  136 => 60,  121 => 29,  117 => 51,  105 => 39,  91 => 34,  62 => 27,  49 => 112,  87 => 17,  31 => 15,  25 => 12,  21 => 12,  19 => 11,  93 => 68,  88 => 12,  78 => 40,  46 => 21,  44 => 74,  27 => 3,  79 => 14,  72 => 199,  69 => 29,  47 => 75,  40 => 44,  37 => 54,  22 => 12,  246 => 86,  157 => 41,  145 => 52,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 27,  111 => 30,  108 => 39,  101 => 22,  98 => 21,  96 => 31,  83 => 25,  74 => 52,  66 => 28,  55 => 22,  52 => 113,  50 => 23,  43 => 20,  41 => 18,  35 => 16,  32 => 13,  29 => 11,  209 => 96,  203 => 56,  199 => 53,  193 => 51,  189 => 64,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 20,  92 => 39,  86 => 43,  82 => 36,  80 => 41,  73 => 7,  64 => 184,  60 => 3,  57 => 155,  54 => 154,  51 => 24,  48 => 67,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 4,  30 => 14,);
    }
}
