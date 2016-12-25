<?php

/* /parts/_nav.html.twig */
class __TwigTemplate_35e670da008c305cbaf19538d02d85ea613786646b4082466cb9df8d976211ad extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse\">
\t <div class=\"col-xs-3 full-height hidden-xs\">
\t \t\t<h1><a href=\"/\">CrackSkins</a></h1>
\t \t\t<h4>Alternative Skin Server</h4>
\t </div>
\t <div class=\"col-sm-9  col-xs-12 full-height\">
\t \t<ul class=\"navbar-items\">
\t \t\t<li><a href=\"/signup\">Sign Up</a>
\t        <li><a href=\"#\">Instructions</a></li>
\t        <li><a href=\"#\">Download</a></li>
       </ul>
\t </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/parts/_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
\t <div class=\"col-xs-3 full-height hidden-xs\">
\t \t\t<h1><a href=\"/\">CrackSkins</a></h1>
\t \t\t<h4>Alternative Skin Server</h4>
\t </div>
\t <div class=\"col-sm-9  col-xs-12 full-height\">
\t \t<ul class=\"navbar-items\">
\t \t\t<li><a href=\"/signup\">Sign Up</a>
\t        <li><a href=\"#\">Instructions</a></li>
\t        <li><a href=\"#\">Download</a></li>
       </ul>
\t </div>
</nav>", "/parts/_nav.html.twig", "C:\\Users\\Alen Kalac\\Desktop 1\\ServerTest\\templates\\parts\\_nav.html.twig");
    }
}
