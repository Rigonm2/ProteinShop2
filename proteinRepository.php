<?php
    include_once('DatabaseProducts.php');

    class proteinRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseProducts;
            $this->connection = $conn->startConnection();
        }   

        public function insertProduct($reg){
            $conn = $this->connection;

            $src = $reg->getSrc();
            $Name = $reg->getName();
            $Price = $reg->getPrice();
          
           

            $sql = "INSERT INTO pr(src, Name, Price) VALUES (?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$src, $Name, $Price]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllProducts(){
            $conn = $this->connection;

            $sql = "SELECT * FROM pr";
            $statement = $conn->query($sql);

            $reg = $statement->fetchAll();
            return $reg;
        }

     


         public function editProducts($src, $Name, $Price, $Id) {
            try {
                $conn = $this->connection;
                $sql = "UPDATE pr SET src=?, Name=?, Price=? WHERE Id=?";
                $statement = $conn->prepare($sql);
                $statement->execute([$src, $Name, $Price, $Id]);
                echo "<script>alert('U ndryshua me sukses!')</script>";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        function deleteProduct($Id){
            $conn = $this->connection;

            $sql = "DELETE FROM pr WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$Id]);
        }

        
        function getProductById($Id){
            $conn = $this->connection;

            $sql = "SELECT * FROM pr WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$Id]);
            $reg=$statement->fetch();

            return $reg;
        }

    }

?>
