<?php

  require 'collector.php';
  require 'demobecario.php';
  require 'demoprograma.php';

  class DemoCollector extends Collector {

   function __construct()
   {
    parent::__construct();
   }

   public function addBecario($becario)
   {
       $sql="INSERT INTO becario(nombrebecario, fkidprograma) VALUES('".$becario->getNombre()."','".$becario->getfkidprograma()."')";
       /*echo $sql;*/
       print_r(self::execQuery($sql));   
       return true;   
   }

   public function getNombre($id)
   {
    
    $stmt = $this->con->prepare("SELECT * FROM demobecario WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Demo");
    return $usuario;
   }
   public function readAllbecario(){

      return self::read('becario','becario'); 


  }

   public function updateDemo($becario)
   {
    try
    {
      $sql="UPDATE demo SET id='".$becario->getId()."',nombre='".$demo->getNombre()."' ,id='".$becario->getfkidprograma()."' WHERE id=".$becario->getId();
      self::execQuery($sql);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }

   public function deleteDemo($becario)
   {
    try
    {
      self::execQuery("DELETE FROM demobecario WHERE id=".$becario);

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   } 
}
?>
