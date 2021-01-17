<?php
include_once "database.php";
include_once "operations.php";
class Address extends database implements operations{ 
    private $id;
    private $street;
    private $building;
    private $floor;
    private $flat;
    private $details;
    private $user_id;
    private $region_id;

    public function getId()
    {
        return $this->id;
    }
    public function getStreet()
    {
        return $this->street;
    }
    public function getBuilding()
    {
        return $this->building;
    }
    public function getFloor()
    {
        return $this->floor;
    }
    public function getFlat()
    {
        return $this->flat;
    }
    public function getDetails()
    {
        return $this->details;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function getRegionId()
    {
        return $this->region_id;
    }
    
    public function setId($id)
    {
       $this->id = $id;
    }
    public function setStreet($street)
    {
       $this->street = $street;
    }
    public function setBuilding($building)
    {
       $this->building = $building;
    }
    public function setFloor($floor)
    {
       $this->floor = $floor;
    }
    public function setFlat($flat)
    {
       $this->flat = $flat;
    }
    public function setDetails($details)
    {
       $this->details = $details;
    }
    public function setUserId($user_id)
    {
       $this->user_id = $user_id;
    }
    public function setRegionId($region_id)
    {
       $this->region_id = $region_id;
    }
    
    public function selectData(){}
    public function insertData(){
       $query = "INSERT INTO `address` (`address`.`street`,`address`.`building`,`address`.`flat`,
                `address`.`floor`,`address`.`details`, `address`.`user_id`,`address`.`region_id`) 
       VALUES ('$this->street','$this->building','$this->flat','$this->floor','$this->details',
                '$this->user_id','$this->region_id') ";
       return $this->runDML($query);
    }
    public function updateData(){
        $query = "UPDATE `address` SET `address`.`street` = '$this->street' , `address`.`flat` = '$this->flat' , 
                `address`.`floor` = '$this->floor', `address`.`building` = '$this->building', `address`.`details` = '$this->details',
                `address`.`user_id` = $this->user_id , `address`.`region_id` = $this->region_id
        WHERE `address`.`id` = $this->id";
        return $this->runDML($query);
    }
    public function deleteData(){
        $query = "DELETE FROM `address` WHERE `address`.`id` = $this->id";
        return $this->runDML($query);
    }

    public function getAddressByUserId()
    {
        $query = "SELECT `address`.* FROM `address` WHERE `address`.`user_id` = $this->user_id ";
        return $this->runDQL($query); 
    }   
}
?>