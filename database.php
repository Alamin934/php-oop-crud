<?php
class Database{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "php_ajax";

    private $mysqli = "";
    private $conn = false;

    private $result = [];

    public function __construct(){

        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            return true;
            if($this->mysqli->connect_result){
                array_push($this->result, $this->mysqli->connect_result);
                return false;
            }
        }else{
            return true;
        }

    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function select(){

    }

    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }

}
