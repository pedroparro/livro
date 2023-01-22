<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIVRARIA PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>LISTA DE LIVROS</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">AUTOR</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">DATA</th>
            <th scope="col">PREÇO</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            require_once("../models/Crud.php");
            $tabela = new Crud();
            $variable = $tabela->tabelaDb();

            foreach ($variable as $value) {
            
            ?>
            <tr>
            <th scope="row"><?php echo $value['id']; ?></th>
            <td><?php echo $value['nome']; ?></td>
            <td><?php echo $value['autor']; ?></td>
            <td><?php echo $value['categoria']; ?></td>
            <td><?php echo $value['datas']; ?></td>
            <td><?php echo $value['preco']; ?></td>
            <td><a href="./editar.php?id=<?php echo $value['id'];?>"><button type="button" class="btn btn-primary">Editar</button></a> <a href="../controllers/controllerDelete.php?id=<?php echo $value['id'];?>"><button type="button" class="btn btn-danger">Excluir</button></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>