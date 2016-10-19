<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include 'clasealumno.php';

    $alumno1 = new alumno();
    $alumno1->setNombre("andreu");
    echo "Nombre del alumno= ".$alumno1->getNombre();

    $alumno1->setEdad(25);
    echo ''.$alumno1->getEdad();

    $alumno1->setCiclo("daw");
    echo "<br>Ciclo del alumno= ".$alumno1->getCiclo();

    $alumno1->setCurso (2);
    echo ''.$alumno1->getCurso();
   ?>

  </body>
</html>
