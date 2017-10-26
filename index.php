<?php
require 'php/sitegenerator.php';
$lol = new SiteGenerator();

//HEAD
$css = new CSS("../css", "style.php", "text/css");
$meta = new Meta("Zian", "Test", "utf-8");

//NAV
$nav = new Nav("Home", "About us", "Touhou");
$nav->addNewElements("We could", "Need");

//CONTENT
$content = new Content(false, false, "test");
$content->appendContent(false, false, "<p>I want to die<br>", "new-test");
$content->appendContent(false, false, "Test three is incoming<br></p>", "hashtag");
$content->appendContent(false, false, "<div class='test-form'><input type='text' placeholder='Username'><br><input type='password' placeholder='Password'></div>");
$content->addFormAndButton("form-test", "/action_page.php", "get", "Submit", "test-form");

//FOOTER
$footer = new Footer("<pre>Zian Wermelinger", "Adresse:        Untergasse 2, 4538 Oberbipp <br>Tel. Nummer:    +41 79 945 87 92", "Zian Wermelinger </pre>");

echo $lol->createSite(new Head($css, $meta), $nav, $content, $footer, true, "outer-wrapper");
?>
