<?php 
include_once "database.php";
include_once "operations.php";
class Cart extends database implements operations {
    private $quantity;

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity; 
    }
    public function selectData(){}
    public function insertData(){
        $query = "INSERT INTO `cart`(`cart`. `quantity`)
                    VALUES (`$this->quantity`) ";
        echo $query;
        return $this->runDML($query) ;
    }
    public function updateData(){}
    public function deleteData(){}
}
?>