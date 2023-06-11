<?php

class Controller
{
    public function index(): void
    {
        require 'view/index.php';
    }

    public function signin(): void
    {
        require 'view/signin.php';
    }

    public function signup(): void
    {
        require 'view/signup.php';
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

    public function detail_product()
    {
        require './model/Product.php';
        $id = $_GET["id"];
        $object = (new Product())->find($id);
        require 'view/product_detail.php';
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
        require 'view/admin/index.php';
    }

    public function customer()
    {
        require './model/Customer.php';
        $result = (new Customer())->index();
        require 'view/admin/customers/index.php';
    }

    public function detail_customer()
    {
        require './model/Customer.php';
        $id = $_GET['id'];
        $result = (new Customer())->find($id);
        require 'view/admin/customers/view.php';
    }

    public function create_customer()
    {
        require './model/Customer.php';
        require 'view/admin/customers/create.php';
    }

    public function store_customer()
    {
        require './model/Customer.php';
        (new Customer())->create($_POST);
        header('location:?controller=admin&action=customer');
    }

    public function edit_customer()
    {
        require './model/Customer.php';
        $id = $_GET['id'];
        $object = (new Customer())->find($id);
        require 'view/admin/customers/edit.php';
    }

    public function update_customer()
    {
        require './model/Customer.php';
        (new Customer())->update($_POST);
        header('Location:?controller=admin&action=customer');
    }

    public function delete_customer()
    {
        require './model/Customer.php';
        $id = $_GET['id'];
        (new Customer())->delete($id);
        header('Location:?controller=admin&action=customer');
    }

    public function manufacturer()
    {
        require './model/Manufacturer.php';
        $result = (new Manufacturer())->index();
        require 'view/admin/manufacturers/index.php';
    }

    public function create_manufacturer()
    {
        require 'view/admin/manufacturers/create.php';
    }

    public function store_manufacturer()
    {
        require './model/Manufacturer.php';
        (new Manufacturer())->create($_POST);
        header('location:?controller=admin&action=manufacturer');

    }

    public function edit_manufacturer()
    {
        require './model/Manufacturer.php';
        $id = $_GET['id'];
        $object = (new Manufacturer())->find($id);
        require 'view/admin/manufacturers/edit.php';
    }

    public function update_manufacturer()
    {
        require './model/Manufacturer.php';
        (new Manufacturer())->update($_POST);
        header('Location:?controller=admin&action=manufacturer');
    }

    public function delete_manufacturer()
    {
        require './model/Manufacturer.php';
        $id = $_GET['id'];
        (new Manufacturer())->delete($id);
        header('Location:?controller=admin&action=manufacturer');
    }

    public function products()
    {
        require './model/Product.php';
        $result = (new Product())->index();
        require 'view/admin/products/index.php';
    }

    public function create_product()
    {
        require './model/Product.php';
        require 'view/admin/products/create.php';
    }

    public function store_product()
    {
        require './model/Product.php';
        (new Product())->create($_POST);
        header('location:?controller=admin&action=products');

    }

    public function edit_product()
    {
        require './model/Product.php';
        $id = $_GET['id'];
        $object = (new Product())->find($id);
        require 'view/admin/products/edit.php';
    }

    public function update_product()
    {
        require './model/Product.php';
        (new Product())->update($_POST);
        header('Location:?controller=admin&action=products');
    }

    public function delete_product()
    {
        require './model/Product.php';
        $id = $_GET['id'];
        (new Product())->delete($id);
        header('Location:?controller=admin&action=products');
    }

    public function order(){
        require './model/Order.php';
        $result = (new Order())->index();
        require 'view/admin/orders/index.php';
    }

    public function order_detail()
    {
        require './model/Order.php';
        $id = $_GET['id'];
        $result = (new Order())->order_detail($id);
        require 'view/admin/orders/detail.php';
    }

    public function confirm_order()
    {
        require './model/Order.php';
        $id = $_GET['id'];
        (new Order())->confirm_order($id);
        header('Location:?controller=admin&action=order');
    }

}