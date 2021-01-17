<?php
include_once "database.php";
include_once "operations.php";
class Order_Product extends database implements operations{  
    private $quantity;
    private $price;
    private $order_id;
    private $product_id;

    public function getQuantity(){
        return $this->quantity;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getOrder_Id(){
        return $this->order_id;
    }
    public function getProduct_Id(){
        return $this->product_id;
    }

    public function setQuantity($quantity){
       $this->quantity = $quantity;
    }
    public function setPrice($price){
       $this->price = $price;
    }
    public function setOrder_Id($order_id){
       $this->order_id = $order_id;
    }
    public function setProduct_Id($product_id){
       $this->product_id = $product_id;
    }

    public function selectData(){}
    public function insertData(){}
    public function updateData(){}
    public function deleteData(){}

    public function MostOrdered(){
        $query="SELECT `products`.*, Count(`orders_products`.`product_id`) 
        AS `product_count` FROM `orders_products` 
        JOIN `products` ON `orders_products`.`product_id` = `products`.`id` 
        GROUP BY `orders_products`.`product_id` ORDER BY `product_count` DESC LIMIT 4";
        return $this->runDQL($query);
    }
}
?>