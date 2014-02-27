<?php

/* ::base.html.twig */
class __TwigTemplate_c20b2e42b64dcc5657ceeca9d28acb013c82cc9d5ee52b0c751ef967f2916a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "           <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a95b2e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a95b2e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a95b2e_part_1_style_1.css");
            // line 8
            echo "          <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "3a95b2e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a95b2e") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3a95b2e.css");
            echo "          <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d80a17c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d80a17c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d80a17c_part_2_scripts.jquery_1.js");
            // line 21
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        } else {
            // asset "d80a17c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d80a17c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d80a17c.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  103 => 21,  98 => 18,  95 => 17,  90 => 15,  86 => 10,  72 => 8,  67 => 7,  64 => 6,  58 => 5,  51 => 23,  49 => 17,  46 => 16,  44 => 15,  38 => 12,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
