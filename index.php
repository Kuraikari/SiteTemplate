<?php
require 'php/sitegenerator.php';
$lol = new SiteGenerator();

//HEAD
$css = new CSS("../css", "style.php", "text/css");
$meta = new Meta("Zian", "Test", "utf-8");

//NAV
$nav = new Nav("Home", "About us", "Touhou is Love");

//CONTENT
$content = new Content(false, false, "test", "<input type='text' placeholder='Hello World'>");
$content->appendContent(false, true, "I want to die", "new-test");
$content->appendContent(false, true, "Test three is incoming", "hashtag");
$content->appendContent(false, false, "<button>lol</button>", "fourth-wall", true);

//FOOTER
$footer = new Footer("Kek", "Lol", "Haha");

echo $lol->createSite(new Head($css, $meta), $nav, $content, $footer);
?>
