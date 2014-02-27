<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_cb035c1103e5f962fe0724a7b8e04115722e37f51e85dcddc2b41c6f4b0d997d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>
                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  406 => 158,  403 => 157,  401 => 156,  394 => 152,  390 => 150,  378 => 144,  373 => 142,  369 => 141,  364 => 139,  359 => 138,  352 => 135,  349 => 133,  342 => 129,  336 => 126,  332 => 125,  328 => 124,  296 => 109,  290 => 106,  280 => 101,  274 => 98,  261 => 91,  256 => 89,  244 => 85,  234 => 80,  215 => 74,  200 => 70,  195 => 68,  184 => 63,  155 => 53,  146 => 49,  126 => 42,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 393,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 140,  361 => 208,  346 => 196,  335 => 188,  331 => 187,  326 => 185,  321 => 183,  304 => 174,  291 => 169,  272 => 158,  267 => 94,  242 => 140,  232 => 136,  152 => 92,  114 => 71,  104 => 67,  181 => 80,  161 => 71,  110 => 48,  194 => 88,  186 => 111,  170 => 74,  150 => 65,  124 => 41,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 118,  301 => 111,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 100,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 149,  251 => 101,  248 => 100,  239 => 83,  228 => 78,  225 => 77,  213 => 126,  211 => 81,  197 => 119,  174 => 60,  148 => 64,  134 => 45,  127 => 76,  53 => 10,  20 => 11,  270 => 4,  253 => 148,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 69,  192 => 65,  185 => 59,  180 => 62,  175 => 77,  172 => 51,  167 => 48,  165 => 72,  160 => 70,  137 => 46,  113 => 44,  100 => 23,  90 => 20,  81 => 30,  65 => 30,  129 => 57,  97 => 63,  84 => 39,  77 => 27,  34 => 16,  23 => 18,  480 => 162,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 147,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 136,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 120,  305 => 119,  298 => 173,  294 => 90,  285 => 111,  283 => 102,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 88,  247 => 78,  241 => 84,  229 => 73,  220 => 70,  214 => 69,  177 => 61,  169 => 57,  140 => 55,  132 => 44,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 71,  221 => 75,  219 => 129,  217 => 75,  208 => 124,  204 => 78,  179 => 107,  159 => 70,  143 => 48,  135 => 81,  119 => 28,  102 => 38,  71 => 19,  67 => 27,  63 => 24,  59 => 23,  28 => 14,  94 => 35,  89 => 40,  85 => 25,  75 => 28,  68 => 31,  56 => 40,  38 => 32,  24 => 13,  26 => 13,  201 => 92,  196 => 65,  183 => 82,  171 => 102,  166 => 100,  163 => 45,  158 => 62,  156 => 93,  151 => 63,  142 => 61,  138 => 36,  136 => 56,  121 => 75,  117 => 51,  105 => 39,  91 => 34,  62 => 29,  49 => 20,  87 => 33,  31 => 15,  25 => 12,  21 => 12,  19 => 11,  93 => 34,  88 => 60,  78 => 29,  46 => 7,  44 => 19,  27 => 13,  79 => 37,  72 => 25,  69 => 50,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 86,  157 => 56,  145 => 46,  139 => 60,  131 => 55,  123 => 54,  120 => 36,  115 => 50,  111 => 30,  108 => 48,  101 => 25,  98 => 37,  96 => 31,  83 => 25,  74 => 52,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 16,  29 => 21,  209 => 73,  203 => 71,  199 => 67,  193 => 73,  189 => 64,  187 => 60,  182 => 80,  176 => 77,  173 => 65,  168 => 72,  164 => 72,  162 => 55,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 48,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 45,  112 => 49,  109 => 40,  106 => 36,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 17,  82 => 28,  80 => 19,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 18,  51 => 38,  48 => 21,  45 => 19,  42 => 7,  39 => 17,  36 => 17,  33 => 4,  30 => 15,);
    }
}
