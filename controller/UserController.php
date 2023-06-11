<?php


class UserController
{
    public function dosignup()
    {
        require './model/Customer.php';
        (new Customer())->signup($_POST);
    }

    public function dosignin()
    {
        require './model/Customer.php';
        (new Customer())->signin($_POST);
    }

    public function signout()
    {
        require './model/Customer.php';
        (new Customer())->signout();
    }

    public function info_customer()
    {
        require './model/Customer.php';
        $id = $_GET['id'];
        $result = (new Customer)->find($id);
        require 'view/infor.php';
    }
}