<?php

/* default/template/common/menu.twig */
class __TwigTemplate_c11b3404731deb493f1be21e8b708977e3a5c5ab87ddd621402d95b884ca086e extends Twig_Template
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
        // line 31
        echo "





";
        // line 64
        echo "
";
        // line 65
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 66
            echo "
<div id=\"product_menu\" class=\"dropdown-menu dropdown-products\">
    <ul class=\"nav nav-tabs nav-justified nav-pills \">
        ";
            // line 69
            $context["firstItem"] = twig_first($this->env, (isset($context["categories"]) ? $context["categories"] : null));
            // line 70
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 71
                echo "
            ";
                // line 72
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 73
                    echo "                ";
                    if (((isset($context["firstItem"]) ? $context["firstItem"] : null) == $context["category"])) {
                        // line 74
                        echo "                    <li class=\"active\"><a class=\"h4\" data-toggle=\"pill\" href=\"#";
                        echo $this->getAttribute($context["category"], "id", array());
                        echo "\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</a></li>
                ";
                    } else {
                        // line 76
                        echo "                    <li><a class=\"\" data-toggle=\"pill\" href=\"#";
                        echo $this->getAttribute($context["category"], "id", array());
                        echo "\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</a></li>";
                    }
                    // line 77
                    echo "            ";
                }
                // line 78
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </ul>
    <div class=\"tab-content\">
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 82
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 83
                    echo "        ";
                    if (((isset($context["firstItem"]) ? $context["firstItem"] : null) == $context["category"])) {
                        // line 84
                        echo "        <div id=\"";
                        echo $this->getAttribute($context["category"], "id", array());
                        echo "\" class=\"tab-pane fade in active\">
            ";
                    } else {
                        // line 86
                        echo "            <div id=\"";
                        echo $this->getAttribute($context["category"], "id", array());
                        echo "\" class=\"tab-pane fade\">
                ";
                    }
                    // line 88
                    echo "
                <a href=\"";
                    // line 89
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"h3\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
                <div class=\"row\">
                    ";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 92
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 93
                            echo "                            <div class=\"card col-md-4\">
                                <img class=\"card-img-top\" src=\"";
                            // line 94
                            echo $this->getAttribute($context["child"], "img", array());
                            echo "\" alt=\"Card image\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">";
                            // line 96
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</h4>
                                    <p class=\"card-text\">";
                            // line 97
                            echo $this->getAttribute($context["child"], "text", array());
                            echo "</p>
                                    <a href=\"";
                            // line 98
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"btn btn-primary\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
                                </div>
                            </div>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 102
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                </div>
            </div>
            ";
                }
                // line 106
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "        </div>
    </div>
</div>
    ";
        }
        // line 111
        echo "

";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 111,  166 => 107,  160 => 106,  155 => 103,  149 => 102,  137 => 98,  133 => 97,  129 => 96,  124 => 94,  121 => 93,  116 => 92,  112 => 91,  105 => 89,  102 => 88,  96 => 86,  90 => 84,  87 => 83,  84 => 82,  80 => 81,  76 => 79,  70 => 78,  67 => 77,  60 => 76,  52 => 74,  49 => 73,  47 => 72,  44 => 71,  39 => 70,  37 => 69,  32 => 66,  30 => 65,  27 => 64,  19 => 31,);
    }
}
/* {#{% if categories %}*/
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span id="category" class="visible-xs"><span class="glyphicon glyphicon-menu-hamburger"></span> {{ text_category }}</span></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} #}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {#*/
/* {% if categories %}*/
/* */
/* <div id="product_menu" class="dropdown-menu">*/
/*     <div class="row">*/
/*     {% for category in categories %}*/
/*           {% if category.children %}*/
/* */
/*               <div class="col-md-4">*/
/*               <h2>{{ category.name }}<span class="caret"></span></h2>*/
/*               <ul>*/
/*                   {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                       {% for child in children %}*/
/*                         <li class=""><a  href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                       {% endfor %}*/
/*                   {% endfor %}*/
/* */
/*               </ul>*/
/*               </div>*/
/* */
/*           {% endif %}*/
/*           {% endfor %}*/
/*       </div>*/
/* */
/*     </div>*/
/* {% endif %}*/
/* #}*/
/* */
/* {% if categories %}*/
/* */
/* <div id="product_menu" class="dropdown-menu dropdown-products">*/
/*     <ul class="nav nav-tabs nav-justified nav-pills ">*/
/*         {% set firstItem = categories|first %}*/
/*         {% for category in categories %}*/
/* */
/*             {% if category.children %}*/
/*                 {% if firstItem == category %}*/
/*                     <li class="active"><a class="h4" data-toggle="pill" href="#{{ category.id }}">{{ category.name }}</a></li>*/
/*                 {% else %}*/
/*                     <li><a class="" data-toggle="pill" href="#{{ category.id }}">{{ category.name }}</a></li>{% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         {% if firstItem == category %}*/
/*         <div id="{{ category.id }}" class="tab-pane fade in active">*/
/*             {% else %}*/
/*             <div id="{{ category.id }}" class="tab-pane fade">*/
/*                 {% endif %}*/
/* */
/*                 <a href="{{ category.href }}" class="h3">{{ category.name }}</a>*/
/*                 <div class="row">*/
/*                     {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*                         {% for child in children %}*/
/*                             <div class="card col-md-4">*/
/*                                 <img class="card-img-top" src="{{ child.img }}" alt="Card image">*/
/*                                 <div class="card-body">*/
/*                                     <h4 class="card-title">{{ child.name }}</h4>*/
/*                                     <p class="card-text">{{ child.text }}</p>*/
/*                                     <a href="{{ child.href }}" class="btn btn-primary">{{ child.name }}</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     {% endif %}*/
/* */
/* */
/* {#*/
/* {% if categories %}*/
/* <div class="container">*/
/* */
/* */
/* */
/*             <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="dropdown" data-target="#product_menu">*/
/* */
/*             </button>*/
/* */
/* */
/* */
/* */
/*                         <div id="product_menu" class="dropdown-menu">*/
/*                             <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">*/
/*                                 <li></li>*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">One more link</a></li>*/
/*                             </ul>*/
/*                             <ul class="nav col-lg-3 col-sm-6" role="menu">*/
/*                                 <li>*/
/*                                     <div class="col-md-12">*/
/*                                         <h4>Login</h4>*/
/*                                         <form action="[YOUR ACTION]" method="post" role="form" class="form-horizontal">*/
/*                                             <input class="form-control" id="inputEmail1" placeholder="Email" type="email" style="margin-bottom:.5em">*/
/*                                             <input class="form-control" id="inputPassword1" placeholder="Password" type="password" style="margin-bottom:.5em">*/
/*                                             <div class="checkbox">*/
/*                                                 <label class="small">*/
/*                                                     <input type="checkbox"> remember me</label>*/
/*                                             </div>*/
/*                                             <hr>*/
/*                                             <input class="btn btn-primary btn-block" type="submit" name="commit" value="Sign In">*/
/*                                         </form>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <ul class="col-lg-3 col-sm-6 list-unstyled" role="menu">*/
/*                                 <li><h4>Options</h4></li>*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">Link</a></li>*/
/*                                 <li><a href="#">Link</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#" class="btn btn-primary pull-right">OK</a></li>*/
/*                                 <li>*/
/*                                     <p class="small text-muted">small text here</p>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">*/
/*                                 <li><h4>More</h4></li>*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">One more link</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*             </div>*/
/* */
/* */
/* <!-- /.nav-collapse -->*/
/* {% endif %}*/
/* */
/* #}*/
