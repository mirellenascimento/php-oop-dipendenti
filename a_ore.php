<?php

require_once ('impiegato.php');

//3rd LEVEL - Tipe 03
class ImpiegatoAOre extends Impiegato{
  public $ore_lavorate;
  public $compenso_orario;

  public function __construct($data_ore){
    parent::__construct($data_ore);

    try {
      if (!is_numeric($data_ore['ore_lavorate']) || !is_numeric($data_ore['compenso_orario'])) {
        throw new Exception('Ore lavorate e compenso orario devono essere numeri validi.');
      }
      $this->ore_lavorate = $data_ore['ore_lavorate'];
      $this->compenso_orario = $data_ore['compenso_orario'];

    } catch (Exception $e) {
      echo $e->getMessage() . '<br><br>';
      $this->ore_lavorate = 0;
      $this->compenso_orario = 0;
    }
  }

  public function calcola_compenso(){
    return $this->compenso = $this->ore_lavorate * $this->compenso_orario;
  }
}

?>
