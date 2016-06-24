<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_3884d5695dca376806fb7baa4f8166d0fddcd1b7554f60a7f73f97f31937bfe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre"), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  188 => 88,  182 => 85,  179 => 84,  171 => 81,  168 => 80,  166 => 79,  163 => 78,  155 => 75,  152 => 74,  149 => 73,  141 => 70,  138 => 69,  132 => 65,  129 => 64,  126 => 63,  124 => 62,  121 => 61,  114 => 59,  108 => 56,  105 => 55,  97 => 52,  94 => 51,  91 => 50,  87 => 49,  84 => 48,  81 => 47,  75 => 43,  69 => 40,  66 => 39,  64 => 38,  59 => 36,  56 => 35,  54 => 34,  51 => 33,  45 => 30,  42 => 29,  34 => 26,  31 => 25,  29 => 24,  24 => 21,  22 => 20,  19 => 1,);
    }
}
