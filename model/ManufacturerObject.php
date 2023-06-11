<?php

class ManufacturerObject
{
    private $id;
    private $name;
    private $phone;
    private $address;
    private $photo;

    public function __construct($params){
        $this->id = $params['id'] ?? '';
        $this->name = $params['name'];
        $this->phone = $params['phone'];
        $this->address = $params['address'];
        $this->photo = $params['photo'] ?? '';
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

    public function get_phone()
    {
        return $this->phone;
    }
    public function set_phone($var)
    {
        $this->phone = $var;
    }

    public function get_address()
    {
        return $this->address;
    }
    public function set_address($var)
    {
        $this->address = $var;
    }

    public function get_photo()
    {
        return $this->photo;
    }
    public function set_photo($var)
    {
        $this->photo = $var;
    }
}
