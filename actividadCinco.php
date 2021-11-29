<?php
class Padre {
    public $valoresPadre = array("padre1" => "padre2","padre3" => "padre4",
    );
    public function __get($clave) {
        return $this->valoresPadre[$clave];
    }
    public function __set( $clave, $valor ){
        $this->values[$clave] = $valor;
    }
}
class Hija extends Padre {
    
}


$padre = new Padre();
echo($padre->__get("padre1"). "<br>");
$hija= new Hija();
echo($hija->__get("padre3"));
?>