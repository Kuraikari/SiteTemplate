<?php

class Site{
    public function createSite($head, $nav, $content, $footer): string{
      $bodyStart = "<body>";
      $bodyEnd = "</body>";

      $set = "";
      $set .= $head->createHead();
      $set .= $bodyStart;
      $set .= $nav->createNav();
      $set .= $content->createDiv($content->createContent(true, "Hello World"), "test");
      $set .= $footer->createFooter();
      $set .= $bodyEnd;

      $website = "<html>$set</html>";
      return $website;
    }
}
?>
