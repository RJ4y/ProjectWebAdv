<?php

/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 11:11
 */
require "C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\Adres.php";
class AdresTest extends PHPUnit_Framework_TestCase
{
    public function testToString_Adres() {
        $adres = new Adres("straat", 1, "A", 3500, "Belgïe");
        $output = "Adres: " . "straat" . " " . 1 . " " . "A" . " " . 3500 . " " . "Belgïe";

        $this->assertEquals($output, $adres->__toString());
    }
}
