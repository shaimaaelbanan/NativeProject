<?php
include_once "database.php";
include_once "operations.php";
class Region extends database implements operations{ 
    private $id;
    private $name;
    private $latitude;
    private $longitude;
    private $citie_id;

    public function getId(){
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
    public function getCitie_Id()
    {
        return $this->citie_id;
    }
    
    public function setId($id){
       $this->id = $id;
    }
    public function setName($name){
       $this->name = $name;
    }
    public function setLatitude($latitude){
       $this->latitude = $latitude;
    }
    public function setLongitude($longitude){
       $this->longitude = $longitude;
    }
    public function setCitie_Id($citie_id)
    {
       $this->citie_id = $citie_id;
    }
    
    public function selectData(){}
    public function insertData(){}
    public function updateData(){}
    public function deleteData(){}

    public function getRegionsByCity(){
        $query = "SELECT `regions`.* FROM `regions` 
        WHERE `regions`.`citie_id` = $this->citie_id ";
        return $this->runDQL($query);
    }    
}
?>