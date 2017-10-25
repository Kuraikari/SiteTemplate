<?php
class Footer{
    public $information = "";
    public $content;

    public function createInformation($author, $contactdata, $creator): string {
       $this->information = "<p>$author <br>"
                    . "$contactdata <br>"
                    . "Created by $creator"
                    . "<pre>Template made by Kuraikari</pre></p>";
            
        return $this->information;
    }

    public function createFooter(){
        $information = $this->information;
        if (information == "") {
          $this->createInformation(); 
        }
        $footer = "<footer>$information</footer>";
        return $footer;
    }

    public function __construct($author, $contactdata, $creator){
      $this->information = $this->createInformation($author, $contactdata, $creator);
    }
}
?>
