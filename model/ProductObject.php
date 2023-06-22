<?php

class ProductObject
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $photo;
    private $manufacturer_id;
    
    public function __construct($params)
    {
        $this->id = $params['id'] ?? '';
        $this->name = $params['name'];
        $this->price = $params['price'] ?? '?';
        $this->description = nl2br($params['description']);
        $this->photo = $params['photo'] ?? '';
        $this->manufacturer_id = $params['manufacturer_id'];
    }
    
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($var)
    {
        $this->id = $var;
    }
    
    public function get_name()
    {
        return $this->name;
    }
    public function set_name($var)
    {
        $this->name = $var;
    }
    
    public function get_price()
    {
        return $this->price;
    }
    public function set_price($var)
    {
        $this->price = $var;
    }
    
    public function get_description()
    {
        return $this->description;
    }
    public function set_description($var)
    {
        $this->description = $var;
    }
    
    public function get_photo()
    {
        return $this->photo;
    }
    public function set_photo($var)
    {
        $this->photo = $var;
    }
    
    public function get_manufacturer_id()
    {
        return $this->manufacturer_id;
    }
    public function set_manufacturer_id($var)
    {
        $this->manufacturer_id = $var;
    }
}