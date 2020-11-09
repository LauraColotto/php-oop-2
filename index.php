<?php

class Poligono {
  public $n_lati;
  public $nome;

  public function __construct($_lati, $_nome){

    $this->n_lati = $_lati;
    $this->nome = $_nome;
  }
};

class Quadrato extends Poligono {
  public $l_lato;

  public function __construct($_lunghezzaL) {

    parent::__construct(4, "quadrato");
    $this->l_lato = $_lunghezzaL;

  }
  public function getArea(){
    $lato = $this->l_lato;
    $area = $lato * $lato;
    return $area;
  }
};

$quadrato1 = new Quadrato(10);
$quadrato2 = new Quadrato(5);

$quadrati = [$quadrato1, $quadrato2];


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Utenti</title>
   </head>
   <body>

     <table>
       <thead>
         <tr>
           <th>Nome figura</th>
           <th>Numero lati</th>
           <th>Lunghezza Lato</th>
           <th>Area</th>

         </tr>
       </thead>
       <?php foreach ($quadrati as $record): ?>
         <tr>
           <td><?php echo $record->nome ?></td>
           <td><?php echo $record->n_lati ?></td>
           <td><?php echo $record->l_lato ?></td>
           <td><?php echo $record->getArea() ?></td>
         </tr>

       <?php endforeach; ?>


     </table>


   </body>
 </html>
