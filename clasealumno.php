<?php
//creamos la clase y la nombramos
class alumno
{
		//generamos los atributos
		public $nombre='';
		public $edad='';
		public $curso='';
		public $ciclo='';

		//GETTERS..................
		public function getNombre(){
		return $this->nombre;
		}
		//getter edad
		public function getEdad(){
		return $this->edad;
		}
		//getter curso
		public function getCurso(){
		return $this->curso;
}
	  //getter ciclo
		public function getCiclo(){
		return $this->ciclo;
}
		//SETTERS.................

		public function setNombre ($nombre){
		$this->nombre=$nombre;
	}
		public function setEdad ($edad){

		if ($edad>=18){
			echo "<br>Tiene la edad minima ";
		}
		elseif ($edad<18){
      		echo "<br>Si eres menor, la edad se restablecera en = ";
      		echo $this->edad=18;
		}

}
		public function setCurso ($curso){
		$this->curso=$curso;

		if ($curso==1){
			echo "<br>El alumno esta cursando el primer curso ";
		}
		elseif ($curso==2){
			echo "<br>El alumno esta cursando el segundo curso ";
		}
		elseif ($curso!=1 or 2){
			echo "<br>Ni primero ni segundo curso, esta en = ";
			echo $this->curso=1;
		}
		}

		public function setCiclo ($ciclo){
		$this->ciclo=$ciclo;
		}
}
?>
