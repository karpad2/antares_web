<?php

/* default/template/common/header.twig */
class __TwigTemplate_c3c1db610a1c688b1f3d3ec8b741050f324f16db1f2398ef421f5fb3b3b183b1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"sr-SR\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 7
        echo (isset($context["title"]) ? $context["title"] : null);
        echo " - ";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</title>
<base href=\"";
        // line 8
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 9
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 10
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 12
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 13
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 15
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script><script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
    <script src=\"catalog/view/theme/default/stylesheet/style.js\" type=\"text/javascript\"></script>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 27
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 31
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 34
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg hidden-tablet hidden-phone\">
    <div class=\"container\">
    <ul class=\"navbar-nav navbar-right\">
        <li class=\"nav-item\" >
          <a class=\"nav-link\" href=\"";
        // line 42
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i><span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></a>
        </li>
        <li class=\"nav-item dropdown\"><a  href=\"";
        // line 44
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            ";
        // line 46
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 47
            echo "            <li class=\"dropdown-item\"><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
            // line 48
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
            // line 49
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
            // line 50
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
            // line 51
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 53
            echo "            <li class=\"dropdown-item\"><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li class=\"dropdown-item\"><a href=\"";
            // line 54
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 56
        echo "          </ul>
        </li>
        <li class=\"nav-item\"><a class=\"nav-link\"  href=\"";
        // line 58
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 59
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 60
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>

    </div>

</nav>

<header>
 <div class=\"navbar navbar-expand-lg \">
  <div class=\"container\">
     <div id=\"logo\">";
        // line 70
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 71
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 73
        echo "     </div>
      <ul class=\"navbar-nav navbar-right\">
            <div class=\"nav-item\">";
        // line 75
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
            <div class=\"nav-item\">";
        // line 76
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
        </ul>

    </div>

    </div>
    <div class=\"container\">
        <nav id=\"menu\" class=\"navbar\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\"#product_menu\"><span id=\"category\" class=\"visible-xs\"><span class=\"glyphicon glyphicon-menu-hamburger\"></span> ";
        // line 85
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</span></button>
            </div>
            ";
        // line 87
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
        </nav>
    </div>
</header>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 87,  275 => 85,  263 => 76,  259 => 75,  255 => 73,  247 => 71,  235 => 70,  218 => 60,  210 => 59,  202 => 58,  198 => 56,  191 => 54,  184 => 53,  177 => 51,  171 => 50,  165 => 49,  159 => 48,  152 => 47,  150 => 46,  141 => 44,  134 => 42,  126 => 36,  118 => 34,  114 => 33,  103 => 31,  99 => 30,  96 => 29,  87 => 27,  83 => 26,  70 => 24,  66 => 23,  56 => 15,  50 => 13,  48 => 12,  42 => 10,  40 => 9,  36 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="sr-SR">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }} - {{ name }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/*     <script src="catalog/view/theme/default/stylesheet/style.js" type="text/javascript"></script>*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <nav class="navbar navbar-expand-lg hidden-tablet hidden-phone">*/
/*     <div class="container">*/
/*     <ul class="navbar-nav navbar-right">*/
/*         <li class="nav-item" >*/
/*           <a class="nav-link" href="{{ contact }}"><i class="fa fa-phone"></i><span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></a>*/
/*         </li>*/
/*         <li class="nav-item dropdown"><a  href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             {% if logged %}*/
/*             <li class="dropdown-item"><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li class="dropdown-item"><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li class="dropdown-item"><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li class="dropdown-item"><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li class="dropdown-item"><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li class="dropdown-item"><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li class="dropdown-item"><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li class="nav-item"><a class="nav-link"  href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*         <li class="nav-item"><a class="nav-link" href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*         <li class="nav-item"><a class="nav-link" href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/* */
/*     </div>*/
/* */
/* </nav>*/
/* */
/* <header>*/
/*  <div class="navbar navbar-expand-lg ">*/
/*   <div class="container">*/
/*      <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/*      </div>*/
/*       <ul class="navbar-nav navbar-right">*/
/*             <div class="nav-item">{{ search }}</div>*/
/*             <div class="nav-item">{{ cart }}</div>*/
/*         </ul>*/
/* */
/*     </div>*/
/* */
/*     </div>*/
/*     <div class="container">*/
/*         <nav id="menu" class="navbar">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target="#product_menu"><span id="category" class="visible-xs"><span class="glyphicon glyphicon-menu-hamburger"></span> {{ text_category }}</span></button>*/
/*             </div>*/
/*             {{ menu }}*/
/*         </nav>*/
/*     </div>*/
/* </header>*/
/* */
/* */
