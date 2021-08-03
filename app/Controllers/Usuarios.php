<?php

class Usuarios extends Controller{

    public function cadastrar(){

        echo $_POST['nome'];

        $this->view('usuarios/cadastrar');
    }

}