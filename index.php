<?php
require_once 'php/sitegenerator.php';
require_once 'php/network.php';

/*$date = date_format(new DateTime(), "Y/m/d H:i:s");
$date2 = date('Y/m/d H:i:s', strtotime('+1 seconds', strtotime($date)));
$dates = [$date,$date2];*/

//NETWORK
$network = new Network();
$network->create_Connection("localhost", "project_oop-template", "root", "")
        // ->insert_Into("person", ["admin","Zian","Wermelinger","gibbiX12345", 1, $dates[0], $dates[1]], ["username", "firstname", "lastname", "password", "role_fk", "date_registered", "date_lastlogin"])

;

//SITE
$lol = new SiteGenerator();
$pictures = array("img1.png", "img2.png", "img3.png", "img4.jpg", "img5.jpg", "img6.jpg", "img1.png", "img2.png", "img3.png", "img4.jpg", "img5.jpg", "img6.jpg");

//HEAD
$css = new CSS("css", "style.php", "text/css");
$meta = new Meta("Zian", "Test", "utf-8");

//NAV
$nav = new Nav("Home", "Our Products", "The Team", "About us");
$nav->addNewElements("Contact");

//CONTENT
$content = new Content(false, false, "test");
$content->appendContent(false, false, "<p>This is a site developed for entertainment and similar things.<br>");
$content->appendContent(false, false, "Though we have a broad variety of products we aren't selling them on the market freely.<br>");
$content->appendContent(false, false, "At the moment we are having a really busy day. The reason is that we get so many requests and our team are having their heads kept around creating new products.<br></p>");
$content->appendContent(false, false, "<div class='test-form'><label>Login</label><br><input type='text' placeholder='Username'><br><input type='password' placeholder='Password'></div>");
$content->addFormAndButton("form-test", "", "post", "Submit", "test-form");
$content->appendGallery("ress/pictures", $pictures);

//FOOTER
$footer = new Footer("<pre>Zian Wermelinger", "Adresse:        Untergasse 2, 4538 Oberbipp <br>Tel. Nummer:    +41 79 945 87 92", "Zian Wermelinger </pre>");

//JAVASCRIPT
$content->appendContent(false, false, "<script src='js/functions.js'></script>");

echo $lol->createSite(new Head($css, $meta), $nav, $content, $footer, true, "outer-wrapper");
?>
