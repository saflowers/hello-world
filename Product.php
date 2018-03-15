<?php

class Product {
  private $id;
  private $desc;
  private $price;
  private $qty;
  
  public function __construct__($desc, $price=0, $qty=0) {
    $this->desc = $desc;
    $this->price = $price;
    $this->qty = $qty;
  }
  
  public function getDesc() {
    return $this->desc;
  }
  
  private function validatePrice($price) {
    return $price < 0 ? false : true;
  }
  
}

?>
