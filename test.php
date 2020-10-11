<?php

require_once 'ModelProducto.php';

//Lo hicimos para mostrar desde testBDD usando la funcion getProducto
function listar(){

    //obtiene las cosas de la BD
    $productos = getProducto();
    echo "<ul>";
    foreach($productos as $producto){
        echo '<li>' . $producto->nombre . '</li>';
    }
    echo "</ul>";
}

//listar();

//$as = new ModelProducto();
//$as->insertarProducto("bcvd","esto son asdasas",29,1);


?>