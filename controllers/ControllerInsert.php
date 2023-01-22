<?php
require_once("../models/Crud.php");

class ControllerInsert
{
    //INSERT 
    public function insertController()
    {
        if (isset($_POST['submit'])) {
            
            $insert = new Crud();
            $insert->insertDb($_POST['nome'],$_POST['autor'],$_POST['categoria'],$_POST['datas'],$_POST['preco']);
            header("location: ../views/tabela.php");
        }
    }
}

$c = new ControllerInsert();
$c->insertController();

?>