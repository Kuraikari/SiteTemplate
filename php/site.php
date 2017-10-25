<?php

class Site{
    public function createSite($head, $nav, $content, $footer): string{
      error_reporting(0);
      $bodySt = "<body>";
      $bodyE = "</body>";

      $set = "";
      $set .= $head->createHead();
      $set .= $bodySt;
      $set .= $nav->navR;
      $set .= $content->content;
      $set .= $footer->createFooter();
      $set .= $bodyE;

      $website = "<html>$set</html>";
      return $website;
    }
}
?>
