<!DOCTYPE html>
<html>
<body>

  <?php
/*
  
  $name = 'Alessio';
  $surname= 'Santillo';

  echo "<p> My Name is $name $surname !</p>";


objcet semplice:
const oggetto{
  nome: 'Alessio,
  cognome: 'Santillo;
}

*/

//definizione della classe
  class Persona {
    public $name;
    public $surname;


    //costruttore della classe
    public function __construct($name, $surname){
      $this->name = $name;
      $this->surname = $surname;
    }

    //metodo della classe
    public function saluta(){
      return "ciao, sono " .$this->name. ' ' .$this->surname. ".";
    }
  }

  //creazione di un oggetto instanziando la classe
  
  $persona1 = new Persona("Alessio", "Topo gigio"); 

//accesso alle proprietà dell'oggetto
echo $persona1->name;  //output:Alessio
echo $persona1->surname;  //output:Topo gigio

//chiamata al metodo dell'oggetto
echo $persona1->saluta();


    ?>

  <body>

    <html>