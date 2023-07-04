<?php

class ForgotPasswordObject
{
    private $customer_id;
    private $token;

    public function __construct($params){
        $this->customer_id = $params['customer_id'];
        $this->token = $params['token'];
    }
    
    public function get_customer_id()
    {
        return $this->customer_id;
    }
    public function set_customer_id($var)
    {
        $this->customer_id = $var;
    }
    
    public function get_token()
    {
        return $this->token;
    }
    public function set_token($var)
    {
        $this->token = $var;
    }
}