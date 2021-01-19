<?php

require_once ('impiegato.php');

//3rd LEVEL - Trait
trait Progetto{
  public $nome_progetto;
  public $commissione;
}


//3rd LEVEL - Tipe 02
class ImpiegatoSuCommissione extends Impiegato{
  use Progetto;

  public function __construct($data_commissione){
    parent::__construct($data_commissione);

    try {
      if (!is_string($data_commissione['nome_progetto']) || !is_numeric($data_commissione['commissione'])) {
        throw new Exception('Nome progetto deve essere una stringa e commissione deve essere un numero valido.');
      }
    $this->nome_progetto = $data_commissione['nome_progetto'];
    $this->commissione = $data_commissione['commissione'];

    } catch (Exception $e) {
      echo $e->getMessage() . '<br><br>';
      $this->nome_progetto = 'Inserire un progetto valido';
      $this->commissione = 0;
    }
  }

  public function calcola_compenso(){
    return $this->commissione;
  }
}


?>
