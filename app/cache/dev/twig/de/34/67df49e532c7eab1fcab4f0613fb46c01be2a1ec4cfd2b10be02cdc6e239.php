<?php

/* AcmeUserBundle:User:message.html.twig */
class __TwigTemplate_de3467df49e532c7eab1fcab4f0613fb46c01be2a1ec4cfd2b10be02cdc6e239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<table>
  <tr>
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 8
            echo "    ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                // line 9
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows"))));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 10
                    echo "        <td>";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                    echo "</td>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            // line 13
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </tr>
  
  ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 17
            echo "    <tr>
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 19
                echo "      <td>
      ";
                // line 20
                if ($this->getAttribute((isset($context["msg"]) ? $context["msg"] : null), "timestamp", array(), "any", true, true)) {
                    // line 21
                    echo "        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "m/d/Y"), "html", null, true);
                    echo "
      ";
                } else {
                    // line 23
                    echo "        ";
                    echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
                    echo "
      ";
                }
                // line 25
                echo "      </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  
</table>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:User:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 29,  126 => 27,  119 => 25,  113 => 23,  107 => 21,  105 => 20,  102 => 19,  98 => 18,  95 => 17,  91 => 16,  87 => 14,  73 => 13,  70 => 12,  61 => 10,  56 => 9,  53 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
