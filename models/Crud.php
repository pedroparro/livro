<?php
require_once("Config.php");

class Crud extends Config
{
    //INSERT
    public function insertDb($nome,$autor,$categoria,$datas,$preco)
    {
        try {
            $sql = "INSERT INTO autores (id,nome,autor,categoria,datas,preco) VALUES (NULL,:nome,:autor,:categoria,:datas,:preco)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":nome",$nome);
            $stmt->bindValue(":autor",$autor);
            $stmt->bindValue(":categoria",$categoria);
            $stmt->bindValue(":datas",$datas);
            $stmt->bindValue(":preco",$preco);
            $stmt->execute();

        } catch (\Exception $erro) {
            die("Erro" . $erro->getMessage());
        }
    }

    //TABELA
    public function tabelaDb()
    {
        try {
            $sql = "SELECT * FROM autores ORDER BY id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;

        } catch (\Exception $erro) {
            die("Erro" . $erro->getMessage());
        }
    }

    //UPDATE
    public function updateDb($id,$nome,$autor,$preco)
    {
        try {
            $sql = "UPDATE autores SET nome = :nome,autor = :autor,preco = :preco WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":id",$id);
            $stmt->bindValue(":nome",$nome);
            $stmt->bindValue(":autor",$autor);
            $stmt->bindValue(":preco",$preco);
            $stmt->execute();
            return $stmt;
        } catch (\Exception $erro) {
            die("Erro" . $erro->getMessage());
        }
    }

    //DELETE
    public function deleteDb($id)
    {
        try {
            $sql = "DELETE FROM autores WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":id",$id);
            $stmt->execute();
            return $stmt;

        } catch (\Exception $erro) {
            die("Erro" . $erro->getMessage());
        }
    }

    //SELECT ID
    public function selectDb($id)
    {
        try {
            $sql = "SELECT * FROM autores WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(":id",$id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result;

        } catch (\Exception $erro) {
            die("Erro" . $erro->getMessage());
        }
    }
}

?>