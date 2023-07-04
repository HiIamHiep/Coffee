<?php
class Role
{
    public function check() {
        if (session_status() == 0) {
            session_start();
        } elseif (session_status() == 1) {
            session_start();
        }

        if (empty($_SESSION['role']) && $_SESSION['role'] != 1) {
            echo "Bạn không có quyền truy cập";
            die();
        }

    }
}