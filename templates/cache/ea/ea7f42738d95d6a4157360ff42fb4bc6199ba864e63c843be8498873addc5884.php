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
        // line 3
        if (array_key_exists("errorcode", $context)) {
            // line 4
            if (((isset($context["errorcode"]) ? $context["errorcode"] : $this->getContext($context, "errorcode")) == 1)) {
                // line 5
                $context["class_username"] = "form-group has-error";
            } elseif ((            // line 6
(isset($context["errorcode"]) ? $context["errorcode"] : $this->getContext($context, "errorcode")) == 2)) {
                // line 7
                $context["class_email"] = "form-group has-error";
            } elseif ((            // line 8
(isset($context["errorcode"]) ? $context["errorcode"] : $this->getContext($context, "errorcode")) == 3)) {
                // line 9
                $context["class_pass"] = "form-group has-error";
            }
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
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
\t\t<div class=\"col-md-5\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">Sign Up Form</div>
\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t";
        // line 30
        if (array_key_exists("error", $context)) {
            // line 31
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\"> <i class=\"glyphicon glyphicon-remove\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </div>
\t\t\t\t\t";
        }
        // line 33
        echo "
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<div class=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("class_username", $context)) ? (_twig_default_filter((isset($context["class_username"]) ? $context["class_username"] : $this->getContext($context, "class_username")), "form-group")) : ("form-group")), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"username\">Username</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\t\tname=\"username\" 
\t\t\t\t\t\t\t\tid=\"username\" 
\t\t\t\t\t\t\t\tplaceholder=\"Username\" 
\t\t\t\t\t\t\t\tvalue=";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("username", $context)) ? (_twig_default_filter((isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "")) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"";
        // line 47
        echo twig_escape_filter($this->env, ((array_key_exists("class_email", $context)) ? (_twig_default_filter((isset($context["class_email"]) ? $context["class_email"] : $this->getContext($context, "class_email")), "form-group")) : ("form-group")), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"username\">Email Address</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"email\" 
\t\t\t\t\t\t\t\tname=\"email\" 
\t\t\t\t\t\t\t\tid=\"email\" 
\t\t\t\t\t\t\t\tplaceholder=\"example@email.com\"
\t\t\t\t\t\t\t\tvalue=";
        // line 55
        echo twig_escape_filter($this->env, ((array_key_exists("email", $context)) ? (_twig_default_filter((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "")) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"";
        // line 59
        echo twig_escape_filter($this->env, ((array_key_exists("class_pass", $context)) ? (_twig_default_filter((isset($context["class_pass"]) ? $context["class_pass"] : $this->getContext($context, "class_pass")), "form-group")) : ("form-group")), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"pass\">Password</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"password\" 
\t\t\t\t\t\t\t\tname=\"pass\" 
\t\t\t\t\t\t\t\tid=\"pass\" 
\t\t\t\t\t\t\t\tplaceholder=\"Password\"
\t\t\t\t\t\t\t\tvalue=";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("password", $context)) ? (_twig_default_filter((isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "")) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("class_pass", $context)) ? (_twig_default_filter((isset($context["class_pass"]) ? $context["class_pass"] : $this->getContext($context, "class_pass")), "form-group")) : ("form-group")), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"pass_conf\">Confirm Password</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"password\" 
\t\t\t\t\t\t\t\tname=\"pass_conf\" 
\t\t\t\t\t\t\t\tid=\"pass_conf\" 
\t\t\t\t\t\t\t\tplaceholder=\"Confirm Password\"
\t\t\t\t\t\t\t\tvalue=";
        // line 79
        echo twig_escape_filter($this->env, ((array_key_exists("password2", $context)) ? (_twig_default_filter((isset($context["password2"]) ? $context["password2"] : $this->getContext($context, "password2")), "")) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t>
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
        return array (  143 => 79,  132 => 71,  125 => 67,  114 => 59,  107 => 55,  96 => 47,  89 => 43,  78 => 35,  74 => 33,  68 => 31,  66 => 30,  48 => 14,  45 => 13,  41 => 1,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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

{% if errorcode is defined %}
\t{% if errorcode == 1 %}
\t\t{% set class_username = 'form-group has-error' %}
\t{% elseif errorcode == 2 %}
\t\t{% set class_email = 'form-group has-error' %}
\t{% elseif errorcode == 3 %}
\t\t{% set class_pass = 'form-group has-error' %}
\t{% endif %}
{% endif %}

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
\t\t<div class=\"col-md-5\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">Sign Up Form</div>
\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t{% if error is defined %}
\t\t\t\t\t\t<div class=\"alert alert-danger\"> <i class=\"glyphicon glyphicon-remove\"></i> {{ error }} </div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<div class=\"{{ class_username|default('form-group')}}\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"username\">Username</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"text\" 
\t\t\t\t\t\t\t\tname=\"username\" 
\t\t\t\t\t\t\t\tid=\"username\" 
\t\t\t\t\t\t\t\tplaceholder=\"Username\" 
\t\t\t\t\t\t\t\tvalue={{ username|default('') }}
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"{{ class_email|default('form-group')}}\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"username\">Email Address</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"email\" 
\t\t\t\t\t\t\t\tname=\"email\" 
\t\t\t\t\t\t\t\tid=\"email\" 
\t\t\t\t\t\t\t\tplaceholder=\"example@email.com\"
\t\t\t\t\t\t\t\tvalue={{ email|default('') }}
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"{{ class_pass|default('form-group')}}\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"pass\">Password</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"password\" 
\t\t\t\t\t\t\t\tname=\"pass\" 
\t\t\t\t\t\t\t\tid=\"pass\" 
\t\t\t\t\t\t\t\tplaceholder=\"Password\"
\t\t\t\t\t\t\t\tvalue={{ password|default('') }}
\t\t\t\t\t\t\t>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"{{ class_pass|default('form-group')}}\" >
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"pass_conf\">Confirm Password</label>
\t\t\t\t\t\t\t<input 
\t\t\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\t\t\ttype=\"password\" 
\t\t\t\t\t\t\t\tname=\"pass_conf\" 
\t\t\t\t\t\t\t\tid=\"pass_conf\" 
\t\t\t\t\t\t\t\tplaceholder=\"Confirm Password\"
\t\t\t\t\t\t\t\tvalue={{ password2|default('') }}
\t\t\t\t\t\t\t>
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
