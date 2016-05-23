<?php

echo "Model=> Cliente<br/>";

include_once 'DAO/textDAO.php';

class Cliente {

    private $id_cliente;
    private $nome;

    function __construct() {
        $this->id_cliente;
        $this->nome;
    }

    function __get($propriedade) {
        return $this->$propriedade;
    }

    //intercepta atribuições
    function __set($propriedade, $valor) {

        if ($propriedade == 'id_cliente') {
            if (is_numeric($valor)) {
                $this->$propriedade = $valor;
            } else {
                throw new Exception("Id não é numérico", 1);
            }
        }

        $this->$propriedade = $valor;
    }

    public function salvar() {
        $obj = new textDAO();
        $clientes = $obj->salvar($obj);
    }

    public function listar() {
        $obj = new textDAO();
        $clientes = $obj->listar();

        return $clientes;
    }

}
