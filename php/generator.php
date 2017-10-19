<?php
namespace SiteTemplate\Generator{
    public class Generator{

      public $head = new Head(new CSS("../css/style.css", "style.css", "text/stylesheet")
                              new Meta("Zian", "Test", "utf-8")
                              "");
      public $nav = new Nav();
      public $content = new Content();
      public $footer = new Footer();
      public $site = new Site($head, $nav, $content, $footer);
    }
}

?>
