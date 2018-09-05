<?php
/**
 * Created by PhpStorm.
 * User: zwerm
 * Date: 05.09.2018
 * Time: 22:17
 */

function pre($var){
    echo "<div class='varDump'><pre>";
    var_dump( $var);
    echo "</div></pre>";
}