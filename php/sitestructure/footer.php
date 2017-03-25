<?php
public class Footer{
    public $information;
    public $content;
    
    public $footer;
    
    public createInformation($author, $contactdata, $creator){
       $information = "<p>"+$author+"</p>"
                    + "<p>"+$contactdata+"</p>"
                    + "<p>Created by"+$creator+"</p>"
                    + "<p>Template made by Kuraikari</p>";
       return $information;
    }
    
    public createFooter($information){
        $footer = "<footer>"+$information+"</footer>";
    }
}
?>
