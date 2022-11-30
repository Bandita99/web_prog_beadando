<?php
$ablakcim = array(
    'cim' => 'Eb Árvaház Nonprofit Egyesület',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'nev' => ' <a href="https://ebarvahaz.hu//">Forrás: Eb Árvaház Nonprofit Egyesület</a>'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'adomany' => array('fajl' => 'adomany', 'szoveg' => 'Adományozás', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
    'elkuld' => array('fajl' => 'elkuld', 'szoveg' => '', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
    
    $MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;
    
?>