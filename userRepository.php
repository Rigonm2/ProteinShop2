<?php
    include_once('DatabaseConnection.php');

    class userRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertStudent($reg){
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

        public function getAllStudents(){
            $conn = $this->connection;

            $sql = "SELECT * FROM form";
            $statement = $conn->query($sql);

            $reg = $statement->fetchAll();
            return $reg;
        }

     


         public function editStudent($emri, $mbiemri, $emaili, $username, $password, $id) {
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

        function deleteStudent($id){
            $conn = $this->connection;

            $sql = "DELETE FROM form WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        
        function getStudentById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM form WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $reg=$statement->fetch();

            return $reg;
        }

    }

?>