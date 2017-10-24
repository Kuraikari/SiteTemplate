<?php
class Footer{
    public $information;
    public $content;

    public function createInformation($author, $contactdata, $creator){
       $information = "<p>$author</p>"
                    . "<p>$contactdata</p>"
                    . "<p>Created by $creator</p>"
                    . "<p>Template made by Kuraikari</p>";
       return $information;
    }

    public function createFooter($information){
        $footer = "<footer>$information</footer>";
        return $footer;
    }

    public function __construct($author, $contactdata, $creator){
      $this->$author = $author;
      $this->contactdata = $contactdata;
      $this->creator = $creator;;
    }
}
?>
