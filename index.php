<?php
require_once ('impiegato.php');

$mirelle = new ImpiegatoSalariato("Mirelle", "Nascimento", "ABC12345678", 1);
$mirelle->giorni_lavorati = 20;
$mirelle->compenso_giornaliero = 80;
$mirelle->to_string();

$maria = new ImpiegatoAOre("Maria", "Bezerra", "DEF12345678", 2);
$maria->ore_lavorate = 160;
$maria->compenso_orario = 12;
$maria->to_string();

$mayara = new ImpiegatoSuCommissione("Mayara", "Millane", "GHI12345678", 3);
$mayara->commissione = 2500;
$mayara->to_string();


?>
