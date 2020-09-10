<?php

/* lineitem.html */
class __TwigTemplate_85b018dce34100dade8dcc975ecf6dab9b2d0ed07629ec41b67a3275671bd7fd extends Twig_Template
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
<html lang=\"en\">
<head>
    <title></title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel=\"stylesheet\" media=\"screen\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>

</head>
<body>
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>รายการสินค้าในใบสั่งซื้อ</h1>
            </div>
    </div>
    <div class=\"container\">
        <h3>หมายเลข ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["Requisition_ID"]) ? $context["Requisition_ID"] : null), "html", null, true);
        echo "</h3>
        <hr>
        <table class=\"table table-bordered table-hover table-striped\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวนสินค้า</th>
                    <th>ราคาสินค้า</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 34
            echo "                <tr>
                    <td width=\"50px\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Product_ID", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "LineItem_Qty", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "LineItem_Total", array()), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "lineitem.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  60 => 34,  56 => 33,  41 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lineitem.html", "C:\\xampp\\htdocs\\ionic\\src\\templates\\lineitem.html");
    }
}
