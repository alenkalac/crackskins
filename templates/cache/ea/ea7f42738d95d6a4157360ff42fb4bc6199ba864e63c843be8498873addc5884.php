<?php

/* signup.html.twig */
class __TwigTemplate_50f228fef373fbf68ddb06967ff07850d082d916aa32653af74c023e053df6a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_base.html.twig", "signup.html.twig", 1);
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
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">Instructions</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"#\" method=\"post\">

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">Sign Up Form</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"Username\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Email Address</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"example@email.com\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"pass\">Password</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"pass\" id=\"pass\" placeholder=\"Password\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"pass_conf\">Confirm Password</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"pass_conf\" id=\"pass_conf\" placeholder=\"Confirm Password\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default col-xs-12\" type=\"submit\" value=\"Sign Up\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "signup.html.twig";
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
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">Instructions</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"#\" method=\"post\">

\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">Sign Up Form</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Username</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username\" id=\"username\" placeholder=\"Username\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"username\">Email Address</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"example@email.com\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"pass\">Password</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"pass\" id=\"pass\" placeholder=\"Password\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"pass_conf\">Confirm Password</label>
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"pass_conf\" id=\"pass_conf\" placeholder=\"Confirm Password\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input class=\"btn btn-default col-xs-12\" type=\"submit\" value=\"Sign Up\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "signup.html.twig", "C:\\Users\\Alen Kalac\\Desktop 1\\ServerTest\\templates\\signup.html.twig");
    }
}
