<?php
include_once "database.php";
include_once "operations.php";

class Categorie extends database implements operations{
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
      
    public function selectData(){
        $query = "SELECT `categories`.* FROM `categories` LIMIT 5";
        return $this->runDQL($query);
    }
    public function insertData(){}
    public function updateData(){}
    public function deleteData(){}
}

?>