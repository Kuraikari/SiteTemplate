<?php

class Site{


    public function createSite($head, $nav, $content, $footer): string{
      $bodyStart = "<body>";
      $bodyEnd = "</body>";

      $set = "";
      $set .= $head->createHead();
      $set .= $bodyStart;


      $website = "<html>$set</html>";
      return $website;
    }
}
?>
