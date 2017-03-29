<?php
    require_once 'Administrator.php';
    require_once 'Klant.php';
    require_once 'Personeel.php';
    require_once 'Evenement.php';

    // Administrator voorbeeld.
    $adres = new Adres("Straat",31,"A",3500,EnumLanden::Belgie);
    $a = new Administrator("Admin",$adres,"458845445","54884544",5);

    // Klant voorbeeld.
    $adres = new Adres("Straat",370,"B",158,EnumLanden::Duitsland);
    $k = new Klant("Klant",$adres,"55884","564545",5,"4566444564646",3);

    // Personeel voorbeeld.
    $adres = new Adres("Straat",1,"Z",3020,EnumLanden::Nederland);
    $p = new Personeel("Personeel",$adres,"5548485","54455456",9,array("Test", "Testing"));

    $evenement = new Evenement($a,"Test evenement",new Date(2017,EnumMaanden::Maart,22,11,45),$k,"Dit is een test eveneemnt",5,
                                EnumTypes::VliegendePastoors,new Materiaal("Stoel",5,100),$p);

    print($a . " ");
    print($k . " ");
    print($p . " ");
    print(" ");
    print($evenement);