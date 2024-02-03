<?php 

class Product{


    private $id;
    private $src;
    private $Name;
    private $Price;


    public function __construct($src,$Name,$Price){

        $this->src=$src;
        $this->Name=$Name;
        $this->Price=$Price;
    }
    
    public function getSrc(){
        return $this ->src;
    }
    public function setSrc($src){
        $this->src=$src;
    }

    public function getName(){
        return $this ->Name;
    }
    public function setName($Name){
        $this->Name=$Name;
    }

    public function getPrice(){
        return $this ->Price;
    }
    public function setPrice($Price){
        $this->Price=$Price;
    }

    public function __toString(){
        return "Emri: ".$this->Name." dhe cmimi ".$this->Price;
    }
        
    
}
