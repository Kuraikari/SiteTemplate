<?php
require "sitestructure/head.php";
require "sitestructure/nav.php";
require "sitestructure/content.php";
require "sitestructure/footer.php";

public class Site{
    public $head;
    public $nav;
    public $content;
    public $footer;
    
    public const $bodyStart = "<body>";
    public const $bodyEnd = "</body>";
 
    public $site;
    
    public __construct($head, $nav, $content, $footer){
        $this->head = $head;
        $this->nav = $nav;
        $this->content = $content;
        $this->footer = $footer;  
    }
    
    public function createSite(){
        $site = "<html>" + $head + $bodyStart + $nav + $content + $footer + $bodyEnd + "</html>";
    }
}
?>
