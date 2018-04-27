<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 09/03/18
 * Time: 08:55
 */
require "DBConnection.php";
require "Categoria.php";
class CrudCategoria
{
    private $conexao;
    public function getCategoria(int $id){
        $this->conexao = DBConnection::getConexao();
        $sql = "select * from categoria where id_categoria = ".$id;
        $result = $this->conexao->query($sql);
        $categoria = $result->fetch(PDO::FETCH_ASSOC);
        $objcat = new Categoria($categoria['id_categoria'],$categoria['nome_categoria'],$categoria['descricao_categoria']);
        return $objcat;
    }
    public function getCategorias(){
        $this->conexao = DBConnection::getConexao();
        $sql = 'select * from categoria';
        $result = $this->conexao->query($sql);
        $categorias = $result->fetchAll(PDO::FETCH_ASSOC);
        $listaCategorias = [];
        foreach ($categorias as $categoria){
            $listaCategorias[] = new Categoria($categoria['id_categoria'],$categoria['nome_categoria'],$categoria['descricao_categoria']);
        }
        return $listaCategorias;
    }
    public function insertCategoria(Categoria $cat){
        $this->conexao = DBConnection::getConexao();
        $sql = "insert into categoria (nome_categoria,descricao_categoria) values ('".$cat->getNome()."','".$cat->getDescricao()."')";
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            echo $e->getMessage();
            return $e->getMessage();
        }
    }
    public function updateCategoria(Categoria $cat){
        $this->conexao = DBConnection::getConexao();
        $sql = "update categoria set nome_categoria = '".$cat->getNome()."', descricao_categoria = '".$cat->getDescricao()."' where id_categoria = ".$cat->getId();
        echo $sql;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            echo $e->getMessage();
            return $e->getMessage();
        }
    }
    public function deleteCategoria(int $id){
        $this->conexao = DBConnection::getConexao();
        $sql = "delete from categoria where id_categoria = ".$id;
        try {
            $resultado = $this->conexao->exec($sql);
            return $resultado;
        }catch(PDOException $e){
            echo $e->getMessage();
            return $e->getMessage();
        }
    }
}