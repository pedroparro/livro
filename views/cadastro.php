<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIVRARIA PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>CADASTRAR LIVRO</h1>

    <form action="../controllers/ControllerInsert.php" method="POST"> 

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" placeholder="Autor">
        </div>

        <select class="form-select" name="categoria">
            <option selected>Selecione</option>
            <option value="acao">Ação</option>
            <option value="comedia">Comédia</option>
            <option value="romance">Romance</option>
            <option value="terror">Terror</option>
        </select>

        <div class="mb-3">
            <label for="datas" class="form-label">Data</label>
            <input type="date" class="form-control" name="datas" placeholder="Data">
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" name="preco" placeholder="Preco">
        </div>
 
        <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>