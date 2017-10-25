<?php
require_once 'sitestructure/head.php';
require_once 'sitestructure/content.php';
require_once 'sitestructure/footer.php';
require_once 'sitestructure/nav.php';
require_once 'site.php';

class SiteGenerator
{
    public function createSite($head, $nav, $content, $footer): string
    {
      $site = new Site();
      return $site->createSite($head, $nav, $content, $footer);
    }
}
?>
