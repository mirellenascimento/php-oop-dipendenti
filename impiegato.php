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

  public function calcola_compenso(){
   return $this->compenso = "empty";
  }

  public function __construct($data_impiegato){
    parent::__construct(
      $data_impiegato['nome'],
      $data_impiegato['cognome'],
      $data_impiegato['codice_fiscale']
    );
    $this->codice_impiegato = $data_impiegato['codice_impiegato'];
  }

  public function to_string(){
    echo
    "Tipo di Contrato: " . get_class($this) . "<br>".
    "Nome: ". $this->nome . " " . $this->cognome . "<br>" .
    "Codice Fiscale: ". $this->codice_fiscale . "<br>" .
    "Codice Impiegato: ". $this->codice_impiegato . "<br>" .
    "Compenso: €". $this->calcola_compenso() . "<br><br>";
  }
}


//3rd LEVEL - Traits
trait Progetto{
  public $nome_progetto;
  public $commissione;
}


//3rd LEVEL - Tipe 01
class ImpiegatoSalariato extends Impiegato{
  public $giorni_lavorati;
  public $compenso_giornaliero;

  public function __construct($data_salariato){
    parent::__construct($data_salariato);
    $this->giorni_lavorati = $data_salariato['giorni_lavorati'];
    $this->compenso_giornaliero = $data_salariato['compenso_giornaliero'];
  }

  public function calcola_compenso(){
    return $this->compenso = $this->giorni_lavorati * $this->compenso_giornaliero;
  }
}


//3rd LEVEL - Tipe 02
class ImpiegatoSuCommissione extends Impiegato{
  use Progetto;

  public function __construct($data_commissione){
    parent::__construct($data_commissione);
    $this->nome_progetto = $data_commissione['nome_progetto'];
    $this->commissione = $data_commissione['commissione'];
  }

  public function calcola_compenso(){
    return $this->commissione;
  }
}


//3rd LEVEL - Tipe 03
class ImpiegatoAOre extends Impiegato{
  public $ore_lavorate;
  public $compenso_orario;

  public function __construct($data_ore){
    parent::__construct($data_ore);
    $this->ore_lavorate = $data_ore['ore_lavorate'];
    $this->compenso_orario = $data_ore['compenso_orario'];
  }

  public function calcola_compenso(){
    return $this->compenso = $this->ore_lavorate * $this->compenso_orario;
  }
}

?>
