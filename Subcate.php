<?php
include_once "database.php";
include_once "operations.php";
class Subcate extends database implements operations{ 
    private $id;
    private $name;
    private $photo;
    private $categorie_id;

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
    public function getCategorie_Id()
    {
        return $this->categorie_id;
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
    public function setCategorie_Id($categorie_id)
    {
       $this->categorie_id = $categorie_id;
    }
  
    public function selectData(){}
    public function insertData(){}
    public function updateData(){}
    public function deleteData(){}

    public function getSubByCat(){
        $query = "SELECT `subcate`.* FROM `subcate` WHERE `subcate`.`categorie_id` = $this->categorie_id ";
        return $this->runDQL($query);
    }   
}
?>