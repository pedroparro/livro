<?php

require_once("../models/Crud.php");
$update = new Crud();
$update->deleteDb($_GET['id']);

header("location: ../views/tabela.php");


?>