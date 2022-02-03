<?php

function MijnNaamIsGroot(){
    $voornaam = "Bilal";
    $achternaam = "Essalhi";
    $gehelenaam = "mijn naam is $voornaam  $achternaam";
    echo strtoupper ($gehelenaam); 
}

MijnNaamIsGroot();