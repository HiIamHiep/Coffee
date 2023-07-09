<?php
class Role
{
    public function check() {
        if (session_status() == 0) {
            session_start();
        } elseif (session_status() == 1) {
            session_start();
        }

        if(isset($_SESSION['role']) == NULL) {
            echo "Bạn không có quyền truy cập";
            exit();
        } else {
            if ($_SESSION['role'] != '1') {
                echo "Bạn không có quyền truy cập";
                exit();
            }
        }

    }
}