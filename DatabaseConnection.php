<?php
class DatabaseConnection{
   
    private static $instance = null;
    private $conn;

    private $host = "localhost";
    private $username = "userRigon";
    private $password = "11112222";
    private $db = "regjister";

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
 public static function getInstance()
{
    if (self::$instance === null) {
        self::$instance = new self();
    }
    return self::$instance;
}
public function getConnection()
{
    return $this->conn;
}
public function closeConnection()
    {
        $this->conn->close();
    }


}

