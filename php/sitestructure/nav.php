<?php
class Nav{
    public $navElements = array();
    public $nav;

    public function createNav(){
        $part1 = "<nav><ul>";
        foreach($navElements as $element){
            $part1 = $part1 . "<li><a href='$element.php'>$element</a></li>";
        }
        $part1 = $part1 . "</nav></ul>";
        $nav = $part1;
        return $nav;
    }

    public function addNewElements($element1, $element2 = "", $element3 = "", $element4 = "")
    {
        if(element3 == "" && element4 == "")
        {
            array_push($navElements, $element1, $element2);
        }

        elseif ($element4 == "")
        {
            array_push($navElements, $element1, $element2, $element3);
        }

        elseif (!($element2 == "") && !($element3 == "") &&  !($element4 == ""))
        {
            array_push($navElements, $element1, $element2, $element3, $element4);
        }
  }
}
