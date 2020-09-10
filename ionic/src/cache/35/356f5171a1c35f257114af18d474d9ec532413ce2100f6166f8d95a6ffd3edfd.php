<?php

/* list.html */
class __TwigTemplate_45116a654f66a131b6a2cf5eeb6937790eb58b087de34bb638ab1b0d79c2e287 extends Twig_Template
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
            <h1>List</h1>
            </div>
    </div>
    <div class=\"container\">
        <a href=\"/add/bill\" type=\"button\" class=\"btn btn-success\" style=\"float: right\">+ Add new</a>
        <br>
        <hr>
        <table class=\"table table-bordered table-hover table-striped\">
            <thead>
                <tr>
                    <th>หมายเลข</th>
                    <th>บริษัท</th>
                    <th>วันที่</th>
                    <th>รายละเอียด</th>
                    <th>รอบที่เบิก</th>
                    <th>สถานะ</th>
                    <th>สินค้า</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 39
            echo "                <tr>
                    <td width=\"50px\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_ID", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Company_ID", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_DATE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_Desc", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_Count", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_Status", array()) == "A")) {
                // line 46
                echo "                            Active
                        ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 47
(isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_Status", array()) == "C")) {
                // line 48
                echo "                            Cancelled
                        ";
            } else {
                // line 50
                echo "                        ";
            }
            // line 51
            echo "                    </td>
                    <td width=\"50px\">
                        <a href=\"/lineitem/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_ID", array()), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-info\">Info</a>
                    </td>
                    <td width=\"50px\">
                        <a href=\"/edit/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["key"], array(), "array"), "Requisition_ID", array()), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary\">Update</a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
        </table>

    </div>


</body>

</html>";
    }

    public function getTemplateName()
    {
        return "list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 60,  109 => 56,  103 => 53,  99 => 51,  96 => 50,  92 => 48,  90 => 47,  87 => 46,  85 => 45,  81 => 44,  77 => 43,  73 => 42,  69 => 41,  65 => 40,  62 => 39,  58 => 38,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list.html", "C:\\xampp\\htdocs\\ionic\\src\\templates\\list.html");
    }
}
