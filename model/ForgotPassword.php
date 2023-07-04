<?php

require 'ForgotPasswordObject.php';
require_once 'Connect.php';
require 'Customer.php';

class ForgotPassword
{
    private function current_url()
    {
        $url      = "http://" . $_SERVER['HTTP_HOST'] ;
        return $url;
    }

    public function send_email_to_user_forgot_password()
    {
        $email = $_POST['email'];
        $sql = "select id, first_name, last_name from customers where email = '{$email}'";
        $result = (new Connect())->select($sql);

        if(mysqli_num_rows($result) === 1) {
            $object = mysqli_fetch_array($result);
            $id = $object['id'];
            $name = $object['first_name'] . " " . $object['last_name'];
            $sql = "select count(*) from forgot_password where customer_id = '{$id}'";

            $result = (new Connect())->select($sql);
            $check = mysqli_fetch_array($result)['count(*)'];


            if ($check == 1){
                $sql = "delete from forgot_password where id = '{$id}'";
                (new Connect)->execute($sql);

            }

            $token = uniqid('', true);
            $sql = "insert into forgot_password(customer_id, token) values('{$id}','{$token}')";
            (new Connect())->execute($sql);

            $link = $this->current_url(). '?controller=change_new_password&token=' . $token;
            $title = "Change new password for Bobby Coffee";
            $content = "Vui lòng nhấn vào đây để thay đổi mật khẩu <a href='{$link}'>Hiệu lực trong 1 tiếng</a>";
            require_once 'Mailer.php';
            (new Mailer())->send_mail($email, $name, $title, $content);
        }
    }


}