<?php

require_once 'Connect.php';
require 'OrderObject.php';

class Order
{
    public function index() {
        $sql = "select * from orders";

        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            foreach ($result as $each){
                $object = new OrderObject($each);

                $arr[] = $object;
            }
            return $arr;
        } else {
            return $arr = [];
        }
    }

    public function order_detail($var){
        $sql = "select * from order_product join products as p on p.id = order_product.product_id where order_id = '$var'";

        $result = (new Connect())->select($sql);

        return $result;
    }

    public function checkout()
    {
        $name_receiver = $_POST['name_receiver'];
        $phone_receiver = $_POST['phone_receiver'];
        $address_receiver = $_POST['address_receiver'];

        $total_price = 0;
        session_start();
        $cart = $_SESSION['cart'];
        foreach ($cart as $each) {
            $sum = $each['price'] * $each['quantity'];
            $total_price += $sum;
        }

        $customer_id = $_SESSION['id'];

        $sql = "INSERT INTO orders(name_receiver, phone_receiver, address_receiver, total_price, customer_id) VALUES ('{$name_receiver}','{$phone_receiver}','{$address_receiver}','{$total_price}','{$customer_id}')";
        (new Connect())->execute($sql);

        $select_id = "select max(id) from orders where customer_id='{$customer_id}'";
        $result = (new Connect())->execute($select_id);
        $order_id = mysqli_fetch_array($result)['max(id)'];

        foreach ($cart as $product_id => $each) {
            $quantity = $each['quantity'];
            $sql = "insert into order_product(order_id, product_id, quantity) values ('{$order_id}','{$product_id}','{$quantity}')";
            (new Connect())->execute($sql);
        }

        unset($_SESSION['cart']);
    }

    public function confirm_order($var)
    {
        $sql = "update orders set status = 1 where id = '{$var}'";
        (new Connect())->execute($sql);
    }
}