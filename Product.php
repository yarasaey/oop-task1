<?php
class Product{

var $name;
var $tax=10;
var $price;
var $brand;
var $image;




    function getName(){
        return $this->name;
    }
    function priceAfterDiscount($discount){
        $this->price=$this->price-$discount;
        return $this->price;
    }
    function getFinalPrice(){
        return $this->price +(($this->tax/100)*$this->price);
    }
}