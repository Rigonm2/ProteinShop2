<?php
class User{
    private $Id; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Emri;
    private $Mbiemri;
    private $Emaili;
    private $UserName;
    private $Password;


    public function __construct($emri,$mbiemri,$email,$username,$password){
        $this->Emri=$emri;
        $this->Mbiemri=$mbiemri;
        $this->Emaili=$email;
        $this->UserName=$username;
        $this->Password=$password;
    }
  /* public function getId(){
        return $this->Id;
    }*/
    public function getEmri(){
        return $this->Emri;
    }
    public function setEmri($emri){
        $this->Emri = $emri;
    }

    public function getMbiemri(){
        return $this->Mbiemri;
    }
    public function setMbiemri($mbiemri){
        $this->Mbiemri = $mbiemri;
    }

    public function getEmaili(){
        return $this->Emaili;
    }
    public function setEmaili($email){
        $this->Emaili = $email;
    }
    public function getUsername(){
        return $this->UserName;
    }
    public function setUsername($username){
        $this->Emri = $username;
    }
    public function getPassword(){
        return $this->Password;
    }
    public function setPassword($password){
        $this->Emri = $password;
    }
  


    public function __toString(){
        return "Emri: ".$this->Emri." dhe mbiemri ".$this->Mbiemri;
    }
}
?>