<?php
require_once ('persona.php');
require_once ('impiegato.php');
require_once ('salariato.php');
require_once ('su_commissione.php');
require_once ('a_ore.php');



//Impiedato Salariato
$personalMirelle = [
  'nome' => 'Mirelle',
  'cognome' => 'Nascimento',
  'codice_fiscale' => 'ABC1234567890DEF',
  'codice_impiegato' => 1
];

$comissioneMirelle = [
  'giorni_lavorati' => 20,
  'compenso_giornaliero' => 100
];

$dataMirelle = array_merge($personalMirelle, $comissioneMirelle);

$mirelle = new ImpiegatoSalariato($dataMirelle);
$mirelle->to_string();


//Impriedato su Commissione
$personalMayara = [
  'nome' => 'Mayara',
  'cognome' => 'Millane',
  'codice_fiscale' => 'DEF1234567890GHI',
  'codice_impiegato' => 2
];

$comissioneMayara = [
  'nome_progetto' => 'Mio progetto',
  'commissione' => 1500
];

$dataMayara = array_merge($personalMayara, $comissioneMayara);

$mayara = new ImpiegatoSuCommissione($dataMayara);
$mayara->to_string();


//Impiedato a Ore
$personalMaria = [
  'nome' => 'Maria',
  'cognome' => 'do Carmo',
  'codice_fiscale' => 'GHI1234567890JKL',
  'codice_impiegato' => 3
];

$comissioneMaria = [
  'ore_lavorate' => 160,
  'compenso_orario' => 12
];

$dataMaria = array_merge($personalMaria, $comissioneMaria);

$maria = new ImpiegatoAOre($dataMaria);
$maria->to_string();


?>
