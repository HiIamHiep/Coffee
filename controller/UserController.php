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

    public function profile(): void
    {
        require './model/Customer.php';
        session_start();
        $id = $_SESSION['id'];
        $object = (new Customer())->find($id);
        require 'view/profile_customer.php';
    }

    public function update_profile(): void
    {
        require './model/Customer.php';
        (new Customer())->update($_POST);
        header('location:?controller=profile');
    }
}