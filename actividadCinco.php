<?php
class Padre {
    public function unMetodo () { 
        echo "Función unMetodo de Padre \n";
    }
    public function __get ($nombre) { 
        echo "Función unMetodo de Padre".$nombre."\n";
    }
    public function __set ($nombre, $valor) { 
        echo "Función unMetodo de Padre".$nombre.$valor."\n";
    }
}
class Hija extends Padre {
    public function unMetodo() {
    parent::unMetodo();
    parent::__get("Carlos");
    parent::__set("Carlos", 10);
    }
}
/* class Hija extends Padre {
    public function unMetodo() {
    parent::unMetodo();
    __get("Carlos");
    __set("Carlos", 10);
    }
} */
$h= new Hija();
$h->unMetodo();
?>