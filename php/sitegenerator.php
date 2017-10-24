<?php
require_once 'sitestructure/head.php';
require_once 'sitestructure/content.php';
require_once 'sitestructure/footer.php';
require_once 'sitestructure/nav.php';
require_once 'site.php';

class SiteGenerator
{

      public $head;
      public $nav;
      public $content;
      public $footer;
      public $site;

      public function createSite(): string
      {
        $head = new Head(new CSS("../css", "style.php", "text/css"), new Meta("Zian", "Test", "utf-8"));
        $nav = new Nav("Home", "About us", "Touhou is Love");
        $content = new Content();
        $footer = new Footer("Kek", "Lol", "Haha");
        $site = new Site();

        return $site->createSite($head, $nav, $content, $footer);
      }
    }


?>
