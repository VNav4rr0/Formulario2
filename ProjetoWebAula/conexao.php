<?php 
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BANCO', 'projetoweb');

class Conexao{
    protected $mysql;

    public function __contruct(){
        try {
            $this -> conexaoMysql();
        } catch (Exception $e) {
            echo "Banco não esta conectado!"
        }
    }

    public function canexaoMysql(){
        $this -> mysqli = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);
    }

    public function setAgedamentos($nome, $telefone, $origem, $data_content, $observacao){
        $stmt = $this -> mysqli -> prepare("INSERT INTO agendamento('nome','telefone','origem'data_contato','observacao') VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssss", $nome, $telefone, $origem, $data_content, $observacao);
        stmt -> execute();
    }
}
?>