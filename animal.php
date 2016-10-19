<?php

class animal
{
public $tipoAnimal="caballo";
public $numPatas="4";


public function setnumPatas ($numpatas){
$this->numpatas=$numpatas;
}
public function getnumPatas (){
return $this->numPatas;
}

public function settipoAnimal ($numpatas){
$this->numpatas=$numpatas;
}
public function gettipoAnimal (){
return $this->tipoAnimal;
}
}

?>
