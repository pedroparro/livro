<?php
require_once("../models/Crud.php");
$update = new Crud();
$update->updateDb($_POST['id'],$_POST['nome'],$_POST['autor'],$_POST['preco']);

header("location: ../views/tabela.php");
?>