<?php

class Consulta {
  static public function MostrarPreguntas ($baseDatos, $tabla)
  {

    $sql="SELECT * FROM  $tabla";
    $query= $baseDatos-> prepare($sql);
    $query->execute();
    $preguntas= $query->fetchAll(PDO::FETCH_ASSOC);
    return $preguntas;

  }




}
