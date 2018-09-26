<?php
/**
 * Created by PhpStorm.
 * User: zwerm
 * Date: 26.09.2018
 * Time: 16:44
 */

include_once ('php/generators/cssgenerator.php');

$cssGenerator = new CSSGenerator();
$cssGenerator->factory('temp/assets/css', 'temp_style.css')
             ->addImport('../../../css', 'lightbox.css')
             ->addBlock('*, html, body', [
                 'margin' => '0',
                 'padding' => '0',
                 'top' => '0',
                 'box-sizing' => 'border-box',
             ])

             ->addBlock('input[type=text], input[type=password]', [
                 'border' => 'none',
                 'background' => '#fefefe',
                 'padding' => '7px',
                 'min-width' => '25%',
                 'max-width' => '35%',
             ])

            ->addBlock('input[type=submit]', [
                'border' => 'dodgerblue 3px solid',
                'background' => 'none',
                'color' => 'dodgerblue',
                'padding' => '7px',
                'min-width' => '15%',
                'max-width' => '25%',
            ])

            ->addBlock('.outer-wrapper', [
                'position' => 'absolute',
                'background' => '#e3e5e3',
                'width' => '100%',
                'padding' => '15px',
            ])

            ->addBlock('.nav nav ul', [
                'display' => 'flex',
                'width' => '100%',
                'list-style-type' => 'none',
            ])

            ->addBlock('.nav nav ul li', [
                'padding' => '15px',
                'background' => '#999',
                'margin' => '5px',
            ])

            ->addBlock('.nav nav ul li a', [
                'color' => 'black',
                'text-decoration' => 'none',
            ])

            ->addBlock('.nav', [
                'position' => 'sticky',
                'top' => '0',
                'left' => '0',
                'background' => '#aaa',
                'width' => '100%',
                'z-index' => '10',
            ])

            ->addBlock('.test', [
                'border' => '3px solid black',
            ])

             ->generate();

?>