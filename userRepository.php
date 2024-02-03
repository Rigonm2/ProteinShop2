<?php
    include_once('DatabaseConnection.php');

    class userRepository{
        private $connection;
        private $db;

        public function __construct1($db)
        {
            $this->db = $db;
        }

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertUser($reg){
            $conn = $this->connection;

            $emri = $reg->getEmri();
            $mbiemri = $reg->getMbiemri();
            $emaili = $reg->getEmaili();
            $username = $reg->getUserName();
            $password = $reg->getPassword();
           

            $sql = "INSERT INTO form(Emri, Mbiemri, Email, Username , Password) VALUES (?,?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $mbiemri, $emaili,$username,$password]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }
            public function getEmail($email){
            $conn = $this->connection;

            $sql = "SELECT * FROM form WHERE Email = $email";
            $statement = $conn->query($sql);

            $log = $statement->fetch();
            return $log;
        }
        
        

        public function getAllUsers(){
            $conn = $this->connection;

            $sql = "SELECT * FROM form";
            $statement = $conn->query($sql);

            $reg = $statement->fetchAll();
            return $reg;
        }

        function UsernameTaken($username){
            try{
            $conn = $this->connection;

            $stmt = $this->$conn->prepare("SELECT * FROM form WHERE Username = ?");
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt ->close();
            }catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            return $result->num_rows >0;
        }
        function login($email,$password){
            $conn = $this->connection;
            $stmt = $this -> $conn->prepare("SELECT * FROM form WHERE email = $email");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result ->num_rows>0){
            $row = $result->fetch_assoc();
            $hashedPassowrd = $row['Password'];
            
            if(password_verify($password,$hashedPassowrd)){
                session_start();
                $_SESSION["User"] = true;
                return true;
            }
            }
            return false;

        }

     


         public function editUsers($emri, $mbiemri, $emaili, $username, $password, $id) {
            try {
                $conn = $this->connection;
                $sql = "UPDATE form SET Emri=?, Mbiemri=?, Email=?, Username=?, Password=? WHERE Id=?";
                $statement = $conn->prepare($sql);
                $statement->execute([$emri, $mbiemri, $emaili, $username, $password, $id]);
                echo "<script>alert('U ndryshua me sukses!')</script>";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        function deleteUsers($id){
            $conn = $this->connection;

            $sql = "DELETE FROM form WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        
        function getUserById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM form WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $reg=$statement->fetch();

            return $reg;
        }

        function admini($Email,$username,$Password){
            $is = false;
            if( $Email == "rigon@gmail.com" && $username == "rigonAdmini"&& $Password == "rigon123"){
                $is = true;
            }
            return $is;
        }
    }

?>