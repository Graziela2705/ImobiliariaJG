<?php
require_once '../app/controllers/CidadeController.php';

$controller = new CidadeController();



//se for Post -> salvar

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller->store();
}else {
    $controller->create();
}

?>