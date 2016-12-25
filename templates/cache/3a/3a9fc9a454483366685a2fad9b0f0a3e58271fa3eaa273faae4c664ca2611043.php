<?php

/* index.html.twig */
class __TwigTemplate_084cd37faa08fa3d5916247e0a915089a16123b9c087409df254e06375df321c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"panel panel-default\">
\t\t  <div class=\"panel-body\">
\t\t    Under Constrcution
\t\t  </div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_base.html.twig' %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"panel panel-default\">
\t\t  <div class=\"panel-body\">
\t\t    Under Constrcution
\t\t  </div>
\t\t</div>
\t</div>
{% endblock %}", "index.html.twig", "C:\\Users\\Alen Kalac\\Desktop 1\\ServerTest\\templates\\index.html.twig");
    }
}
