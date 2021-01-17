<?php
include_once "database.php";
include_once "operations.php";
class City extends database implements operations{ 
    private $id;
    private $name;
    private $latitude;
    private $longitude;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLatidude()
    {
        return $this->latitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    public function setId($id)
    {
       $this->id = $id;
    }
    public function setName($name)
    {
       $this->name = $name;
    }
    public function setLatitude($latitude)
    {
       $this->latitude = $latitude;
    }
    public function setLongitude($longitude)
    {
       $this->longitude = $longitude;
    }

    public function selectData(){
        $query = "SELECT `cities`.* FROM `cities`";
        return $this->runDQL($query);
    }
    public function insertData(){}
    public function updateData(){}
    public function deleteData(){}
}

?>