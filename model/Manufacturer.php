<?php

require_once 'Connect.php';
require 'ManufacturerObject.php';

class Manufacturer
{
    private $table = 'manufacturers';

    public function index()
    {
        $sql = "select * from manufacturers";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);

        if ($row > 0) {
            foreach ($result as $each) {
                $object = new ManufacturerObject($each);

                $arr[] = $object;
            }
            return $arr;
        } else {
            return $arr = [];
        }
    }

    public function create($params)
    {
        if($_FILES['photo']['size'] == '0'){
            $path_file = '';
        } else {
            $photo = $_FILES['photo'];
            $folder = './view/admin/manufacturers/photos/';

            $file_extension = explode('.', $photo['name'])[1];
            $file_name = time().'.'.$file_extension;
            $path_file = $folder.$file_name;

            move_uploaded_file($photo['tmp_name'], $path_file);
        }
        $object = new ManufacturerObject($params);

        $sql = "insert into {$this->table}(name, phone, address, photo) values ('{$object->get_name()}','{$object->get_phone()}','{$object->get_address()}','{$path_file}')";
        (new Connect())->execute($sql);
    }

    public function find($var)
    {
        $sql = "select * from {$this->table} where id ='{$var}'";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $each = mysqli_fetch_array($result);
            $object = new ManufacturerObject($each);

            return $object;
        } else {
            return $object = [];
        }
    }

    public function update($params)
    {
        $object = new ManufacturerObject($params);

        if($_FILES['photo']['size'] == '0'){
            $path_file = $_POST['old_photo'];
        } else {
            $photo = $_FILES['photo'];
            $folder = './view/admin/manufacturers/photos/';

            $file_extension = explode('.', $photo['name'])[1];
            $file_name = time().'.'.$file_extension;
            $path_file = $folder.$file_name;

            move_uploaded_file($photo['tmp_name'], $path_file);
        }

        $sql = "update manufacturers set name='{$object->get_name()}',phone='{$object->get_phone()}',address='{$object->get_address()}',photo='{$path_file}' where id='{$object->get_id()}'";

        (new Connect())->execute($sql);

    }

    public function delete($var)
    {
        $sql = "delete from {$this->table} where id = '{$var}'";

        (new Connect())->execute($sql);
    }
}