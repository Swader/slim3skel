<?php

/* master.twig */
class __TwigTemplate_32981bf234d60d1c64a26c510991f9c6948f32c429917986e7c25eea5e5d8aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Edithor - ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"Edithor is a helper app for editors of online publications\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">
    <!-- Place favicon.ico in the root directory -->

    <link href='/dist/css/app.css' rel='stylesheet' type='text/css'>
    <script src=\"dist/js/head.js\"></script>

    <script src=\"js/vendor/modernizr-2.8.3.min.js\"></script>
</head>
<body>
<!--[if lt IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id=\"content\">";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

<script src=\"dist/js/foot.js\"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["ga_code"]) ? $context["ga_code"] : null), "html", null, true);
        echo "','auto');ga('send','pageview');
</script>
</body>
</html>";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  61 => 34,  47 => 23,  27 => 6,  20 => 1,);
    }
}
