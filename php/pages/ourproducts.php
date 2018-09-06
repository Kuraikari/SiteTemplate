<?php require_once '../sitegenerator.php';
$gen = new SiteGenerator();
$pictures = array("img1.png", "img2.png", "img3.png", "img4.jpg", "img5.jpg", "img6.jpg", "img1.png", "img2.png", "img3.png", "img4.jpg", "img5.jpg", "img6.jpg");

$css = new CSS("../../css/", "style.php", "text/css");
$meta = new Meta("Zian", "Our Products", "utf-8");

$nav = new Nav("Home", "Our Products", "The Team", "About us");
$nav->addNewElements("Contact");

$content = new Content(false, false, "test");
$content->appendContent(false, false, "<p>Test");
$content->appendContent(false, false, "Test");
$content->appendContent(false, false, "Test");
$content->appendContent(false, false, "Test</p>");
$content->appendContent(false, false, "<div class='test-form'><label>Formular</label><br><input type='text' placeholder='Firstname'><br><input type='text' placeholder='Lastname'><br><input type='text' placeholder='Mobile'><br><input type='email' placeholder='Email'><br><input type='file'name='file'><br></div>");
$content->addFormAndButton("form-test", "./index.php", "post", "Submit", "test-form");

$content->appendGallery("../../ress/pictures", $pictures);

$footer = new Footer("<pre>Zian Wermelinger", "Adresse:        Untergasse 2, 4538 Oberbipp <br>Tel. Nummer:    +41 79 945 87 92", "Zian Wermelinger </pre>");
echo $gen->createSite(new Head($css, $meta), $nav, $content, $footer, true, "outer-wrapper");
 ?>