<?php

class Controller
{
    public function index(): void
    {
        require './model/Product.php';
        require 'view/index.php';
    }

    public function signin(): void
    {
        session_start();
        if(empty($_SESSION['id'])){
            require 'view/signin.php';
        } else {
            header('Location:?controller=base');
        }
    }

    public function signup(): void
    {
        require 'view/signup.php';
    }

    public function forgot_password(): void
    {
        require 'view/forgot_password.php';
    }

    public function reset_password(): void
    {
        require './model/ForgotPassword.php';
        (new ForgotPassword())->send_email_to_user_forgot_password();
        require 'view/reset_pw_success.php';
    }

    public function change_password(): void
    {
        require './model/Connect.php';
        require 'view/change_password.php';
    }

    public  function confirm_change_password(): void
    {
        require './model/Customer.php';
        (new Customer())->change_password();
        require 'view/change_password_success.php';
    }

    public function view_cart(): void
    {
        require 'view/view_cart.php';
    }

    public function product(): void
    {
        require './model/Product.php';
        $result = (new Product())->index();
        require 'view/product.php';
    }

    public function customer_order(): void
    {
        require './model/Customer.php';
        session_start();
        if(!empty($_SESSION['id'])){
            $id = $_SESSION['id'];
            $object = (new Customer())->find($id);
        }
        require 'view/checkout_order.php';
    }

    public function detail_product()
    {
        require './model/Product.php';
        $id = $_GET["id"];
        $object = (new Product())->find($id);
        require 'view/detail_product.php';
    }

    public function add_to_cart()
    {
        require './model/Product.php';
        $id = $_GET['id'];
        (new Product())->add_to_cart($id);
        require 'view/view_cart.php';
    }

    public function update_quantity_in_cart()
    {
        require './model/Product.php';
        $id = $_GET['id'];
        $type = $_GET['type'];
        (new Product())->update_quantity_in_cart($id, $type);
//        header('location:?controller=view_cart');
    }

    public function delete_product_in_cart()
    {
        require './model/Product.php';
        $id = $_GET['id'];
        (new Product())->delete_product_in_cart($id);
//        header('location:?controller=view_cart');
    }

    public function checkout()
    {
        require './model/Order.php';
        (new Order())->checkout();
        require 'view/checkoutsuccess.php';
    }

    public function admin()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Connect.php';
        require 'view/admin/index.php';
    }


    public function customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        $result = (new Customer())->index();
        require 'view/admin/customers/index.php';
    }

    public function detail_customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        $id = $_GET['id'];
        $result = (new Customer())->find($id);
        require 'view/admin/customers/view.php';
    }

    public function create_customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        require 'view/admin/customers/create.php';
    }

    public function store_customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        (new Customer())->create($_POST);
        header('location:?controller=admin&action=customer');
    }

    public function edit_customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        $id = $_GET['id'];
        $object = (new Customer())->find($id);
        require 'view/admin/customers/edit.php';
    }

    public function update_customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        (new Customer())->update($_POST);
        header('Location:?controller=admin&action=customer');
    }

    public function delete_customer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        $id = $_GET['id'];
        (new Customer())->delete($id);
        header('Location:?controller=admin&action=customer');
    }

    public function manufacturer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Manufacturer.php';
        $result = (new Manufacturer())->index();
        require 'view/admin/manufacturers/index.php';
    }

    public function create_manufacturer()
    {
        require './model/Role.php';
        (new Role())->check();
        require 'view/admin/manufacturers/create.php';
    }

    public function store_manufacturer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Manufacturer.php';
        (new Manufacturer())->create($_POST);
        header('location:?controller=admin&action=manufacturer');

    }

    public function edit_manufacturer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Manufacturer.php';
        $id = $_GET['id'];
        $object = (new Manufacturer())->find($id);
        require 'view/admin/manufacturers/edit.php';
    }

    public function update_manufacturer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Manufacturer.php';
        (new Manufacturer())->update($_POST);
        header('Location:?controller=admin&action=manufacturer');
    }

    public function delete_manufacturer()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Manufacturer.php';
        $id = $_GET['id'];
        (new Manufacturer())->delete($id);
        header('Location:?controller=admin&action=manufacturer');
    }

    public function products()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        $result = (new Product())->index();
        require 'view/admin/products/index.php';
    }

    public function detail_products()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        $id = $_GET['id'];
        $result = (new Product())->find($id);
        require 'view/admin/products/view.php';
    }

    public function create_product()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        require 'view/admin/products/create.php';
    }

    public function store_product()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        (new Product())->create($_POST);
        header('location:?controller=admin&action=products');

    }

    public function edit_product()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        $id = $_GET['id'];
        $object = (new Product())->find($id);
        require 'view/admin/products/edit.php';
    }

    public function update_product()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        (new Product())->update($_POST);

        header('Location:?controller=admin&action=products');
    }

    public function delete_product()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Product.php';
        $id = $_GET['id'];
        (new Product())->delete($id);
        header('Location:?controller=admin&action=products');
    }

    public function order(){
        require './model/Role.php';
        (new Role())->check();
        require './model/Customer.php';
        require './model/Order.php';
        $result = (new Order())->index();
        require 'view/admin/orders/index.php';
    }

    public function order_detail()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Order.php';
        require './model/Product.php';
        $id = $_GET['id'];
        $result = (new Order())->order_detail($id);
        require 'view/admin/orders/view.php';
    }

    public function confirm_order()
    {
        require './model/Role.php';
        (new Role())->check();
        require './model/Order.php';
        $id = $_GET['id'];
        (new Order())->confirm_order($id);
        header('Location:?controller=admin&action=order');
    }

}