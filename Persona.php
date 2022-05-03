<?php

class Persona
{
  public $nombre;
  public $estatura;

  public function mostrar(){
    echo $this->nombre . ' mide ' . $this->estatura . ' m.';
  }
}

?>