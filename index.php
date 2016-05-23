<?php

echo "<h1>Caminho</h1><hr/>";
echo "index => autoload<br/>";


$classe = 'ClienteController';

require_once './controller/' . $classe . '.php';

//$obj = new $classe();
//obj->listar();

$arr = array(1, "teste 1");
require_once './DAO/textDAO.php';
$obj = new textDAO();
//$obj = new ClienteController();
$obj->salvar($arr);
