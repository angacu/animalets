<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //clases
    include "animal.php";
    //objetos
      $animal1=new animal();
      $animal1->settipoAnimal("cienpies");
      echo "Tipo de animal= ".$animal1->gettipoAnimal();

      $animal1->setnumPatas("100");
      echo "<br>Numero de patas que tiene= ".$animal1->getnumPatas();

      $animal1=new animal();
      $animal1->settipoAnimal("araña");
      echo "<br>Tipo de animal= ".$animal1->gettipoAnimal();

      $animal1->setnumPatas("8");
      echo "<br>Numero de patas que tiene= ".$animal1->getnumPatas();
    ?>
  </body>
</html>
