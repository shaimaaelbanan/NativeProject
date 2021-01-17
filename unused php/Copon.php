<?php 
include_once "database.php";
include_once "operations.php";
class Copon extends database implements operations {
    private $id;
    private $discount;
    private $type;
    private $expireDate;
    private $startDate;
    private $miniOrderValue;
    private $max_discount_value;


    public function getId()
    {
        return $this->id;
    }
    public function getDiscount()
    {
        return $this->discount;  
    }
    public function getType()
    {
        return $this->type;
    }
    public function getExpireDate()
    {
        return $this->expireDate;  
    }
    public function getStartDate()
    {
        return $this->startDate;  
    }
    public function getMiniOrderValue()
    {
        return $this->miniOrderValue;
    }
    public function getMax_discount_value()
    {
        return $this->max_discount_value;  
    }
    public function setId($id)
    {
        $this->id = $id; 
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount; 
    }
    public function setType($type)
    {
        $this->type = $type; 
    }
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate; 
    }
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate; 
    }
    public function setMiniOrderValue($miniOrderValue)
    {
        $this->miniOrderValue = $miniOrderValue; 
    }
    public function setMax_discount_value($max_discount_value)
    {
        $this->max_discount_value = $max_discount_value; 
    }
    public function selectData(){}
    public function insertData(){
        $query = "INSERT INTO `copons`(`copons`. `discount`, `copons`. `type`, `copons`. `expireDate`, `copons`. `startDate`, `copons`. `miniOrderValue`, `copons`. `max_discount_value`)
                    VALUES (`$this->discount`, `$this->type`, `$this->expireDate`, `$this->startDate`, `$this->miniOrderValue`, `$this->max_discount_value`) ";
        echo $query;
        return $this->runDML($query) ;
    }
    public function updateData(){}
    public function deleteData(){}
}
?>