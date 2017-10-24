<?php
class Nav{
    public $navElements = array();
    public $navR = "";
    
    
    public function __construct($element1 = "", $element2 = "", $element3 = "", $element4 = "") {
        $part = "<nav><ul>"; 
        for($i = 0; $i <= count(func_get_args()); $i++){
            if($i == 1) $part .= "<li><a href='$element1.php'>$element1</a></li>";
            else if($i == 2) $part .= "<li><a href='$element2.php'>$element2</a></li>";
            else if($i == 3) $part .= "<li><a href='$element3.php'>$element3</a></li>";
            else if($i == 4) $part .= "<li><a href='$element4.php'>$element4</a></li>";
            else if(count(func_get_args()) <= 0) break;
            
        }
        $part .= "</nav></ul>";
        $this->navR = $part;
    }
    
    public function createNav() :string {
        $nav = "";
        $part = "<nav><ul>";
        foreach($this->navElements as $element){
            $part .= "<li><a href='$element.php'>$element</a></li>";
        }

        $part .= "</nav></ul>";
        $nav = $part;
        return $nav;
    }

    public function addNewElements($element1, $element2 = "", $element3 = "", $element4 = "")
    {
        if(element3 == "" && element4 == "")
        {
            array_push($this->navElements, $element1, $element2);
        }

        elseif ($element4 == "")
        {
            array_push($this->navElements, $element1, $element2, $element3);
        }

        elseif (!($element2 == "") && !($element3 == "") &&  !($element4 == ""))
        {
            array_push($this->navElements, $element1, $element2, $element3, $element4);
        }
  }
}
