<?php

 class Becario {
  
  private $id;
  private $nombre;
  private $fkidprograma;
  
  public function __construct(){
    
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function getNombre(){
    return $this->nombre;
  }

  public function getFkidprograma(){
    return $this->fkidprograma;
  }	
  
   
  public function setId($id){
    $this->id = $id;
  }
  
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

   public function setFkidprograma($fkidprograma){
    $this->fkidprograma = $fkidprograma;
  } 
  

  
  
}
