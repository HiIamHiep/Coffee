<?php

require 'CustomerObject.php';
require 'Connect.php';

class Customer
{
    private $table = 'customers';

    public function signup($params)
    {
        $object = new CustomerObject($params);

        $sql_check_customer = "select count(*) from {$this->table} where email = '{$object->get_email()}' ";
        $result = (new Connect())->select($sql_check_customer);
        $num_rows = mysqli_num_rows($result);

        if ($num_rows) {
            session_start();
            $_SESSION['error'] = "Email này đã được đăng kí vui lòng sử dụng email khác";
            header("Location:?controller=signup");
            exit();
        }

        $sql = " insert into {$this->table} (first_name, last_name, email, password, phone_number, address, birth_date) values ('".$object->get_first_name()."','".$object->get_last_name()."','".$object->get_email()."','".$object->get_password()."','".$object->get_phone_number()."','".$object->get_address()."','".$object->get_birth_date()."') ";

        $exec = (new Connect())->execute($sql);


        if ($exec) {
            session_start();
            $_SESSION['success'] = "Đăng kí thành công";
            header("Location:?controller=signin");
            exit();
        }
        else {
            session_start();
            $_SESSION['error'] = "Đăng kí thất bại" . mysqli_error();
            header("Location:?controller=signup");
            exit();
        }
    }

    public function signin($params)
    {
        if(isset($_POST['remember'])){
            $remember = true;
        } else {
            $remember = false;
        }

        $object = new CustomerObject($params);

        if(empty($object->get_email()) || empty($object->get_password())){
            session_start();
            $_SESSION['alert'] = "Vui lòng điền đầy đủ thông tin tài khoản";
            header("Location:?controller=signin");
            exit();
        }
        $sql_check_customer = "select * from {$this->table} where email = '{$object->get_email()}' and password = '{$object->get_password()}'";
        $result = (new Connect())->select($sql_check_customer);
        $num_rows = mysqli_num_rows($result);

        if($num_rows) {
            session_start();
            $customer = mysqli_fetch_array($result);
            $_SESSION['role'] = $customer['role'];
            $id = $customer['id'];
            $_SESSION['id'] = $id;
            $_SESSION['phone_number'] = $customer['phone_number'];
            $_SESSION['address'] = $customer['address'];
            $_SESSION['name'] = $customer['first_name'] . " " . $customer['last_name'];
            if($remember){
                $token = uniqid('user_',true);
                $sql = "update {$this->table} set token = '{$token}' where id ='{$id}'";
                (new Connect())->execute($sql);
                setcookie($remember ,$token, time() + 60*60*24*30);
            }
            header('location:?controller=base');
            exit();
        }
            session_start();
            $_SESSION['error'] = "Bạn nhập sai tài khoản hoặc mật khẩu vui lòng kiểm tra lại";
            header('location:?controller=signin');
    }

    public function signout()
    {
        session_start();
        unset($_SESSION['name'], $_SESSION['cart']);

        setcookie('remember',null, -1);
        header('location:?controller=base');
    }

    public function index()
    {
        $sql = "select * from {$this->table}";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);

        if($row > 0)
        {
            foreach ($result as $each){
                $object = new CustomerObject($each);

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
            $folder = './view/admin/customers/photos/';

            $file_extension = explode('.', $photo['name'])[1];
            $file_name = time().'.'.$file_extension;
            $path_file = $folder.$file_name;

            move_uploaded_file($photo['tmp_name'], $path_file);
        }

        $object = new CustomerObject($params);
        $sql = "insert into {$this->table}(first_name, last_name, email, password, phone_number, address, birth_date, role, gender, photo) values ('{$object->get_first_name()}','{$object->get_last_name()}','{$object->get_email()}','{$object->get_password()}','{$object->get_phone_number()}','{$object->get_address()}','{$object->get_birth_date()}','{$object->get_role()}','{$object->get_gender()}','{$path_file}')";
        (new Connect())->execute($sql);
    }

    public function find($var)
    {
        $sql = "select * from {$this->table} where id ='{$var}'";
        $result = (new Connect())->select($sql);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $each = mysqli_fetch_array($result);
            $object = new CustomerObject($each);

            return $object;
        } else {
            return $object = [];
        }
    }

    public function update($params)
    {
        if($_FILES['photo']['size'] == '0'){
            $path_file = $_POST['old_photo'];
        } else {
            $photo = $_FILES['photo'];
            $folder = './view/admin/customers/photos/';

            $file_extension = explode('.', $photo['name'])[1];
            $file_name = time().'.'.$file_extension;
            $path_file = $folder.$file_name;

            move_uploaded_file($photo['tmp_name'], $path_file);
        }
        $object = new CustomerObject($params);
        $sql = "update {$this->table} set first_name='{$object->get_first_name()}',last_name='{$object->get_last_name()}',email='{$object->get_email()}',password='{$object->get_password()}',phone_number='{$object->get_phone_number()}',address='{$object->get_address()}',birth_date='{$object->get_birth_date()}',role='{$object->get_role()}',gender='{$object->get_gender()}',photo='{$path_file}' WHERE id='{$object->get_id()}'";

        (new Connect())->execute($sql);
    }

    public function delete($var)
    {
        $sql = "delete from {$this->table} where id='{$var}'";

        (new Connect())->execute($sql);
    }
}