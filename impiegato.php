<?php

//1st LEVEL
class Persona{
  public $nome;
  public $cognome;
  public $codice_fiscale;

  public function __construct($nome, $cognome, $cf){
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->codice_fiscale = $cf;
  }

  public function to_string(){
    echo "Nome: ". $this->nome . " " . $this->cognome . "<br>" .
    "Codice Fiscale: ". $this->codice_fiscale . "<br>";
  }
}


//2nd LEVEL
class Impiegato extends Persona {
  public $codice_impiegato;
  public $compenso;

  public function calcola_compenso($v1 = 20, $v2 = 100){
   return $this->compenso = $v1 * $v2;
  }

  public function __construct($nome, $cognome, $cf, $ci){
    parent::__construct($nome, $cognome, $cf);
    $this->codice_impiegato = $ci;
  }

  public function to_string(){
    echo "Nome: ". $this->nome . " " . $this->cognome . "<br>" .
    "Codice Fiscale: ". $this->codice_fiscale . "<br>" .
    "Codice Impiegato: ". $this->codice_impiegato . "<br>" .
    "Compenso: €". $this->calcola_compenso() . "<br><br>";
  }
}


//3rd LEVEL - Traits
trait Constructor{
  public function __construct($nome, $cognome, $cf, $ci){
    parent::__construct($nome, $cognome, $cf, $ci);
  }
}

trait Progetto{
  public $nome;
  public $commissione;
}


//3rd LEVEL - Tipe 01
class ImpiegatoSalariato extends Impiegato{
  public $giorni_lavorati;
  public $compenso_giornaliero;

  use Constructor;
  public function calcola_compenso($v1 = 20, $v2 = 100){
    return parent::calcola_compenso($this->giorni_lavorati, $this->compenso_giornaliero);
  }
}


//3rd LEVEL - Tipe 02
class ImpiegatoSuCommissione extends Impiegato{
  use Progetto;

  use Constructor;
  public function calcola_compenso($v1 = 20, $v2 = 100){
    return $this->commissione;
  }
}


//3rd LEVEL - Tipe 03
class ImpiegatoAOre extends Impiegato{
  public $ore_lavorate;
  public $compenso_orario;

  use Constructor;
  public function calcola_compenso($v1 = 20, $v2 = 100){
    return parent::calcola_compenso($this->ore_lavorate, $this->compenso_orario);
  }
}

?>
