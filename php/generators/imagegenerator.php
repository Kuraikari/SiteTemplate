<?php

/**
 *
 */
class ImageGenerator extends CC_Generator {

    public $color;
    public $image;
    public $imageSize;

    function __construct($size) {
        $this->imageSize = $size;
    }

    function createImage($fileName = "", $filePath = "", $colors = []) {

    }
}
 ?>
