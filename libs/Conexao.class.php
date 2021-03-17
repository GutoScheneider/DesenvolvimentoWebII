<?php

class Conexao{
    private $username = 'root';
    private $password = 'root';
    private $banco    = 'webii';
    private $host     = 'localhost';
    private $conn;

    public function __construct(){
        try{
            $conn = new PDO("mysql:host={$this->host},
                            dbname={$this->banco}",
                            $this->username,
                            $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->conn = $conn;
        }catch(PDOException $erro){
            echo  'Erro :' . $erro->getMessage();
        }

    }
        public function getConn(){
            return $this->conn;
        }
        public function getSelect($sql){
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stm->fetchALL(PDO::FETCH_NUM);
        }
    }
