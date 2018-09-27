<?php

/**
 *
 */
class ColorMixer {
    protected $red;
    protected $green;
    protected $blue;

    protected $color;

    public static function mixColor($red, $green, $blue) {

        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;

        $this->color = [
            'Red' => $this->red,
            'Green' => $this->green,
            'Blue' => $this->blue,
        ];
        return $this;
    }

    public function returnColor() {
        return $this->color;
    }
}
 ?>
