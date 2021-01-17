<?php
include_once "database.php";
include_once "operations.php";
class Product extends database implements operations{
   private $id;
   private $name;
   private $photo;
   private $price;
   private $details;
   private $supplier_id;
   private $subcate_id;
   private $brand_id;
   private $created_at;
   private $updated_at;

   public function getId(){
      return $this->id;
   }
    public function getName(){
      return $this->name;
   }
   public function getPhoto(){
      return $this->photo;
   }
   public function getSubcate_Id(){
      return $this->subcate_id;
   }
   public function getPrice(){
      return $this->price;
   }
   public function getDetails(){
      return $this->details;
   }
   public function getSupplier_Id(){
      return $this->supplier_id;
   }
    public function getBrand_Id(){
        return $this->brand_id;
   }
   public function getCreated_At(){
      return $this->created_at;
   }
    public function getUpdated_At(){
        return $this->updated_at;
   }

   public function setId($id){
      $this->id = $id;
   }
   public function setName($name){
      $this->name = $name;
   }
   public function setPhoto($photo){
      $this->photo = $photo;
   }
   public function setSubcate_Id($subcate_id){
      $this->subcate_id = $subcate_id;
   }
   public function setBrand_Id($brand_id){
      $this->brand_id = $brand_id;
   }
   public function setSupplier_Id($supplier_id){
      $this->supplier_id = $supplier_id;
   }
   public function setDetails($details){
      $this->details = $details;
   }
   public function setPrice($price){
      $this->price = $price;
   }
   public function setCreated_At($created_at){
      $this->created_at = $created_at;
   }
   public function setUpdated_At($updated_at){
      $this->updated_at = $updated_at;
   }

   public function selectData(){
      $query = "SELECT `products`.* FROM `products` LIMIT 14";
      return $this->runDQL($query);
   }
   public function insertData(){}
   public function updateData(){}
   public function deleteData(){}

   public function getProductsBySub(){
      $query = "SELECT `products`.* FROM `products` 
      WHERE `products`.`subcate_id` = $this->subcate_id";
      return $this->runDQL($query);
   }

   public function getSingleProduct(){
      $query = "SELECT `product_rating`.* FROM `product_rating` 
     WHERE `product_rating`.`id` = $this->id";
      return $this->runDQL($query);
   }
   public function getReviewsByProduct(){
      $query = "SELECT `users_reviews`.* FROM `users_reviews` 
      WHERE `users_reviews`.`product_id` = $this->id ";
      return $this->runDQL($query);
   }
   public function Newest(){
      $query = "SELECT * FROM products ORDER BY created_at DESC LIMIT 4";
      return $this->runDQL($query);
   }
   public function Related(){
      $query = "SELECT *
      FROM `products`
      WHERE `subcate_id` = (SELECT `subcate_id` FROM `products` WHERE `products`.`id` = 1)
      ORDER BY `price` DESC
      LIMIT 4";
      return $this->runDQL($query);
   }
}
?>
