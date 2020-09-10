<?php

/* home.html */
class __TwigTemplate_dd31b35610941a934da6a8f0b25c8abf23ef7463d3aabea35630840b1e038dac extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<!--
\tDimension by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>ใบเบิกสินค้า</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\" />
\t\t<!--[if lte IE 9]><link rel=\"stylesheet\" href=\"assets/css/ie9.css\" /><![endif]-->
\t\t<noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript>
\t</head>
\t<body>

\t\t<!-- Wrapper -->
\t\t\t<div id=\"wrapper\">

\t\t\t\t<!-- Header -->
\t\t\t\t\t<header id=\"header\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<span class=\"icon fa-diamond\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<h1>ใบเบิกสินค้า</h1>
\t\t\t\t\t\t\t\t<p>ทดสอบ</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"list\">ใบเบิกสินค้า</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"add/product\">เพิ่มสินค้า</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">ค้นหา</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">ติดต่อ</a></li>
\t\t\t\t\t\t\t\t<!--<li><a href=\"#elements\">Elements</a></li>-->
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</header>

\t\t\t\t<!-- Main -->
\t\t\t\t\t<div id=\"main\">

\t\t\t\t\t\t<!-- search -->
\t\t\t\t\t\t<article id=\"search\">
\t\t\t\t\t\t\t<h2 class=\"major\">Search</h2>
\t\t\t\t\t\t\t<form method=\"get\" action=\"/post\">
\t\t\t\t\t\t\t\t<div class=\"field half first\">
\t\t\t\t\t\t\t\t\t<label for=\"id-r\">NO.</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"id-r\" id=\"id-r\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t\t<label for=\"date\">DATE</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date\" id=\"date\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Submit\" class=\"special\" /></li>
\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Reset\" /></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Intro -->
\t\t\t\t\t\t\t<article id=\"intro\">
\t\t\t\t\t\t\t\t<h2 class=\"major\">Intro</h2>
\t\t\t\t\t\t\t\t<span class=\"image main\"><img src=\"images/pic01.jpg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. By the way, check out my <a href=\"#work\">awesome work</a>.</p>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Work -->
\t\t\t\t\t\t\t<article id=\"work\">
\t\t\t\t\t\t\t\t<h2 class=\"major\">Work</h2>
\t\t\t\t\t\t\t\t<span class=\"image main\"><img src=\"images/pic02.jpg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
\t\t\t\t\t\t\t\t<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat tempus.</p>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- About -->
\t\t\t\t\t\t\t<article id=\"about\">
\t\t\t\t\t\t\t\t<h2 class=\"major\">About</h2>
\t\t\t\t\t\t\t\t<span class=\"image main\"><img src=\"images/pic03.jpg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t<!-- Contact -->
\t\t\t\t\t\t\t<article id=\"contact\">
\t\t\t\t\t\t\t\t<h2 class=\"major\">Contact</h2>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"field half first\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Name</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"name\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field half\">
\t\t\t\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"4\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" class=\"special\" /></li>
\t\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Reset\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</article>

\t\t\t\t\t</div>

\t\t\t\t<!-- Footer -->
\t\t\t\t\t<footer id=\"footer\">
\t\t\t\t\t\t<p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
\t\t\t\t\t</footer>

\t\t\t</div>

\t\t<!-- BG -->
\t\t\t<div id=\"bg\"></div>

\t\t<!-- Scripts -->
\t\t\t<script src=\"assets/js/jquery.min.js\"></script>
\t\t\t<script src=\"assets/js/skel.min.js\"></script>
\t\t\t<script src=\"assets/js/util.js\"></script>
\t\t\t<script src=\"assets/js/main.js\"></script>

\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home.html";
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
        return new Twig_Source("", "home.html", "C:\\xampp\\htdocs\\ionic\\src\\templates\\home.html");
    }
}
