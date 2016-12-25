<?php

/* _base.html.twig */
class __TwigTemplate_293e12b22ce67f01df69e7e940221d3db055e9a38185afad5fefe1e8749abce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styles' => array($this, 'block_styles'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<style>
\t\t\t@import \"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\";
\t\t\t@import \"/css/main.css\";
\t\t\t";
        // line 10
        $this->displayBlock('styles', $context, $blocks);
        // line 11
        echo "\t\t</style>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t</head>

\t<body>
\t\t<div class=\"container-fluid\">
\t\t\t";
        // line 18
        $this->loadTemplate("/parts/_nav.html.twig", "_base.html.twig", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t\t";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "\t\t";
        $this->displayBlock('scripts', $context, $blocks);
        // line 22
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_styles($context, array $blocks = array())
    {
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
    }

    // line 21
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  73 => 20,  68 => 10,  63 => 6,  58 => 22,  55 => 21,  53 => 20,  50 => 19,  48 => 18,  39 => 11,  37 => 10,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>{% block title %}{% endblock %}</title>
\t\t<style>
\t\t\t@import \"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\";
\t\t\t@import \"/css/main.css\";
\t\t\t{% block styles %}{% endblock %}
\t\t</style>
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t</head>

\t<body>
\t\t<div class=\"container-fluid\">
\t\t\t{% include '/parts/_nav.html.twig' %}
\t\t</div>
\t\t{% block body %}{% endblock %}
\t\t{% block scripts %}{% endblock %}
\t</body>
</html>", "_base.html.twig", "C:\\Users\\Alen Kalac\\Desktop 1\\ServerTest\\templates\\_base.html.twig");
    }
}
