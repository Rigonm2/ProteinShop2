<?php
class DatabaseProducts{
   
    private $host = "localhost";
    private $username = "product";
    private $password = "00000000";
    private $db = "products";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            return null;
        }else{
            return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}

}
