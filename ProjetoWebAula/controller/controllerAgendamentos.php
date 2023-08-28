<?php
class ControllerAgendamentos{
    private $agendamento;

    public function __contruct(){
        $this-> agendamento = new Agendamentos();
        $this-> incluir();
    }
    private function incluir(){
        $this-> agendamento -> setNome($_POST['txtNome']);
        $this-> agendamento -> setTelefone($_POST['txtTelefone']);
        $this-> agendamento -> setOrigem($_POST['txtOrigem']);
        $this-> agendamento -> setData($_POST['txtData']);
        $this-> agendamento -> setObservacao($_POST['txtObservacao']);


    }
}
?>