<?php

class OrderObject
{
    private $id;
    private $name_receiver;
    private $phone_receiver;
    private $address_receiver;
    private $status;
    private $total_price;
    private $customer_id;
    private $created_at;
    
    public function __construct($params){
        $this->id = $params['id'] ?? '';
        $this->name_receiver = $params['name_receiver'];
        $this->phone_receiver = $params['phone_receiver'];
        $this->address_receiver = $params['address_receiver'];
        $this->status = $params['status'] ?? '';
        $this->total_price = $params['total_price'];
        $this->customer_id = $params['customer_id'];
        $this->created_at = $params['created_at'] ?? '';
    }
    
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($var)
    {
        $this->id = $var;
    }
    
    public function get_name_receiver()
    {
        return $this->name_receiver;
    }
    public function set_name_receiver($var)
    {
        $this->name_receiver = $var;
    }
    
    public function get_phone_receiver()
    {
        return $this->phone_receiver;
    }
    public function set_phone_receiver($var)
    {
        $this->phone_receiver = $var;
    }
    
    public function get_address_receiver()
    {
        return $this->address_receiver;
    }
    public function set_address_receiver($var)
    {
        $this->address_receiver = $var;
    }
    
    public function get_status()
    {
        return $this->status;
    }
    public function set_status($var)
    {
        $this->status = $var;
    }

    public function get_total_price()
    {
        return $this->total_price;
    }
    public function set_total_price($var)
    {
        $this->total_price = $var;
    }
    
    public function get_customer_id()
    {
        return $this->customer_id;
    }
    public function set_customer_id($var)
    {
        $this->customer_id = $var;
    }
    
    public function get_created_at()
    {
        return $this->created_at;
    }
    public function set_created_at($var)
    {
        $this->created_at = $var;
    }
}