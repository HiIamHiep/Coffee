<?php

require_once 'Connect.php';
require 'ProductObject.php';

class Product
{
    private $table = 'products';

    public function index()
    {
        $sql = "select * from products";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);

        if ($row > 0) {
            foreach ($result as $each) {
                $object = new ProductObject($each);

                $arr[] = $object;
            }
            return $arr;
        } else {
            return $arr = [];
        }
    }

    public function pagination()
    {
        $sql = "select * from products";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);


        if ($row > 0) {
            if (!isset ($_GET['page']) ) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $results_per_page = 7; // Số lượng sản phẩm trong 1 trang
            $page_first_result = ($page-1) * $results_per_page;

            $sql = "select * from products";
            $result = (new Connect())->select($sql);
            $number_of_result = mysqli_num_rows($result); // Số lượng sản phẩm
            $number_of_page = ceil($number_of_result / $results_per_page);
            $_SESSION['total_page_product'] = $number_of_page;


            $sql = "select * from products limit $page_first_result , $results_per_page";
            $result = (new Connect())->select($sql);
            //display the retrieved result on the webpage
            while ($row = mysqli_fetch_array($result)) {
                $arr[] = new ProductObject($row);
            }
            return $arr;

        } else {
            $arr = [];
        }
    }


    public function create($params)
    {
        $object = new ProductObject($params);

        if ($_FILES['photo']['size'] == '0') {
            $path_file = '';
        } else {
            $photo = $_FILES['photo'];

            $folder = './view/admin/products/photos/';

            $file_extension = explode('.', $photo['name'])[1];
            $file_name = time().'.'.$file_extension;
            $path_file = $folder.$file_name;

            move_uploaded_file($photo['tmp_name'], $path_file);
        }

        $sql = "insert into {$this->table} (name, price, description, photo, manufacturer_id) values ('{$object->get_name()}','{$object->get_price()}','{$object->get_description()}','{$path_file}','{$object->get_manufacturer_id()}')";

        (new Connect())->execute($sql);
    }

    public function find($var)
    {
        $sql = "select * from {$this->table} where id ='{$var}'";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $each = mysqli_fetch_array($result);
            $object = new ProductObject($each);

            return $object;
        } else {
            return $object = [];
        }
    }

    public function update($params)
    {

        if ($_FILES['photo']['size'] == '0') {
            $path_file = $_POST['old_photo'];
        } else {
            $photo = $_FILES['photo'];

            $folder = './view/admin/products/photos/';

            $file_extension = explode('.', $photo['name'])[1];
            $file_name = time().'.'.$file_extension;
            $path_file = $folder.$file_name;

            move_uploaded_file($photo['tmp_name'], $path_file);

        }

        $object = new ProductObject($params);
        $sql = "update {$this->table} set name='{$object->get_name()}',price='{$object->get_price()}',description='{$object->get_description()}',photo='{$path_file}',manufacturer_id='{$object->get_manufacturer_id()}' WHERE id='{$object->get_id()}'";
        (new Connect())->execute($sql);
    }

    public function delete($var)
    {
        $sql = "delete from {$this->table} where id='{$var}'";
        (new Connect())->execute($sql);
    }

    public function add_to_cart($var)
    {
        try {
            session_start();

            if (empty($_SESSION['cart'][$var])) {
                $sql = "select * from products where id = '{$var}'";
                $result = (new Connect())->select($sql);
                $each = mysqli_fetch_array($result);
                $_SESSION['cart'][$var]['id'] = $each['id'];
                $_SESSION['cart'][$var]['name'] = $each['name'];
                $_SESSION['cart'][$var]['price'] = $each['price'];
                $_SESSION['cart'][$var]['photo'] = $each['photo'];
                $_SESSION['cart'][$var]['quantity'] = 1;
            } else {
                $_SESSION['cart'][$var]['quantity']++;
            }
        } catch (Throwable $e) {
            echo $e->getMessage();
        }

    }

    public function update_quantity_in_cart($id, $type)
    {
        session_start();
        if ($type == '0') {
            if ($_SESSION['cart'][$id]['quantity'] > 1) {
                $_SESSION['cart'][$id]['quantity']--;
            } else {
                unset($_SESSION['cart'][$id]);
            }
        } else {
            $_SESSION['cart'][$id]['quantity']++;
        }
    }

    public function delete_product_in_cart($var)
    {
        session_start();
        unset($_SESSION['cart'][$var]);
    }
}