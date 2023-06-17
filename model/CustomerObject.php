<?php

class CustomerObject
{
    private $id;
    private $first_name;
    private $last_name;
    private $gender;
    private $birth_date;
    private $email;
    private $password;
    private $photo;
    private $phone_number;
    private $address;
    private $role;
    private $token;

    public function __construct($rows)
    {
        $this->id = $rows['id'] ?? '';
        $this->first_name = $rows['first_name'];
        $this->last_name = $rows['last_name'];
        $this->gender = $rows['gender'];
        $this->birth_date = $rows['birth_date'] ?? '';
        $this->email = $rows['email'];
        $this->password = $rows['password'];
        $this->photo = $rows['photo'];
        $this->phone_number = $rows['phone_number'];
        $this->address = $rows['address'] ?? '';
        $this->role = $rows['role'] ?? 0;
        $this->token = $rows['token'] ?? '';
    }
    
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($var)
    {
        $this->id = $var;
    }

    public function get_first_name()
    {
        return $this->first_name;
    }

    public function set_first_name($var)
    {
        $this->first_name = $var;
    }

    public function get_last_name()
    {
        return $this->last_name;
    }

    public function set_last_name($var)
    {
        $this->last_name = $var;
    }
    
    public function get_gender()
    {
        return $this->gender;
    }
    public function set_gender($var)
    {
        $this->gender = $var;
    }

    public function get_birth_date()
    {
        return $this->birth_date;
    }

    public function set_birth_date($var)
    {
        $this->birth_date = $var;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($var)
    {
        $this->email = $var;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_password($var)
    {
        $this->password = $var;
    }
    
    public function get_photo()
    {
        return $this->photo;
    }
    public function set_photo($var)
    {
        $this->photo = $var;
    }

    public function get_phone_number()
    {
        return $this->phone_number;
    }

    public function set_phone_number($var)
    {
        $this->phone_number = $var;
    }

    public function get_address()
    {
        return $this->address;
    }

    public function set_address($var)
    {
        $this->address = $var;
    }

    public function get_fullname()
    {
        return $this->first_name. " " . $this->last_name;
    }
    
    public function get_role()
    {
        return $this->role;
    }
    public function set_role($var)
    {
        $this->role = $var;
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