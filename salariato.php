<?php

require_once ('impiegato.php');

//3rd LEVEL - Tipe 01
class ImpiegatoSalariato extends Impiegato{
  public $giorni_lavorati;
  public $compenso_giornaliero;

  public function __construct($data_salariato){
    parent::__construct($data_salariato);

    try {
      if (!is_numeric($data_salariato['giorni_lavorati']) || !is_numeric($data_salariato['compenso_giornaliero'])) {
        throw new Exception('Giorni lavorati e compenso giornaliero devono essere numeri validi.');
      }
      $this->giorni_lavorati = $data_salariato['giorni_lavorati'];
      $this->compenso_giornaliero = $data_salariato['compenso_giornaliero'];

    } catch (Exception $e) {
      echo $e->getMessage() . '<br><br>';
      $this->giorni_lavorati = 0;
      $this->compenso_giornaliero = 0;
    }

  }

  public function calcola_compenso(){
    return $this->compenso = $this->giorni_lavorati * $this->compenso_giornaliero;
  }
}

?>
