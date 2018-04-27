<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 09/03/18
 * Time: 08:55
 */
class DBConnection
{
    const HOST = 'localhost';
    const BANCO = '3info';
    const USUARIO = 'root';
    const SENHA = 'root';
    public static function getConexao(){
        try {
            $conexao = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::BANCO, self::USUARIO, self::SENHA);
            return $conexao;
        }catch (Exception $e){
            echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }
}
$conexao = new DBConnection();
$conexao->getConexao();