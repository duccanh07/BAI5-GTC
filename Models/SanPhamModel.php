<?php
  class Product{
    public $ten;
    public $gia;
    public function __construct($name,$price)
    {
      $this->ten=$name;
      $this ->gia=$price;
    }
  }

?>