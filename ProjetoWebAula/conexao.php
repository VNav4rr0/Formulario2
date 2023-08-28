<?php
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BANCO', 'projetoweb');
class Conexao{
    protected $mysqli;
    public function __construct(){
        $this->conexaoMysql();
  
    }
    public function conexaoMysql(){
        $this->mysqli = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);
    }
    public function setAgedamentos($nome, $telefone, $origem, $data_contato, $observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos('nome','telefone','origem','data_contato','observacao') VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$telefone,$origem,$data_contato,$observacao);
        if($stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>