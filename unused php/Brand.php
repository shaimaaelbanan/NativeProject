<?php 
include_once "database.php";
include_once "operations.php";
class Brand extends database implements operations {
    private $id;
    private $name;
    private $photo;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;  
    }
    public function getPhoto()
    {
        return $this->photo;  
    }    
    public function setId($id)
    {
        $this->id = $id; 
    }
    public function setName($name)
    {
        $this->name = $name; 
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo; 
    }
    public function selectData(){}
    public function insertData(){
        $query = "INSERT INTO `brand`(`brand`. `name`)
                    VALUES (`$this->name`) ";
        echo $query;
        return $this->runDML($query) ;
    }
    public function updateData(){}
    public function deleteData(){}
}
?>