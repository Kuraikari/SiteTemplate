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
 
  
    public __construct($head, $nav, $content, $footer){
        $this->head = $head;
        $this->nav = $nav;
        $this->content = $content;
        $this->footer = $footer;  
    }
    
    public function createSite(){
    
    }


}
?>
