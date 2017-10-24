<?php
class Nav{
    public $navElements = array();
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
