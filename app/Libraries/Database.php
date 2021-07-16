<?php

class Database{

    private $host = 'localhost';
    private $usuario = 'postgres';
    private $senha = 'postgress';
    private $banco = 'postgres';
    private $porta = '5432';
    private $dbh;
    
    public function __construct()
    {
        $dsn = 'pgsql:host='.$this->host.';port='.$this->porta.';dbname='.$this->banco;
        $opcoes = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       ];


        try {
            $this->dbh = new PDO($dsn, $this->usuario, $this->senha, $opcoes);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }

}


