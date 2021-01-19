<?php

require_once('persona.php');

//2nd LEVEL
class Impiegato extends Persona {
  public $codice_impiegato;
  public $compenso;

  public function calcola_compenso(){
   return $this->compenso = "empty";
  }

  public function __construct($data_impiegato){
    parent::__construct($data_impiegato);
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

?>
