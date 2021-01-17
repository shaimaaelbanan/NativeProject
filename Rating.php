<?php
include_once "database.php";
include_once "operations.php";
class Rating extends database implements operations{  
    private $value;
    private $comment;
    private $user_id;
    private $product_id;

    public function getValue(){
        return $this->value;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getUser_Id(){
        return $this->user_id;
    }
    public function getProduct_Id(){
        return $this->product_id;
    }

    public function setValue($value){
       $this->value = $value;
    }
    public function setComment($comment){
       $this->comment = $comment;
    }
    public function setUser_Id($user_id){
       $this->user_id = $user_id;
    }
    public function setProduct_Id($product_id){
       $this->product_id = $product_id;
    }

    public function selectData(){}
    public function insertData(){}
    public function updateData(){}
    public function deleteData(){}

    public function MostRated(){
        $query="SELECT * 
            FROM `products` AS `product`
            INNER JOIN `rating` AS `rate` 
            ON `product`.`id` = `rate`.`product_id`
            ORDER BY `rate`.`value` DESC LIMIT 4";
        return $this->runDQL($query);
    }
}
