<?php

//1st LEVEL
class Persona{
  public $nome;
  public $cognome;
  public $codice_fiscale;

  public function __construct($data){

    try{
      if (count($data) < 3){
        throw new Exception('Non hai inserito tutti i dati necessari.');
      }

      try {
        if (!is_string($data['nome'])) {
          throw new Exception('Nome deve essere una stringa.');
        }
        $this->nome = $data['nome'];
      } catch (Exception $e) {
        echo $e->getMessage() . '<br><br>';
        $this->nome = 'Inserire un nome valido.';
      }

      try {
        if (!is_string($data['cognome'])) {
          throw new Exception('Cognome deve essere una stringa.');
        }
        $this->cognome = $data['cognome'];
      } catch (Exception $e) {
        echo $e->getMessage() . '<br><br>';
        $this->nome = 'Inserire un cognome valido.';
      }

      try {
        if (strlen($data['codice_fiscale']) != 16) {
          throw new Exception('Il codice fiscale deve avere 16 carateti.');
        }
        $this->codice_fiscale = $data['codice_fiscale'];
      } catch (Exception $e) {
        echo $e->getMessage() . '<br><br>';
        $this->codice_fiscale = 'Inserire un codice fiscale valido.';
      }

    } catch(Exception $e){
      echo $e->getMessage() . '<br>';
      echo var_dump($data) . '<br><br>';
    }
  }

  public function to_string(){
    echo "Nome: ". $this->nome . " " . $this->cognome . "<br>" .
    "Codice Fiscale: ". $this->codice_fiscale . "<br>";
  }

}

?>
