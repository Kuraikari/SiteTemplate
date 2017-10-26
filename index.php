<?php
require 'php/sitegenerator.php';
$lol = new SiteGenerator();
$pictures = array("img1.png", "img2.png", "img3.png");

//HEAD
$css = new CSS("../css", "style.php", "text/css");
$meta = new Meta("Zian", "Test", "utf-8");

//NAV
$nav = new Nav("Home", "Our Products", "The Team", "About us");
$nav->addNewElements("Contact");

//CONTENT
$content = new Content(false, false, "test");
$content->appendContent(false, false, "<p>This is a site developed for entertaining and similar things.<br>");
$content->appendContent(false, false, "Though we have a broad variety of products we aren't selling them on the market freely.<br>");
$content->appendContent(false, false, "At the moment we are having a really busy day. The reason is that we get so many requests and our team are having their heads kept around creating new products.<br></p>");
$content->appendContent(false, false, "<div class='test-form'><input type='text' placeholder='Username'><br><input type='password' placeholder='Password'></div>");
$content->addFormAndButton("form-test", "/action_page.php", "get", "Submit", "test-form");
$content->appendGallery("ress", $pictures);

//FOOTER
$footer = new Footer("<pre>Zian Wermelinger", "Adresse:        Untergasse 2, 4538 Oberbipp <br>Tel. Nummer:    +41 79 945 87 92", "Zian Wermelinger </pre>");

//JAVASCRIPT
$content->appendContent(false, false, "<script src='js/functions.js'></script>");

echo $lol->createSite(new Head($css, $meta), $nav, $content, $footer, true, "outer-wrapper");
?>
